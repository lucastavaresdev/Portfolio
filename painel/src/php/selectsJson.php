<?php

    require('conexao.php');

    $result =$conexao->query("SELECT * FROM agendamento;");
   
    while ($linha = $result->fetchAll()) {
        $encode = $linha;
    }
    echo json_encode($encode);


?>



