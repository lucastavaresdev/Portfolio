//chamadas ajax
(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    chamadaAjax(`php/selectsJson.php?parametro=lista_de_pacientes`, lista_de_pacientes);
    // chamadaAjax(`php/selectsJson.php?parametro=qtd_por_setor&${parametrosDaUrl}`, agendamentos_do_dia_por_setor);
    // chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);
    // chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
})();

function lista_de_pacientes(data) {
    var tbody = document.getElementById("listadePacientes");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');
            var cols =
                '<td></td>' +
                '<td>' + data[i].NR_ATENDIMENTO + '</td>' +
                '<td>' + data[i].DT_ENTRADA + '</td>' +
                '<td>' + data[i].IE_TIPO_ATENDIMENTO + '</td>' +
                '<td>' + data[i].CD_PESSOA_FISICA + '</td>' +
                '<td>' + data[i].DT_ALTA + '</td>' +
                '<td>' + data[i].NM_MEDICO_ATENDIMENTO + '</td>' +
                '<td>' + data[i].CD_SETOR_ATENDIMENTO + '</td>' +
                '<td>' + data[i].CD_UNIDADE_COMPL + '</td>' +
                '<td>' + data[i].CD_UNIDADE + '</td>' +
                '<td>' + data[i].CD_UNIDADE_BASICA + '</td>' +
                '<td>' + data[i].DS_CONVENIO + '</td>' +
                '<td>' + data[i].NM_UNIDADE + '</td>' +
                '<td>' + data[i].DS_MOTIVO_ALTA + '</td>' +
                '<td>' + data[i].NM_PACIENTE + '</td>' +
                '<td>' + data[i].DS_IDADE + '</td>' +
                '<td>' + data[i].IE_SEXO + '</td>' +
                '<td>' + data[i].IE_ATEND_RETORNO + '</td>' +
                '<td>' + data[i].ANOTACAO + '</td>' +
                '<td>' + data[i].CD_CONVENIO + '</td>' +
                '<td>' + data[i].CD_ESTABELECIMENTO + '</td>';

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table(data)
    }
}


function format(d) {
    //debugger
    var sexo = d.sexo;
    console.log(sexo)
    if (sexo === "F") {
        sexo = "Feminino"
    } else {
        sexo = "Masculino"
    }

    return '<div class="row add_info">'
        + '<div class=" col s5">'
        + '<div class=" col s11 offset-s1">'
        + '<p> Nome do Paciente: ' + d.paciente + '</p>'
        + '<p> Atividade: ' + d.atividade + '</p>'
        + '<p> Descrição do Exame: ' + d.descricao_exame + '</p>'
        + '<p> Médico: ' + d.nome_medico + '   CRM:' + d.crm + ' </p>'
        + '</div> '
        + '</div> '
        + '<div class="col s6 ">'
        + '<p> IH: ' + d.IH + '</p>'
        + '<p> Sexo: ' + sexo + '</p>'
        + '<p> Data de Nascimento: ' + d.data_nascimento + '</p>'
        + '</div> '
        + '</div> '
}



function data_table(d) {
    $(document).ready(function () {
        var table = $('#tabela_pacientes').DataTable({
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
                    "data": null,
                    "defaultContent": ''
                },
                { 'data': 'NR_ATENDIMENTO' },
                { 'data': 'DT_ENTRADA' },
                { 'data': 'IE_TIPO_ATENDIMENTO' },
                { 'data': 'CD_PESSOA_FISICA' },
                { 'data': 'DT_ALTA' },
                { 'data': 'NM_MEDICO_ATENDIMENTO' },
                { 'data': 'CD_SETOR_ATENDIMENTO' },
                { 'data': 'CD_UNIDADE_COMPL' },
                { 'data': 'CD_UNIDADE' },
                { 'data': 'CD_UNIDADE_BASICA' },
                { 'data': 'DS_CONVENIO' },
                { 'data': 'NM_UNIDADE' },
                { 'data': 'DS_MOTIVO_ALTA' },
                { 'data': 'NM_PACIENTE' },
                { 'data': 'DS_IDADE' },
                { 'data': 'IE_SEXO' },
                { 'data': 'IE_ATEND_RETORNO' },
                { 'data': 'ANOTACAO' },
                { 'data': 'CD_CONVENIO' },
                { 'data': 'CD_ESTABELECIMENTO' }
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

        function populardata(d) {
            console.log("  { 'data': 'NR_ATENDIMENTO' }");
        }

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

function qtd_procedimentos(data) {
    var elem = document.getElementById('qtd_procedimentos');
    var qtd_procedimentos = data[0].qtd_procedimentos;
    elem.innerHTML = qtd_procedimentos;
}

function menuclicado() {
    var tabela = document.getElementById('listadePacientes');
    var linhas = tabela.getElementsByTagName('tr')

    for (let i = 0; i < linhas.length; i++) {
        linhas[i].addEventListener('click', function () {
            console.log(i)
        })
    }
}

function horarioComMaiorPacientes(data) {
    var fluxodetempo = document.getElementById('fluxo');
    var html = " ";

    if (fluxodetempo) {
        for (i = 0; i < data.length; i++) {
            var j;
            j = `<li>${data[i].intervalo_de_horas} <span> (${data[i].qtd_por_hora} pacientes)</span></li>`;
            html += j;
        }

        if (data.length === 0) {
            fluxodetempo.innerHTML = "Não ha paciente";
            fluxodetempo.classList.add('p-msg');
        } else if (data.length === 1) {
            atribuiHtml(fluxodetempo, html);
            fluxodetempo.classList.add('fluxo-1');
        } else {
            fluxodetempo.innerHTML = "Ver Lista de Pacientes"
            fluxodetempo.classList.add('p-msg');
        }
    }

}

function atribuiHtml(classouid, resultado) {
    classouid.innerHTML = resultado;
}

function agendamentos_do_dia_por_setor(data) {
    var html = "";

    elem = document.getElementById('agendimentos_do_dia');
    elem1 = document.getElementById('atendimentos_total');
    if (elem1 && elem) {
        var qtd_agendamentos_do_dia = data[0].qtd_paciente;

        if (typeof qtd_agendamentos_do_dia === 0 || typeof qtd_agendamentos_do_dia === "qtd_agendamentos_do_dia") {
            console.log("verificar o json ou query nos selects.php");
        } else {
            html = '<span>' + qtd_agendamentos_do_dia + '</span>';
        }
        elem.innerHTML = html;
        elem1.innerHTML = html;
    }
}