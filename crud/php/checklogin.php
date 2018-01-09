<?php
    include('conexao.php');

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
      

      $stmt = $conn->prepare("SELECT * FROM tb_usuario WHERE email=:email and senha=:senha LIMIT 1");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':senha', $senha);

      $stmt->execute();

      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if (count($users) <= 0)
      {
           header('Location: ../index.php?login=errowo');
           exit;
      }else{
          $_SESSION['nome'] = $email;
          header('Location: ../dashboard.php');
      }