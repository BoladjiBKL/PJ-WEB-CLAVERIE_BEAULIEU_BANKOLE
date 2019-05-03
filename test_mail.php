<?php
  session_start();
  $_SESSION["newsession"] = "mathieu.claverie@edu.ece.fr";
    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "contact@eceamazon.com";

    $to = $_SESSION["newsession"];
// ne pas mettre de caractère spéciaux !!!
    $subject = "Confirmation de votre commande";

    $message = "PHP mail marche";

    $headers = "From:" . $from;

    mail($to,$subject,$message, $headers);

    echo "Un email de confirmation a été envoyé a ", $_SESSION["newsession"];
?>
