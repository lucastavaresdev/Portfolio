

function listapacientes() {
    $.ajax({
        dataType: "json", // tipo de arquivo
        url: 'php/selectsJson.php',// local do json
        data: 'linha', // linha
        success: function (data) {//se funcionar execulta essa função
            for (let i = 0; i < data.length; i++) {
                $('#tabela').append('<tr id="linha"><td>' + data[i]['nm_paciente']);
                // $('#tabela').append('<tr id="linha"><td>' + data[i]['id'] + '</td><td>' + data[i]['nm_paciente'] + '</td><td>');
            }//fim loop
        }//fim funcao
    });//fim do ajax
}

setInterval(function atualiza() {
    document.getElementById("tabela").innerHTML=""
    listapacientes();
}, 100000);

listapacientes();
