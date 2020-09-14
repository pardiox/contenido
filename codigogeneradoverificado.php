<?php 
 session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: index.php");
    }
include "conexion.php";
    $codigo=$_REQUEST['codigo'];
	 $email=$_REQUEST['email'];
	/*
	inserta los datos recibidos en la tabla
	NOTA: INSERT INTO Tabla_en la que quiero insertar (los campos separados por coma)
	*/
	
	$SQL="INSERT INTO codigo (codigo, email) VALUES
	('$codigo','$email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{

$para      = $email;
$titulo    = 'codigo de confirmacion';
$mensaje   = "el codigo de confirmacion es: $codigo" ;
$cabeceras = 'From: tecnica14@gmail.com' . "\r\n" .
    'Reply-To: tec14@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
header ("location: codigo.php");
}
?>
	