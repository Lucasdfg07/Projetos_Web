<?php
// Inclui o arquivo class.phpmailer.php
require_once('php/class.phpmailer.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cep = $_POST['CEP'];
$prato = $_POST['prato'];
$quantidade = $_POST['quantidade'];
$mensagem = $_POST['mensagem'];
$message = 'Nome: '.$nome.'<br>Email: '.$email.'<br>Telefone: '.$telefone.'<br>Endereço: '.$endereco.'<br>Complemento: '.$complemento.'<br>Cep: '.$cep.'<br>Prato: '.$prato.'<br>Quantidade: '.$quantidade.'<br>Mensagem: '.$mensagem;

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtpout.secureserver.net"; // Endereço do servidor SMTP
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mailer->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'marcus@gourmetmb.com'; // Usuário do servidor SMTP
$mail->Password = 'Capivar@123'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "marcus@gourmetmb.com"; // Seu e-mail
$mail->FromName = "MB Gourmet"; // Seu nome
// Define os destinatário(s)
$mail->AddAddress('marcusvince@bol.com.br');
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8';
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "MB Gourmet"; // Assunto da mensagem
$mail->Body = $message;
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  echo "E-mail enviado com sucesso!";
}
else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}


?>