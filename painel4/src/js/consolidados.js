

chamadaAjax('php/selectsJson.php?parametro=paciente_do_dia', alterar);

function alterar(data, id_da_alteracao){
    exibir_numero(data, "con_agendados")
}


function exibir_numero(data, id_da_alteracao){
    var id = document.getElementById(id_da_alteracao);
    
    id.innerHTML = data[0].totaldePacientes;
    
}



