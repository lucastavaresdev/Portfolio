
<?php 
$mensagem = "Nome: ".$_POST['nome']." \n";
$mensagem .= "Telefone: ".$_POST['telefone']." \n";
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Mensagem:". $_POST['mensagem'];

$headers = "From: ".$_POST['email']." \r\n";

mail("teste@gmail.com", "Mensagem teste", $mensagem, $headers);


header('Location: index.php?msg=enviada#contato');
