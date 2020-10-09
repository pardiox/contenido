<?php 
include "conexion.php";
    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $Email=$_REQUEST['Email'];
    $password=$_REQUEST['password'];
    $curso=$_REQUEST['curso'];
	//incluimos la conexion
	
	
	/*
	inserta los datos recibidos en la tabla
	NOTA: INSERT INTO Tabla_en la que quiero insertar (los campos separados por coma)
	*/
	
	$SQL="INSERT INTO alumno (nombre, apellido,Email,password,curso) VALUES
	('$nombre', '$apellido','$Email', '$password', '$curso')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;}
 
$codigo= generarCodigo(4);
$SQL="INSERT INTO codigo (email, codigo) VALUES	('$Email','$codigo')";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
$para      = $Email;
$titulo    = 'codigo de verificacion';
$mensaje   = "el codigo de verificacion es: $codigo" ;
$cabeceras = 'From: tecnica14@gmail.com' . "\r\n" .
    'Reply-To:tecnica14@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);


 
$sql =  "SELECT distinct materia FROM cursos_y_materia where curso='$curso'";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){
        $materia=$fila["materia"];
        $SQL="INSERT INTO alumnos_verificados (curso, materia, Email) VALUES ('$curso', '$materia','$Email')";
        if(!$error= $con-> query($SQL)){
            $dada=$materia;
        }        
    }
include "sesion_alumno.php";	
}}}
?>
	