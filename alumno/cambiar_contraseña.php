
  
   <html>
    <head>
         <link rel="stylesheet" type="text/css" href="">
    </head>
    
    <body>
       
        <header>
            <h2>Carpeta virtual</h2>
        </header>
        
        <center>
            <div class="container">
              <?php
                session_start();
              if (isset($_SESSION["tipo"])){
                  echo $_SESSION["tipo"];
                  $_SESSION["tipo"] = "";
              }
              ?>
              <form action="cambiar_contraseña_verificar.php" method="post">
                  <input type="text" name="clave1" placeholder="Ingrese su contraseña actual" required>
                  <input type="text" name="clave2" placeholder="nueva contraseña" required>
                  <input type="text" name="clave3" placeholder="repetir contraseña" required>
                  <input type="submit" value="enviar" class="btn" class="boton">
              </form>
              
              
              
              
              
              
            </div>
        </center>
    </body>
    
</html>