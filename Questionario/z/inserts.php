<?php


require('conexao.php');

$parametro =$_GET['parametro'];//PARAMETRO



if($parametro === "cadastroUsuario"){
    $nome = $_POST['usuario'];
    $senha = sha1(md5($_POST['senha']));
    $perfil = $_POST['perfil'];


    $sql = "INSERT INTO usuario (usuario, senha, perfil) VALUES (:mnome,:msenha, :mperfil)";
    
    $stmt = $conexao->prepare($sql);
    
    $stmt->bindParam(':mnome', $nome, PDO::PARAM_STR);		
    $stmt->bindParam(':msenha', $senha, PDO::PARAM_STR);		
    $stmt->bindParam(':mperfil', $perfil, PDO::PARAM_INT);		
   
    
    $stmt->execute();
}elseif ($parametro === "cadastroQuestionario"){

    $titulo = $_POST['titulo_questionario'];
    $sub = $_POST['sub1'];
    
        $sql = "INSERT INTO titulo_questionario(titulo_questionario) VALUES (:mtitulo);
                    SELECT LAST_INSERT_ID() INTO @codCliente;
                    INSERT INTO subtitulo_questionario(sub_titulo, id_titulo_questionario) VALUES (:msub1 , @codCliente)";


            try {
                $stmt = $conexao->prepare($sql);
            
                //campos do formulario
                $stmt->bindParam(':mtitulo', $titulo, PDO::PARAM_STR);		
                $stmt->bindParam(':msub1', $sub, PDO::PARAM_STR);		
            
            
            
                $stmt->execute();
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
                die();
            }

    
                


}


