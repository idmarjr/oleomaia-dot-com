<?
##########################################################
/////////////////////////////////////////////////////  ###
/// Autor: Mateus Campos                         ////  ###
/// E-mail: mateuscampos@globo.com               ////  ###
/// Site: www.centralwarez.com                   ////  ###
/// Msn: mateus@centralwarez.com                 ////  ###
/// Obs: favor n�o retirar os nossos cr�ditos!!! ////  ###
/////////////////////////////////////////////////////  ###
##########################################################

header("Location: http://leonardomaia.com.br/contato/reply.php");

// aqui come�a o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$email   = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //fun��o para validar a vari�vel $email no script todo

$data      = date("d/m/y");                     //fun��o para pegar a data de envio do e-mail

//aqui envia o e-mail para voc�
mail ("contato@leonardomaia.com.br",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nE-mail: $email\n\nMensagem: $mensagem",
      "From: $email"
     );

//aqui s�o as configura��es para enviar o e-mail para o visitante
$site   = "leonardomaia.com.br";                    //o e-mail que aparecer� na caixa postal do visitante
$titulo = "Contato Pelo Site";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, obrigado pelo contato. J� j� te retorno. Abs";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
?>
