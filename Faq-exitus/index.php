<!doctype html>
<html lang="pt-br" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon"  href="img/logoicon.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<!--<link href="css/boot/bootstrap.min.css" rel="stylesheet">-->

	<title>Exitus</title>
</head>
<body>



<!--- Titulo da Pagina
====================================================================-->

<header>
	<div class="logo"><img src="img/logo.png"  height="300" width="280"></div>
</header>




<!--- Menu Lateral
====================================================================-->

	<section class="cd-faq">
		<ul class="cd-faq-categories">

			
			<li><a class="selected" href="#conexao">Teste sua Conexão</a></li>
			<li><a href="#basics">Primeiro Acesso</a></li>
			<li><a href="#mobile">Acesso via IOS</a></li>
			<li><a href="#account">Áudio</a></li>
			<li><a href="#payments">Vídeo</a></li>
			<li><a href="#eventos">Eventos</a></li>
			<li><a href="#proxy">Proxy e Firewall</a></li>
			
		</ul> 





		

<!---Fim do Menu Lateral
====================================================================-->



<!---Include das Categorias
====================================================================-->
	<?php include 'Perguntas/conexao.php'; ?>
	<?php include 'Perguntas/Primeiro_Acesso.php'; ?>
	<?php include 'Perguntas/Acesso_ios.php'; ?>
	<?php include 'Perguntas/Audio.php'; ?>
	<?php include 'Perguntas/Video.php'; ?>
	<?php include 'Perguntas/eventos.php'; ?>
	<?php include 'Perguntas/Proxy_Firewall.php'; ?>




<!---Fim do Menu Lateral
====================================================================-->

	<div class="a"></div>

<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>