<?php 
 session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: ../index.php");
    }
    include "../conexion.php";
    $codigo=$_REQUEST['codigo'];
    $email=$_REQUEST['Email'];
    
    $materia=$_REQUEST['materia'];
echo $materia;
$materia1=$_REQUEST['materia1'];
    echo $materia1;
        $tx="1ro_";
        $tx2="2da";
        
	$SQL="INSERT INTO codigo (codigo, email) VALUES
	('$codigo','$email')";
	
	if(!$error= $con-> query($SQL)){
		 echo $con->error;
	}
	else{

        /*comentario para LU: no te olvides de aplicar PHPMailer aqui*/
        $_SESSION["actual"] ="actual";
       // header ("location: codigogenerado.php");
    }
?>
	
<select>
<option><?php echo "$tx $tx2" ?></option>
</select>