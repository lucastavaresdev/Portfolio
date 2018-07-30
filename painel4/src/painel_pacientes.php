<?php 
         include "./templates/header.php";
           include "./templates/menu.html";
?>


<section class="Pacientes col s12 conteudo">
	
</section>




<?php 
   include './templates/frameworks.html';
   ?>
   <script src="./js/painel_pacientes.js"></script>


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