<?php
require_once("email_configs.php");

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@aprendaconstruct2.com.br"; // Seu e-mail
$mail->FromName = "Contato - Aprenda Construct2"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress("willian@polargames.com.br", "TESTE");
$mail->AddReplyTo($email,$nome);

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

$data = date('d/m/Y');
$hora = date("H:i:s");

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject = "Contato - Aprenda Construct2 - ".$nome; // Assunto da mensagem
$mail->Body = "
	<br/>
	Nome: $nome <br/>
	E-mail: $email <br/>
	Mensagem: $mensagem <br/>
	<br/>
	
	Enviado dia $data.
";

$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado){
	die("1");
}
else {
	die("0");
}
