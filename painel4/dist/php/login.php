<?php  
 session_start();  

 require ('./conexao.php');

 try  
 {  
      if(isset($_POST["btn_entrar"]))  
      {  
           if(empty($_POST["usuario"]) || empty($_POST["senha"]))  
           {  
				header("location:../index.php?login=true");  
           }  
           else  
           {  
                $query = "SELECT * FROM usuarios WHERE login = :username AND senha = :password";  
                $statement = $conexao->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["usuario"],  
                          'password'     =>     $_POST["senha"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:../dashboard.html");  
					}  
					else  
					{  
						header("location:../index.php?login=true");  
					}  
				}  
			}else{
				header("location:../index.php?login=true");  
			}

		}  
		catch(PDOException $error){  
			header("location:../index.php?login=true");  
 		}  
 ?>  
 