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

                <div id="test1" class="col s12 tabela_bg">
                        <table id="tabela_pacientes"  class="responsive-table tabela-cor" style="width:100%" >
                                <thead>
                                    <tr>
                                            <th></th>
                                            <th>NM_PACIENTE</th>
                                            <th>Analises_Clinicas_11_andar</th>
                                            <th>Orientação_Fisioterapica</th>
                                            <th>Ecocardiograma</th>
                                            <th>Ultrassonografia_Abdomen</th>
                                            <th>Avaliação_Clinico_Geral</th>
                                            <th>Teste_Ergométrico</th>
                                            <th>Raio_X</th>
                                            <th>Avaliação_Oftalmológica</th>
                                            <th>Avaliação_Dermatológica</th>
                                            <th>Avaliação_Cardiológica</th>
                                            <th>Prova_de_Função_Pulmonar</th>
                                            <th>Ultrassonografia_Próstata</th>
                                            <th>Avaliação_Urologica</th>
                                            <th>Avaliação_Mental_Care</th>
                                            <th>Bioimpedanciometria</th>
                                            <th>Avaliação_Gastro_Procto</th>
                                            <th>Densitometria_Óssea</th>
                                            <th>Audiometria</th>
                                            <th>Avaliação_Nutricional</th>
                                            <th>Avaliação_Odontológica</th>
                                            <th>Avaliação_Otorrinolaringologia</th>
                                            <th>Avaliação_Ginecológica</th>
                                            <th>Colpocitologia</th>
                                            <th>Ultrassonografia_Transvaginal</th>
                                            <th>Ultrassonografia_Mamas</th>
                                            <th>Complemento_Mamografia</th>
                                            <th>Mamografia</th>
                                            <th>Colposcopia</th>
                                            <th>Eletrocardiograma</th>
                                            <th>Ultrassonografia_Doppler</th>
                                            <th>Análises_Clinicas_10_andar</th>
                                            <th>Ultrassonografia_Pelvica</th>
                                            <th>Avaliação_Física</th>
                                            <th>Ultrassonografia_Tireoide</th>
                                            <th>Polissonografia</th>
                                            <th>Avaliação_do_Sono</th>
                                            <th>Eletroencefalograma</th>
                                            <th>Avaliação_Pediatrica</th>
                                            <th>Avaliação_Fisioterápica</th>
                                            <th>Ultrassonografia_Aparelho_Urinário</th>
                                            <th>Acuidade_Visual</th>
                                            <th>Análises_Clínicas</th>
                                            <th>Micológico</th>
                                            <th>ULTRASSONOGRAFIA</th>
                                            <th>Avaliação_Fisiológica_Laboratorial_Ergoespiro</th>
                                            <th>Avaliação_Médica_Clinica_Geral_e_Esforço</th>
                                            <th>Tomografia</th>
                                            <th>Endoscopia_Colonoscopia</th>
                                            <th>Peso e Altura</th>
                                            <th>Pressao_Arterial</th>
                                            <th>Avaliacao_Psicossocial</th>
                                            <th>Avaliação_de_Equilibrio</th>
                                            <th>Avaliação_Composição_Corporal_Dobras_Cutaneas</th>
                                            <th>Avaliacao_Neuromuscular</th>
                                    </tr>
                                </thead>

                                <tbody id="grid">

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

</body>

<?php 
   include './templates/frameworks.html';
?>
<script src="./js/grid.js"></script>

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
