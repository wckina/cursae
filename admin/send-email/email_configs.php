<?php
ini_set("display_errors", 0);
require("phpMailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Port = 587;
$mail->Host = "mail.aprendaconstruct2.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = "contato@aprendaconstruct2.com.br"; // Usuário do servidor SMTP
$mail->Password = "M4tr1x123"; // Senha do servidor SMTP