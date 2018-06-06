conexao.php

<?php
    try{
    $conexao = new PDO("mysql:host=localhost;dbname=painel", "root", ""); 
    }catch(PDOException $e){
        echo "Erro gerado " . $e->getMessage(); 
    }
?>

transformar em json


<?php

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
  }else if($parametro === 'dados_pacientes'){
    geraJson( 'SELECT nm_paciente,tp_situacao,  DATE_FORMAT(STR_TO_DATE(dt_nascimento,' . ' "%Y-%m-%d"), "%d/%m/%Y") as data FROM agendamento', $conexao );
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



