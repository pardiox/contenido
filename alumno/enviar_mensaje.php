<?php
include "../conexion.php";
session_start();

$nombre = $_SESSION["u"]['nombre'];
$apellido = $_SESSION["u"]['apellido'];
$nombre= "$nombre $apellido";
$Email = $_SESSION["u"]['Email'];
$mensaje = $_REQUEST['mensaje'];
$cod_trabajo= $_SESSION["u"]['cod_trabajo'];

$sql="INSERT INTO chat (nombre, Email, mensaje, cod_trabajo) VALUES
	('$nombre','$Email', '$mensaje', '$cod_trabajo')";
	
	if(!$error= $con-> query($sql)){
		 echo $con->error;
	}
	else{
        header ("location: chat_del_trabajo.php?cod_trabajo=$cod_trabajo");
    }
?>