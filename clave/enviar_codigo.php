<?php
include "../conexion.php";
$Email=$_REQUEST["Email"];
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;}
$codigo = generarCodigo(4);

$sql = "INSERT INTO recuperar_clave(Email, codigo) VALUES ('$Email', '$codigo')";
if(!$error= $con-> query($sql)){
	 echo $con->error;
}
else{
    $titulo="codigo de confirmacion";
    $body="su codigo de confirmacion es $codigo";
    include("prueba.php");
    if(!$mail->send()){
        header ("location: verificar_codigo.php"); 
    }
    else{
        "hubo un error";
    }

}








?>x