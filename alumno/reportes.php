<?php
session_start();
include "../conexion.php";
$Email=$_SESSION["u"]['Email'];

if( $_SESSION["u"]['sesion'] != "s.a"){
    header ("location: ../index.php");
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="../css/formulario_profesor.css">
</head>
<body>
    <header>
    <a href="configuracion.php"><p>atras</p></a>

	</header>

    <div class="container">
    <p>reporte de errores</p>
              <?php
            
              if (isset($_SESSION["tipo"])){
                  echo $_SESSION["tipo"];
                  $_SESSION["tipo"] = "";
              }
              ?>
    <form action="enviar_reporte.php" method="post">  

    
    
   
    
    <div class="subject">
      <input type="text" placeholder="Titulo" class="input" name="titulo" required>
    
    </div>
    
    

            
     
      <textarea  class="area" placeholder="detalla el error por favor" name="error" required></textarea>
  
    

        <center><input type="submit" value="enviar" class="btn" class="boton"></center>
    </form>
</div>
 
</body>
</html>