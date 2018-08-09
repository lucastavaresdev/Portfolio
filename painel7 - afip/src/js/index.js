//chamadas ajax
(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    // chamadaAjax(`php/selectsJson.php?parametro=qtd_por_setor&${parametrosDaUrl}`, agendamentos_do_dia_por_setor);
    // chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);
    // chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
    chamadaAjax(`php/selectsJson.php?parametro=lista_de_pacientes'`, lista_de_pacientes);
})();


function qtd_procedimentos(data) {
    var elem = document.getElementById('qtd_procedimentos');
    var qtd_procedimentos = data[0].qtd_procedimentos;
    elem.innerHTML = qtd_procedimentos;
}


function lista_de_pacientes(data) {

    var tbody = document.getElementById("listadePacientes");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');
            var cols =
                '<td></td>' +
                '<td>' + data[i].hora + '</td>' +
                '<td>' + data[i].atividade + '</td>' +
                '<td>' + data[i].IH + '</td>' +
                '<td>' + data[i].paciente + '</td>' +
                '<td>' + '-' + '</td>' +
                '<td>' + data[i].servico_atual + '</td>' +
                '<td>' + data[i].proximo_servico + '</td>' +
                `<td><div  class=" status-${data[i].cod_cor_status} center-status">${data[i].cod_cor_status}</div></td>` +
                '<td class="ocutar">' + data[i].sexo + '</td>' +
                '<td class="ocutar">' + data[i].data_nascimento + '</td>' +
                '<td class="ocutar">' + data[i].descricao_exame + '</td>' +
                '<td class="ocutar">' + data[i].nome_medico + '</td>' +
                '<td class="ocutar">' + data[i].crm + '</td>' +
                '<td>' + '<a class="obs waves-effect waves-light  modal-trigger" href="#asd"> <i class="material-icons">info_outline</i></a>' + '</td>';


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
                { 'data': "hora" },
                { 'data': "atividade" },
                { 'data': "IH" },
                { 'data': "paciente" },
                { 'data': "-" },
                { 'data': "servico_atual" },
                { 'data': "proximo_servico" },
                { 'data': "cod_cor_status" },
                { 'data': "sexo" },
                { 'data': "data_nascimento" },
                { 'data': "descricao_exame" },
                { 'data': "nome_medico" },
                { 'data': "crm" },

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