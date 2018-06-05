<?php


//Header( 'Refresh: 1');

  require('conexao.php');// REQUSIÇÃO DO BANCO

  $parametro = $_GET["parametro"];//PARAMETRO

  if($parametro === 'agendamento'){
    geraJson('SELECT * FROM agendamento', $conexao );
  }else if($parametro === 'qtdstatus'){
    geraJson('SELECT status ,count(status) as qtdStatus FROM agendamento GROUP BY status', $conexao );
  }else if($parametro === 'localizacao'){
    geraJson('SELECT localizacao, status_localizacao FROM localizacao', $conexao );
  }else if($parametro === 'qtdpacientes'){
    geraJson('SELECT count(nm_paciente) as totpacientes FROM painel.agendamento;', $conexao );
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



