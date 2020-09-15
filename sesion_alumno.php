<?php
$sql =  "SELECT * from alumno where Email='$Email' and password='$password'";

if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $_SESSION["u"]['nombre'] = $fila["nombre"];
    $_SESSION["u"]['apellido'] = $fila["apellido"];
    $_SESSION["u"]['curso'] = $fila["curso"];
    $_SESSION["u"]['Email'] = $fila["Email"];
    $_SESSION["u"]['verificado'] = $fila["verificado"];
    
$sql =  "SELECT * from codigo where email='$Email'";
if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $_SESSION["u"]['codigo'] = $fila["codigo"];
    $_SESSION["u"]['sesion'] = "s.a";
    header("Location: alumno.php");
}
 
    exit();
}}}
?>