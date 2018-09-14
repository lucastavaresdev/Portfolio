<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
    $setor = ""
?>

<div class="row">
    <div class="  col s12 dados_consolidados">
        <div class="col s12 conteudo bg-consolidado espacamento">
            <?php echo "<a  href='./agendamentos.php'>"    ?>
                    <div class="col s4 l2 ">
                        <div class="dash_btn_superior fade-in">
                            <p>Agendamentos</p>
                            <h4  id="agendamentos_quantidade">
                            <span>0</span>
                            </h4>
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
                <!-- <li class="tab col s12 l2 right ">
                        <input type="text"  id="busque_data" class="datepicker right" placeholder="Busque por uma data">
                </li> -->
            </ul>

                <div id="test1" class="col s12 tabela_bg">
                        <table id="tabela_pacientes"  class="responsive-table tabela-cor" style="width:100%" >
                                <thead>
                                    <tr>
                                         <th></th>
                                         <th>Nº Paciente </th>
                                         <th>Nome Paciente </th>
                                         <th>Nome do Médico </th>
                                         <th>Localização</th>
                                         <th>Idade </th>
                                         <th>Sexo </th>
                                         <th class="ocutar">SEQUENCIA </th>
                                         <th class="ocutar">DT_ENTRADA </th>
                                         <th class="ocutar">CD_PESSOA_FISICA </th>
                                         <th class="ocutar">IE_TIPO_ATENDIMENTO </th>
                                         <th class="ocutar">DT_ALTA </th>
                                         <th class="ocutar">CD_SETOR_ATENDIMENTO </th>
                                         <th class="ocutar">CD_UNIDADE_BASICA </th>
                                         <th class="ocutar">CD_UNIDADE_COMPL </th>
                                         <th class="ocutar">CD_UNIDADE </th>
                                         <th class="ocutar">CD_CONVENIO </th>
                                         <th class="ocutar">DS_CONVENIO </th>
                                         <th class="ocutar">DS_MOTIVO_ALTA </th>
                                         <th class="ocutar">NM_UNIDADE </th>
                                         <th class="ocutar">IE_ATEND_RETORNO </th>
                                    </tr>
                                </thead>
                                <tbody id="listadePacientes">

                                </tbody>

                            </table>
            </div>
        </div>
    </div>

</div>
<!-- <div id="test2" class="col s12">Test 2</div> -->
</div>
</div>

  <!-- Modal Trigger -->

</body>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/index.js"></script>

<!--Calendario-->

<!---->

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
