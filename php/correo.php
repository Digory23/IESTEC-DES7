<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer-master/src/Exception.php';
require 'lib/PHPMailer-master/src/PHPMailer.php';
require 'lib/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'iestec2019@gmail.com';                 // SMTP username
    $mail->Password = 'Taco12345';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('iestec2019@gmail.com');
    $mail->addAddress('jahir2442@gmail.com');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hola mundo';
    $mail->Body    = '<b>Hola Mundo</b>';
    $mail->AltBody = 'Hola Mundo';

    $mail->send();
    echo '<br>El mensaje se ha enviado<br>';

} catch (Exception $e) {
    echo 'EL mensaje no ha podido ser enviado. Error: ', $mail->ErrorInfo;
}