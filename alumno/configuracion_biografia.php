<html>
    <head>
        
    </head>
    <body>
        <header>
             <a href="editar_perfil.php"><p>atras</p></a>
        </header>
        <?php
        session_start();
        include "../conexion.php";
        $biografia = $_SESSION["u"]['biografia'];
       
        ?>
        <center>
            <div class="container">
               <?php
                if(isset($_SESSION["tipo"])){
                   echo $_SESSION["tipo"];
                   $_SESSION["tipo"] = "";
                }
               ?>
                <form action="cambiar_biografia_verificar.php" method="post">
                   <p>biografia:</p>
                    <input type="text" name="biografia" value="<?php echo $biografia;?>" required>
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