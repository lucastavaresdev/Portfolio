<?php

  require('conexao.php');// REQUSIÇÃO DO BANCO

  $parametro = $_GET["parametro"];//PARAMETRO

  if($parametro === 'agendamento'){
    geraJson('SELECT * FROM agendamento', $conexao );
  }else if($parametro === 'qtdstatus'){
    geraJson('SELECT status ,count(status) FROM agendamento GROUP BY status', $conexao );
  }




  function geraJson($select, $conexao){
    $sql = $select;
    $stmt = $conexao->prepare( $sql );
    $stmt->execute();
    $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
    $json = json_encode( $result );
    echo $json; 
  }
?>



