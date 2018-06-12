<?php
    try{
    $conexao = new PDO("mysql:host=191.232.188.169:3306;dbname=nipo", "root", "Itechmaster_2017"); 
    }catch(PDOException $e){
        echo "Erro gerado " . $e->getMessage(); 
    }
?>

