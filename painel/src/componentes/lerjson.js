

//chamada de funções
   chamadaAjax('php/selectsJson.php?parametro=agendamento', tabela);




//ajax


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
        coresStatus();
        totaldePaciente();
    }
}



//atualiza a tabelas
setInterval(function atualiza() {
    document.getElementById("tabela").innerHTML = ""
    listapacientes();
}, 300000);


//cores de status
function coresStatus() {
    var status = document.querySelectorAll(".status");
    for (i = 0; i < status.length; i++) {
        valordoStatus = status[i].textContent;
        if (valordoStatus == "Aguardando") {
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