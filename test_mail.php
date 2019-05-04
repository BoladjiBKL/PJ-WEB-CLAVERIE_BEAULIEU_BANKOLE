<?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "admin@wampserver.invalid";

    $to = "mathieu.claverie@edu.ece.fr";

    $subject = "PUTAIN CA MARCHE ";

    $message = "CEST TROP DINGUE QUE CA MARCHE AUSSI BIEN";

    $headers = "From:" .$from;

    mail($to,$subject,$message, $headers);

    echo "     L'email a été envoyé correctememnt.";
?>
