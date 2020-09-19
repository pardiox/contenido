<?php
//trae la conexion

include "conexion.php";
session_start();

if( $_SESSION["u"]['sesion'] != "s.a"){
  header ("location: index.php");
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

       <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    <center>
	<?php
        include "confirmar_verificado.php";

echo "<h2>Bienvenido  </br></h2> " ;
       
echo $_SESSION["u"]['nombre'];
        echo" ";
echo $_SESSION["u"]['apellido'];
        
  $curso = $_SESSION["u"]['curso'];
  $Email = $_SESSION["u"]['Email'];
        ?>
    </center>
    <?php
        echo $curso;
        echo $Email;
$sql =  "SELECT * FROM alumnos_verificados WHERE curso='$curso' and Email='$Email' and verificacion='1'";
if ($resultad = $con->query($sql)){
while ($fila = mysqli_fetch_array($resultad)){
    
$materia=$fila["materia"];
$sql =  "SELECT * FROM contenido  WHERE curso='$curso' and materia='$materia'";
if ($resultado = $con->query($sql)){
while ($fila = mysqli_fetch_array($resultado)){
      $titulo=$fila["titulo"];
        $materia=$fila["materia"];
        $cod_trabajo=$fila["cod_trabajo"];
    
    
echo "
        <table>
           <tr>
              <td>
            ".$titulo."
               </td>
              <td>".$materia."</td>               
<td>
<a href='ver_contenido.php?cod_trabajo=$cod_trabajo'><button>ver contenido </button>
</a>
</td>
</tr>
</table>


";
    }}}}
    ?>
    
    
       
<div class="footer">
    facebook
</div>
  
</body>
</html>
