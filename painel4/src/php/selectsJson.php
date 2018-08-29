<?php

require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO


if (isset($_GET['setor'])) {
    $setor =$_GET['setor'];//PARAMETRO
} else {
    $setor = "";//PARAMETRO
}

if (isset($_GET['data'])) {
    $data = $_GET['data'];//PARAMETRO
} else {
    $datadoServidor = date("Y-m-d");
    $data  = $datadoServidor;//PARAMETRO
}


/*
 * ----------------------Setores----------------------
 */

    $lista_dos_setores = "SELECT id, servico AS setor FROM servicos order by servico";//lista de serviços

/*
 * --------Quantidade de pacientes por lista de agendados---------
 */

    $qtd_de_agendamentos_do_dia_por_agenda = "SELECT count(distinct(nome_paciente)) as qtd_paciente
                                                                                 FROM agendamento 
                                                                                 where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  '$data' 
                                                                                 and codigo_servico_atual = $setor";

/*
 *-----------------Lista de Pacientes----------------
 */
    $lista_do_setor = "SELECT 
                                    `a`.`id_agendamento` AS `id_agendamento`,
                                    `a`.`nome_paciente` AS `paciente`,
                                    LEFT(`a`.`hora_servico_selecionado`, 5) AS `hora`,
                                    `a`.`codigo_agenda` AS `atividade`,
                                    `a`.`ih_paciente` AS `IH`,
                                    `a`.`codigo_exame` AS `codigo_exame`,
                                    STR_TO_DATE(`a`.`data_servico_atual`, '%d/%m/%Y') as data_servico_atual,
                                    `es`.`codigo_servico` AS `codigo_servico`,
                                    `s`.`servico` AS `servico`,
                                    `a`.`cod_cor_status` AS `cod_cor_status`,
                                    `a`.`descricao_exame` AS `descricao_exame`,
                                    `a`.`anotacao` AS `anotacao`,
                                    `a`.`sexo_paciente` AS `sexo`,
                                    `a`.`data_nascimento` AS `data_nascimento`,
                                    `a`.`nome_medico` AS `nome_medico`,
                                    `a`.`crm_medico` AS `crm`,
                                    `ch`.`checkin` AS `checkin_unidade`,
                                    `ch`.`checkout` AS `checkout_unidade`,
                                    IF(ISNULL(`ch`.`checkout`),
                                        TIMEDIFF(NOW(), `ch`.`checkin`),
                                        NULL) AS `tempo_vinculado`,
                                    `cl_min_c`.`checkin` AS `checkin_exame`,
                                    `cl_max_c`.`checkout` AS `checkout_exame`,
                                    TIMEDIFF(`cl_max_c`.`checkout`,
                                            `cl_min_c`.`checkin`) AS `tempo_exame`,
                                    IF(ISNULL(`ch`.`checkout`),
                                        TIMEDIFF(NOW(), `cl_last`.`checkout`),
                                        NULL) AS `tempo_espera`,
                                    se.nome as localizacao
                                FROM
                                    ((((((((`hcor`.`agendamento` `a`
                                    LEFT JOIN `hcor`.`exame_servico` `es` ON ((`es`.`codigo_exame` = `a`.`codigo_exame`)))
                                    LEFT JOIN `hcor`.`servicos` `s` ON ((`s`.`id` = `es`.`codigo_servico`)))
                                    LEFT JOIN `hcor`.`checkin` `ch` ON ((`ch`.`atendimento` = `a`.`id_agendamento`)))
                                    LEFT JOIN (SELECT 
                                        MIN(`hcor`.`checklist`.`id`) AS `id`,
                                            `hcor`.`checklist`.`agendamento` AS `agendamento`,
                                            `hcor`.`checklist`.`etapa` AS `etapa`
                                            FROM
                                                `hcor`.`checklist`
                                            WHERE
                                                (CAST(`hcor`.`checklist`.`hora_agendamento` AS DATE) = '$data')
                                            GROUP BY `hcor`.`checklist`.`agendamento` , `hcor`.`checklist`.`etapa`) `cl_min` ON (((`cl_min`.`agendamento` = `a`.`id_agendamento`)
                                                AND (`cl_min`.`etapa` = `a`.`codigo_exame`))))
                                    LEFT JOIN `hcor`.`checklist` `cl_min_c` ON ((`cl_min_c`.`id` = `cl_min`.`id`)))
                                    LEFT JOIN (SELECT 
                                        MAX(`hcor`.`checklist`.`id`) AS `id`,
                                            `hcor`.`checklist`.`agendamento` AS `agendamento`,
                                            `hcor`.`checklist`.`etapa` AS `etapa`
                                        FROM
                                            `hcor`.`checklist`
                                        WHERE
                                            (CAST(`hcor`.`checklist`.`hora_agendamento` AS DATE) = '$data')
                                        GROUP BY `hcor`.`checklist`.`agendamento` , `hcor`.`checklist`.`etapa`) `cl_max` ON (((`cl_max`.`agendamento` = `a`.`id_agendamento`)
                                            AND (`cl_max`.`etapa` = `a`.`codigo_exame`))))
                                    LEFT JOIN `hcor`.`checklist` `cl_max_c` ON ((`cl_max_c`.`id` = `cl_max`.`id`)))
                                    LEFT JOIN (SELECT 
                                        MAX(`hcor`.`checklist`.`checkout`) AS `checkout`,
                                            `hcor`.`checklist`.`agendamento` AS `agendamento`,
                                            `hcor`.`checklist`.`etapa` AS `etapa`
                                        FROM
                                            `hcor`.`checklist`
                                        WHERE
                                            (CAST(`hcor`.`checklist`.`hora_agendamento` AS DATE) = '$data')
                                        GROUP BY `hcor`.`checklist`.`agendamento`) `cl_last` ON ((`cl_last`.`agendamento` = `a`.`id_agendamento`)))
                                    LEFT JOIN (SELECT max(checkout) as checkout, id_vinculado from tracking_pacientes where fechado is null group by id_vinculado) tp1 
                                    on tp1.id_vinculado = a.id_agendamento
                                    LEFT JOIN tracking_pacientes tp 
                                    on tp.checkout = tp1.checkout and tp.id_vinculado = tp1.id_vinculado
                                    LEFT JOIN setores se
                                    on se.id = tp.id_sala
                                WHERE STR_TO_DATE(`a`.`data_servico_atual`, '%d/%m/%Y') = '$data' and
                                es.codigo_servico = $setor
                                ORDER BY LEFT(`a`.`hora_servico_selecionado`, 5)";

