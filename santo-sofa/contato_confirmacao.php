<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
      <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Santo Sofá</title>
        <?php include("includes/head.php");?>
    </head>
    <body>
    <?php include("includes/header-menu.php") ?>
<?php 
$mensagem = "Nome: ".$_POST['name']." \n";
$mensagem .= "Telefone: ".$_POST['telefone']." \n";
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Assunto: ".$_POST['assunto']." \n";
$mensagem .= "Mensagem:". $_POST['mensagem'];

$headers = "From: ".$_POST['email']." \r\n";

mail("santosofatatuape@gmail.com", "Mensagem pelo Site Santo Sofá", $mensagem, $headers);

echo '<br><div class="container"><div class="content_wraper"><p class="chamada"><font face="Montserrat" color="#000000"><span style="font-size:11pt;"><b>Sua mensagem foi 
enviada com sucesso!</b></span></font></p></div></div>';
echo '<div class="container"><div class="content_wraper"><p class="chamada"><font face="Montserrat" color="#000000"><span style="font-size:10pt;">Em breve 
entraremos em contato com você! Obrigado!<br/><a href="index.php">Voltar ao site</a></p></div></div><br>';

?>
    <?php include("includes/footer-news.php");?>
    <?php include("includes/js.php");?>
    </body>
</html>