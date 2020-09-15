<?php
session_start();
if(  $_SESSION["u"]['verificado'] == "1"){
   header("Location: alumno.php");
   exit();
}
?>


<html lang="en">
  <head>
      <title>Verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin1.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body> 
      <header>
          <center>
          <h1>E.E.S.T.N°14</h1>
          <a href="cerrar_sesion.php">  <img src="img/logo.png" width="50px" height="auto"></a>
          </center>
      </header>
    
	<form action="verificar_alumno.php" method="post" class="form-register">
     
       <center>
       <input type="text"  placeholder="&#128100; Inserte el codigo de verificacion" name="codigo">
   	<input type="submit" value="enviar" class="boton">
       	</center>
       <br>
    
       	
       </form> 
       
       
<div class="footer">
    facebook
</div>
     
</body>
</html>