<?php
    include('conexao.php');
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    

    try {
        $stmt = $conn->prepare("UPDATE tb_usuario SET nome=:nome, email=:email, senha=:senha WHERE id=$id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        
        $stmt->execute();
        
        header('Location: ../dashboard.php'); 
       

    }catch( PDOException $e ) {
             echo $e -> getMessage();
    }
   

?>
