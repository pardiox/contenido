<?php

include "conexion.php";
session_start();
if(isset($_SESSION["u"]['sesion'])){
if( $_SESSION["u"]['sesion'] == "s.admin"){
    header ("location: admin/perfil_admin.php");
}else
if( $_SESSION["u"]['sesion'] == "s.a"){
    header ("location: alumno/alumno.php");
}else
if( $_SESSION["u"]['sesion'] == "s.p"){
    header ("location: profesor/vista_profesor_inicio.php");
}
}
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <link rel="icon" href="img/icono.ico">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
	<link rel="stylesheet" href="css/estilofooter.css">
	<link rel="stylesheet" href="css/header.css">

	
	<title>Carpeta Virtual</title>
</head>
<header>
   
		<div class="wrapper">

			<div class="logo">Volder</div>
			
			<nav>
				
				<a href="codigogenerado.php">Inicio</a>
				<a href="admin_alumnos.php">Ayuda</a>
				<a href="cerrar_sesion.php">Acerca de nosotros</a>
			</nav>
		</div>

	</header>
<body>
<center>

<div class="contenedor_registro row center-xs around-md top-md col-xs-11 ">
   
    <div class="login col-xs-12 center-xs col-md-6">
       <h2>Login</h2>
       <form action="validar.php" method="post">
       <div class="row center-xs">
       <input type="email" placeholder="Email" name="Email">
       <input type="password" placeholder="Contraseña" name="password">
       <input type="submit" value="Iniciar Sesion">
       </div>
        </form>
         <p>Haga click</p> 
         <button id="abrir_ventana"> Aquí </button> 
        <p>para registrarse como Profesor</p><br>
         <a href="clave/recuperar_contraseña.php"><p>¿haz olvidado tu contraseña?</p></a>
    </div>
    
    
    <div class="register col-xs-12 center-xs col-md-6">
       <h2>Registrarse</h2>
        <form action="guardaralum.php" method="post">
          
           <div class="row center-xs">
               
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="text" placeholder="Apellido" name="apellido">
                <input type="mail" placeholder="Email" name="Email">
                <input type="password" placeholder="Contraseña" name="password">
                <select name="curso" value="<?php echo $curso?>" required class="curso">
                <option>1ro_1ra</option>
                <option>1ro_2da</option>
                <option>1ro_3ra</option>
                <option>1ro_4ta</option>
                <option>1ro_5ta</option>
                <option>1ro_6ta</option>
                <option>2do_1ra</option>
                <option>2do_2da</option>
                <option>2do_3ra</option>
                <option>2do_4ta</option>
                <option>2do_5ta</option>
                <option>2do_6ta</option>
                <option>3ro_1ra</option>
                <option>3ro_2da</option>
                <option>3ro_3ra</option>
                <option>3ro_4ta</option>
                <option>3ro_5ta</option>
                <option>3ro_6ta</option>
                <option>4to_1ra</option>
                <option>4to_2da</option>
                <option>4to_3rax</option>
                <option>4to_4ta</option>
                <option>4to_5ta</option>
                <option>5to_1ra</option>
                <option>5to_2da</option>
                <option>5to_3ra</option>
                <option>5to_4ta</option>
                <option>6to_1ra</option>
                <option>6to_2da</option>
                <option>6to_3ra</option>
                <option>7mo_1ra</option>
                <option>7mo_2da</option>
                <option>7mo_3ra</option>
            </select>
                <input type="submit" value="Registrarse">
            </div>
        </form>
        
    </div>
</div>

<div class="fondo_ventana col-xs-12 center-xs" id="fondo_ventana">
        <center>
        <div class="ventana col-xs-9 col-md-6" id="ventana">
        
         <a href="#" id="cerrar_ventana" class="cerrar_ventana">
         <i class="fas fa-angle-down"></i>
         </a>
          <h3>Regístrate como Profesor</h3>
          <form action="guardarprofesor.php" method="post">
              
              <input type="text" placeholder="Nombre" name="nombre">
              <input type="text" placeholder="Apellido" name="apellido">
              <input type="text" placeholder="Email" name=Email>
              <input type="password" placeholder="Contraseña" name="password">
              <input type="text" placeholder="Código" name="codigo">
              <input type="submit" value="Registrarse">
              
          </form>
        </div>
        </center>
        
    </div>

</center>

<footer>
       
       <div class="container-footer-all"> 
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Acerca de "Carpeta Virtual" 7º2ª</h1>
                    <p>Este grupo esta compuesto por:</p>
                    <p>Alvarado Matias</p>
                    <p>Guerrero Lucas</p>
                    <p>Pardo Axel</p>
                    
                    
                    
                    

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
                        <label><a href="https://instagram.com/volder.php">Instagram</a></label>
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
                        <label> González Catán, Buenos Aires, Argentina.
                        </label>
                    </div>

                    <div class="row2">
                        <img src="img/smartphone.png">
                        <label>#</label>
                    </div>

                    <div class="row2">
                        <img src="img/contact.png">
                         <label>volder.php@gmail.com</label>
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
<script src="registro_profesor.js"></script>
</body>
</html>