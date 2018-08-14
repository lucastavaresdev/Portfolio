<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
    $setor = ""
?>



<div class="col s12 agendamento conteudo">

    <div class="row">
        <div class="col s12">
            <ul class="tabs" style="background-color: #f9f9f9;">
                <li class="tab col s12 l3">
                    <!-- <a id="aba_nome_setor" class="active" href="#test1"> - </a> -->
                </li>
            </ul>

    <div class="scroll">
            <table id="tabela_pacientes"  class="responsive-table tabela-cor">
                    <thead>
                        <tr class='grid-espaco' style="height: 20px;">
                            <th  width="320">Nome Paciente</th>
                                 <th class="center">Acuidade Visual</th>
                                 <th class="center">Análises Clínicas</th>
                                 <th class="center">Análises Clinicas 10 andar</th>
                                 <th class="center">Análises Clínicas 11 andar</th>
                                 <th class="center">Audiometria</th>
                                 <th class="center">Avaliação Cardiológica</th>
                                 <th class="center">Avaliação Clinico Geral</th>
                                 <th class="center">Avaliação Composição Corporal Dobras Cutaneas</th>
                                 <th class="center">Avaliação de Equilíbrio</th>
                                 <th class="center">Avaliação Dermatológica</th>
                                 <th class="center">Avaliação do Sono</th>
                                 <th class="center">Avaliação Física</th>
                                 <th class="center">Avaliação Fisiológica Laboratorial Ergoespiro</th>
                                 <th class="center">Avaliação Fisioterápica</th>
                                 <th class="center">Avaliação Gastro-Procto</th>
                                 <th class="center">Avaliação Ginecológica</th>
                                 <th class="center">Avaliação Médica (Clinica Geral e Esforço)</th>
                                 <th class="center">Avaliação Mental Care</th>
                                 <th class="center">Avaliação Neuromuscular</th>
                                 <th class="center">Avaliação Nutricional</th>
                                 <th class="center">Avaliação Odontológica</th>
                                 <th class="center">Avaliação Oftalmológica</th>
                                 <th class="center">Avaliação Otorrinolaringologia</th>
                                 <th class="center">Avaliação Pediátrica</th>
                                 <th class="center">Avaliação Psicossocial</th>
                                 <th class="center">Avaliação Urológica</th>
                                 <th class="center">Bioimpedanciometria</th>
                                 <th class="center">Colpocitologia</th>
                                 <th class="center">Colposcopia</th>
                                 <th class="center">Complemento Mamografia</th>
                                 <th class="center">Densitometria Óssea</th>
                                 <th class="center">Ecocardiograma</th>
                                 <th class="center">Eletrocardiograma</th>
                                 <th class="center">Eletroencefalograma</th>
                                 <th class="center">Endoscopia Colonoscopia</th>
                                 <th class="center">Mamografia</th>
                                 <th class="center">Micológico</th>
                                 <th class="center">Orientação Fisioterapica</th>
                                 <th class="center">Peso e Altura</th>
                                 <th class="center">Polissonografia</th>
                                 <th class="center">Pressão Arterial</th>
                                 <th class="center">Prova de Função Pulmonar</th>
                                 <th class="center">Raio X</th>
                                 <th class="center">Teste Ergométrico</th>
                                 <th class="center">Tomografia</th>
                                 <th class="center">ULTRASSONOGRAFIA</th>
                                 <th class="center">Ultrassonografia Abdômen</th>
                                 <th class="center">Ultrassonografia Aparelho Urinário</th>
                                 <th class="center">Ultrassonografia Doppler</th>
                                 <th class="center">Ultrassonografia Mamas</th>
                                 <th class="center">Ultrassonografia Pélvica</th>
                                 <th class="center">Ultrassonografia Próstata</th>
                                 <th class="center">Ultrassonografia Tireoide</th>
                                 <th class="center"> Ultrassonografia Transvaginal</th>
                       </tr>
                </thead>
                <tbody id="grid"></tbody>
            </table>
    </div>
</div>
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

</body>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/grid.js"></script>

<!--Calendario-->

<!---->

  <script>
 
  </script>
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
