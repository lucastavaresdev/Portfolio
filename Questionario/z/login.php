<?php
  require('conexao.php');
  
  $login=$_POST['usuario'];	//Pegando dados passados por AJAX
  $senha=$_POST['senha'];
    

  //Consulta no banco de dados
  $sql="select * from usuario where usuario='". $login ."' and senha='". sha1(md5($senha))."'"; 
  
  
  
  $query = $conexao->prepare($sql);
  $query->execute();
  $fetch = $query->fetch();


if ($fetch  == 0){
     echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
} else{
  
    
    if(!isset($_SESSION)){ 	//verifica se há sessão aberta
        session_start();		//Inicia seção
        $perfil = $_SESSION['perfil']= $fetch['perfil'];
        if($perfil == 1){
            echo 1;	//Responde sucesso
        }elseif ($perfil == 2){
            $perfil = $_SESSION['perfil']= $fetch['perfil'];
            echo 2;	//Responde sucesso
        }	
    }else{
        session_destroy();
        session_start();		//Inicia seção
            if($perfil == 1){
                echo 1;	//Responde sucesso
            }elseif ($perfil == 2){
                $perfil = $_SESSION['perfil']= $fetch['perfil'];
                echo 2;	//Responde sucesso
            }
    }
}



function perfis( $perfil){
    
}

?>