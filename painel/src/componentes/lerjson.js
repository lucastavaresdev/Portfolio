

//chamada de funções
function localizacao(data) {
    tabela_localizacao(data, '#tabela_localizacao')
}

function tabela_localizacao(data, id_da_tabela) {
    for (let i = 0; i < data.length; i++) {
        $(id_da_tabela).append('<tr><td >' + data[i]['localizacao'] + '</td><td class="status_localizacao">' + data[i]['status_localizacao'] +
            '</td><td><p>Paciente:<span class="dados-emuso" id="nome"> Vinícius Cardoso Rocha</span></p><br><p>Data de Nascimento:<span class="dados-emuso">25/05/1980</span></p><br><p>Procedimento:<span class="dados-emuso">Consulta</span></p><br><p>Tempo:<span class="dados-emuso">1:31</span></p><br></td></tr>');
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
    document.getElementById("tabela_localizacao").innerHTML = ""
    chamadaAjax('php/selectsJson.php?parametro=localizacao', localizacao);    
}, 3000);

setInterval(function atualiza() {
    document.getElementById("tabela").innerHTML = ""
    chamadaAjax('php/selectsJson.php?parametro=agendamento', tabela);
}, 10000);



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
    chamadaAjax('php/selectsJson.php?parametro=qtdpacientes', exibirTotalPaciente);
}

function exibirTotalPaciente(data) {
    var numTotal = document.querySelector('#totaldePacientes').textContent = data[0]['totpacientes'];;
}


//chamadaAjax('php/selectsJson.php?parametro=dados_pacientes', dadosPaciente);




