<?php
include "conexion.php";
session_start();
/*


*/

$titulo=$_REQUEST['titulo'];
$material=$_REQUEST['material'];
$links=$_REQUEST['links'];
$planes_estudio=$_REQUEST['planes_estudio'];
$mod_examenes=$_REQUEST['mod_examenes'];
$cod_trabajo=$_SESSION["u"]['cod_trabajo'];


$SQL="UPDATE contenido SET titulo='$titulo', material='$material', links='$links', planes_estudio='$planes_estudio' where cod_trabajo='$cod_trabajo'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header("Location: perfil_profesor.php");
	}

?>
