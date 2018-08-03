//chamadas ajax




(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    chamadaAjax(`php/selectsJson.php?parametro=qtd_por_setor&${parametrosDaUrl}`, agendamentos_do_dia_por_setor);
    chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);
    chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);
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
                '<td>' + data[i].hora + '</td>' +
                '<td>' + data[i].atividade + '</td>' +
                '<td>' + data[i].IH + '</td>' +
                '<td>' + data[i].paciente + '</td>' +
                '<td>' + ' - ' + '</td>' +
                '<td>' + data[i].servico_atual + '</td>' +
                '<td>' + data[i].proximo_servico + '</td>' +
                `<td><div  class=" status-${data[i].cod_cor_status} center-status">${data[i].cod_cor_status}</div></td>` +
                '<td>' + '<a class="obs waves-effect waves-light  modal-trigger" href="#asd"> <i class="material-icons">info_outline</i></a>' + '</td>';

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }




        data_table()
    }
    menuclicado()
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


function data_table() {
    $(document).ready(function () {
        $('#tabela_pacientes').DataTable({
            responsive: true,
            language: {
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
            }
        });
    });


}

// function data_table() {
//     $(document).ready(function () {
//         $('#tabela_pacientes').DataTable({
//             responsive: true,
//             language: {
//                 "lengthMenu": " Quantidade por Pagina _MENU_  ",
//                 "zeroRecords": "Não encontrado pacientes",
//                 "info": "Total de Pagina _PAGE_ de _PAGES_",
//                 "infoEmpty": " ",
//                 "infoFiltered": "(filtered from _MAX_ total records)",
//                 "search": "Filtrar:",
//                 "paginate": {
//                     "first": " ",
//                     "next": "Proxima",
//                     "previous": "Anterior",
//                     "last": " "
//                 }
//             }
//         });
//     });
// }

function format(d) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr>' +
        '<td>Full name:</td>' +
        '<td>' + d.name + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extension number:</td>' +
        '<td>' + d.extn + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extra info:</td>' +
        '<td>And any further details here (images etc)...</td>' +
        '</tr>' +
        '</table>';
}


// Add event listener for opening and closing details
$('#tabela_pacientes tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row(tr);

    if (row.child.isShown()) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
    }
    else {
        // Open this row
        row.child(format(row.data())).show();
        tr.addClass('shown');
    }
});




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
            html += '<span>' + qtd_agendamentos_do_dia + '</span>';
        }

        elem.innerHTML = html;
        elem1.innerHTML = html;
    }
}