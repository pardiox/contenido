<html>
    <head>
        
    </head>
    <body>
        <header>
             <a href="configuracion.php"><p>atras</p></a>
        </header>
        <?php
        session_start();
        include "../conexion.php";
        $nombre = $_SESSION["u"]['nombre'];
        $apellido = $_SESSION["u"]['apellido'];
        ?>
        <center>
            <div class="container">
               <?php
                if(isset($_SESSION["tipo"])){
                   echo $_SESSION["tipo"];
                   $_SESSION["tipo"] = "";
                }
               ?>
                <form action="cambiar_nombre_verificar.php" method="post">
                    <p>Nombre:</p>
                    <input type="text" name="nombre" value="<?php echo $nombre;?>" required>
                    <p>apellido:</p>
                    <input type="text" name="apellido" value="<?php echo $apellido;?>" required>
                    <p>contraseña:</p>
                    <input type="text" name="clave" placeholder="contraseña" required>
                    <input type="submit" value="enviar" class="btn" class="boton">
                </form>
            </div>
        </center>
        
        
        
        <footer>
            
        </footer>
    </body>
</html>