<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "support@findyourwaifu.de"; // Deine IONOS E-Mail-Adresse
    $subject = "Neue Nachricht von $name";
    $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht wurde gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
