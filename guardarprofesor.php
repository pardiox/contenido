<?php 
include "conexion.php";
session_start();
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $Email=$_REQUEST['Email'];
    $password=$_REQUEST['password'];
     $codigo=$_REQUEST['codigo'];
  
	//incluimos la conexion
$sql="SELECT * FROM codigo where email='$Email' and codigo='$codigo'";

	if ($resultado = $con->query($sql)){
	if ($resultado->num_rows > 0){
       
	$sql="INSERT INTO profesor (nombre, apellido,Email,password,codigo) VALUES
	('$nombre', '$apellido','$Email', '$password','$codigo')";
	
	if(!$error= $con-> query($sql)){
		 echo $con->error;
	}
	else{
$_SESSION["u"]['nombre'] =   $nombre;
$_SESSION["u"]['apellido'] =  $apellido;
$_SESSION["u"]['Email'] =  $Email;
$_SESSION["u"]['sesion'] =   "s.p";

	header ("location:perfil_profesor.php");
        
    }
    
  
}  else {
    header ("location:index.php");}
    }
?>
	