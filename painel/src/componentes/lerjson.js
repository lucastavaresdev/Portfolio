
$.ajax({
    dataType: "json", // tipo de arquivo
    url: 'php/selectsJson.php',// local do json
    data: 'linha', // linha
    success: function(data){//se funcionar execulta essa função
        console.log(data);
    }
  });



