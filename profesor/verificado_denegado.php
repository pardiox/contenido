<?php 
include "conexion.php";
$Email=$_REQUEST['Email'];
$materia=$_REQUEST['materia'];
$sql="SELECT * FROM alumno where Email='$Email'";
if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
        $ban=$fila['ban_profesor'];
        $ban=$ban+1;
$SQL="UPDATE alumno SET ban_profesor='$ban' where Email='$Email'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
	    
$SQL="DELETE FROM alumnos_verificados WHERE Email='$Email' and materia='$materia'";

if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
	   header("Location: lista_de_alumnos.php"); 
	}}}}
       ?>