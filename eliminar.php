<?php
include "conexion.php";
$curso=$_REQUEST['curso'];
$materia=$_REQUEST['materia'];
$Email=$_REQUEST['Email'];
$SQL="DELETE FROM contenido WHERE curso='$curso' and materia='$materia' and Email='$Email'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header("Location: admin.contenido.php");
	}

?>