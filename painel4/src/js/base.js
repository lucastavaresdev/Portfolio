chamadaAjax('php/selectsJson.php?parametro=lista_dos_setores&setor', lista_de_setores);
chamadaAjax('php/selectsJson.php?parametro=lista_dos_setores&setor', alteraTitulodoSetor);


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

function alteraTitulodoSetor(data) {

    var titulo = document.getElementById('titulo_do_setor');
    var titulo_aba = document.getElementById('aba_nome_setor');

    var url_atual = window.location.href;
    console.log(url_atual);


    var url = quebraURL(url_atual, '?');
    var paramentros = quebraURL(url[1], '&');
    //debugger
    var numeroSetor = quebraURL(paramentros[0], '=');
    var id_do_setor = numeroSetor[1];




    // let url = window.location.href

    // id_do_setor = parseInt(id_do_setor);
    for (i = 0; i < data.length; i++) {
        id_do_setor_banco = data[i].id;

        if (id_do_setor === id_do_setor_banco) {
            var nome_do_setor = data[i].setor;
            if (titulo_aba) {
                titulo.innerHTML = nome_do_setor;
                titulo_aba.innerHTML = nome_do_setor;
            } else {
                titulo.innerHTML = nome_do_setor;
            }
            return;
        } else {
            if (titulo_aba) {
                titulo.innerHTML = '-';
                titulo_aba.innerHTML = '-';
            } else {
                titulo.innerHTML = '   ';
            }
        }
    }
}

function quebraURL(URL, caractere) {
    url_dividida = URL.split(caractere);
    console.log(url_dividida);
    return url_dividida
}