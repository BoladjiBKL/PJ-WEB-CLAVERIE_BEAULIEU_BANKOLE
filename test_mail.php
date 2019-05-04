<?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "admin@wampserver.invalid";

    $to = "beaulieu1paul@gmail.com";

    $subject = "PUTAIN CA MARCHE ";

    $message = "CEST TROP DINGUE QUE CA MARCHE AUSSI BIEN";

    $headers = "From:" .$from;

    mail($to,$subject,$message, $headers);

    echo "     L'email a été envoyé correctememnt.";
?>
