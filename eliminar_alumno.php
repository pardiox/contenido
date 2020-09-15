<?php
include "conexion.php";

$Email=$_REQUEST['Email'];
$SQL="DELETE FROM alumno WHERE Email='$Email'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header("Location: admin_alumnos.php");
	}

?>