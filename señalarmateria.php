<html>
   <head>
      <title>verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin.css">
	 </head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
  <header>
      
      
      
        <center>
          <h1>E.E.S.T.N°14</h1>
       <img src="img/logo.png" width="50px" height="auto">
       <a href="cerrar_sesion.php">
        </center>
   </header>
      <?php
       if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: login.php");
    }
           ?>
      
      <?php
include "conexion.php";
$sql =  "SELECT * FROM profesor where verificado LIKE '0%'";
if ($resultado = $con->query($sql)){
      //  $fila=$resultado->fetch_assoc();
    while ($fila = mysqli_fetch_array($resultado)){
          session_start();
      $verificado=$fila["verificado"];
        $_SESSION['verificado']=  $verificado;
        $nombre=$fila["nombre"];
        $apellido=$fila["apellido"];
        $Email=$fila["Email"];
echo "


<html>
    <head>
       
    </head>
    <body>
        <table border=\"2px\">
           <tr>
              <td>
             
            ".$nombre."
</td>
              <td>".$apellido."</td>
                      <td>
             
            ".$Email."
</td>
<td><a href='verificado.php?Email=$Email'><button>". $_SESSION['verificado'] ." </button></a></td>
          </tr>
      
        </table>
    </body>
</html>

";
          

        


}
 
}
?>
<div class="footer">
    facebook
</div>
    
</body>
</html>