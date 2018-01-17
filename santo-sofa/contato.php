<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Santo Sofá</title>
        <?php include("includes/head.php");?>
    </head>
    <body>
		<?php include("includes/header-menu.php") ?>
		<section class="funcionamento-pgto">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<div class="box-funcionamento-pgto">
							<h3><img src="assets/img/icon-top-clock.png" alt="">Funcionamento</h3>
							<p>Aberto de domingo a domingo</p> 
							<p>Segunda a sexta das 10:00 às 20:00hs</p>
							<p>Sábado das 10:00 às 19:00hs</p>
							<p>Domingos e feriados das 11:00 às 17:00hs</p>
						</div>
					</div>
					<div class="col-md-6 text-center">
						<div class="box-funcionamento-pgto">
							<h3><img src="assets/img/icon-top-coin.png" alt="">Formas de Pagamento</h3>
							<p>No cartão até 12x sem juros.</p>
							<p>A vista, desconto especial</p><br>
							<p><img src="assets/img/icon-footer-payment.png" class="img-responsive center-block" alt=""></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="infos-contato">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Entre em contato</h2>
						<form action="contato_confirmacao.php" method="post">
							<div class="form-group">
								<label for="name">Nome</label>
								<input required type="text" class="form-control" id="name" name="name" placeholder="Ex: João da Silva">
							</div>
							<div class="form-group">
								<label for="telefone">Telefone-Opcional</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Ex: (11) 2021-5215">
							</div>
							<div class="form-group">
								<label for="email">E-mail</label>
								<input required type="email" class="form-control" id="email" name="email" placeholder="Ex: seu@email.com.br">
							</div>
							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input required type="text" class="form-control" id="assunto" name="assunto" placeholder="Ex: Tenho uma dúvida">
							</div>
							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea class="form-control" rows="5" id="mensagem" name="mensagem" placeholder="Ex: Aqui está a minha mensagem"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn">Entrar em contato</button>
							</div>
						</form>
					</div><br><br>
					<div class="col-md-6">
						<h2>Nosso Endereço</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6649234862257!2d-46.54514088445032!3d-23.508575665531474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5fb0590de70b%3A0x55114b1873ace913!2sR.+Maxuero%2C+40+-+Vila+Mesquita%2C+S%C3%A3o+Paulo+-+SP%2C+03714-040!5e0!3m2!1spt-BR!2sbr!4v1507314914534" width="100%" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div><br><br>
				</div>
			</div>
		</section>

		<?php include("includes/footer-news.php");?>
		<?php include("includes/js.php");?>
    </body>
</html>