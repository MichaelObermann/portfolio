<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPOptions = array('ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output mettre une valeur de 4 pour que le serveur renvoie les erreurs rencontrées, sinon 0
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'XXXX';  // Specify main and backup SMTP servers - ssl0.ovh.net pour OVH - smtp.gmail.com ou smtp.michaelobermann.fr pour localhost
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $monMail;                 // SMTP username
    $mail->Password = $monMotDePasse;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted - OVH: mettre ssl, sinon tsl pour localhost c'est ok
    $mail->Port = 587;                                    // TCP port to connect to - 465 for ssl - 587 for tsl
    //Recipients
    $mail->setFrom($formEmail, 'Mailer');
    $mail->addAddress($monMail);     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');
    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sujet;
    $mail->Body = $html_message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Votre message à bien été envoyé.';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

