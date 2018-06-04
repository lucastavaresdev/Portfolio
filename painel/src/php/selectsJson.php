<?php

    require('conexao.php');

  
      $sql = 'SELECT * FROM agendamento';
      $stmt = $conexao->prepare( $sql );
      $stmt->execute();
      $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
      $json = json_encode( $result );
    echo $json; 


    //Select count(status) from agendamento group by status;
?>



