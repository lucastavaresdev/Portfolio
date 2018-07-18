<?php


require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO


$dados_dos_pacientes_para_os_cards = "SELECT * FROM login.lista_de_pacientes;";


//parametro passado
if($parametro === 'agendamento'){
   geraJson($dados_dos_pacientes_para_os_cards , $conexao );
}else{
  echo "paramenro errado";
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
        $novo[$key][$k] = utf8_encode($v);//se der error de utf-8 retira utf8_encode($v) e coloca $v
      }
    }
    
    $json = json_encode($novo);
    echo $json; 
   

  }
?>




