<?php
include "conexion.php";
session_start();

$Email=$_REQUEST['Email'];
$password=$_REQUEST['password'];

if(empty($Email) || empty($password)){
        $_SESSION["u"]['sesion'] = "s.b";
        header("Location: index.php");
        exit();
}

$sql =  "SELECT * from profesor where Email='$Email' and password='$password'";

if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $_SESSION["u"]['nombre'] = $fila["nombre"];
    $_SESSION["u"]['apellido'] = $fila["apellido"];
    $_SESSION["u"]['Email'] = $fila["Email"];
    $_SESSION["u"]['sesion'] =   "s.p";
    header("Location: vista_profesor_inicio.php");
    exit();}
}


include "sesion_alumno.php";

$sql =  "SELECT * from admin where Email='$Email' and password='$password'";

   if ($resultado = $con->query($sql)){
   if ($resultado->num_rows > 0){
      $fila=$resultado->fetch_assoc();
      $_SESSION["u"]['sesion'] = "s.admin";
           header("Location: perfil_admin.php");
       exit();
}}

     $_SESSION["u"]['sesion'] = "s.f";
    header("Location: index.php");
    

    ?>