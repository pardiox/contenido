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
        $foto = $_SESSION["u"]['foto'];
    
        ?>
        <center>
            <div class="container">
               <?php
                if(isset($_SESSION["tipo"])){
                   echo $_SESSION["tipo"];
                   $_SESSION["tipo"] = "";
                }
               ?>
                <form action="cambiar_foto_verificar.php" method="post">
                   <input type="file" name="foto">
                  <input type="submit" value="enviar">
                </form>
            </div>
        </center>
        
        
        
        <footer>
            
        </footer>
    </body>
</html>