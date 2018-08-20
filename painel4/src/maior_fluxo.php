<?php
         include "./templates/header.php";
           include "./templates/menu.html";
?>

<div class="col s12 agendamento conteudo">

	<div class="row">
		<div class="col s12">
			<h6>Localização</h6>
		</div>
	</div>
	<div class="row">
		<div class="col s12 l12 ">
			<div class="cor1 bordas">
				<div id="tabela_conteudo" class="col s12 tabela_bg">
					<table id="tabela_pacientes" class="striped responsive-table tabela-cor">
						<thead>
							<tr>
								<th>Horario</th>
								<th>Quantidade de Pacientes</th>
							</tr>
						</thead>
							<tbody id="listadePacientesagendamento"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>




<?php
   include './templates/frameworks.html';
   ?>
   <script src="./js/maior_fluxo.js"></script>


<script>
    $(document).ready(function () {
        $('.tabs').tabs();
    });
</script>


<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script> 

<?php
   include './templates/footer.html';
   ?>