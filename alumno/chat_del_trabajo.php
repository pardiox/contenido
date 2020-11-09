<?php
include "../conexion.php";
session_start();

$nombre = $_SESSION["u"]['nombre'];
$apellido = $_SESSION["u"]['apellido'];
$curso = $_SESSION["u"]['curso'];
$Email = $_SESSION["u"]['Email'];
$cod_trabajo=$_REQUEST['cod_trabajo'];;
 $_SESSION["u"]['cod_trabajo'] = $cod_trabajo;

?>
<html>
    <head></head>
    <body>
        <header></header>
        
        <div class="contendor">
                <?php
            
                 $sql =  "SELECT * FROM chat where cod_trabajo='$cod_trabajo'";
            
                    if ($resultad = $con->query($sql)){
                    while ($fila = mysqli_fetch_array($resultad)){
                    
                $nombre_mensaje=$fila["nombre"];
                $mensaje=$fila["mensaje"];
                $fecha=$fila["fecha"];
                $Email_mensaje=$fila["Email"];
                $id=$fila["id_mensaje"];
                if($Email_mensaje==$Email){
                    echo "<div class='mensaje_enviados'>";
                    $nombre_mensaje="TU";
                }else{
                     echo "<div class='mensaje_recibido'>";
                }
                ?>
                
                    <p><?php echo $nombre_mensaje;?></p>
                    <p><?php echo $mensaje;?></p>
                    <p><?php //echo $fecha;?></p>
                </div>
               
                <?php }}?>
                
                
                <div class="enviar mensaje.php">
                    <form action="enviar_mensaje.php" metod="post">
                        <textarea name="mensaje"></textarea>
                    <input type="submit" value="enviar">
                    </form>
                </div>
                                                
        </div>

        <footer></footer>
    </body>
</html> 