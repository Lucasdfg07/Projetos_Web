<?php

require_once('class.phpmailer.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $corpo = "<strong>** Formulário de Contato **</strong>";
    $corpo .= "<br>  </strong><strong>Nome:  </strong>".$nome;
    $corpo .= "<br>  <strong>Email: </strong>".$email;
    $corpo .= "<br>  <strong>Telefone: </strong>".$telefone;
    $corpo .= "<br>  <strong>Mensagem: </strong>".$mensagem;


$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Port = 587;
$mail->Host = "smtp.hostinger.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'contato@wsextintores.com.br'; // Usuário do servidor SMTP
$mail->Password = 'wsewanderson'; // Senha da caixa postal utilizada

$mail->From = "contato@wsextintores.com.br";
$mail->FromName = $email;

$mail->AddAddress('contato@wsextintores.com.br', 'contato@wsextintores.com.br');
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8';
$mail->Subject  = 'Formulário de contato do site WS EXtintores'; // Assunto da mensagem
$mail->Body = $corpo;

$enviado = $mail->Send();
$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
echo "E-mail enviado com sucesso!";
} else {
echo "Não foi possível enviar o e-mail.

";
echo "Informações do erro:
" . $mail->ErrorInfo;
}

?>
