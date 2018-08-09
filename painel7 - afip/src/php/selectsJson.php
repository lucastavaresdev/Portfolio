<?php
require('./conexao.php');// REQUSIÇÃO DO BANCO

$parametro =$_GET['parametro'];//PARAMETRO

if (isset($_GET['setor'])) {
    $setor =$_GET['setor'];//PARAMETRO
} else {
    $setor = "";//PARAMETRO
}

/*
 * ------------------------------Selects--------------------------------------
 */

//Dashboard
$lista_de_pacientes = "SELECT * FROM afip.atendimento_paciente_robo;";


/*
 * ----------------------Comparação para gerar o json----------------------
 */

$select = $$parametro; //transforma o parametro em uma variavel

comparação($parametro, $conexao, $select); //chama a função


function comparação($parametro, $conexao, $select)
{
    $parametro == $parametro ? geraJson($select, $conexao) : 'Erro de paramentro';
}


//retorna e exibe o json
  function geraJson($select, $conexao)
  {
      // var_dump($select);
      $sql = $select;
      $stmt = $conexao->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $novo = array();
      foreach ($result as $key => $value) {
          foreach ($value as $k => $v) {
              $novo[$key][$k] = $v;
          }
      }
      $json = json_encode($novo);
      echo $json;
  }
