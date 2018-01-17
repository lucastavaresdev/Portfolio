<!-- Header -->
<?php include("includes/header.php");?>
<!-- Header -->

<body>

<!-- Topo e Menu -->
<?php include("includes/top_menu.php");?>
<!-- Topo e Menu -->

<?php 
$mensagem = "Nome: ".$_POST['nome']." \n";
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Telefone: ".$_POST['telefone']." \n";
$mensagem .= "Mensagem:". $_POST['mensagem'];

$headers = "From: ".$_POST['email']." \r\n";

mail("santosofatatuape@gmail.com", "Mensagem pelo Site Santo Sofá", $mensagem, $headers);

echo '<div class="container"><div class="content_wraper"><p class="chamada"><font face="Tahoma" color="#000000"><span style="font-size:11pt;"><b>Sua mensagem foi 
enviada com sucesso!</b></span></font></p></div></div>';
echo '<div class="container"><div class="content_wraper"><p class="chamada"><font face="Tahoma" color="#000000"><span style="font-size:10pt;">Em breve 
entraremos em contato com você! Obrigado!<br/><a href="index.php">Voltar ao site</a></p></div></div>';

?>
<!-- Wraper1 -->
<!-- Footer -->
<?php include("includes/footer.php");?>
<!-- Footer -->
<!-- JavaScript -->
<?php include("includes/js.php");?>
<!-- JavaScript -->


<!-- Google Code for Contatos-Adwords Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 840724442;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "JtoCCLqlr3QQ2t_xkAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/840724442/?label=JtoCCLqlr3QQ2t_xkAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


</body>
</html>