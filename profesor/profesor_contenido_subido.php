<?php 
    session_start();
	include "../conexion.php";
    $fecha_de_subida = date('Y-m-d');
    $fecha_de_entrega=$_REQUEST['fecha_de_entrega'];
	$titulo=$_REQUEST['titulo'];
	$curso=$_REQUEST['curso'];

    if(isset($_REQUEST['materia'])){
	   $materia=$_REQUEST['materia'];}
    else{
        header ("location:formulario_profesor.php");
    }
	$contenido=$_REQUEST['contenido'];
    $bibiografia=$_REQUEST['bibiografia'];
    $Email=$_SESSION["u"]['Email'];
	$SQL="INSERT INTO contenido (fecha_de_entrega, fecha_de_subida, titulo, curso, materia, contenido, bibiografia, Email) VALUES
	('$fecha_de_entrega', ('$fecha_de_subida'), '$titulo', '$curso', '$materia', '$contenido','$bibiografia','$Email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
	header ("location:clases.php");
	}
?>
	
	