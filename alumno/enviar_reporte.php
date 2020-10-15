<?php            
        session_start();
         $Email = $_SESSION["u"]['Email'];
         $titul = $_REQUEST["titulo"];
         $error = $_REQUEST["error"];
         $_SESSION['Email'] = "emailprueba869@gmail.com";
         $titulo="reporte de error: $titul";
         $body="El estudiante de Email: $Email reporta:
         
         $error
         ";
         $_SESSION['tipo'] = "reporte enviado";
         $location="location: reportes.php";
         include("envio_de_email.php");  
         exit();
?>