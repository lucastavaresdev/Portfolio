<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
</body>

<?php 
    require ('./php/selectsJson.php');

    //coloca o select e pega o retorno
    $sql = 'select * from agendamento';
    $agendamento = query($sql);
    echo $agendamento;
    ?>

<script src="componentes/jquery.js"></script>
</script>

</html>