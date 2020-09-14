<?php
$nombre="";
$apellido="";
$fecha="";
$mail="";
$curso="";
$division="";
$error="";
if(isset($_REQUEST["existe"])){
	$nombre=$_REQUEST["nombre"];
	$apellido=$_REQUEST["apellido"];
	$fecha=$_REQUEST["fecha"];
	$mail=$_REQUEST["mail"];
    $curso=$_REQUEST["cur"];
    $division=$_REQUEST["divi"];
	
	$error="<h1>Ya existe el usuario</h1>";
}
?>
<html>
	<head>
	<title>Registrarse o Entrar</title>
	<link rel="stylesheet" href="css/estiloregis.css">
	<link rel= "icon" href ="icono.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1; minimum-scale=1">
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
    ?>
		<center>
		<form action="guardaralum.php" method="post" class="form-register">
            <h2 class="form__titulo">Crea una cuenta</h2>
           	Nombre
			<input type="text" maxlength="50" placeholder="&#128100; Nombre"  name="nombre" value="<?php echo $nombre?>" required>
			<br>
			Apellido
			<input type="text" maxlength="50" placeholder="&#128372; Apellido"  name="apellido" value="<?php echo $apellido?>" required> 
			<br>
			Fecha de Nacimiento
			<input type="date"  name="fecha"  value="<?php echo $fecha?>" required>
			<br>
			Email
			<input type="Email" maxlength="50" placeholder="&#128231; Ejemplo@hotmail.com"  name="Email" value="<?php echo $mail?>" required> 
			<br>
			Contraseña
			<input type="password" maxlength="50" placeholder="&#128274; **********"  name="password" required>
			<?php echo $error
			?>
            <br>
           Curso
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
                <option>4to_3ra</option>
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
            <br>
             <br>
            
		<input type="submit" value="Registrar" class="submit"> 
		<p> ¿Ya tienes una cuenta?<a href="login.php">Ingresa aquí</a></p>
	
 
		</form>
        </center>
       
   
      
	</body>
</html>