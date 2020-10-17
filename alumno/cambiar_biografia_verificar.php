<?php  
        session_start();
        include "../conexion.php";
        if(isset($_REQUEST["clave"])){
            $clave = $_REQUEST["clave"];
            $Email= $_SESSION["u"]['Email'];
            $sql =  "SELECT * from alumno where Email='$Email'";
            if ($resultado = $con->query($sql)){
                if ($resultado->num_rows > 0){
                    $fila=$resultado->fetch_assoc();
                     $hash= $fila["password"];
                    if (password_verify($clave, $hash))  {      
                        $biografia = $_REQUEST["biografia"];
                        $SQL="UPDATE alumno SET biografia='$biografia' where Email='$Email'"; 
                        if(!$error= $con-> query($SQL)){
                            echo $con->error;
	                    }
                        else{
                            $_SESSION["u"]['biografia'] = $biografia;
                            $_SESSION["tipo"] = "biografia editada con exito";
                            header("Location: configuracion_biografia.php"); 
                            exit();
	                   }

                }else{
                    $_SESSION["tipo"] = "debe ingresar su contraseña actual";
                }
                }
                
            }
        }
     header("Location: configuracion_biografia.php");

?>