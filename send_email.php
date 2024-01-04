<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    $to = "madalinglavanro@gmail.com";
    $headers = "From: $email";
    $message = "Nume: $nume\n\nEmail: $email\n\nMesaj: $mesaj";

    mail($to, 'Contact Form Submission', $message, $headers);
    echo "Email trimis cu succes!";
}
?>
