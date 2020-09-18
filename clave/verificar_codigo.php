<html>
    <head></head>
    <header></header>
    <body>
  
        <form action="verificar_codigo.php" metod="post">
            <input type="text" placeholder="codigo" name="codigo">
            <input type="submit" value="enviar">
        </form>   
        
<?php
        if(isset($_REQUEST['codigo'])){
             session_start();
             $codigo=$_REQUEST['codigo'];
             include "../conexion.php";
             $Email=$_SESSION["Email"]; //v
             $sql =  "SELECT * FROM recuperar_clave where Email='$Email' and codigo='$codigo'";
             if ($resultad = $con->query($sql)){
             while ($fila = mysqli_fetch_array($resultad)){
             $_SESSION["id"]=$fila["id"];
             
             header ("location: cambiar_contraseña.php");
        }}}
?>
    </body>
</html>