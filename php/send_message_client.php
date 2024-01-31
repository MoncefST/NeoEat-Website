<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHP/fichier/php/PHP/PHPMailer/src/Exception.php';
require 'PHP/fichier/php/PHP/PHPMailer/src/PHPMailer.php';
require 'PHP/fichier/php/PHP/PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'neoeat.sav@gmail.com';
        $mail->Password   = 'RAJOUTER MOT DE PASSE'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        $mail->setFrom($email, $name);
        $mail->addAddress('neoeat.sav@gmail.com', 'Neo Eat'); 


        $mail->isHTML(false);
        $mail->Subject = 'Nouveau message client !';
        $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";


        $mail->send();
        header("Location: ../html/messageSucces.html");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
