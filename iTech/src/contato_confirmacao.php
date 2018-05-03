
<?php 
$mensagem = "Nome: ".$_POST['nome']." \n";
$mensagem .= "Telefone: ".$_POST['telefone']." \n";
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Mensagem:". $_POST['mensagem'];

$headers = "From: ".$_POST['email']." \r\n";

mail("lucas@itechmed.com.br", "Mensagem ItechMED", $mensagem, $headers);


header('Location: /home/index.php?msg=enviada#contato');
