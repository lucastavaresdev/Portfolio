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

        <div class="col s12 l3">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card c_total_card_inferior">Não Iniciado:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l2">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card c_total_card_inferior">Aguardando:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l2">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card c_total_card_inferior">Atendido:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l2">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card c_total_card_inferior">Fastpass:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 l3">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-panel center">
                        <span class="c_total_card c_total_card_inferior">Em atendimento:
                            <b class="right"> - </b>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row" id="con_card_setores">
       
        <!-- <div class="col s12 l4">
            <div class="cards z-depth-3">
                <div class="col s4  l3 imagem-setor"></div>
                <div class="col s8 l9 c_conteudo_card">
                    <h1 class="c_titulo c_card-title">Tomografia</h1>
                    <p>Paciente:
                        <b class="right">8</b>
                    </p>
                    <p>Medicos:
                        <b class="right">2</b>
                    </p>
                    <p>Colaboradores:
                        <b class="right">3</b>
                    </p>
                    <p>Equipamentos:
                        <b class="right">2</b>
                    </p>
                    <b class="c_status">Status: Operacional</b>
                </div>
            </div>
        </div> -->
        <!-- <div class="col s12 l4">
            <div class="cards z-depth-3">
                <div class="col s4  l3 imagem-setor-ultra"></div>
                <div class="col s8 l9 c_conteudo_card">
                    <h1 class="c_titulo c_card-title">Ultrassom</h1>
                    <p>Paciente:
                        <b class="right">12</b>
                    </p>
                    <p>Medicos:
                        <b class="right">2</b>
                    </p>
                    <p>Colaboradores:
                        <b class="right">5</b>
                    </p>
                    <p>Equipamentos:
                        <b class="right">2</b>
                    </p>
                    <b class="c_status">Status: Operacional</b>
                </div>
            </div>
        </div>

        <div class="col s12 l4">
            <div class="cards z-depth-3">
                <div class="col s4  l3 imagem-setor-raiox"></div>
                <div class="col s8 l9 c_conteudo_card">
                    <h1 class="c_titulo c_card-title">Raio-X</h1>
                    <p>Paciente:
                        <b class="right">20</b>
                    </p>
                    <p>Medicos:
                        <b class="right">5</b>
                    </p>
                    <p>Colaboradores:
                        <b class="right">7</b>
                    </p>
                    <p>Equipamentos:
                        <b class="right">5</b>
                    </p>
                    <b class="c_status">Status: Operacional</b>
                </div>
            </div>
        </div> -->



    </div>
</div>

</div>








<?php include('./templates/frameworks.html') ?>



</body>

<script src="./js/consolidados.js"></script>


</html>


