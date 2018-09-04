



chamadaAjax('php/selectsJson.php?parametro=total_de_pacientes_de_todos_os_setores', total_de_pacientes_de_todos_os_setores);
chamadaAjax('php/selectsJson.php?parametro=total_de_procedimentos_de_todos_os_setores', total_de_procedimentos_de_todos_os_setores);
chamadaAjax('php/selectsJson.php?parametro=card_com_informacoes_do_setores', card_com_informacoes_do_setores);
chamadaAjax('php/selectsJson.php?parametro=chekin_e_checkout', checkin_checkout);
chamadaAjax('php/selectsJson.php?parametro=status_consolidado', status_consolidado);

function pergarId(id_da_alteracao) {
    var id = document.getElementById(id_da_alteracao);
    return id;
}


/*
 *---------------------Cards superior 1 row---------------------------
 */

//total_de_pacientes_de_todos_os_setores
function total_de_pacientes_de_todos_os_setores(data, id_da_alteracao) {
    var id = pergarId("con_agendados");
    id.innerHTML = data[0].totaldePacientes;
}

//total_de_procedimento_de_todos_os_setores
function total_de_procedimentos_de_todos_os_setores(data) {
    var id = pergarId("con_procedimento");
    id.innerHTML = data[0].total_procedimento;
}


//Checkin Checkout
function checkin_checkout(data) {
    var id_checkin = pergarId("com_checkin");
    var id_checkout = pergarId("com_checkout");
    id_checkin.innerHTML = data[0].checkin;
    id_checkout.innerHTML = data[0].checkout;
}


/*
 *---------------------Cards superior 2 row---------------------------
 */

function status_consolidado(data) {
    var id_con_aguardando = pergarId("con_aguardando");
    var id_emAtendimento = pergarId("con_emAtendimento");
    var id_con_cancelado = pergarId("con_cancelado");
    var id_con_finalizado = pergarId("con_finalizado");
    id_con_aguardando.innerHTML = data[0].aguardando;
    id_emAtendimento.innerHTML = data[0].andamento;
    id_con_cancelado.innerHTML = data[0].cancelado;
    id_con_finalizado.innerHTML = data[0].finalizado;
}


/*
 *---------Cards Inferiores com informações dos setores----------------
 */


//cards por setor
function card_com_informacoes_do_setores(data) {
    console.log("consolidado");
    console.log(data);
    var local_do_card = document.getElementById('con_card_setores');
    var html = " ";

    for (i = 0; i < data.length; i++) {

        html += " <div class='col s12 l4' >"
            + `<div class='cards z-depth-3'><a href="./dashboard.php?setor=${data[i].id}">`
            + `<div class='col s4  l3 imagem-img${data[i].id}'></div>`
            + "<div class='col s8 l9 c_conteudo_card'>"
            + "<h1 class='c_titulo c_card-title'>" + data[i].setor + "</h1>"
            + "<p>Paciente:"
            + "<b class='right' id=pacientes" + data[i].id + ">" + data[i].agendamento_do_dia + "</b>"
            + "</p>"
            + "<p>Procedimentos:"
            + "<b class='right'>" + data[i].exames + "</b>"
            + "</p>"
            + "<p>Não iniciou:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Aguardando:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Em atendimento:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Atendido:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Cancelados:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<p>Finalizados:"
            + "<b class='right'> - </b>"
            + "</p>"
            + "<b class='c_status'>Status: <span id=status" + data[i].id + ">Indisponivel</b>"
            + "</div>"
            + "</div></a>"
            + "</div>";

    }
    local_do_card.innerHTML = html;
    for (let i = 0; i < data.length; i++) {
        var dado = parseInt(data[i].agendamento_do_dia);
        if (dado > 0) {
            status(data[i].id)
        }
    }
}




function status(numero_do_setor) {
    var elem = document.getElementById(`status${numero_do_setor}`);
    elem.innerHTML = "Operando";
}



dataatual()

function dataatual() {
    now = new Date();
    mes = now.getMonth() + 1;
    mes = mes < 10 ? '0' + mes : mes;
    data = now.getDate() + "/" + mes + "/" + now.getFullYear();
    document.getElementById('con_data_atual').innerHTML = data;
}