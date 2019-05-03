<?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "test@votredomaine.com";

    $to = "mathieu.claverie@edu.ece.fr";

    $subject = "PUTAIN CA MARCHE ";

    $message = "CEST TROP DINGUE QUE CA MARCHE AUSSI BIEN";

    $headers = "From:" . $from;

    mail($to,$subject,$message, $headers);
    echo $to;
    echo "     L'email a été envoyé.";
?>
