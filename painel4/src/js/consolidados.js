

chamadaAjax('php/selectsJson.php?parametro=paciente_do_dia', alterarQtdPaciente);
chamadaAjax('php/selectsJson.php?parametro=procedimento_do_dia', alterarQtdProcedimentos);


//cards com dados totais
function alterarQtdPaciente(data, id_da_alteracao) {
    var id = pergarId("con_agendados");
    id.innerHTML = data[0].totaldePacientes;
}

function alterarQtdProcedimentos(data, id_da_alteracao) {
    var id = pergarId("con_procedimento");
    id.innerHTML = data[0].total_procedimento;
}


function pergarId(id_da_alteracao) {
    var id = document.getElementById(id_da_alteracao);
    return id;
}


//cards por setor

chamadaAjax('php/selectsJson.php?parametro=consolidado_cards_com_dados', setores);

function setores(data) {
    var local_do_card = document.getElementById('con_card_setores');
    var html = " ";


    for (i = 0; i < data.length; i++) {

        html += " <div class='col s12 l4' >"
            + "<div class='cards z-depth-3'>"
            + `<div class='col s4  l3 imagem-img${data[i].id}'></div>`
            + "<div class='col s8 l9 c_conteudo_card'>"
            + "<h1 class='c_titulo c_card-title'>" + data[i].setor + "</h1>"
            + "<p>Paciente:"
            + "<b class='right' id=pacientes" + data[i].id + ">" + data[i].agendamento_do_dia + "</b>"
            + "</p>"
            + "<p>Procedimentos:"
            + "<b class='right'>" + data[i].exames + "</b>"
            + "</p>"
            + "<p>Colaboradores:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Equipamentos:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<b class='c_status'>Status: <span id=status" + data[i].id + ">Indisponivel</b>"
            + "</div>"
            + "</div>"
            + "</div>";

    }
    local_do_card.innerHTML = html;
    for (let i = 0; i < data.length; i++) {
        var dado = parseInt(data[i].agendamento_do_dia);
        if(dado > 0){
             status(data[i].id)
        }
    }
}




function status(numero_do_setor) {
    
    var elem = document.getElementById(`status${numero_do_setor}`);

    elem.innerHTML = "Operando";

    
}