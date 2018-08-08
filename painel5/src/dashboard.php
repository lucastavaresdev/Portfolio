<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
?>



<!--tabela-->
<div class="row">
    <div class="col s12 dados_consolidados">
        <div class="col s12 conteudo bg-consolidado espacamento espacamento-do-topo">
            <div class="col s4 l2">
                <p>Agendamentos</p>
                <h4 id="agendimentos_do_dia">
                    <span>0</span>
                </h4>
            </div>
            <div class="col s4 l2">
                <!-- <p>Procedimentos</p>
                <h4 id='qtd_procedimentos'> - </h4> -->
            </div>
            <div class="col s4 l2">
                <!-- <p>Atendimentos</p> -->
                <!-- <h4>-/
                    <span id="atendimentos_total">0</span>
                </h4> -->
            </div>
            <div class="col s4 l2 tamanho_da_linha_titulo_fluxo">
                <!-- <p>Maior Fluxo</p>
                <ul id="fluxo"></ul> -->
            </div>
            <div class="col s4 l2">
                <!-- <p>Tempo de Exame</p>
                <h4> - </h4> -->
            </div>
            <div class="col s4 l2">
                <!-- <p>Qtd de pacientes atuais</p>
                <h4> - </h4> -->
            </div>
        </div>
    </div>
</div>


<div class="col s12 conteudo">

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3">
                    <a id="aba_nome_setor" class="active" href="#test1"> - </a>
                </li>
                <!-- <li class="tab col s3">
                    <a href="#test2">Test 2</a>
                </li> -->
            </ul>

            <div id="test1" class="col s12 tabela_bg">

                <table id="tabela_pacientes" class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Hora</th>
                            <th>Procedimento</th>
                            <th>Cirurgião</th>
                            <th>Localização C.C</th>
                            <th>Observação</th>
                        </tr>
                    </thead>
                    <tbody id="listadePacientes">

                    </tbody>
            </div>
        </div>
    </div>
    </table>
</div>
<!-- <div id="test2" class="col s12">Test 2</div> -->
</div>
</div>




</body>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/index.js"></script> 


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
