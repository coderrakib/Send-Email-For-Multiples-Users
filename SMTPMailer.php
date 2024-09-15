<?php
/* Start with PHPMailer class */
use PHPMailer\PHPMailer\PHPMailer;
/*use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;*/

require_once './vendor/autoload.php';

class SMTPMailer{

    public function load(){
        /* create a new object */
        $mail = new PHPMailer();
        /* configure an SMTP */
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'coderrakib768@gmail.com';
        $mail->Password = 'twbemfvjbeccgaei';
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->isHTML(TRUE);
        $mail->CharSet = "utf-8";
        $mail->setFrom('coderrakib768@gmail.com');
        $mail->FromName = "Rakibul Islam";
        return $mail;
    }
}