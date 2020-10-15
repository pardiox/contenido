<html>
    <head></head>
    <header></header>
    <body>
        <?php
        session_start();
        include "../conexion.php";
        if(isset($_REQUEST["clave1"])){
        if ($_REQUEST["clave1"] == $_REQUEST["clave2"]){
            $Email= $_SESSION["Email"];
            $clave = $_REQUEST["clave1"];
            $tipo =$_SESSION["tipo"];
            
            if(isset($tipo)){
            if ($tipo=="profesor"){
                $nueva_clave = password_hash($clave, PASSWORD_DEFAULT, ['cost'=> 10]);
                $SQL="UPDATE profesor SET password='$nueva_clave' where Email='$Email'"; 
                if(!$error= $con-> query($SQL)){
                    echo $con->error;
	            }
                else{
                    echo "contraseña cambiada con exito";
                    exit();
	           }
            }else 
            if ($tipo=="alumno"){
                            $nueva_clave = password_hash($clave, PASSWORD_DEFAULT, ['cost'=> 10]);
                            $SQL="UPDATE alumno SET password='$nueva_clave' where Email='$Email'"; 
                            if(!$error= $con-> query($SQL)){
                                echo $con->error;
                            }
                            else{
                                echo "contraseña cambiada con exito";
                                exit();
                            }
            }}else{
                echo "email no existe";
            }
                
        }else{
        echo "las contraseña no coinciden";
        }}
        
        ?>
        <form action="cambiar_contraseña.php">
            <input type="text" placeholder="nueva contraseña" name="clave1">
            <input type="text" placeholder="repetir contraseña" name="clave2">

            <input type="submit" value="enviar">
        </form>
    </body>
</html>