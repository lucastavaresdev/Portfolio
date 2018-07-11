<?php

require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO

//selects
$agendamentos_do_dia = "SELECT count(distinct(nome_paciente)) as agendamento_do_dia
FROM agendamento where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()";

$lista_dos_intevalos_por_hora_do_dia = "SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+1, ':00')  intervalo_de_horas, COUNT(*) as `usage`
FROM agendamento
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()
GROUP BY HOUR(hora_servico_selecionado)";

$maior_fluxo = "SELECT intervalo_de_horas ,qtd_por_hora FROM(
        SELECT  CONCAT(HOUR(hora_servico_selecionado), ':00-', HOUR(hora_servico_selecionado)+2, ':00')  intervalo_de_horas, 
        COUNT(*) as qtd_por_hora
        FROM agendamento
        where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') = CURDATE()
        GROUP BY HOUR(hora_servico_selecionado)
) as c order by qtd_por_hora desc limit 1;";


$lista_de_setores = "SELECT servico as setor FROM servicos;";

$lista_geral = "SELECT 
distinct(a.nome_paciente) as paciente,
a.hora_servico_selecionado as hora,
a.codigo_agenda as atividade,
a.ih_paciente as IH,
a.servico_atual,
s.servico as setor,
a.proximo_servico,
a.cod_cor_status
FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE() order by  servico and servico_atual;";

$lista_por_setor = "SELECT 
distinct(a.nome_paciente) as paciente,
a.hora_servico_selecionado as hora,
a.codigo_agenda as atividade,
a.ih_paciente as IH,
a.servico_atual,
s.servico as setor,
a.proximo_servico,
a.cod_cor_status
FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()  and s.servico  = 'COLONOSCOPIA' order by  servico";



$qtd_por_setor = "SELECT 
count(distinct(a.nome_paciente)) as qtd_paciente,
s.servico as setor
FROM agendamento as a INNER JOIN servicos as s on a.codigo_servico_atual = s.id
where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()  and s.servico  = 'COLONOSCOPIA' order by  servico;"

//parametro passado
if($parametro === 'agendamentos_do_dia'){
  geraJson($agendamentos_do_dia , $conexao );
}else if($parametro === 'lista_dos_intevalos_por_hora_do_dia'){
  geraJson($lista_dos_intevalos_por_hora_do_dia, $conexao);
}else if($parametro === 'maior_fluxo'){
  geraJson($maior_fluxo, $conexao);
}
 

 

//retorna e exibe o json
  function geraJson($select, $conexao){
    $sql = $select;
    $stmt = $conexao->prepare( $sql );
    $stmt->execute();
    $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
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




