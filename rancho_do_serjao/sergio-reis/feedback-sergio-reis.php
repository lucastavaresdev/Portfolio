<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!</title>
        <meta name="description" content="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/hallowen.css"> 
        <link rel="stylesheet" href="assets/css/camila-haniel.css"> 

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108280738-8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-108280738-8');
    </script>
    </head>
    <body>
	
	<?php 
$mensagem = "Nome: ".$_POST['opiniaoNome']." <br/>";
$mensagem .= "Email: ".$_POST['opiniaoEmail']." <br/>";
$mensagem .= "Telefone: ".$_POST['opiniaoFone']." <br/>";
$mensagem .= "Assunto: ".$_POST['opiniaoAssunto']." <br/>";
$mensagem .= "Mensagem:". $_POST['opiniaoMensagem'];

$headers = "From: ".$_POST['opiniaoEmail']." \r\n";


require_once("../PHPMailer/PHPMailerAutoload.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'ranchodoserjao.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 465; //  Usar 587 porta SMTP
	 $mail->CharSet = 'UTF-8';
	 $mail->SMTPSecure = "ssl";
     $mail->Username = 'sac@ranchodoserjao.com.br'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'Thm=$bAr)Hd1'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom('sac@ranchodoserjao.com.br', $_POST['opiniaoNome']); //Seu e-mail
     $mail->Subject = 'Mensagem pelo site Rancho do Serjão';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('sac@ranchodoserjao.com.br', 'Rancho do serjão');
 
     //Define o corpo do email
     $mail->MsgHTML($mensagem); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     $msg_callback =  "Obrigado! Sua mensagem foi enviada com sucesso.";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      //echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
	  $msg_callback = "Houve algum erro! Tente novamente.";
}

//echo '<div class="container" style="display: none; padding-top: 110px;"><div class="content_wraper"><p class="chamada"><font face="Tahoma" color="#000000"><span style="font-size:11pt;"><b>Sua mensagem foi 
//enviada com sucesso!</b></span></font></p></div></div>';
//echo '<div class="container" style="display: none;"><div class="content_wraper"><p class="chamada"><font face="Tahoma" color="#000000"><span style="font-size:10pt;">Em breve 
//entraremos em contato com você! Obrigado!<br/><a href="index.php">Voltar ao site</a></p></div></div>';

?>
<section class="top">
    <div class="container">
      <div class="row justify-content-md-center mb-3">
        <div class="col-md-3">
          <a href="http://ranchodoserjao.com.br/sbc/" target="_blank"><img src="assets/img/heaven-hell-rancho-do-serjao-logo-rancho.png" class="img-fluid mx-auto d-block mb-3" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!"></a><br>
        </div>
        <div class="col-md-4">
          <img src="assets/img/camila-haniel-rancho-do-serjao-logo-festa.png" class="img-fluid mx-auto d-block" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!">
        </div>
      </div> 
        <div class="row mb-3 flex-column-reverse flex-md-row">
            <div class="col-md-7">
               <img src="assets/img/camila-haniel-rancho-do-serjao-artista.png" class="img-fluid mx-auto d-block" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!">
            </div>
            <div class="col-md-5 text-center">
                <h1>Obrigado! Sua mensagem foi enviada com sucesso.</h1>
                <p><a href="camila-haniel-rancho-do-serjao.php">Voltar ao site.</a></p>
            </div>
        </div>          
    </div>
    <div class="polygon-border-white"></div>
</section>

<footer>
  <div class="polygon-border-black"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-center mb-5">
        <h4>Visite nosso site</h4>
                  <p>Com mais de 15 anos de tradição, o Rancho do Serjão se consagra como uma das casas mais conceituadas do Brasil, conforto, bom atendimento, grandes shows, ótimas estruturas, com muito respeito ao público e as tradições da nossa música sertaneja o Rancho do Serjão cresceu.</p>
        <a href="http://ranchodoserjao.com.br/sbc/" target="_blank">www.ranchodoserjao.com.br</a>
      </div>
      <div class="col-lg-4 text-center mb-5">
        <h4>Evento Organizado por</h4>
        <a href="http://www.activenighteventos.com.br/home" target="_blank"><img src="assets/img/rancho-do-serjao-logo-active.png" class="img-fluid mx-auto d-block" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!"></a>
      </div>
      <div class="col-lg-4 text-center mb-5">
        <h4>Curta nossa página</h4>
        <div class="fb-page" data-href="https://www.facebook.com/RanchoDoSerjaoSaoBernardo/?ref=br_rs" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RanchoDoSerjaoSaoBernardo/?ref=br_rs" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RanchoDoSerjaoSaoBernardo/?ref=br_rs">Rancho Do Serjao Sao Bernardo</a></blockquote></div>
      </div>
      <div class="col-md-12 text-center mt-3">
        <p>Desenvolvido por:<br>
          <a href="http://ad4pixels.com.br/" target="_blank"><img src="assets/img/rancho-do-serjao-logo-4p.png" class="img-fluid mr-2" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!"></a>
          <a href="http://www.yooubrasil.com.br/" target="_blank"><img src="assets/img/rancho-do-serjao-logo-yoou.png" class="img-fluid" width="73" title="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!" alt="Garanta sua presença! Camila & Haniel agitando o Sábado no Rancho do Serjão!! Imagine a Festa!"></a>
        </p>
      </div>
    </div>
  </div>
</footer>
  <script src="assets/js/jquery-2.1.4.min.js"></script> 
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css">

<script src="assets/js/jquery.fancybox.js"></script>
<!-- <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css"> -->

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/scripts.js"></script>


  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=100544057049558";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>