/*
 *---------------------Procedimentos---------------------------
 */

$qtd_procedimentos = "SELECT 
count(a.nome_paciente) as qtd_procedimentos
FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  '$data'  and s.id  = " .$setor .  " order by  servico";



/*
 *--------------------Horario de Maior Fluxo-----------------------------
 */

$horario_de_maior_fluxo = "SELECT  qtd_por_hora, intervalo_de_horas  FROM (
    SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00') as intervalo_de_horas, 
    COUNT(*) as qtd_por_hora
    FROM agendamento
    where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') = '$data' and codigo_servico_atual = '$setor'
    GROUP BY HOUR(intervalo_de_horas) 
              ) as lista_geral_de_horas  where qtd_por_hora = ( 
                SELECT  max(qtd_por_hora) as maior_qtd FROM(
                          SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+2, ':00') as intervalo_de_horas, 
                          COUNT(*) as qtd_por_hora
                          FROM agendamento
                          where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') = '$data' and codigo_servico_atual = '$setor'
                          GROUP BY HOUR(intervalo_de_horas)
                          ) as maior_valor
              );";//intervalo com maior fluxo de pessoas no setor


/* ------------------------ Consolidado ----------------------------- */
/*
 *--------------------Horario de Maior Fluxo-----------------------------
 */


$total_de_pacientes_de_todos_os_setores = "select count(paciente) as totaldePacientes from (
                                                                        SELECT
                                                                        distinct(a.nome_paciente) as paciente,
                                                                        a.servico_atual,
                                                                        s.servico as setor
                                                                        FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
                                                                        where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() order by  servico and servico_atual
                                                                        ) as contagemDePacientes";

$total_de_procedimentos_de_todos_os_setores = "select count(paciente) as total_procedimento from (
                                                                                SELECT
                                                                                a.nome_paciente as paciente,
                                                                                a.servico_atual,
                                                                                s.servico as setor
                                                                                FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
                                                                                where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() order by  servico and servico_atual
                                                                                ) as contagemDeProcedimento";



$card_com_informacoes_do_setores = "SELECT a.codigo_servico_atual as id,s.servico as setor ,count(distinct(a.nome_paciente)) as agendamento_do_dia, count(a.nome_paciente) as exames
                                                                    FROM agendamento as a
                                                                    inner join servicos as s on a.codigo_servico_atual = s.id
                                                                    where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() group by(codigo_servico_atual);";

$informacoes_com_quantidade_nos_card = "SELECT codigo_servico_atual ,cod_cor_status , count(cod_cor_status) as qtd FROM agendamento as a 
                                                                        INNER JOIN servicos as s on a.codigo_servico_atual = s.id
                                                                        where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() group by codigo_servico_atual, cod_cor_status";
/*
 *--------------------Quandade de status da unidade-----------------------------
 */

if (isset($_GET['status'])) {
    $status = $_GET['status'];//PARAMETRO
} else {
    $status = 0;
}


 $qtd_de_status_todas_os_setores_por_procedimento = "select count(cod_cor_status) as status_por_procedimentos from (
                                                                                                SELECT
                                                                                                a.nome_paciente as paciente,
                                                                                                a.servico_atual,
                                                                                                s.servico as setor,
                                                                                                a.cod_cor_status
                                                                                                FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
                                                                                                where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() and  cod_cor_status = $status
                                                                                            ) as contagemDePacientes";



/*
 *--------------------Quandade de status da unidade-----------------------------
 */

 $qtd_por_horario_de_procedimento = "SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00')  intervalo_de_horas, COUNT(*) as Qtd
                                                              FROM agendamento
                                                              where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() and codigo_servico_atual = $setor
                                                              GROUP BY HOUR(hora_servico_selecionado)";

$qtd_por_horario_de_pacientes = "SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00')  intervalo_de_horas, COUNT(distinct(nome_paciente)) as Qtd
                                                        FROM agendamento
                                                        where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() and codigo_servico_atual = $setor
                                                        GROUP BY HOUR(hora_servico_selecionado)";

/*
 * ----------------------Comparação para gerar o json----------------------
 */

$select = $$parametro; //transforma o parametro em uma variavel

comparação($parametro, $conexao, $select); //chama a função

function comparação($parametro, $conexao, $select)
{
    $parametro == $parametro ? geraJson($select, $conexao) : var_dump("Erro de paramentro");
}

/*
 * ------------------------------------------------------------------------------
 */
 
//retorna e exibe o json
  function geraJson($select, $conexao)
  {
      $sql = $select;
      $stmt = $conexao->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $novo = array();
      foreach ($result as $key => $value) {
          foreach ($value as $k => $v) {
              $novo[$key][$k] = $v;
          }
      }
      $json = json_encode($novo);
      echo $json;
  }
?>




