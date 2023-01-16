<?php

// Récupération des données soumises
$nom = $_POST["nom"];
$email = $_POST["email"];
$message = $_POST["message"];

// Validation des données
if(empty($nom) || empty($email) || empty($message)) {
    echo "Veuillez remplir tous les champs du formulaire.";
    exit;
}

// Préparation du mail
$to = "votre@email.com";
$subject = "Nouveau message de $nom";
$headers = "De: $email" . "\r\n" .
    "Répondre à: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
$message = "Nom : $nom\nEmail : $email\n\n$message";

// Envoi du mail
if(mail($to, $subject, $message, $headers)) {
    echo "Votre message a bien été envoyé.";
} else {
    echo "Une erreur est survenue lors de l'envoi de votre message.";
}

?>
