<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
    $setor = $_GET['setor'];
?>

<div class="row">
    <div class="  col s12 dados_consolidados">
        <div class="col s12 conteudo bg-consolidado espacamento">
            <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
                    <div class="col s4 l2 ">
                        <div class="dash_btn_superior fade-in">
                            <p>Agendamentos</p>
                            <h4  id="agendimentos_do_dia">
                            <span>0</span>
                            </h4>
                        </div>
                    </div>
                    <?php echo "</a>"?> 
            <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
            <div class="col s4 l2">
                <div class="dash_btn_superior fade-in">
                    <p>Procedimentos Realizados</p>
                    <h4>-/<span id="atendimentos_total">0</span></h4>
                </div>
            </div>
            <?php echo "</a>"    ?>
            <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
                <div class="col s4 l2">
                    <div class="dash_btn_superior fade-in">
                        <p>Procedimentos</p>
                        <h4 id='qtd_procedimentos'>0</h4>
                    </div>
                </div>
                <?php echo "</a>"?>
                
                <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
                <div class="col s4 l2 tamanho_da_linha_titulo_fluxo">
                    <div class="dash_btn_superior m-fluxo fade-in">
                        <p>Maior Fluxo</p>
                        <ul id="fluxo"></ul>
                    </div>
                </div>
                <?php echo "</a>"?>
                
                <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
                    <div class="col s4 l2">
                        <div class="dash_btn_superior fade-in">
                        <p>Tempo de Sala</p>
                        <h4> - </h4>
                        </div>
                    </div>
                <?php echo "</a>"?>
                <?php echo "<a  href='./agendamentos.php?setor=$setor'>"    ?>
                    <div class="col s4 l2">
                        <div class="dash_btn_superior fade-in">
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
                <li class="tab col s12 l2 right ">
                        <input type="text"  id="busque_data" class="datepicker right" placeholder="Busque por uma data">
                </li>
            </ul>

                <div id="test1" class="col s12 tabela_bg">
                        <table id="tabela_pacientes"  class="responsive-table tabela-cor" style="width:100%" >
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Hora</th>
                                        <th>Atividade</th>
                                        <th>IH</th>
                                        <th>Paciente</th>
                                        <th>Localização</th>
                                        <th>Serviço Atual</th>
                                        <th>Prox. Serviço</th>
                                        <th>Status</th>
                                        <th class="ocutar">Sexo</th>
                                        <th class="ocutar">Data de Nascimento</th>
                                        <th class="ocutar">Descricao Exame</th>
                                        <th class="ocutar">Nome Medico</th>
                                        <th class="ocutar">CRM</th>
                                        <th>Obs.</th>

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
  

  <!-- Modal Structure -->
 <div class="ad ">
  <div id="asd" class="modal tamanho-modal">
    <div class="modal-content ">
      <h4>Modal Header</h4>
            <p>A bunch of tessssssssssssssssssssssssssssssssssssssssssssssssssssxt</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="btn_modal modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
  </div>




<div class="row">
<?php 
    include './templates/status.html';
?>
</div>



</body>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/index.js"></script>



<!--Calendario-->
<script>

    const Calender = document.querySelector('.datepicker');
    M.Datepicker.init(Calender,{
        format: 'dd-mm-yyyy',
        autoClose: true,
        i18n:{
            months: ['Janeiro',  'Fevereiro',  'Março',  'Abril',  'Maio',  'Junho',  'Julho',  'Agosto',  'Setembro',  'Outubro',  'Novembro',  'Dezembro'],
            monthsShort:	[ 'Jan',  'Fev',  'Mar',  'Abr',  'Mai',  'Jun',  'Jul',  'Ago',  'Set',  'Out', 'Nov',  'Dez'],
            weekday: [ 'Domingo',  'Segunda',  'Terça',  'Quarta',  'Quinta',  'Sexta',  'Sabado' ],
            weekdaysShort: [  'Dom',  'Seg',  'Ter',  'Qua',  'Qui',  'Sex',  'Sab'],
            weekdaysAbbrev:	['D','S','T','Q','Q','S','S'],
            cancel: 'Cancelar'
        }
    });
</script>
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
