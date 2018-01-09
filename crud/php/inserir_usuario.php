<?php
    include('conexao.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

  

    try {
        $stmt = $conn->prepare("insert into tb_usuario (nome, email, senha) values (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        
        $stmt->execute();
        
        header('Location: ../dashboard.php'); 
       

    }catch( PDOException $e ) {
             echo $e -> getMessage();
    }
   

?>
