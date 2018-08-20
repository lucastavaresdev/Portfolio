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
    $datadoServidor = date("Y/m/d");
    $data  = $datadoServidor;//PARAMETRO
}

/*
 * ----------------------Setores----------------------
 */

    $lista_dos_setores = "SELECT id, servico AS setor FROM servicos";//lista de serviços

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
                                  distinct(a.nome_paciente) as paciente,
                                  left(a.hora_servico_selecionado, 5) as hora, 
                                  a.codigo_agenda as atividade,
                                  a.ih_paciente as IH,
                                  a.servico_atual,
                                  s.servico as setor,
                                  a.proximo_servico,
                                  a.cod_cor_status,
                                  a.descricao_exame,
                                  a.anotacao,
                                  sexo_paciente as sexo,
                                  data_nascimento,
                                  nome_medico,
                                  crm_medico as crm
                                  FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
                                  where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') = '$data' and a.codigo_servico_atual = $setor order by hora";

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


//agendamentos
$notificacao = "SELECT * FROM notificacao;";



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




