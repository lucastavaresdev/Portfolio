<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
?>


<section class="agendamento col s12 conteudo">
    <div class="espacamento">
            
            <div class="row">
                <div class="col s12 left">
                    <h6>Agendamentos </h6>
                </div>
            </div>



      <div class="row ">
                <div class="col s12 l9  ">
                    <div class="cor1 bordas">1</div>
                </div>
                <div class="col  s12 l3 info ">
                        <div class="cor2 bordas">1
                    Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. Magnam consequatur doloremque consequuntur
                    , possimus ullam, adipisci explicabo provident ad soluta totam repudiandae 
                    fugit doloribus, quidem voluptates tempore beatae iusto cum laudantium. 
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
