
<html>
   <head>
      <title>verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloadmincontendio.css">
	 </head>
<body>
  <header class="header">
      
      
      
        <center>
          <h1 class="header__h1">E.E.S.T.N°14</h1>
   <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    
    <body>
       <center><p class="titulo">tabla del contendio subido por los profesores</p></center>
        <table>
        
        <tr class="tabla-arriba">
        <td>Titulo</td>
        <td>Curso</td>
        <td>Materia</td>
        <td>Email</td>
        </tr>
        
      <?php
include "conexion.php";
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: login.php");
    }
$sql =  "SELECT * FROM contenido";
if ($resultado = $con->query($sql)){
      //  $fila=$resultado->fetch_assoc();
    while ($fila = mysqli_fetch_array($resultado)){
        $cod_trabajo=$fila["cod_trabajo"];
      $titulo=$fila["titulo"];
      $materia=$fila["materia"];
      $curso=$fila["curso"];
      $Email=$fila["Email"];
echo "
<tr class='cuerpo'>
         <td class='hi'>
            ".$titulo."
         </td>
         <td>
            ".$materia."</td>
         <td>
            ".$curso."
         </td>
         <td class='hi'>
           ".$Email."
         </td>
         <td class='hi'>
<a href='editar.php?cod_trabajo=$cod_trabajo'><button>editar </button></a></td>

<td><a href='eliminar.php?Email=$Email & curso=$curso & materia=$materia'><button>eliminar </button></a></td>
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