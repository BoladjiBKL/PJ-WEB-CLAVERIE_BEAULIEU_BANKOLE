<?php
  session_start();
  $_SESSION["newsession"];
    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "contact@eceamazon.com";

    $to = $_SESSION["newsession"];
// ne pas mettre de caractère spéciaux !!!
    $subject = "Confirmation de votre commande";

    $message = "Merci pour votre commande ! Nous vous la livrerons dans les meilleurs delais ! A bientot sur ECE Amazon";

    $headers = "De:" . $from;

    mail($to,$subject,$message, $headers);

    echo "Un email de confirmation a été envoyé a ", $_SESSION["newsession"], "Merci pour votre confiance et a bientot !";
?>
