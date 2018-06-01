<?php

    require('conexao.php');

    $result =$conexao->query("SELECT * FROM agendamento;");
   
    while ($row = $result->fetchAll()) {
        $encode = $row;
    }
    echo json_encode($encode);


?>



