
<html>
   <head>
      <title>verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloperfil2.css">
	 </head>

<body>
  <header>
    <center>
        <h1>E.E.S.T.N°14</h1>
        <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
    </center>
  </header>
  <table>
    <tr>
       <td>nombre</td>
       <td>curso</td>
    </tr>
  <?php
session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: index.php");
    }
include "conexion.php";
$sql =  "SELECT * FROM alumno";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){
        $nombre=$fila["nombre"];
        $apellido=$fila["apellido"];
        $curso=$fila["curso"]; 
        $Email=$fila["Email"];
echo"
 <tr>     
     <td>       
       ".$nombre.", ".  $apellido."
     </td>
     <td>
       ". $curso."
     </td>  
     <td>
        <a href='eliminar_alumno.php?Email=$Email'> <button>eliminar</button></a> 
     </td>
 </tr>
";
}
}
?>
</table>
<div class="footer">
    facebook
</div>
</body>
</html>