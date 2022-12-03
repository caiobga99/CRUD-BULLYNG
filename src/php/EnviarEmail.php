<?php
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$nomeApoiador = $_POST['nome'];
$mensagem = $_POST['mensagem'];
$email = $_GET['email'];

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "reportbullyingsuporte@gmail.com";

$mail->Password = "hzrssbcoibxzdvnz";

$mail->Subject = "Ola, voce recebeu uma Resposta de '$nomeApoiador' por sua denuncia";

$mail->setFrom("reportbullyingsuporte@gmail.com");

$mail->Body = "$mensagem";

$mail->addAddress("$email");

$mail->Send();

if($mail->Send()){
    header("location:../painel.php");
} 
else {
    echo "erro";
}

?>