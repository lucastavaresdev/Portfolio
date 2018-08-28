

chamadaAjax('php/selectsJson.php?parametro=total_de_pacientes_de_todos_os_setores', total_de_pacientes_de_todos_os_setores);
chamadaAjax('php/selectsJson.php?parametro=total_de_procedimentos_de_todos_os_setores', total_de_procedimentos_de_todos_os_setores);
chamadaAjax('php/selectsJson.php?parametro=card_com_informacoes_do_setores', card_com_informacoes_do_setores);

chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=1', Em_atendimento_em_outro_serviço);
chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=2', aguardando);
chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=3', emAtendimento);
chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=4', atendido);
chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=5', naoiniciado);
chamadaAjax('php/selectsJson.php?parametro=qtd_de_status_todas_os_setores_por_procedimento&status=6', fastpass);


//total_de_pacientes_de_todos_os_setores
function total_de_pacientes_de_todos_os_setores(data, id_da_alteracao) {
    var id = pergarId("con_agendados");
    id.innerHTML = data[0].totaldePacientes;
}

//total_de_procedimento_de_todos_os_setores
function total_de_procedimentos_de_todos_os_setores(data, id_da_alteracao) {
    var id = pergarId("con_procedimento");
    id.innerHTML = data[0].total_procedimento;
}


//Não Iniciado
function naoiniciado(data) {
    var id = pergarId("con_naoIniciado");
    id.innerHTML = data[0].status_por_procedimentos;
}

//Não Iniciado
function aguardando(data) {
    var id = pergarId("con_aguardando");
    id.innerHTML = data[0].status_por_procedimentos;
}

function atendido(data) {
    var id = pergarId("con_atendido");
    id.innerHTML = data[0].status_por_procedimentos;
}

function fastpass(data) {
    var id = pergarId("con_fastpass");
    id.innerHTML = data[0].status_por_procedimentos;
}
function emAtendimento(data) {
    var id = pergarId("con_emAtendimento");
    id.innerHTML = data[0].status_por_procedimentos;
}

function Em_atendimento_em_outro_serviço(data) {
    var id = pergarId("con_outroservico");
    id.innerHTML = data[0].status_por_procedimentos;
}


function pergarId(id_da_alteracao) {
    var id = document.getElementById(id_da_alteracao);
    return id;
}


//cards por setor

function card_com_informacoes_do_setores(data) {
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
            + "<p>Outro serviço:"
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
            + "<p>Fastpass:"
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