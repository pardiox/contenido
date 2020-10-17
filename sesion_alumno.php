<?php
$sql =  "SELECT * from alumno where Email='$Email'";

if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $hash= $fila["password"];
    if (password_verify($password, $hash))  {  
    $_SESSION["u"]['nombre'] = $fila["nombre"];
    $_SESSION["u"]['apellido'] = $fila["apellido"];
    $_SESSION["u"]['curso'] = $fila["curso"];
    $_SESSION["u"]['Email'] = $fila["Email"];
    $_SESSION["u"]['foto'] = $fila["foto"];
    $_SESSION["u"]['biografia'] = $fila["biografia"];
    $_SESSION["u"]['verificado'] = $fila["verificado"];
    $_SESSION["u"]['sesion'] = "s.a";
    header("Location: alumno/alumno.php");
    exit();}
}}
?>