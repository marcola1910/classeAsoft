<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require '/var/www/html/library/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'outlook.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@classeasoft.com';                 // SMTP username
$mail->Password = 'dominioadm13!';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('classeasoftware@gmail.com', 'Mailer');
$mail->addAddress('marc.alcantara@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('marc_alcantara_marinho@gmail.com');               // Name is optional
$mail->addReplyTo('noreply@classeasoftware.comm', 'noreply');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
