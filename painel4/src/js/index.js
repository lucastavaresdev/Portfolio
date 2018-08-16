
(function () {
    var url_atual = window.location.href;
    console.log(url_atual)


    var parametrosDaUrl = url_atual.split("?")[1];


    chamadaAjax(`php/selectsJson.php?parametro=qtd_de_agendamentos_do_dia_por_agenda&${parametrosDaUrl}`, qtd_de_agendamentos_do_dia_por_agenda);
    chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);

    chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);
    calendario();
})();


/*
 *---------------------Lista de Paciente---------------------------
 */

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
                '<td class="ocutar">' + '-' + '</td>' +
                '<td>' + data[i].servico_atual + '</td>' +
                '<td>' + data[i].proximo_servico + '</td>' +
                `<td><div  class=" status-${data[i].cod_cor_status} center-status">${data[i].cod_cor_status}</div></td>` +
                '<td class="ocutar">' + data[i].sexo + '</td>' +
                '<td class="ocutar">' + data[i].data_nascimento + '</td>' +
                '<td class="ocutar">' + data[i].descricao_exame + '</td>' +
                '<td class="ocutar">' + data[i].nome_medico + '</td>' +
                '<td class="ocutar">' + data[i].crm + '</td>' +
                `<td><a class="waves-effect waves-light btn modal-trigger" id="${data[i].IH}${data[i].atividade}"  href="#${data[i].IH}${data[i].atividade}"> <i class="material-icons">info_outline</i></a></td>`;

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table(data)
        Modal(data)
    }
}


function Modal(data) {
    elemHtml = document.getElementById('modal')

    for (let i = 0; i < data.length; i++) {
        const elem = document.getElementById(data[i].IH + data[i].atividade);
        elem.addEventListener('click', function () {

            const msg = '<div id="' + data[i].IH + data[i].atividade + '" class="modal">' +
                + '<div class="modal-content">'
                + '<h4>Mdsadasdsadsadasdsaader</h4>'
                + '<p>A bunch of text</p>'
                + '</div>'
                + '<div class="modal-footer">'
                + '<a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>'
                + '</div>'
                + '</div>';

            elemHtml.innerHTML = msg;


        })
    }

}

function format(d) {
    const resultadoSexo = MasculinoouFeminino(d.sexo);
    data_de_nascimento = d.data_nascimento;
    const divindodataeHora = quebraURL(data_de_nascimento, "T");
    const divididoadata = quebraURL(divindodataeHora[0], "-");

    const datadeNascimento = `${divididoadata[2]}/${divididoadata[1]}/${divididoadata[0]}`;

    return '<div class="row add_info">'
        + '<div class=" col s5">'
        + '<div class=" col s11 offset-s1">'
        + '<p> Nome do Paciente:<span class="negrito-informacoes"> ' + d.paciente + '</span></p>'
        + '<p> Atividade:<span class="negrito-informacoes"> ' + d.atividade + '</span></p>'
        + '<p> Descrição do Exame:<span class="negrito-informacoes"> ' + d.descricao_exame + '</span></p>'
        + '<p> Médico:<span class="negrito-informacoes"> ' + d.nome_medico + ' </span>CRM:<span class="negrito-informacoes"> ' + d.crm + ' </span></p>'
        + '</div> '
        + '</div> '
        + '<div class="col s6 ">'
        + '<p> IH:<span class="negrito-informacoes"> ' + d.IH + '</span></p>'
        + '<p> Sexo:<span class="negrito-informacoes"> ' + resultadoSexo + '</span></p>'
        + '<p> Data de Nascimento:<span class="negrito-informacoes"> ' + datadeNascimento + '</span></p>'
        + '</div> '
        + '</div> '
}



function MasculinoouFeminino(sexo) {
    if (sexo === "F") {
        return sexo = "Feminino"
    } else {
        return sexo = "Masculino"
    }
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

/*------------------------------------------------------------------------------------------------------------------------------------*/


/*
 * ----------------------Quantidade de pacientes por agenda----------------------
 */
function qtd_de_agendamentos_do_dia_por_agenda(data) {
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

/*
 * ----------------------Quantidade de Procedimentos----------------------
 */

function qtd_procedimentos(data) {
    var elem = document.getElementById('qtd_procedimentos');
    var qtd_procedimentos = data[0].qtd_procedimentos;
    elem.innerHTML = qtd_procedimentos;
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






function calendario() {
    const Calender = document.querySelector('.datepicker');
    M.Datepicker.init(Calender, {
        format: 'dd-mm-yyyy',
        //autoClose: true,
        i18n: {
            months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            weekday: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
            cancel: 'Cancelar'
        }
    });

    const btn_ok = document.querySelector('.btn-flat.datepicker-done.waves-effect');
    var urlAtual = window.location; // pega a url da pagina

    btn_ok.addEventListener('click', function () {

        let dataescolhida = Calender.value; //pega a data
        dataescolhida = dataescolhida.split('-');
        datamysql = `${dataescolhida[2]}-${dataescolhida[1]}-${dataescolhida[0]}`;

        //pega a url base do site

        let url = window.location.href
        url_dividida = quebraURL(url, "?")

        resultado = url_dividida[0]
        parametros = quebraURL(url_dividida[1], "&")

        setor = parametros[0];

        window.location = resultado + '?' + setor + '&data=' + datamysql;

    })
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