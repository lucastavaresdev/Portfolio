
$.ajax({
    dataType: "json", // tipo de arquivo
    url: 'php/selectsJson.php',// local do json
    data: 'linha', // linha
    success: function (data) {//se funcionar execulta essa função
        console.log(data);
            for (let i = 0; i < data.length; i++) {
            //console.log(data[i]['nm_paciente']);
                var table = document.querySelector("tbody");
                var row = table.insertRow(0);
                var id = row.insertCell(0);
                var nome = row.insertCell(1);
                id.innerHTML = data[i]['id'];
                nome.innerHTML = data[i]['nm_paciente'];
        }//fim loop
    }//fim funcao
});//fim do ajax



