<?php

require_once('class.phpmailer.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $corpo = "<strong>** Formulário de Contato marceloinstalacoesmacae.com **</strong>";
    $corpo .= "<br>  </strong><strong>Nome:  </strong>".$nome;
    $corpo .= "<br>  <strong>Email: </strong>".$email;
    $corpo .= "<br>  <strong>Mensagem: </strong>".$mensagem;


$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Port = 587;
$mail->Host = "smtp.hostinger.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'marcelo@marceloinstalacoesmacae.com'; // Usuário do servidor SMTP
$mail->Password = 'marcelo123'; // Senha da caixa postal utilizada

$mail->From = "marcelo@marceloinstalacoesmacae.com";
$mail->FromName = "Contato do Cliente";

$mail->AddAddress('mcgmacae@hotmail.com', 'marceloinstalacoesmacae.com');
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8';
$mail->Subject  = 'Formulário de contato do Cliente'; // Assunto da mensagem
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
