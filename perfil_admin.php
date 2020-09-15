<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
    <title>Perfil Administrador</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/estilofooter.css" 
    <link rel="stylesheet" type="text/css" href="css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="css/estiloadmin1.css">
</head>
<?php
//trae la conexion
include "conexion.php";
// me permite trabajar con caracteres españoles
$acentos = $con -> query("SET NAME 'UTF 8'");
//selecciona todos los datos de la tabla categoria
session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: login.php");
    }
?>

<body>
     <header>
        <center>
        <h1>E.E.S.T.N°14</h1>
        <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    
    
    <div class="row">
        <div class="col-md-offset-2 col-xs-12 col-md-4  holis">
        <div class="row center-xs">
            <a class="button" href="admin.contenido.php"><center>Contenido</center></a>
        </div>
        </div>
        
        <div class="col-md-offset-1 col-xs-12 col-xs-7 col-md-4  holis">
         <div class="row center-xs">
            <a class="button" href="admin.verificar.php"><center>Verificar</center></a>
        </div>
        </div>
        
        <div class="col-md-offset-1 col-xs-12 col-md-4  holis">
        <div class="row center-xs">
            <a class="button" href="codigo.php"><center>Codigo</center></a>
        </div>
        </div>
         <div class="col-md-offset-5 col-xs-12 col-md-4  holis">
        <div class="row center-xs">
            <a class="button" href="admin_alumnos.php"> <center>alumnos</center></a>
        </div>
        </div>
        </div>
    
     <footer>
       
       <div class="container-footer-all"> 
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Acerca de "Carpeta Virtual" 6º2ª</h1>
                    <p>Este grupo esta compuesto por:</p>
                    <p>Alvarado Matias    Guerrero Lucas</p>
                    <p>Ayala Victoria    Jaime Camila</p>
                    <p>Cabrera Jonatan    Pardo Axel</p>
                    <p>Galeano Roberto    Silva Mario</p>
                    
                    
                    
                    

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="img/facebook.png">
                        <label>Facebook</label>
                    </div>
                    <div class="row">
                        <img src="img/twitter.png">
                        <label>Twitter</label>
                    </div>
                    <div class="row">
                        <img src="img/instagram.png">
                        <label>Instagram</label>
                    </div>
                    <div class="row">
                        <img src="img/google-plus.png">
                        <label>Gmail</label>
                    </div>
                    <div class="row">
                        <img src="img/pinterest.png">
                        <label>Whatsapp</label>
                    </div>


                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="img/house.png">
                        <label> Bariloche 6615, González Catán, Buenos Aires, Argentina.
                        </label>
                    </div>

                    <div class="row2">
                        <img src="img/smartphone.png">
                        <label>+02202 428307</label>
                    </div>

                    <div class="row2">
                        <img src="img/contact.png">
                         <label>mt69014@yahoo.com.ar</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 All rights reserved | <a href="">Carpeta Virtual</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>
</body>
</html> 
