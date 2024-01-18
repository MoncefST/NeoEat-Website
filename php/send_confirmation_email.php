<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHP/fichier/php/PHP/PHPMailer/src/Exception.php';
require 'PHP/fichier/php/PHP/PHPMailer/src/PHPMailer.php';
require 'PHP/fichier/php/PHP/PHPMailer/src/SMTP.php';

// Vérifier si les données du formulaire sont présentes
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['guests'])) {
    // Créer une instance de PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->Encoding = 'base64';

    try {
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'neoeat.sav@gmail.com';
        $mail->Password   = 'zann afaj cnus tifc'; // Remplacez par le mot de passe de votre compte Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Destinataire
        $mail->setFrom('neoeat.sav@gmail.com', 'Neo Eat');
        $mail->addAddress($_POST['email'], $_POST['name']);

        // Contenu du message
        $mail->isHTML(true);

        // Salutation personnalisée
        $salutation = "Bonjour {$_POST['name']},";

        // Informations à ajouter au message
        $reservationInfo = "
            <p>{$salutation}</p>
            <p>Merci pour votre réservation ! Votre table a bien été réservée.</p>
            <p>Date de réservation : {$_POST['date']}</p>
            <p>Heure de réservation : {$_POST['time']}</p>
            <p>Nombre de convives : {$_POST['guests']}</p>
            <p>Adresse du restaurant : Champ de Mars, 5 Av. Anatole France, 75007 Paris</p>
        ";

        $mail->Subject = 'Confirmation de réservation';
        $mail->Body    = $reservationInfo;

        // Envoyer le message
        $mail->send();
        header("Location: ../html/reservationSucces.html");
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message de confirmation. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Données du formulaire manquantes.';
}
?>
