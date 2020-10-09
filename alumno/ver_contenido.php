<?php
include "../conexion.php";
session_start();
$Email=$_REQUEST["Email"];
$materia=$_REQUEST["materia"];
$curso=$_SESSION["u"]['curso'];
echo $Email;
if(empty($Email) || empty($materia)){
    header("Location: alumno.php");
}else{
    echo "hola";
}
?>