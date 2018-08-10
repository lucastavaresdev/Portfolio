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
$lista_de_pacientes = "SELECT *FROM atendimento_paciente_robo 
                                    where str_to_date(DT_ENTRADA, '%d/%m/%Y') = '2018-08-01' and CD_ESTABELECIMENTO = 22 order by dt_entrada";

$agendamentos_quantidade = "SELECT Count(distinct(NM_PACIENTE)) as agendamentos_quantidade FROM atendimento_paciente_robo
                               where str_to_date(DT_ENTRADA, '%d/%m/%Y') = '2018-08-01' and CD_ESTABELECIMENTO = 22 order by dt_entrada;";
                                     
                                
//Grid
$grid = " SELECT 
                        a.NM_PACIENTE AS NM_PACIENTE,
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Análises Clínicas 11º andar') THEN 1
                        END)) AS 'Análises Clínicas 11º andar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Orientação Fisioterapica') THEN 1
                        END)) AS 'Orientação Fisioterapica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ecocardiograma') THEN 1
                        END)) AS 'Ecocardiograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Abdomen') THEN 1
                        END)) AS 'Ultrassonografia Abdomen',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Clinico Geral') THEN 1
                        END)) AS 'Avaliação Clinico Geral',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Teste Ergométrico') THEN 1
                        END)) AS 'Teste Ergométrico',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Raio X') THEN 1
                        END)) AS 'Raio X',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Oftalmológica') THEN 1
                        END)) AS 'Avaliação Oftalmológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Dermatológica') THEN 1
                        END)) AS 'Avaliação Dermatológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Cardiológica') THEN 1
                        END)) AS 'Avaliação Cardiológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Prova de Função Pulmonar') THEN 1
                        END)) AS 'Prova de Função Pulmonar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Próstata') THEN 1
                        END)) AS 'Ultrassonografia Próstata',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Urologica') THEN 1
                        END)) AS 'Avaliação Urologica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Mental Care') THEN 1
                        END)) AS 'Avaliação Mental Care',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Bioimpedanciometria') THEN 1
                        END)) AS 'Bioimpedanciometria',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Gastro-Procto') THEN 1
                        END)) AS 'Avaliação Gastro-Procto',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Densitometria Óssea') THEN 1
                        END)) AS 'Densitometria Óssea',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Audiometria') THEN 1
                        END)) AS 'Audiometria',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Nutricional') THEN 1
                        END)) AS 'Avaliação Nutricional',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Odontológica') THEN 1
                        END)) AS 'Avaliação Odontológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Otorrinolaringologia') THEN 1
                        END)) AS 'Avaliação Otorrinolaringologia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Ginecológica') THEN 1
                        END)) AS 'Avaliação Ginecológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Colpocitologia') THEN 1
                        END)) AS 'Colpocitologia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Transvaginal') THEN 1
                        END)) AS 'Ultrassonografia Transvaginal',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Mamas') THEN 1
                        END)) AS 'Ultrassonografia Mamas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Complemento Mamografia') THEN 1
                        END)) AS 'Complemento Mamografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Mamografia') THEN 1
                        END)) AS 'Mamografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Colposcopia') THEN 1
                        END)) AS 'Colposcopia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Eletrocardiograma') THEN 1
                        END)) AS 'Eletrocardiograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Doppler') THEN 1
                        END)) AS 'Ultrassonografia Doppler',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Análises Clinicas 10º andar') THEN 1
                        END)) AS 'Análises Clinicas 10º andar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Pelvica') THEN 1
                        END)) AS 'Ultrassonografia Pelvica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Física') THEN 1
                        END)) AS 'Avaliação Física',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Tireoide') THEN 1
                        END)) AS 'Ultrassonografia Tireoide',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Polissonografia') THEN 1
                        END)) AS 'Polissonografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação do Sono') THEN 1
                        END)) AS 'Avaliação do Sono',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Eletroencefalograma') THEN 1
                        END)) AS 'Eletroencefalograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Pediatrica') THEN 1
                        END)) AS 'Avaliação Pediatrica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Fisioterápica') THEN 1
                        END)) AS 'Avaliação Fisioterápica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Aparelho Urinário') THEN 1
                        END)) AS 'Ultrassonografia Aparelho Urinário',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Acuidade Visual') THEN 1
                        END)) AS 'Acuidade Visual',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Análises Clínicas') THEN 1
                        END)) AS 'Análises Clínicas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Micológico') THEN 1
                        END)) AS 'Micológico',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'ULTRASSONOGRAFIA') THEN 1
                        END)) AS 'ULTRASSONOGRAFIA',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Fisiológica Laboratorial - Ergoespiro') THEN 1
                        END)) AS 'Avaliação Fisiológica Laboratorial - Ergoespiro',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Médica (Clinica Geral e Esforço)') THEN 1
                        END)) AS 'Avaliação Médica (Clinica Geral e Esforço)',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Tomografia') THEN 1
                        END)) AS 'Tomografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Endoscopia/Colonoscopia') THEN 1
                        END)) AS 'Endoscopia/Colonoscopia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Peso e Altura') THEN 1
                        END)) AS 'Peso e Altura',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Pressao Arterial') THEN 1
                        END)) AS 'Pressao Arterial',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliacao Psicossocial') THEN 1
                        END)) AS 'Avaliacao Psicossocial',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação de Equilibrio') THEN 1
                        END)) AS 'Avaliação de Equilibrio',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Composição Corporal - Dobras Cutaneas') THEN 1
                        END)) AS 'Avaliação Composição Corporal - Dobras Cutaneas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Neuromuscular') THEN 1
                        END)) AS 'Avaliação Neuromuscular'
                    FROM
                        ((atendimentos a
                        LEFT JOIN checklist ch ON (((ch.atendimento = a.NR_ATENDIMENTO)
                            AND (ch.status > 2))))
                        LEFT JOIN etapas e ON ((ch.etapa = e.id)))
                    WHERE
                        (a.DT_ENTRADA = '2018-01-08 06:00:00') 
                    GROUP BY a.NR_ATENDIMENTO
                ";

/*
 * ----------------------Comparação para gerar o json----------------------
 */

$select = $$parametro; //transforma o parametro em uma variavel

comparação($parametro, $conexao, $select); //chama a função

function comparação($parametro, $conexao, $select)
{
    $parametro == $parametro ? geraJson($select, $conexao) : 'Erro de paramentro';
}

/*
 * ----------------------Retorno que sera o json----------------------
 */

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
