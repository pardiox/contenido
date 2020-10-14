 <?php  
        session_start();
        include "../conexion.php";
        if(isset($_REQUEST["clave1"])){
            $clave1 = $_REQUEST["clave1"];
            $Email= $_SESSION["u"]['Email'];
            $sql =  "SELECT * from alumno where Email='$Email' and password='$clave1'";
            if ($resultado = $con->query($sql)){
                if ($resultado->num_rows > 0){
                    if ($_REQUEST["clave2"] == $_REQUEST["clave3"]){
                    
                        $clave2 = $_REQUEST["clave2"];
                        $clave3 = $_REQUEST["clave3"];

                        $SQL="UPDATE alumno SET password='$clave3' where Email='$Email'"; 
                        if(!$error= $con-> query($SQL)){
                            echo $con->error;
	                    }
                        else{
                            $_SESSION["tipo"] = "contraseña cambiada con exito";
                            header("Location: cambiar_contraseña.php"); 
                            exit();
	                   }
                    }
                    else{
                        $_SESSION["tipo"] = "las dos contraseñas tienen que ser diferente";
                    }
                }
                else{
                    $_SESSION["tipo"] = "debe ingresar su contraseña actual";
                }
            }
        }
        header("Location: cambiar_contraseña.php");

?>