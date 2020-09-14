<?php
//trae la conexion
include "conexion.php";
// me permite trabajar con caracteres españoles
$acentos = $con -> query("SET NAME 'UTF 8'");
//selecciona todos los datos de la tabla categoria
$sql = "SELECT * FROM profesor";
//verifica y ejecuta las "SQL"
if (!$respuesta = $con->query ($sql)){
	//si algo esta mal lo informa
	echo 'con->error';
}
session_start();
  if( $_SESSION["u"]['sesion'] != "s.a"){
    header ("location: login.php");
    }
?>

<html>
   <head>
      <title>Formulario</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloperfil.css">
	 </head>

<body>
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
       <img src="img/logo.png" width="50px" height="auto">
        </center>
   </header>
    
	<?php
    
 
echo "<center><h2>Bienvenido  </br></h2> </center>" ;
     ?>
       <center>
           <?php
echo $_SESSION["u"]['nombre'];
        echo" ";
echo $_SESSION["u"]['apellido'];
  $curso = $_SESSION["u"]['curso'];

$sql =  "SELECT * FROM contenido  WHERE curso='$curso'";
if ($resultado = $con->query($sql)){
while ($fila = mysqli_fetch_array($resultado)){
      $titulo=$fila["titulo"];
        $materia=$fila["materia"];
echo "
        <table>
           <tr>
              <td>
            ".$titulo."
               </td>
              <td>".$materia."</td>               
<td>
<a href='ver_contenido.php?materia=$materia & titulo=$titulo  '><button>ver contenido </button>
</a>
</td>
</tr>
</table>

";
        ?>
    </center>
    <?php
    }}
    ?>
    
    
      <form action='cerrar_sesion.php' method='post' class='form-register'>
 	<input type='submit' value='cerrra sesion' class='boton' name='cerrar'>
 
       
<div class="footer">
    facebook
</div>
    
</body>
</html>
