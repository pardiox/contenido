<html>
    <head>	
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>

        <p>ingresa tu correo electronico o nombre de usuario</p>
        <form action="enviar_codigo.php" metod="post">
            <input type="text" value=""placeholder="Email" name="Email">
            <input type="submit" value="enviar">
        </form>    
        <?php
        session_start();
        if ((isset($_SESSION["noexiste"])) && ($_SESSION["noexiste"]==1)){
            $_SESSION["noexiste"]=0;
            echo "el email no existe";
        }
        ?>
    </body>
</html>