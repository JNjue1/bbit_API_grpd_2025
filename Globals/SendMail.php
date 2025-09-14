<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


Class SendMail{ 
    public function Send_Mail ($conf, $mailCnt ){

    }
}
//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'Plugins/PHP/vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jabez.njue@strathmore.edu';                     //SMTP username
    $mail->Password   = '-';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

   //Recipients
$mail->setFrom($mailCnt['mail_from'], $mailCnt['name_from']);
$mail->addAddress($mailCnt['mail_to'], $mailCnt['name_to']); //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $mailCnt['subject'];
$mail->Body    = $mailCnt['body'];

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}