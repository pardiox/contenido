
<html>
   <head>
      <title>verificar</title>  
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
    
      
      <?php
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: login.php");
    }
include "conexion.php";
    $Email=$_SESSION["u"]['Email'];
    $sql =  "SELECT * FROM materia where Email='$Email' and verificado='1'";
    if ($resultad = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultad)){
        
    $materia=$fila["nombre_materia"];
    $curso=$fila["curso"]; 
    $sql =  "SELECT * FROM alumnos_verificados where curso='$curso' and materia='$materia' and verificacion='0'";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){
        $curso=$fila["curso"];
        $materia=$fila["materia"];
        $Email=$fila["Email"];
        $_SESSION["u"]['materia']=$materia;

        echo"
        <table>
           <tr>
              <td>  
            ". $Email."
              </td>  
              <td>
            ".  $curso."
              </td>
              <td>  
            ".  $materia."
              </td> 
<td>
<a href='verificado_denegado.php?Email=$Email & materia=$materia'> <button>denegar</button></a> </td>
<td>
<a href='verificado_alumno.php?Email=$Email & materia=$materia'> <button>verificar</button></a> </td>
          </tr>
      
        </table>

";
          

        

}}

 
}}
    
    
?>
</body>
</html>