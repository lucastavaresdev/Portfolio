//chamadas 
(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    chamadaAjax(`php/selectsJson.php?parametro=grid`, lista_de_pacientes);
})();



/*
 * -------------------------Agenda de Pacientes--------------------------------------cancel
 */

function lista_de_pacientes(data) {
    var tbody = document.getElementById("grid");

    if (tbody) {
        for (i = 0; i < data.length; i++) {

            var tr = document.createElement('tr');
            // debugger
            var cols =
                '<td>' + '' + '</td>' +
                '<td class="gridStatus">' + data[i].NM_PACIENTE + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Analises_Clinicas_11_andar) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Orientação_Fisioterapica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ecocardiograma) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Abdomen) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Clinico_Geral) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Teste_Ergométrico) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Raio_X) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Oftalmológica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Dermatológica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Cardiológica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Prova_de_Função_Pulmonar) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Próstata) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Urologica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Mental_Care) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Bioimpedanciometria) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Gastro_Procto) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Densitometria_Óssea) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Audiometria) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Nutricional) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Odontológica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Otorrinolaringologia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Ginecológica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Colpocitologia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Transvaginal) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Mamas) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Complemento_Mamografia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Mamografia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Colposcopia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Eletrocardiograma) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Doppler) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Análises_Clinicas_10_andar) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Pelvica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Física) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Tireoide) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Polissonografia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_do_Sono) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Eletroencefalograma) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Pediatrica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Fisioterápica) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Ultrassonografia_Aparelho_Urinário) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Acuidade_Visual) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Análises_Clínicas) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Micológico) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].ULTRASSONOGRAFIA) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Fisiológica_Laboratorial_Ergoespiro) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Médica_Clinica_Geral_e_Esforço) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Tomografia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Endoscopia_Colonoscopia) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Peso_e_Altura) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Pressao_Arterial) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliacao_Psicossocial) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_de_Equilibrio) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliação_Composição_Corporal_Dobras_Cutaneas) + '</td>' +
                '<td class="gridStatus">' + iconedeStatus(data[i].Avaliacao_Neuromuscular) + '</td>';

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table(data)
    }
}

function iconedeStatus(coluna) {
    coluna === null ? coluna = '<i class="material-icons grey-text" >cancel</i>' : coluna = '<i class="material-icons  blue-text">check</i>';
    return (coluna)
}


/*
 * -------------------------Muda de Letra para paravra--------------------------------------
*/


function MasculinoouFeminino(sexo) {
    if (sexo === "F") {
        return sexo = "Feminino"
    } else {
        return sexo = "Masculino"
    }
}


/*
 * -----------Inicializando o puglin dataTables----------------------
*/

