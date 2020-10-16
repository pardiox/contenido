<?php  
        session_start();
        include "../conexion.php";
            $clave = $_REQUEST["clave"];
            $nombre = $_REQUEST["nombre"];
            $apellido = $_REQUEST["apellido"];
            $Email= $_SESSION["u"]['Email'];
            $sql =  "SELECT * from alumno where Email='$Email'";
            if ($resultado = $con->query($sql)){
                if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $hash= $fila["password"];
                        if (password_verify($clave, $hash))  {  
                            $SQL="UPDATE alumno SET nombre='$nombre' and apellido='$apellido' where Email='$Email'"; 
                            if(!$error= $con-> query($SQL)){
                                echo $con->error;
	                        }
                            else{
                                $_SESSION["tipo"] = "nombre cambiado con exito";
                                $_SESSION["u"]['nombre'] = $nombre;
                                $_SESSION["u"]['apellido'] = $apellido;
                                header("Location: cambiar_nombre.php"); 
                                exit();
	                       }
                        }
                        else{
                            $_SESSION["tipo"] = "contraseña incorrecta";
                        }
                    }
            }
               
            
       header("Location: cambiar_nombre.php");

?>