<?php
    try{
    $conexao = new PDO("mysql:host=localhost;dbname=painel", "root", ""); 
    }catch(PDOException $e){
        echo "Erro gerado " . $e->getMessage(); 
    }
?>
