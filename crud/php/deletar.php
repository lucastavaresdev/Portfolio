<?php
    include('conexao.php');

    $id = $_GET['id'];

    $select = $conn->query("DELETE FROM tb_usuario WHERE id =". $id);
    
    if(isset($select)){
        header('Location: ../dashboard.php?deletado=ok'); 
    }else{
        header('Location: ../dashboard.php?deletado=ok');
    }                
?>
