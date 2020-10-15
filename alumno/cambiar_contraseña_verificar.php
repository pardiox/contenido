 <?php  
        session_start();
        include "../conexion.php";
        if(isset($_REQUEST["clave1"])){
            $clave1 = $_REQUEST["clave1"];
            $Email= $_SESSION["u"]['Email'];
            $sql =  "SELECT * from alumno where Email='$Email'";
            if ($resultado = $con->query($sql)){
                if ($resultado->num_rows > 0){
                    $fila=$resultado->fetch_assoc();
                     $hash= $fila["password"];
                    if (password_verify($clave1, $hash))  {      
                    if ($_REQUEST["clave2"] == $_REQUEST["clave3"]){
                    
                        $clave2 = $_REQUEST["clave2"];
                      
                        $clave_nueva= password_hash($clave2, PASSWORD_DEFAULT, ['cost'=> 10]);
                        $SQL="UPDATE alumno SET password='$clave_nueva' where Email='$Email'"; 
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
                }else{
                    $_SESSION["tipo"] = "debe ingresar su contraseña actual";
                }
                }
                
            }
        }
        header("Location: cambiar_contraseña.php");

?>