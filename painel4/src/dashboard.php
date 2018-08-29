<?php
    include "./templates/header.php";
    $setor = $_GET['setor'];
?>

<?php include "./templates/menu.php"; ?>
    <div class="row">
        <div class="  col s12 dados_consolidados">
            <div class="col s12 conteudo bg-consolidado espacamento">
            <?php echo "<a  href='./agendamentos.php?setor=$setor'>"?> 
                        <div class="col s6 l2 ">
                            <div class="dash_btn_superior fade-in">
                                <p>Agendamentos</p>
                                <h4  id="agendimentos_do_dia">
                                <span>0</span>
                                </h4>
                            </div>
                        </div>
                        <?php echo "</a>"?> 
                <?php echo "<a>"?>
                    <div class="col s6 l2">
                        <div class="dash_btn_superior_sem_hover fade-in">
                            <p>Procedimentos</p>
                            <h4 id='qtd_procedimentos'>0</h4>
                        </div>
                    </div>
                    <?php echo "</a>"?>
                    <?php echo "<a>"    ?>
                <div class="col s6 l2">
                    <div class="dash_btn_superior_sem_hover fade-in">
                        <p>Atendimentos</p>
                        <h4>-/<span id="atendimentos_total">0</span></h4>
                    </div>
                </div>
                <?php echo "</a>"    ?>
                <?php echo "<a  href='./maior_fluxo.php?setor=$setor'>"?> 
                    <div class="col s6 l2 tamanho_da_linha_titulo_fluxo">
                        <div class="dash_btn_superior m-fluxo fade-in">
                            <p>Maior Fluxo</p>
                            <ul id="fluxo"></ul>
                        </div>
                    </div>
                    <?php echo "</a>"?>
                    
                    <?php echo "<a>"    ?>
                        <div class="col s6 l2">
                            <div class=" dash_btn_superior_sem_hover fade-in">
                            <p>Tempo de Sala</p>
                            <h4> - </h4>
                            </div>
                        </div>
                    <?php echo "</a>"?>
                    <?php echo "<a>"    ?>
                        <div class="col s6 l2">
                            <div class="dash_btn_superior_sem_hover fade-in">
                            <p>Qtd de pacientes atuais</p>
                            <h4> - </h4>
                            </div>
                        </div>
                    <?php echo "</a>"?>
            </div>
        </div>
    </div>

    <div class="col s12 agendamento conteudo">
        <div class="row">
            <div class="col s12">
            
                <ul class="tabs">
                    <li class="tab col s12 l3">
                        <a id="aba_nome_setor" class="active" href="#test1"> - </a>
                    </li>
                    <li class="tab col s12 l2 right input-calendario ">
                            <input type="text"  id="busque_data" class="datepicker right figuras " placeholder="Busque por uma datas">
                    </li>
                </ul>
                <div id="test1" class="col s12 tabela_bg">
                    <table id="tabela_pacientes"  class="responsive-table tabela-cor " style="width:100%" >
                        <thead>
                            <tr>
                                <th  class="ocutarmobile"></th>
                                <th class='ocultar'> id_agendamento </th>
                                <th  class='center'> Hora </th>
                                <th  class='center'> Atividade </th>
                                <th  class='center'> IH </th>
                                <th  class='center'> Paciente </th>
                                <th  class='center'> Setor </th>
                                <th  class='center'> Localizacao </th>
                                <th  class='center'> Status </th>
                                
                                <th class='ocultar'> codigo_exame </th>
                                <th  class="ocultar"> data_servico_atual </th>
                                <th  class="ocultar"> codigo_servico </th>
                                <th  class="ocultar"> descricao_exame </th>
                                <th class="ocultar"> sexo </th>
                                <th class="ocultar"> data_nascimento </th>
                                <th class="ocultar"> nome_medico </th>
                                <th class="ocultar"> crm </th>
                                <th class="ocultar"> checkin_unidade </th>
                                <th class="ocultar"> checkout_unidade </th>
                                <th class="ocultar"> tempo_vinculado </th>
                                <th class="ocultar"> checkin_exame </th>
                                <th class="ocultar"> checkout_exame </th>
                                <th class="ocultar"> tempo_exame </th>
                                <th class="ocultar"> tempo_espera </th>

                                <th> Obs </th>
                            </tr>
                        </thead>
                        <tbody id="listadePacientes"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row"><?php include './templates/status.html'; ?></div>
    </div>


<!-- The Modal -->
<div id="elempai">
<div id="cardio8611050modal" class="modal modal-index">
        <div class="modal-index-content">
        <span class="fecharModal"></span>
        <p>RENATO GOMES DE MELO</p>
        <p>Obs: Não há observação </p>
        </div>
        </div>
</div>

</body>

<?php
   include './templates/frameworks.html';
?>
<script src="./js/index.js"></script>



<script>
 $(document).ready(function(){
    $('.modal').modal();
  });
</script>

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
