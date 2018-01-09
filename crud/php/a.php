<?php
include('conexao.php');


    $select = $conn->query("SELECT * from tb_usuario");

    $result = $select->fetchAll();

    foreach($result as $row)
    {
      echo $row['nome'].'<br />';
      echo $row['email'].'<br />';
    }

                    
?>
