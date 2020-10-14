    <?php
include "../conexion.php";
session_start();
$Email=$_REQUEST["Email"];
$_SESSION["Email"]=$Email;
function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
$codigo = generarCodigo(4);

            $sql =  "SELECT * from profesor where Email='$Email'";
            if ($resultado = $con->query($sql)){
                if ($resultado->num_rows > 0){
                    $_SESSION["tipo"]="profesor"; 
                    $tipo =  $_SESSION["tipo"]; 
                }
                else{
                    $SQL =  "SELECT * from alumno where Email='$Email'";
                    if ($resultad = $con->query($SQL)){
                        if ($resultad->num_rows > 0){
                            $_SESSION["tipo"]="alumno"; 
                            $tipo = $_SESSION["tipo"];
                        }
                    }
                }
            }

            if (isset($tipo)){
                if (($tipo=="profesor") or ($tipo == "alumno")){
                    $SQL =  "SELECT * from recuperar_clave where Email='$Email'";
                        if ($resultad = $con->query($SQL)){
                            if ($resultad->num_rows > 0){
                                $SQL="UPDATE recuperar_clave SET codigo='$codigo' where Email='$Email'";
                                    if(!$error= $con-> query($SQL)){
                                        echo $con->error;
                                    }
                            }else{
                                $sql = "INSERT INTO recuperar_clave(Email, codigo) VALUES ('$Email', '$codigo')";
                                if(!$error= $con-> query($sql)){
                                    echo $con->error;
                                }
                            }
                        }
                        $_SESSION['Email'] = $Email;
                        $titulo="codigo de confirmacion";
                        $body="su codigo de confirmacion es $codigo";
                        $location="location: verificar_codigo.php";
                        include("prueba.php");  
                        exit();
                    }
                }
                else{
                    $_SESSION["noexiste"]=1;
                    header ("location: recuperar_contraseña.php");  
                    exit();
                }
?>