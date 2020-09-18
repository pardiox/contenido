<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
    <title>Perfil Administrador</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/estilofooter.css">
    <link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="css/inicio_admin.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
     

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
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="">Reporte</a>
				<a href="">Ajustes</a>
				<a href="">Ayuda</a>
				<a href="cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header> 
    
    <div class="contenedor_principal row center-xs">
    <div class="bienvenido">
    <h1 class="col-xs-12">Bienvenido Un Dia Mas </h1>
    </div>
     
      <div class="cuadros col-xs-12">
       
        <div class="row center-xs">   
            <div class="opciones contenido col-xs-11 col-lg-4">
             
               <a href="admin.contenido.php" blank="target" >
                <h2 class="contendio__h2">Material Subido</h2>
                <p class="texto_codigo">asdsadaskdjaskldaslkdasd</p>
                </a>
                
            </div>
        
            <div class="opciones clases col-xs-11 col-lg-4">
               
                <a href="admin_alumnos.php">
                <h2>Lista de alumnos</h2>
                <p class="texto_alumnos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus temporibus fuga beatae voluptates qui nihil id ad dolor maiores, sint velit nemo dicta rerum alias cumque ipsa perspiciatis in architecto!</p>
                </a>
                <div class="fondo">
                </div>
            </div>  
        </div>
        <div class="row center-xs">
            <div class="opciones cargar_clase col-xs-11 col-lg-4">
             
               <a href="codigogenerado.php">
                <h2>Registrar profesores</h2>
                <p class="texto_cargar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum est delectus, ipsam optio, repellendus sed laboriosam dignissimos molestias autem suscipit numquam quaerat asperiores rerum cumque omnis maiores minima. Alias, provident.</p>
                </a>
                 <div class="fondo">
                </div>
            </div>
        
            <div class="opciones indefinido col-xs-11 col-lg-4 ">
              
               <a href="">
                <h2>Agregar o quitar materias</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, sequi. Deserunt libero ratione saepe autem sapiente accusantium dolorem id ex, harum nihil qui, nesciunt culpa doloribus rem reprehenderit voluptate non.</p>
                </a>
                <div class="fondo">
                </div>
            </div>
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
