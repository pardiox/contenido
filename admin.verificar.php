
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
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: login.php");
    }
include "conexion.php";
$sql =  "SELECT * FROM materia where verificado LIKE '0%'";
if ($resultado = $con->query($sql)){
      //  $fila=$resultado->fetch_assoc();
    while ($fila = mysqli_fetch_array($resultado)){
      $verificado=$fila["verificado"];
        $_SESSION['verificado']=  $verificado;
        $curso=$fila["curso"];
        $nombre_materia=$fila["nombre_materia"];
        $Email=$fila["Email"];
         $cod_materia=$fila["cod_materia"];
echo "


<html>
    <head>
       
    </head>
    <body>
        <table>
           <tr>
           
              <td>
             
            ".$curso."
</td>
              <td>".$nombre_materia."</td>
                      <td>
             
            ".$Email."
</td>

<td><button  onclick='ConfirmDemo(". $cod_materia .")' value='h'  >verificar </button></td>
          </tr>
      
        </table>
    </body>
</html>

";
          

        


}
 
}
?>
    <script>
                 alert("aqui podra ver los profesores registrados y eliminarlos"); 
            </script>
      <script type="text/javascript">
function ConfirmDemo(cod_materia) {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Estas seguro que deseas verificar?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
    
alert("materia verificada");
      window.location="verificado.php?cod_materia="+cod_materia;
}
//Detectamos si el usuario denegó el mensaje
else {
alert("¡Haz denegado el permiso!");
}
}
          var d = new Date();

document.write(d.getDate(),'/', d.getMonth(),'/', d.getYear());
</script>
<div class="footer">
    facebook
</div>
    
</body>
</html>