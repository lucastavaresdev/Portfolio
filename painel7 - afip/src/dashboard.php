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
<script>

    const Calender = document.querySelector('.datepicker');
    M.Datepicker.init(Calender,{
        format: 'dd-mm-yyyy',
        //autoClose: true,
        i18n:{
            months: ['Janeiro',  'Fevereiro',  'Março',  'Abril',  'Maio',  'Junho',  'Julho',  'Agosto',  'Setembro',  'Outubro',  'Novembro',  'Dezembro'],
            monthsShort:	[ 'Jan',  'Fev',  'Mar',  'Abr',  'Mai',  'Jun',  'Jul',  'Ago',  'Set',  'Out', 'Nov',  'Dez'],
            weekday: [ 'Domingo',  'Segunda',  'Terça',  'Quarta',  'Quinta',  'Sexta',  'Sabado' ],
            weekdaysShort: [  'Dom',  'Seg',  'Ter',  'Qua',  'Qui',  'Sex',  'Sab'],
            weekdaysAbbrev:	['D','S','T','Q','Q','S','S'],
            cancel: 'Cancelar'
        }
    });

    

    const btn_ok = document.querySelector('.btn-flat.datepicker-done.waves-effect');
    var urlAtual = window.location; // pega a url da pagina
    
    btn_ok.addEventListener('click', function(){
       let dataescolhida = Calender.value; //pega a data
       dataescolhida  = dataescolhida.split('').reverse().join(''); //reverte a data
//parei aqui
        let url = window.location.pathname

        let setor = url.searchParams("setor");
        console.log(setor);
   
       window.location = url + '?setor=225'; //redireciona com o get data

       
        console.log(a)
    })


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
