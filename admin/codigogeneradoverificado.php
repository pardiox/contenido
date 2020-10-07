<?php 
 session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: ../index.php");
    }
    include "../conexion.php";
    $codigo=$_REQUEST['codigo'];
    $email=$_REQUEST['Email'];
    $curso=$_REQUEST['curso'];
    
    $materia=$_REQUEST['materia'];
    //$materia1=$_REQUEST['materia1'];
    if(empty($materia) || empty($curso)){

        header("Location: codigogenerado.php");
        exit();
    }   
        
	$SQL="INSERT INTO codigo (codigo, email) VALUES
	('$codigo','$email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{
        $SQL="UPDATE cursos_y_materia SET profesor='$email' where curso='$curso' and materia='$materia'";
if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
        /*comentario para LU: no te olvides de aplicar PHPMailer aqui*/
        $_SESSION["actual"] ="actual";
    }}
if(isset($_REQUEST['materia1'])){
    $curso1=$_REQUEST['curso1'];
    $materia1=$_REQUEST['materia1'];
    if(empty($materia1) || empty($curso1)){
        header("Location: codigogenerado.php");
        exit();
    }
    $SQL="UPDATE cursos_y_materia SET profesor='$email' where curso='$curso1' and materia='$materia1'";
    if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
        /*comentario para LU: no te olvides de aplicar PHPMailer aqui*/
        $_SESSION["actual"] ="actual";
    }
}
if(isset($_REQUEST['materia2'])){

    $curso2=$_REQUEST['curso2'];
    $materia2=$_REQUEST['materia2'];
    if(empty($materia2) || empty($curso2)){
        header("Location: codigogenerado.php");
        exit();
    }
    $SQL="UPDATE cursos_y_materia SET profesor='$email' where curso='$curso2' and materia='$materia2'";
    if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}else{
        /*comentario para LU: no te olvides de aplicar PHPMailer aqui*/
        $_SESSION["actual"] ="actual";
    }
}
 header ("location: codigogenerado.php");
?>