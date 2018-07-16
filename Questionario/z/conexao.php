<?php
 
   try{
    $conexao = new PDO("mysql:host=localhost;dbname=login", "root", ""); 
        // echo "Conectado no banco";
    }catch(PDOException $e){
        echo "Erro gerado " . $e->getMessage(); 
    }
?>

