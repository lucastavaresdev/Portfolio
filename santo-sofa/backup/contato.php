<!-- Header -->
<?php include("includes/header.php");?>
<!-- Header -->
<body id="contato">

<!-- Topo e Menu -->
<?php include("includes/top_menu.php");?>
<!-- Topo e Menu -->

<section class="bg_title text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Contato e Localização</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h2>Fale Conosco</h2><br>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="contato_confirmacao.php" method="post">
		            <div class="form-group">
		              <label for="exampleInputNome">Nome:</label>
		              <input name="nome" type="text" class="form-control" id="exampleInputNome" placeholder="Nome">
		            </div>
		            <div class="form-group">
		              <label for="exampleInputEmail">E-mail:</label>
		              <input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="E-mail">
		            </div>
		            <div class="form-group">
		              <label for="exampleInputTelefone">Telefone</label>
		              <input name="telefone" type="text" class="form-control" id="exampleInputTelefone" placeholder="Telefone">
		            </div>
		            <div class="form-group">
		              <label for="exampleInputMensagem">Mensagem</label>
		              <textarea name="mensagem" class="form-control" rows="5"></textarea>
		            </div>
		            <div class="form-group">
		              <button type="submit" class="btn btn-default">Enviar</button>
		            </div>
	          	</form>
			</div> 
			<div class="col-md-6">
			
				<address>
					<i class="fa fa-fw fa-phone" aria-hidden="true"></i><a href="#">(11)2091-5155</a><br>
						<i class="fa fa-fw fa-phone" aria-hidden="true"></i><a href="#">(11)3185-6610</a><br>
                    <i class="fa fa-fw fa-envelope" aria-hidden="true"></i><a href="mailto:santosofatatuape@gmail.com">santosofatatuape@gmail.com</a><br>
                    <i class="fa fa-fw fa-map-marker" aria-hidden="true"></i><p>Rua Monte Serrat, 1007 - Tatuapé<br>CEP: 03312-001 - São Paulo, SP</p>
				</address>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6122927297224!2d-46.56285178443671!3d-23.546443166927958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e8ea07f9723%3A0xda88a27af01a1ed2!2sRua+Monte+Serrat%2C+1007+-+Tatuap%C3%A9%2C+S%C3%A3o+Paulo+-+SP%2C+03312-001!5e0!3m2!1spt-BR!2sbr!4v1470240051190" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				
			</div>
			
			
			
			
		</div>
	</div>
</section>

<!-- Footer -->
<?php include("includes/footer.php");?>
<!-- Footer -->
<!-- Js -->
<?php include("includes/js.php");?>
<!-- Js -->
</body>
</html>
