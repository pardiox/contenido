<?php
 include "conexion.php";
  session_start();
$nombre=$_REQUEST['nombre'];
$Email=$_SESSION["u"]['Email'];
$curso=$_REQUEST['curso'];
$sql="INSERT INTO materia (curso,Email,nombre_materia) VALUES ('$curso','$Email','$nombre')";
	if(!$error= $con-> query($sql)){
		 echo $con->error;
	}
	else{
	    echo "1";
$sql =  "SELECT * FROM alumnos_verificados where curso='$curso'";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){
        echo "2";
      $id=$fila["id"];
      $Email=$fila["Email"];
      $curso=$fila["curso"];
      $materia=$fila["materia"];
        echo $materia;
      if ($materia=='0'){
        
          $SQL="UPDATE alumnos_verificados SET materia='$nombre' where id='$id' and materia='0'";
           if(!$error= $con-> query($SQL)){
		 echo $con->error;
       	}
    	else{
    	   echo $error;
    	     	header("Location: perfil_profesor.php");}
      }else{
          $sql="INSERT INTO alumnos_verificados (Email,curso,materia) VALUES ('$Email','$curso','$nombre')";
           if(!$error= $con-> query($sql)){
               echo "2";
		 echo $con->error;
       	}
    	else{
    	   echo "bien2";
    	header("Location: perfil_profesor.php");
    	}
    		header("Location: perfil_profesor.php");
      }
       
}}else{
    header("Location: perfil_profesor.php");
}}
?>