
$.ajax({
    dataType: "json", // tipo de arquivo
    url: 'php/selectsJson.php',// local do json
    data: 'linha', // linha
    success: function (data) {//se funcionar execulta essa função
        console.log(data);
        for (let i = 0; i < data.length; i++) {
            console.log(data[i]['id']);
            console.log(data[i]['nm_paciente']);
        }//fim loop
    }//fim funcao
});//fim do ajax



