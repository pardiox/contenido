<?php 
session_start();
	include "conexion.php";
	$titulo=$_REQUEST['titulo'];
	$material=$_REQUEST['material'];
	$links=$_REQUEST['links'];
	$mod_examenes=$_REQUEST['mod_examenes'];
    $planes_estudio=$_REQUEST['planes_estudio'];

  $curso=$_SESSION["u"]['curso'];
  $materia=$_SESSION["u"]['materia'];
  $Email=$_SESSION["u"]['Email'];
	//incluimos la conexion


	$SQL="INSERT INTO contenido (titulo, material, links, mod_examenes, planes_estudio, curso, materia, Email) VALUES
	('$titulo', '$material', '$links', '$mod_examenes', '$planes_estudio','$curso','$materia','$Email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header ("location:perfil_profesor.php");
	}
?>
	
	