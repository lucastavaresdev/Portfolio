
(function () {
    var url_atual = window.location.href;
    console.log(url_atual)


    var parametrosDaUrl = url_atual.split("?")[1];


    chamadaAjax(`php/selectsJson.php?parametro=qtd_de_agendamentos_do_dia_por_agenda&${parametrosDaUrl}`, qtd_de_agendamentos_do_dia_por_agenda);
    chamadaAjax(`php/selectsJson.php?parametro=qtd_procedimentos&${parametrosDaUrl}`, qtd_procedimentos);

    chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);

    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, dados);

    calendario();
})();

var cord;


function dados(data) {
    return data;
}


/*
 *---------------------Lista de Paciente---------------------------
 */

function lista_de_pacientes(data) {
    var tbody = document.getElementById("listadePacientes");
    if (tbody) {
        for (i = 0; i < data.length; i++) {
            var tr = document.createElement('tr');

            var nstatus = status(data[i].checkin_unidade, data[i].checkout_unidade, data[i].checkin_exame, data[i].checkout_exame)
            var cols = '<td  class="ocutarmobile"></td>' +
                '<td class="ocultar">' + data[i].id_agendamento + '</td>' +
                '<td>' + data[i].hora + '</td>' +
                '<td>' + data[i].atividade + '</td>' +
                '<td>' + data[i].IH + '</td>' +
                '<td>' + data[i].paciente + '</td>' +
                '<td class="ocultar">' + data[i].codigo_exame + '</td>' +
                '<td class="ocultar">' + data[i].codigo_servico + '</td>' +
                '<td>' + data[i].servico + '</td>' +
                '<td class="ocultar">' + data[i].descricao_exame + '</td>' +
                '<td class="ocultar">' + data[i].sexo + '</td>' +
                '<td class="ocultar">' + data[i].data_nascimento + '</td>' +
                '<td class="ocultar">' + data[i].nome_medico + '</td>' +
                '<td class="ocultar">' + data[i].crm + '</td>' +
                '<td class="ocultar">' + data[i].checkin_unidade + '</td>' +
                '<td class="ocultar">' + data[i].checkout_unidade + '</td>' +
                '<td class="ocultar">' + data[i].tempo_vinculado + '</td>' +
                '<td class="ocultar">' + data[i].checkin_exame + '</td>' +
                '<td class="ocultar">' + data[i].checkout_exame + '</td>' +
                '<td class="ocultar">' + data[i].tempo_exame + '</td>' +
                '<td class="ocultar">' + data[i].tempo_decorrido_do_exame + '</td>' +
                '<td>' + data[i].status + '</td>' +
                '<td class="ocultar">' + data[i].desc_status + '</td>' +
                '<td class="ocultar">' + data[i].tempo_espera + '</td>' +
                '<td>' + data[i].setor + '</td>' +
                `<td id="${data[i].IH + data[i].atividade}" class='center' ><a><i id="${data[i].IH + data[i].atividade}botao" class="material-icons botao_modal">info_outline</i></a></td>`;




            // '<td  class="ocutarmobile"></td>' +
            //     '<td class="ocultar">' + se_null(data[i].id_agendamento) + '</td>' +
            //     '<td  class="center">' + se_null(data[i].hora) + '</td>' +
            //     '<td  class="center">' + se_null(data[i].atividade) + '</td>' +
            //     '<td  class="center">' + se_null(data[i].IH) + '</td>' +
            //     '<td  class="center">' + se_null(data[i].paciente) + '</td>' +
            //     '<td  class="center">' + se_null(data[i].servico) + '</td>' +
            //     '<td  class="center">' + c_localizacao(data[i].localizacao, data[i].checkin_unidade) + '</td>' +
            //     '<td><div class="status-' + nstatus + ' center-status">' + nstatus + '</div></td>' +
            //     `<td id="${data[i].IH + data[i].atividade}" class='center' ><a><i id="${data[i].IH + data[i].atividade}botao" class="material-icons botao_modal">info_outline</i></a></td>` +
            //     '<td  class="ocultar">' + se_null(data[i].codigo_exame) + '</td>' +
            //     '<td  class="ocultar">' + se_null(data[i].codigo_servico) + '</td>' +
            //     '<td  class="ocultar">' + se_null(data[i].data_servico_atual) + '</td>' +
            //     '<td  class="ocultar">' + se_null(data[i].descricao_exame) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].sexo) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].data_nascimento) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].nome_medico) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].crm) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].checkin_unidade) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].checkout_unidade) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].tempo_vinculado) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].checkin_exame) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].tempo_exame) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].checkout_exame) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].tempo_decorrido_do_exame) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].desc_status) + '</td>' +
            //     '<td class="ocultar">' + se_null(data[i].tempo_espera) + '</td>';

            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table(data)
        modal(data)
    }
}


function status(vinculado, desvinculado, inicio_do_exame, final_do_exame) {
    nstatus = '';
    if (!vinculado || vinculado === null) {
        console.log('Não iniciou o atendimento')
        nstatus = 5
        return nstatus
    } else if (desvinculado) {
        console.log('Finalizado')
        nstatus = 7
        return nstatus
    } else if (vinculado && !inicio_do_exame) {
        console.log('Aguardando')
        nstatus = 2
        return nstatus
    } else if (inicio_do_exame && !final_do_exame) {
        console.log('Em antedimentos')
        nstatus = 3
        return nstatus
    } else if (inicio_do_exame && final_do_exame) {
        console.log('Atendido')
        nstatus = 4
        return nstatus
    }
}



function se_null(campo_do_banco) {
    campo_do_banco === null || campo_do_banco === undefined ? campo_do_banco = ' ' : campo_do_banco;
    return campo_do_banco
}

function c_localizacao(campo_do_banco, vinculado) {
    if (campo_do_banco === null || campo_do_banco === undefined) {
        campo_do_banco = 'Paciente não esta na unidade'
    } else if (campo_do_banco === null || campo_do_banco === undefined && !vinculado === null) {
        campo_do_banco = 'Paciente vinculado  não esta na unidade'
    } else {
        campo_do_banco = campo_do_banco
    }

    return campo_do_banco
}



function modal(data) {
    modal = "";

    for (i = 0; i < data.length; i++) {
        var IDdoModal = data[i].IH + data[i].atividade + "modal";
        var ID = data[i].IH + data[i].atividade;
        let obs;

        if (data[i].anotacao === null) {
            obs = "Não há observação"
        } else {
            obs = data[i].anotacao;
            ID = ID + "botao"
            document.getElementById(ID).style.color = "#FF6347 "
        }



        modal += `<div id="${IDdoModal}" class="modal modal-index">
                <div class="modal-index-content">
                    <span class="fecharModal"></span>
                    <p>${data[i].paciente}</p>
                    <p>Obs: ${obs} </p>
                </div>
            </div>
        </div>`

        document.getElementById("elempai").innerHTML = modal;

    }

    abrirModal()
}


function abrirModal() {
    var tabela = document.getElementById('listadePacientes');
    var linhas = tabela.getElementsByTagName('td')
    for (let i = 0; i < linhas.length; i++) {
        elem = linhas[i];
        elem.addEventListener('click', function () {
            id = this.id

            var btn = document.getElementById(id);

            var modal = document.getElementById(id + 'modal');



            var span = document.getElementsByClassName("fecharModal")[0];

            btn.onclick = function () {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        })
    }
}

function format(d) {
    console.log(d);
    const resultadoSexo = MasculinoouFeminino(d.sexo);
    data_de_nascimento = d.data_nascimento;
    const divindodataeHora = quebraURL(data_de_nascimento, "T");
    const divididoadata = quebraURL(divindodataeHora[0], "-");
    const datadeNascimento = `${divididoadata[2]} /${divididoadata[1]}/${divididoadata[0]} `;


    vinculado = arredondarHora(d.checkin_unidade)
    desvinculado = arredondarHora(d.checkout_unidade)
    inicio_do_exame = arredondarHora(d.checkin_exame)
    tempo_espera = d.tempo_vinculado.substring(0, 5)
    tempo_total = d.tempo_vinculado.substring(0, 5)

    d.tempo_decorrido_do_exame === undefined ? tempo_decorrido_do_exame = "" : tempo_decorrido_do_exame = d.tempo_decorrido_do_exame.substring(0, 5);

    if (d.checkout_exame) {
        checkout_exame = arredondarHora(d.checkout_exame);
        tempo_decorrido_do_exame = diferenca_de_hora(inicio_do_exame, checkout_exame) + "<span class='sem_negrito-informacoes'> (Finalizado)</span> ";
    } else {
        checkout_exame = "";
    }

    if (desvinculado) {
        tempo_total = diferenca_de_hora(vinculado, desvinculado);
    }



    return '<div class="row add_info">'
        + '<div class=" col s4">'
        + '<div class=" col s11 offset-s1">'
        + '<p> Nome do Paciente:<span class="negrito-informacoes"> ' + d.paciente + '</span></p>'
        + '<p> Atividade:<span class="negrito-informacoes"> ' + d.atividade + '</span></p>'
        + '<p> Descrição do Exame:<span class="negrito-informacoes"> ' + d.descricao_exame + '</span></p>'
        + '<p> Médico:<span class="negrito-informacoes"> ' + d.nome_medico + ' </span>CRM:<span class="negrito-informacoes"> ' + d.crm + ' </span></p>'
        + '</div> '
        + '</div> '
        + '<div class="col s3 ">'
        + '<p> IH:<span class="negrito-informacoes"> ' + d.IH + '</span></p>'
        + '<p> Sexo:<span class="negrito-informacoes"> ' + resultadoSexo + '</span></p>'
        + '<p> Data de Nascimento:<span class="negrito-informacoes"> ' + datadeNascimento + '</span></p>'
        + '</div> '
        + '<div class="col s3">'
        + '<p> Exame: (Inicio: <span class="negrito-informacoes">' + inicio_do_exame + '</span> / Fim: <span class="negrito-informacoes">' + checkout_exame + '</span>)</p>'
        + '<p> Tempo de Sala:<span class="negrito-informacoes"> ' + tempo_decorrido_do_exame + '</span></p>'
        + '<p> Tempo em Espera:<span class="negrito-informacoes"> ' + tempo_espera + '</span></p>'
        + '</div>'
        + '<div class="col s2">'
        + '<p> Vinculado as:<span class="negrito-informacoes"> ' + vinculado + '</span></p>'
        + '<p> Desvinculado as:<span class="negrito-informacoes"> ' + desvinculado + '</span></p>'
        + '<p> Tempo Total de Vinculo:<span class="negrito-informacoes"> ' + tempo_total + '</span></p>'
        + '</div> '
        + '</div> '
}

function arredondarHora(campo) {
    //debugger
    campo = campo.substring(11, 16);
    return campo;
}

function diferenca_de_hora(hora_inicio, hora_fim) {
    novaHora = somaHora(hora_inicio, hora_fim, true);
    return novaHora
}


function somaHora(hrA, hrB, zerarHora) {
    if (hrA.length != 5 || hrB.length != 5) return "00:00";
    temp = 0;
    nova_h = 0;
    novo_m = 0;
    hora1 = hrA.substr(0, 2) * 1;
    hora2 = hrB.substr(0, 2) * 1;
    minu1 = hrA.substr(3, 2) * 1;
    minu2 = hrB.substr(3, 2) * 1;
    novo_m = minu2 - minu1;
    nova_h = hora2 - hora1;
    return Math.abs(nova_h) + 'h:' + Math.abs(novo_m) + 'm';
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
                "infoFiltered": "",
                "search": "Filtrar:",
                "paginate": {
                    "first": " ",
                    "next": ">",
                    "previous": "<",
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
                { 'data': "id_agendamento" },
                { 'data': "paciente" },
                { 'data': "hora" },
                { 'data': "atividade" },
                { 'data': "IH" },
                { 'data': "codigo_exame" },
                { 'data': "codigo_servico" },
                { 'data': "servico" },
                { 'data': "descricao_exame" },
                { 'data': "anotacao" },
                { 'data': "sexo" },
                { 'data': "data_nascimento" },
                { 'data': "nome_medico" },
                { 'data': "crm" },
                { 'data': "checkin_unidade" },
                { 'data': "checkout_unidade" },
                { 'data': "tempo_vinculado" },
                { 'data': "checkin_exame" },
                { 'data': "checkout_exame" },
                { 'data': "tempo_exame" },
                { 'data': "tempo_decorrido_do_exame" },
                { 'data': "status" },
                { 'data': "desc_status" },
                { 'data': "tempo_espera" },
                { 'data': "setor" },

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
            j = `< li > ${data[i].intervalo_de_horas} <span> (${data[i].qtd_por_hora} pacientes)</span></li > `;
            html += j;
        }

        if (data.length === 0) {
            fluxodetempo.innerHTML = "Não ha paciente";
            fluxodetempo.classList.add('p-msg');
        } else if (data.length === 1) {
            atribuiHtml(fluxodetempo, html);
            fluxodetempo.classList.add('fluxo-1');
        } else {
            fluxodetempo.innerHTML = "Lista de fluxo"
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
        datamysql = `${dataescolhida[2]} -${dataescolhida[1]} -${dataescolhida[0]} `;

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