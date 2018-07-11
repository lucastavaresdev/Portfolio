<?php

require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO

//selects
$agendamentos_do_dia = "SELECT count(distinct(nome_paciente)) as agendamento_do_dia
FROM agendamento where STR_TO_DATE(data_servico_atual, '%d/%m/%Y') =  CURDATE()";


//parametro passado
if($parametro === 'agendamentos_do_dia'){
  geraJson($agendamentos_do_dia , $conexao );
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




