<html>
    <head>	
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="estilo.css">
    </head>
    <body>

        <p class="mensaje">ingresa tu correo electronico o nombre de usuario</p>
        <form action="enviar_codigo.php" metod="post">
            <input class="content__form" type="text" value=""placeholder="Email" name="Email">
            <input class="button" type="submit" value="enviar">
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