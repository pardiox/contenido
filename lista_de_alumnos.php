
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
    
      
      <?php
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: login.php");
    }
include "conexion.php";
$sql =  "SELECT * FROM alumnos_verificados where verificaciones LIKE '0%'";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){

        $curso=$fila["curso"];
        $materia=$fila["materia"];
         $Email=$fila["Email"];
          $_SESSION["u"]['materia']=$materia;
      if($materia !='0' ){
echo "



        <table>
           <tr>
           
              <td>
             
            ". $Email."
</td>

             
            ".  $curso."
</td>
          <td>
             
            ".  $materia."
</td> 
<td>
<a href='verificado_denegado.php?Email=$Email & materia=$materia'> <button>denegar</button></a> </td>
<td>
<a href='verificado_alumno.php?Email=$Email'> <button>verificar</button></a> </td>
          </tr>
      
        </table>

";
          

        

}}

 
}
?>
<div class="footer">
    facebook
</div>
    <script>
                 alert("verifica a tus alumnos asi podran ver tu contenido subido"); 
            </script>
</body>
</html>