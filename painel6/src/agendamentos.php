<?php 
         include "./templates/header.php";
           include "./templates/menu.html";
?>


<section class="agendamento col s12 conteudo">
	<div class="espacamento">
		<div class="row">
			<div class="col s12 left">
				<h6>Agendamentos</h6>
			</div>
		</div>
	<div class="row ">
		<div class="col s12 l9  ">
			<div class="cor1 bordas">
				<div id="tabela_conteudo" class="col s12 tabela_bg">
					<table id="tabela_pacientes" class="striped responsive-table">
						<thead>
							<tr>
								<th>Hora</th>
								<th>Atividade</th>
								<th>IH</th>
								<th>Paciente</th>
								<th>Localização</th>
								<th>Status</th>
								<th>Tp Esp(m)</th>
							</tr>
						</thead>
							<tbody id="listadePacientesagendamento"></tbody>
					</table>
				</div>
			</div>
		</div>
		
			<div class="col  s12 l3 info ">
				<div class="cor2 bordas">
					<div class="row">
						<div class="col s12" id="agendamemento_card_notificacao">
						</div>
					</div>
				</div>
			</div>

	</div>
	</div>
</section>




<?php 
   include './templates/frameworks.html';
   ?>
   <script src="./js/agendamentos.js"></script>


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