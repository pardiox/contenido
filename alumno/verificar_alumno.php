<?php 
include "../conexion.php";
session_start();
$codigo=$_REQUEST['codigo'];
$Email=$_SESSION["u"]['Email'];
$sql="SELECT * FROM codigo where email='$Email' and codigo='$codigo'";
if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
$SQL="UPDATE alumno SET verificado='1' where Email='$Email'";
if(!$error = $con->query($SQL)){
		 echo $con->error;
	}else{
         $_SESSION["u"]['verificado']="1";
         header("Location: alumno.php");
  
	}}}

?>