<?php
 
if(isset($_POST['email']) && !empty($_POST['email']))

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mesage']);

$to = "contato@reactdigital.com.br";
$subjet = "Contato - React Marketing Digital";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:site@reactdigital.com.br"."\r\n".
            "Reply-To:" .$email. "\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){

    echo("Mensagem enviada com sucesso!");

}else{

    echo("A mensagem não pode ser enviada.");

}

?>