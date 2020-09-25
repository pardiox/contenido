<?php 
    session_start();
	include "../conexion.php";

    $fecha_de_entrega=$_REQUEST['fecha_de_entrega'];
	$titulo=$_REQUEST['titulo'];
	$curso=$_REQUEST['curso'];
	$materia=$_REQUEST['materia'];
	$contenido=$_REQUEST['contenido'];
    $bibiografia=$_REQUEST['bibiografia'];
    $Email=$_SESSION["u"]['Email'];
	$SQL="INSERT INTO contenido (fecha_de_entrega, titulo, curso, materia, contenido, bibiografia, Email) VALUES
	('$fecha_de_entrega', '$titulo', '$curso', '$materia', '$contenido','$bibiografia','$Email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header ("location:clases.php");
	}
?>
	
	