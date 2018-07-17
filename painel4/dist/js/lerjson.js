//chamadas ajax

chamadaAjax('php/selectsJson.php?parametro=lista_de_setores&setor', lista_de_setores);
chamadaAjax('php/selectsJson.php?parametro=lista_de_setores&setor', alteraTitulodoSetor);


(function () {
    var url_atual = window.location.href;

    var parametrosDaUrl = url_atual.split("?")[1];

    chamadaAjax(`php/selectsJson.php?parametro=qtd_por_setor&${parametrosDaUrl}`, agendamentos_do_dia_por_setor);
    chamadaAjax(`php/selectsJson.php?parametro=horario_de_maior_fluxo&${parametrosDaUrl}`, horarioComMaiorPacientes);
    chamadaAjax(`php/selectsJson.php?parametro=lista_do_setor&${parametrosDaUrl}`, lista_de_pacientes);
})();



function lista_de_pacientes(data) {
    var tbody = document.getElementById("listadePacientes");
    for (i = 0; i < data.length; i++) {
        var tr = document.createElement('tr');
        status = data[i].cod_cor_status;
        var cols =
            '<td>' + data[i].hora + '</td>'
            + '<td>' + data[i].atividade + '</td>'
            + '<td>' + data[i].IH + '</td>'
            + '<td>' + data[i].paciente + '</td>'
            + '<td>' + ' - ' + '</td>'
            + '<td>' + data[i].servico_atual + '</td>'
            + '<td>' + data[i].proximo_servico + '</td>'
            + `<td><div  class=" status-${data[i].cod_cor_status} center-status"></div></td>`
            + '<td>' + ' - ' + '</td>';
            var linha = tr.innerHTML = cols;
            tbody.innerHTML += linha;
        }
        data_table()
    }
    
    function data_table() {
        $(document).ready(function () {
            $('#tabela_pacientes').DataTable({
                "pagingType": "full_numbers",
                // "lengthMenu": [ 10, 25, 50, 75, 100],
                "language": {
                    "lengthMenu": " Quantidade por Pagina _MENU_  ",
                    "zeroRecords": "Sem agenda para hoje",
                    "info": "Total de Pagina _PAGE_ of _PAGES_",
                    "infoEmpty": " dsadsa   ",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Filtrar:"
                }
            });
        });
    }



function horarioComMaiorPacientes(data) {
    var fluxodetempo = document.getElementById('fluxo');
    var html = " ";

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
    } else if (data.length === 2) {
        atribuiHtml(fluxodetempo, html);
        fluxodetempo.classList.add('fluxo-2');
    } else {
        fluxodetempo.innerHTML = "Ver Lista de Pacientes"
        fluxodetempo.classList.add('p-msg');
    }


}

function atribuiHtml(classouid, resultado) {
    classouid.innerHTML = resultado;
}


function alteraTitulodoSetor(data) {

    var titulo = document.getElementById('titulo_do_setor');

    var url_atual = window.location.href;
    var id_do_setor = url_atual.split("=")[1];

    // id_do_setor = parseInt(id_do_setor);
    for (i = 0; i < data.length; i++) {
        id_do_setor_banco = data[i].id;

        if (id_do_setor === id_do_setor_banco) {
            var nome_do_setor = data[i].setor;
            titulo.innerHTML = nome_do_setor;
            return;
        } else {
            titulo.innerHTML = 'Geral';
        }
    }
}




function lista_de_setores(data) {

    var elem_drop = document.getElementById('setores_lista');

    for (i = 0; i < data.length; i++) {

        var criaLI = document.createElement('li');
        var link = document.createElement('a');

        //add os elem
        link.textContent = data[i].setor;

        criaLI.setAttribute("class", "dropli");
        link.setAttribute("href", "?setor=" + data[i].id + "");

        //cria a estrutura e adiciona
        elem_drop.appendChild(criaLI);
        criaLI.appendChild(link);
    }

}



function agendamentos_do_dia_por_setor(data) {

    var html = "";

    elem = document.getElementById('agendimentos_do_dia');
    elem1 = document.getElementById('atendimentos_total');

    var qtd_agendamentos_do_dia = data[0].qtd_paciente;

    if (typeof qtd_agendamentos_do_dia === 0 || typeof qtd_agendamentos_do_dia === "qtd_agendamentos_do_dia") {
        console.log("verificar o json ou query nos selects.php");
    } else {
        html += '<span>' + qtd_agendamentos_do_dia + '</span>';
    }

    elem.innerHTML = html;
    elem1.innerHTML = html;
}




//chamada de funções

// function localizacao(data) {
//     tabela_localizacao(data, '#tabela_localizacao')
// }

// setInterval(function () {
//     chamadaAjax('php/selectsJson.php?parametro=setor', localizacao);
//     chamadaAjax('php/selectsJson.php?parametro=localizacao', tabela);
// },1000);


// function tabela_localizacao(data, id_da_tabela, html) {
//     var html = "";

//     for (let i = 0; i < data.length; i++) {
//         if(data[i].qtdsala === "" || data[i].qtdsala === null){
//             setor = 0;
//         }else{
//             setor = data[i].qtdsala
//         }





//         html += '<tr class="linha_pacientes"><td class="nomesetor">' + data[i].nome + '</td><td class="status qtdpaciente">' + setor + '</td>';
//     }

//     document.getElementById("tabela_localizacao").innerHTML = html;
//     var status = document.querySelectorAll(".status_localizacao");
//     coresStatus(status);


// }




// //rastrio de pacientes
// function tabela(data) {
//     var html = "";
//     if (data.length === 0) {
//         html += '<tr><td colspan= "2">Não ha pacientes no momento</td></tr>';
//     } else {
//         for (let i = 0; i < data.length; i++) {
//             html += '<tr class="linha_pacientes"><td>' + data[i].paciente + '</td><td class="status"  class="' + data[i].setor + '">' + data[i].setor + '</td></tr>';
//         }
//     }
//     document.getElementById("tabela").innerHTML = html;
//     var status = document.querySelectorAll(".status");
//     // coresStatus(status);
// }



// function error() {
//     console.log('nao esta chamando a função')
// }



// //cores de status
// function coresStatus(status) {
//     for (i = 0; i < status.length; i++) {
//         valordoStatus = status[i].textContent;
//         if (valordoStatus == "Aguardando" || valordoStatus == "Disponivel") {
//             status[i].setAttribute('class', 'status disponivel');
//         } else if (valordoStatus == 'Indisponivel') {
//             status[i].setAttribute('class', 'status Indisponivel');
//         } else if (valordoStatus == 'finalizado') {
//             status[i].setAttribute('class', 'status finalizado');
//         } else if (valordoStatus == 'null') {
//             status[i].setAttribute('class', 'status nenhum');
//         } else {
//             status[i].setAttribute('class', 'status emuso');
//         }
//     }
// }


// //total de pacientes
// function totaldePaciente() {
//     chamadaAjax('php/selectsJson.php?parametro=qtdpacientes', exibirTotalPaciente);
// }

// function exibirTotalPaciente(data) {
//     var numTotal = document.querySelector('#totaldePacientes').textContent = data[0]['totpacientes'];;
// }
