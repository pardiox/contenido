<?php
 session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: login.php");
    }
?>

<html>
   <head>
      <title>Codigo Guardado</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin.css">
	 </head>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
       <img src="img/logo.png" width="50px" height="auto">
       <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    
	<form action="codigogenerado.php" method="post" class="form-register">
     
       <center>
           codigo guardado exitosamente  <br>
       Generar Codigo
       	<input type="submit" value="generar" class="boton">
      
       	 	</center>
       </form> 
        
<div class="footer">
    facebook
</div>
    
</body>
    
</html>
