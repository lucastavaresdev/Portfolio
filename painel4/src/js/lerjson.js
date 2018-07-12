



//chamadas ajax
//
chamadaAjax('php/selectsJson.php?parametro=agendamentos_do_dia_por_setor', agendamentos_do_dia_por_setor);

chamadaAjax('php/selectsJson.php?parametro=lista_de_setores', lista_de_setores);


function lista_de_setores(data) {
    var elem_drop = document.getElementById('setores_lista');
    
    for (i = 0; i < data.length; i++) {

        var criaLI = document.createElement('li');
        var link = document.createElement('a');

        //add os elem
        link.textContent = data[i].setor;

        criaLI.setAttribute("class", "dropli");
        link.setAttribute("href", "?setor=" + data[i].id + "" );

        //cria a estrutura e adiciona
        elem_drop.appendChild(criaLI);
        criaLI.appendChild(link);
    }

    console.log(elem_drop);
    console.log(data);

}



function agendamentos_do_dia_por_setor(data) {
    var html = "";
    elem = document.getElementById('agendimentos_do_dia');
    var qtd_agendamentos_do_dia = data[0].agendamento_do_dia;
    if (typeof qtd_agendamentos_do_dia === 0 || typeof qtd_agendamentos_do_dia === "qtd_agendamentos_do_dia") {
        console.log("verificar o json ou query nos selects.php");
    } else {
        html += '<span>' + qtd_agendamentos_do_dia + '</span>';
    }
    elem.innerHTML = html;
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