function data_table(d) {
    $(document).ready(function () {
        var table = $('#tabela_pacientes').DataTable({
            fixedColumns: true,
            fixedColumns: {
                leftColumns: 1
            },
            scrollX: true,
            scrollCollapse: true,
            columnDefs: [
                { width: '100%', targets: 0 }
            ],
            responsive: true,
            "language": {
                "lengthMenu": " Quantidade por Pagina _MENU_  ",
                "zeroRecords": "Não encontrado pacientes",
                "info": "Total de Pagina _PAGE_ de _PAGES_",
                "infoEmpty": " ",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Filtrar:",
                "paginate": {
                    "first": " ",
                    "next": "Proxima",
                    "previous": "Anterior",
                    "last": " "
                }
            },
            "columns": [
                {
                    "className": 'details-control',
                    "orderable": false,
                    "deferLoading": 0, // here
                    "defaultContent": '',
                    "data": "data[, ]"
                },
                { 'data': 'NM_PACIENTE' },
                { 'data': 'Analises_Clinicas_11_andar' },
                { 'data': 'Orientação_Fisioterapica' },
                { 'data': 'Ecocardiograma' },
                { 'data': 'Ultrassonografia_Abdomen' },
                { 'data': 'Avaliação_Clinico_Geral' },
                { 'data': 'Teste_Ergométrico' },
                { 'data': 'Raio_X' },
                { 'data': 'Avaliação_Oftalmológica' },
                { 'data': 'Avaliação_Dermatológica' },
                { 'data': 'Avaliação_Cardiológica' },
                { 'data': 'Prova_de_Função_Pulmonar' },
                { 'data': 'Ultrassonografia_Próstata' },
                { 'data': 'Avaliação_Urologica' },
                { 'data': 'Avaliação_Mental_Care' },
                { 'data': 'Bioimpedanciometria' },
                { 'data': 'Avaliação_Gastro_Procto' },
                { 'data': 'Densitometria_Óssea' },
                { 'data': 'Audiometria' },
                { 'data': 'Avaliação_Nutricional' },
                { 'data': 'Avaliação_Odontológica' },
                { 'data': 'Avaliação_Otorrinolaringologia' },
                { 'data': 'Avaliação_Ginecológica' },
                { 'data': 'Colpocitologia' },
                { 'data': 'Ultrassonografia_Transvaginal' },
                { 'data': 'Ultrassonografia_Mamas' },
                { 'data': 'Complemento_Mamografia' },
                { 'data': 'Mamografia' },
                { 'data': 'Colposcopia' },
                { 'data': 'Eletrocardiograma' },
                { 'data': 'Ultrassonografia_Doppler' },
                { 'data': 'Análises_Clinicas_10_andar' },
                { 'data': 'Ultrassonografia_Pelvica' },
                { 'data': 'Avaliação_Física' },
                { 'data': 'Ultrassonografia_Tireoide' },
                { 'data': 'Polissonografia' },
                { 'data': 'Avaliação_do_Sono' },
                { 'data': 'Eletroencefalograma' },
                { 'data': 'Avaliação_Pediatrica' },
                { 'data': 'Avaliação_Fisioterápica' },
                { 'data': 'Ultrassonografia_Aparelho_Urinário' },
                { 'data': 'Acuidade_Visual' },
                { 'data': 'Análises_Clínicas' },
                { 'data': 'Micológico' },
                { 'data': 'ULTRASSONOGRAFIA' },
                { 'data': 'Avaliação_Fisiológica_Laboratorial_Ergoespiro' },
                { 'data': 'Avaliação_Médica_Clinica_Geral_e_Esforço' },
                { 'data': 'Tomografia' },
                { 'data': 'Endoscopia_Colonoscopia' },
                { 'data': 'Peso_e_  Altura' },
                { 'data': 'Pressao_Arterial' },
                { 'data': 'Avaliacao_Psicossocial' },
                { 'data': 'Avaliação_de_Equilibrio' },
                { 'data': 'Avaliação_Composição_Corporal_Dobras_Cutaneas' },
                { 'data': 'Avaliacao_Neuromuscular' },


            ],
            "order": [[1, 'asc']],
            "columnDefs": [
                {
                    "targets": [14],
                    "visible": true,
                    "searchable": false
                }
            ],
        });

        // Add event listener for opening and closing details
        $('#tabela_pacientes tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                $('div.add_info', row.child()).slideUp(function () {
                    row.child.hide();
                    tr.removeClass('shown');
                });
            }
            else {
                // Open this row

                row.child(format(row.data())).show();
                tr.addClass('shown');

                $('div.add_info', row.child()).slideDown();
            }
        });
    });
}




/*
 * -----------Responsavel pelo dropdown de mais informações da tabela----------------------
*/
function format(d) {

    const resultadoSexo = MasculinoouFeminino(d.IE_SEXO);

    return '<div class="row add_info">'
        + '<div class=" col s6">'
        + '<div class=" col s11 offset-s1">'
        + '<p> Nome do Paciente: ' + d.NM_PACIENTE + '</p>'
        + '<p> Cadastro Hospitalar: ' + d.CD_PESSOA_FISICA + '</p>'
        + '<p> Nº de Atendimento: ' + d.NR_ATENDIMENTO + '</p>'
        + '<p> Médico: ' + d.NM_MEDICO_ATENDIMENTO + '</p>'
        + '</div> '
        + '</div> '
        + '<div class="col s6 ">'
        + '<p>Idade: ' + d.DS_IDADE + '</p>'
        + '<p> Sexo: ' + resultadoSexo + '</p>'
        + '<p> Convênio: ' + '-' + '</p>'
        + '<p> Descrição convênio: ' + d.DS_CONVENIO + '</p>'
        + '</div> '
        + '</div> '
}


/*
* -----------Total de Agendamento por Setor---------------------
*/


function atribuiHtml(classouid, resultado) {
    classouid.innerHTML = resultado;
}

