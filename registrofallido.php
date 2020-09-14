<?php
//trae la conexion
include "conexion.php";
// me permite trabajar con caracteres españoles
$acentos = $con -> query("SET NAME 'UTF 8'");
//selecciona todos los datos de la tabla categoria
$sql = "SELECT * FROM profesor";
//verifica y ejecuta las "SQL"
if (!$respuesta = $con->query ($sql)){
	//si algo esta mal lo informa
	echo 'con->error';
}
?>

<html>
   <head>
      <title>Formulario</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin.css">
	 </head>
<body>
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
       <img src="img/logo.png" width="50px" height="auto">
       <a href="cerrar_sesion.php">
        </center>
   </header>
     
	<form action="validar.php" method="post" class="form-register">
     
       <center>
 <p> haz ingresado mal tu Email o contraseña</p>
           <br>
    
       <input type="text"  placeholder="&#128100; Email" name="Email">
       <br>
       
     
       	<input type="password" placeholder="&#128273; Password" name="password">
       	<br>
       	<br>
       	<input type="submit" value="ingresar" class="boton">
       	</center>
       	
       </form> 
       <div class="footer">
    facebook
</div>
       
<div class="footer">
    facebook
</div>
    
</body>
</html>

              