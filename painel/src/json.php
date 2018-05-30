<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<table>
<table border="1" width="500">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Nome</th>
		        </tr>
		    </thead>
		    <tbody id="tabela">
		    </tbody>
		</table>

<div class="dados"></div>
<body>
</body>

<?php 

    require('php/selectsJson.php');


    $sql = 'SELECT * FROM agendamento';

    $agendamento  = query($sql);
    echo $agendamento;
    
    
    $sql = 'SELECT * FROM teste';
    $teste = query($sql);

    echo $teste;

?>


<script src="componentes/jquery.js"></script>
<script>


    
function tabela(urlJson ){
    $(document).ready(function(){
        $('#tabela').empty(); //Limpando a tabela
        $.ajax({
            type:'post',		//Definimos o método HTTP usado
            dataType: 'json',	//Definimos o tipo de retorno
            url: urlJson ,//Definindo o arquivo onde serão buscados os dados
            success: function(result){
                for(var i=0;result.length>i;i++){
                    $('#tabela').append('<tr><td>'+result[i].id+'</td><td>'+result[i].nm_paciente+'</td>');
                }
            }
        });
    });
}

var urlJson = './php/selectsJson.php';
tabela(urlJson)






</script>

</html>