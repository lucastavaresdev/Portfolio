var refereciaServidor = 'http://192.168.1.102/z/login.php'

$(document).ready(function () {

    $('#errolog').hide(); //Esconde o elemento com id errolog

    $('#formlogin').submit(function () { 	//Ao submeter formulário

        var usuario = $('#usuario').val();	//Pega valor do campo email
        var senha = $('#senha').val();	//Pega valor do campo senha

        $.ajax({			//Função AJAX
            url: refereciaServidor,			//Arquivo php
            type: "post",				//Método de envio
            data: "usuario=" + usuario + "&senha=" + senha,	//Dados
            success: function (result) {			//Sucesso no AJAX
                if (result == 1) {
                    location.href='admin.html';
                }else if(result == 2){
                    location.href='home.html';	//Redireciona;
                }else {
                    $('#errolog').show();		//Informa o erro
                }
            }
        })
        return false;	//Evita que a página seja atualizada
    })
})
