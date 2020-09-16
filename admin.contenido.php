
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
       <center>
           <p class="titulo">
           En esta pestaña podra ver en una tabla las tareas/trabajos/consignas subidas a a plataforma por los profesores.
           separado en columnas por nombre y apellido del profesor, materia del contendio, curso, y titulo del trabajo.
           para acceder a el solo tiene que dar click en "ver". si el contendio no le parece adecuado o hay algo mal, podra eliminarlo presionando en "eliminar" segido enviarle un E-mail al profesor de porque su tarea fue borrada
           </p></center>
       <table>
        <tr class="tabla-arriba">
        <td>Profesor</td>
        <td>Materia</td>
        <td>Curso</td>
        <td>Titulo</td>
        </tr>
        
      <?php
include "conexion.php";
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: login.php");
    }
$sql =  "SELECT * FROM contenido";
if ($resultad = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultad)){
      $cod_trabajo=$fila["cod_trabajo"];
      $titulo=$fila["titulo"];
      $materia=$fila["materia"];
      $curso=$fila["curso"];
      $Email=$fila["Email"];
      $sql =  "SELECT * FROM profesor where Email='$Email'";
      if ($resultado = $con->query($sql)){
      while ($fila = mysqli_fetch_array($resultado)){
      $nombre=$fila["nombre"];
      $apellido=$fila["apellido"];
      echo "
      <tr class='cuerpo'>
         <td class='hi'>
             ".$apellido. " ".$nombre."
         </td>
         <td class='hi'>
            ".$materia."</td>
         <td class='hi'>
            ".$curso."
         </td class='hi'>
         <td class='hi'>
            ".$titulo."
         </td>
         <td class='hi__boton'>
<a href='editar.php?cod_trabajo=$cod_trabajo'><button> ver </button></a></td>
<td class='hi__boton'><a href='eliminar.php?Email=$Email & curso=$curso & materia=$materia'><button>eliminar </button></a></td>
          </tr>
      
 

";
          

        


}}}}
?>
       </table>


<div class="footer">

</div>
    
</body>
</html>