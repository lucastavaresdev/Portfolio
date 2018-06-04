function listapacientes() {
    $.ajax({
        dataType: "json", // tipo de arquivo
        url: 'php/selectsJson.php',// local do json
        data: 'linha', // linha
        success: function (data) {//se funcionar execulta essa função
            if (data == "") {
                $('#tabela').append('<tr class="linha_pacientes"><td>' + "Não ha registros <td>");
            } else {
                for (let i = 0; i < data.length; i++) {
                    $('#tabela').append('<tr class="linha_pacientes"><td>' + data[i]['nm_paciente'] + '</td><td class="status"  class="' + data[i]["status"] + '">' + data[i]['status'] + '</td>');
                    // $('#tabela').append('<tr id="linha"><td>' + data[i]['id'] + '</td><td>' + data[i]['nm_paciente'] + '</td><td>');

                }//fim loop
                coresStatus();
                totaldePaciente();
            }
        }//fim funcao
    });//fim do ajax
}

setInterval(function atualiza() {
    document.getElementById("tabela").innerHTML = ""
    listapacientes();
}, 100000);

listapacientes();


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








function totaldePaciente(){
    var qtdPacientes  = contarlinhastabela('.status');
    numerodePacientes = document.getElementById("totaldePacientes");
    numerodePacientes.textContent = qtdPacientes;
    console.log(qtdPacientes);
}


function contarlinhastabela(nomedaclasse) {
    var status = document.querySelectorAll(nomedaclasse);
    resultado = 0;
    for (i = 0; i < status.length; i++) {
        resultado = resultado + 1;
    }
    return resultado;
}