<?php
include "conexion.php";
session_start();
$cod_materia=$_REQUEST['cod_materia'];
$_SESSION['verificado']=0;
$SQL="UPDATE materia SET verificado='1' where cod_materia='$cod_materia'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header("Location: admin.verificar.php");
	}


?>
