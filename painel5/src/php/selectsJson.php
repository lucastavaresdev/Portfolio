<?php

require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO

if(isset($_GET['setor'])){
  $setor =$_GET['setor'];//PARAMETRO
}else{
  $setor = "";//PARAMETRO
}


//selects dashboard

//drop com a lista dos setores
$select_dos_setores = "SELECT id, nome as nome_setor, sigla FROM setores";//lista de serviços
$altera_titulo_do_setor = "SELECT id, nome as nome_setor, sigla FROM setores where id = $setor";//lista de serviços






//parametro passado
if ($parametro === 'setores'){
  geraJson($select_dos_setores, $conexao);
}else if($parametro = 'alteraTitulo'){
  geraJson($altera_titulo_do_setor, $conexao);

}


 

//retorna e exibe o json
  function geraJson($select, $conexao){
    $sql = $select;
    $stmt = $conexao->prepare( $sql );
    $stmt->execute();
    $result = $stmt->fetchAll( PDO::FETCH_ASSOC );
    $novo = array();
      foreach ($result as $key => $value) {
        foreach ($value as $k => $v) {
          $novo[$key][$k] = $v;
        }
      }
    $json = json_encode($novo);
   echo $json; 
  }
?>




