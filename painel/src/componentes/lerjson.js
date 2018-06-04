

//chamada de funções





function localizacao(data) {
    tabela_localizacao(data, '#tabela_localizacao')
}

function tabela_localizacao(data, id_da_tabela) {
        for (let i = 0; i < data.length; i++) {
            $(id_da_tabela).append('<tr><td >' + data[i]['localizacao'] + '</td><td class="status_localizacao">' + data[i]['status_localizacao'] + '</td><td>descricao</td></tr>');
        }//fim loop
        var status = document.querySelectorAll(".status_localizacao");
        coresStatus(status);
}





function error() {
    console.log('nao esta chamando a função')
}


//tabela pacientes
function tabela(data) {
    if (data == "") {
        $('#tabela').append('<tr class="linha_pacientes"><td>' + "Não ha registros <td>");
    } else {
        for (let i = 0; i < data.length; i++) {
            $('#tabela').append('<tr class="linha_pacientes"><td>' + data[i]['nm_paciente'] + '</td><td class="status"  class="' + data[i]["status"] + '">' + data[i]['status'] + '</td>');
        }//fim loop
        var status = document.querySelectorAll(".status");

        coresStatus(status);
        totaldePaciente();
    }
}


chamadaAjax('php/selectsJson.php?parametro=agendamento', tabela);
chamadaAjax('php/selectsJson.php?parametro=localizacao', localizacao);


//atualiza a tabelas
setInterval(function atualiza() {
    document.getElementById("tabela").innerHTML = ""
    chamadaAjax('php/selectsJson.php?parametro=agendamento', tabela);
    document.getElementById("tabela_localizacao").innerHTML = ""
    chamadaAjax('php/selectsJson.php?parametro=localizacao', localizacao);
}, 3000);


//cores de status
function coresStatus(status) {
    for (i = 0; i < status.length; i++) {
        valordoStatus = status[i].textContent;
        if (valordoStatus == "Aguardando" || valordoStatus == "Disponivel") {
            status[i].setAttribute('class', 'status disponivel');
        } else if (valordoStatus == 'Indisponivel') {
            status[i].setAttribute('class', 'status Indisponivel');
        } else if (valordoStatus == 'finalizado') {
            status[i].setAttribute('class', 'status finalizado');
        } else if (valordoStatus == 'null') {
            status[i].setAttribute('class', 'status nenhum');
        } else {
            status[i].setAttribute('class', 'status emuso');
        }
    }
}


//total de pacientes
function totaldePaciente() {
    var qtdPacientes = contarlinhastabela('.status');
    numerodePacientes = document.getElementById("totaldePacientes");
    numerodePacientes.textContent = qtdPacientes;
}

//conta as linhas da tabela para dar o valor total
function contarlinhastabela(nomedaclasse) {
    var status = document.querySelectorAll(nomedaclasse);
    resultado = 0;
    for (i = 0; i < status.length; i++) {
        resultado = resultado + 1;
    }
    return resultado;
}