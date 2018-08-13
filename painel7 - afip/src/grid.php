<?php 
    include "./templates/header.php";
    include "./templates/menu.html";
    $setor = ""
?>






<div class="col s12 agendamento conteudo">

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s12 l3">
                    <a id="aba_nome_setor" class="active" href="#test1"> - </a>
                </li>
            </ul>

    <div class="scroll">
            <table id="tabela_pacientes"  class="responsive-table tabela-cor">
                    <thead >
                        <tr>
                            <th>Nome Paciente</th>
                            <th>Analises Clinicas 11 andar</th>
                            <th>Orientação Fisioterapica</th>
                            <th>Ecocardiograma</th>
                            <th>Ultrassonografia Abdomen</th>
                            <th>Avaliação Clinico Geral</th>
                            <th>Teste Ergométrico</th>
                            <th>Raio X</th>
                            <th>Avaliação Oftalmológica</th>
                            <th>Avaliação Dermatológica</th>
                            <th>Avaliação Cardiológica</th>
                            <th>Prova de Função Pulmonar</th>
                            <th>Ultrassonografia Próstata</th>
                            <th>Avaliação Urologica</th>
                            <th>Avaliação Mental Care</th>
                            <th>Bioimpedanciometria</th>
                            <th>Avaliação Gastro Procto</th>
                            <th>Densitometria Óssea</th>
                            <th>Audiometria</th>
                            <th>Avaliação Nutricional</th>
                            <th>Avaliação Odontológica</th>
                            <th>Avaliação Otorrinolaringologia</th>
                            <th>Avaliação Ginecológica</th>
                            <th>Colpocitologia</th>
                            <th>Ultrassonografia Transvaginal</th>
                            <th>Ultrassonografia Mamas</th>
                            <th>Complemento Mamografia</th>
                            <th>Mamografia</th>
                            <th>Colposcopia</th>
                            <th>Eletrocardiograma</th>
                            <th>Ultrassonografia Doppler</th>
                            <th>Análises Clinicas 10 andar</th>
                            <th>Ultrassonografia Pelvica</th>
                            <th>Avaliação Física</th>
                            <th>Ultrassonografia Tireoide</th>
                            <th>Polissonografia</th>
                            <th>Avaliação do Sono</th>
                            <th>Eletroencefalograma</th>
                            <th>Avaliação Pediatrica</th>
                            <th>Avaliação Fisioterápica</th>
                            <th>Ultrassonografia Aparelho Urinário</th>
                            <th>Acuidade Visual</th>
                            <th>Análises Clínicas</th>
                            <th>Micológico</th>
                            <th>ULTRASSONOGRAFIA</th>
                            <th>Avaliação Fisiológica Laboratorial Ergoespiro</th>
                            <th>Avaliação Médica Clinica Geral e Esforço</th>
                            <th>Tomografia</th>
                            <th>Endoscopia Colonoscopia</th>
                            <th>Peso e Altura</th>
                            <th>Pressao Arterial</th>
                            <th>Avaliacao Psicossocial</th>
                            <th>Avaliação de Equilibrio</th>
                            <th>Avaliação Composição Corporal Dobras Cutaneas</th>
                            <th>Avaliacao Neuromuscular</th>

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
