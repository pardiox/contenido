<?php 
include "../conexion.php";
$Email=$_REQUEST['Email'];
$materia=$_REQUEST['materia'];
$SQL="UPDATE alumnos_verificados SET verificacion='1' where Email='$Email' and materia='$materia'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
header("Location: lista_de_alumnos.php");
	}
       ?>