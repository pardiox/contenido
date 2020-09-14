<html>
   <head>
      <title>Registro Profesor</title>  
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin.css">
	 </head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/estiloregisprofe.css">

</head>
<body>
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
       <img src="img/logo.png" width="50px" height="auto">
       <a href="cerrar_sesion.php">
        </center>
   </header>

    <?php
    session_start();
    echo $_SESSION["u"]['sesion'];
    if( $_SESSION["u"]['sesion'] == "s.a"){
    header ("location: alumno.php");
    }
    
    else if($_SESSION["u"]['sesion'] == "s.p"){
            header ("location: perfil_profesor.php");
    }
    else if($_SESSION["u"]['sesion'] == "s.f"){
            echo"<center>contraseña o email es incorrecto</center>";
    }
     else if($_SESSION["u"]['sesion'] == "s.b"){
         
            echo" <center>no puede dejar espacios en blanco</center>";
    }
    else if( $_SESSION["u"]['sesion'] == "s.admin"){
    header ("location: admin.contenido.php");
    }
    else {
          echo "<center>iniciar sesion</center>";
      }
     $_SESSION["u"]['sesion']="nada";
    ?>
	<form action="guardarprofesor.php" method="post" class="form-register">
     
       <center>
       <input type="text"  placeholder="&#128100; Nombre" name="nombre">
       <br>

       	<input type="text" placeholder="&#128100; Apellido" name="apellido">
       	<br>

           <input type="text" placeholder="&#128273; Email" name="Email">
       	<br>   
       	
           <input type="password" placeholder="&#128273; Password" name="password">
       	
       	<br>
           <input type="text" placeholder="&#128273; Código" name="codigo">
    
       	<br>
       	<input type="submit" value="ingresar" class="boton">
       	</center>
       	
       </form> 
    <footer> 
        <center>
        <h4>instagram</h4>
        </center>
    </footer>
       

</body>
</html>
