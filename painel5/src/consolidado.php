<?php 
    include('./templates/header.php');
    include('./templates/menu.html');
?>



 <link rel="stylesheet" href="./css/consolidado.css">





<div class="col s12 conteudo espacamento">
    <div class="row">
        <div class="col s12 l3 c_centralizando">
            <h1 class="c_titulo left c_agendamento">Consolidado</h1>
        </div>
        <div class="col s6 l4 center  ">
            <h1 class="c_titulo" id="con_data_atual">--/--/--</h1>
        </div>
        <div class="col s6 l5 ">
            <h1 class="c_titulo right">
                <span>Tempo Restante 00:00:00</span>
            </h1>
        </div>
    </div>


    <div class="row c_linha_card_superior">

        <div class="col s12 l3">
            <div class="row c_linha_card_superior">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Agendados:
                            <b class="right" id="con_agendados"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 l3">
                <div class="row c_linha_card_superior">
                    <div class="col s12 m12">
                        <div class="card-panel center">
                            <span class="c_total_card">Procedimentos:
                                <b class="right"  id="con_procedimento"> - </b>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col s12 l3">
            <div class="row c_linha_card_superior">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Checkin:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 l3">
            <div class="row c_linha_card_superior">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Atrasos:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col s12 l4">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Finalizado:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Cancelados:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card">Restando:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="con_card_setores">
       
      

    </div>
</div>

</div>








<?php include('./templates/frameworks.html') ?>
<script src="./js/consolidados.js"></script>

</body>
</html>


