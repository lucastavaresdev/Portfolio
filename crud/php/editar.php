<?php

include("conexao.php");

   $id = $_GET['id'];
     
     
    $select = $conn->query("SELECT * from tb_usuario where id='$id'");
    $result = $select->fetchAll();

    foreach($result as $row){ 
        $nome = $row['nome'];
        $email = $row['email'];
        $senha = $row['senha'];
    } 
    ?>

    <form action="acaoeditar.php" method="post">
        <?php
         echo "<input type='hidden' name='id' value='".$id."'><br>";
         echo "<input type='text' name='nome' value='".$nome."'><br>";
         echo "<input type='email' name='email' value='".$email."'><br>";
         echo "<input type='password' name='senha' value='".$senha."'>"; 
     ?>
     
     <button type="submit" class="btn btn-primary">Atualizar</div>
    </form>