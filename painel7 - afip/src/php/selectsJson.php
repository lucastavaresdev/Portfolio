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
                            WHEN (e.ds_etapa = 'Análises Clínicas 11º andar') THEN ch.status
                        END)) AS 'Analises_Clinicas_11_andar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Orientação Fisioterapica') THEN ch.status
                        END)) AS 'Orientação_Fisioterapica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ecocardiograma') THEN ch.status
                        END)) AS 'Ecocardiograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Abdomen') THEN ch.status
                        END)) AS 'Ultrassonografia_Abdomen',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Clinico Geral') THEN ch.status
                        END)) AS 'Avaliação_Clinico_Geral',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Teste Ergométrico') THEN ch.status
                        END)) AS 'Teste_Ergométrico',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Raio X') THEN ch.status
                        END)) AS 'Raio_X',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Oftalmológica') THEN ch.status
                        END)) AS 'Avaliação_Oftalmológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Dermatológica') THEN ch.status
                        END)) AS 'Avaliação_Dermatológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Cardiológica') THEN ch.status
                        END)) AS 'Avaliação_Cardiológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Prova de Função Pulmonar') THEN ch.status
                        END)) AS 'Prova_de_Função_Pulmonar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Próstata') THEN ch.status
                        END)) AS 'Ultrassonografia_Próstata',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Urologica') THEN ch.status
                        END)) AS 'Avaliação_Urologica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Mental Care') THEN ch.status
                        END)) AS 'Avaliação_Mental_Care',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Bioimpedanciometria') THEN ch.status
                        END)) AS 'Bioimpedanciometria',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Gastro-Procto') THEN ch.status
                        END)) AS 'Avaliação_Gastro_Procto',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Densitometria Óssea') THEN ch.status
                        END)) AS 'Densitometria_Óssea',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Audiometria') THEN ch.status
                        END)) AS 'Audiometria',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Nutricional') THEN ch.status
                        END)) AS 'Avaliação_Nutricional',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Odontológica') THEN ch.status
                        END)) AS 'Avaliação_Odontológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Otorrinolaringologia') THEN ch.status
                        END)) AS 'Avaliação_Otorrinolaringologia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Ginecológica') THEN ch.status
                        END)) AS 'Avaliação_Ginecológica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Colpocitologia') THEN ch.status
                        END)) AS 'Colpocitologia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Transvaginal') THEN ch.status
                        END)) AS 'Ultrassonografia_Transvaginal',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Mamas') THEN ch.status
                        END)) AS 'Ultrassonografia_Mamas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Complemento Mamografia') THEN ch.status
                        END)) AS 'Complemento_Mamografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Mamografia') THEN ch.status
                        END)) AS 'Mamografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Colposcopia') THEN ch.status
                        END)) AS 'Colposcopia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Eletrocardiograma') THEN ch.status
                        END)) AS 'Eletrocardiograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Doppler') THEN ch.status
                        END)) AS 'Ultrassonografia_Doppler',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Análises Clinicas 10º andar') THEN ch.status
                        END)) AS 'Análises_Clinicas_10_andar',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Pelvica') THEN ch.status
                        END)) AS 'Ultrassonografia_Pelvica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Física') THEN ch.status
                        END)) AS 'Avaliação_Física',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Tireoide') THEN ch.status
                        END)) AS 'Ultrassonografia_Tireoide',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Polissonografia') THEN ch.status
                        END)) AS 'Polissonografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação do Sono') THEN ch.status
                        END)) AS 'Avaliação_do_Sono',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Eletroencefalograma') THEN ch.status
                        END)) AS 'Eletroencefalograma',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Pediatrica') THEN ch.status
                        END)) AS 'Avaliação_Pediatrica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Fisioterápica') THEN ch.status
                        END)) AS 'Avaliação_Fisioterápica',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Ultrassonografia Aparelho Urinário') THEN ch.status
                        END)) AS 'Ultrassonografia_Aparelho_Urinário',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Acuidade Visual') THEN ch.status
                        END)) AS 'Acuidade_Visual',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Análises Clínicas') THEN ch.status
                        END)) AS 'Análises_Clínicas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Micológico') THEN ch.status
                        END)) AS 'Micológico',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'ULTRASSONOGRAFIA') THEN ch.status
                        END)) AS 'ULTRASSONOGRAFIA',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Fisiológica Laboratorial - Ergoespiro') THEN ch.status
                        END)) AS 'Avaliação_Fisiológica_Laboratorial_Ergoespiro',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Médica (Clinica Geral e Esforço)') THEN ch.status
                        END)) AS 'Avaliação_Médica_Clinica_Geral_e_Esforço',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Tomografia') THEN ch.status
                        END)) AS 'Tomografia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Endoscopia/Colonoscopia') THEN ch.status
                        END)) AS 'Endoscopia_Colonoscopia',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Peso e Altura') THEN ch.status
                        END)) AS 'Peso_e_Altura',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Pressao Arterial') THEN ch.status
                        END)) AS 'Pressao_Arterial',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliacao Psicossocial') THEN ch.status
                        END)) AS 'Avaliacao_Psicossocial',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação de Equilibrio') THEN ch.status
                        END)) AS 'Avaliação_de_Equilibrio',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Composição Corporal - Dobras Cutaneas') THEN ch.status
                        END)) AS 'Avaliação_Composição_Corporal_Dobras_Cutaneas',
                        MAX((CASE
                            WHEN (e.ds_etapa = 'Avaliação Neuromuscular') THEN ch.status
                        END)) AS 'Avaliacao_Neuromuscular'
                    FROM
                        ((atendimentos a
                        LEFT JOIN checklist ch ON (((ch.atendimento = a.NR_ATENDIMENTO)
                          )))
                        LEFT JOIN etapas e ON ((ch.etapa = e.id)))
                    WHERE
                        (a.DT_ENTRADA = '2018-01-08 06:00:00') 
                    GROUP BY a.NR_ATENDIMENTO order by NM_PACIENTE
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
