<?php
//trae la conexion
include "conexion.php";
session_start();

  if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: index.php");
    }
$curso=  $_SESSION["u"]['curso'];
$materia=$_SESSION["u"]['materia'];

// me permite trabajar con caracteres españoles
$acentos = $con -> query("SET NAME 'UTF 8'");
//selecciona todos los datos de la tabla categoria
$sql = "SELECT * FROM contenido";
//verifica y ejecuta las "SQL"
if (!$respuesta = $con->query ($sql)){
	//si algo esta mal lo informa
	echo 'con->error';
}
if( empty($materia) or empty($curso) ){
    $curso =$_REQUEST['curso']; 
  $materia =$_REQUEST['materia'];

}else 
    if( empty($materia) or empty($curso) ){

header("Location: perfil_profesor.php");
exit();}

?>

<html>
   <head>
      <title>Proyecto</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin1.css">
	      <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
<body>
     <div class="parte1">
	<header>
         <center>
          <h1>E.E.S.T.N°14</h1>
     <a href="cerrar_sesion.php">  <img src="img/logo.png" width="50px" height="auto"></a>
       
        </center>
   </header>
	 <center>
	 <form action="guardar.php" method="get">
	 
	     <div>
		 <input type="text" placeholder="&#128100; titulo" name="titulo"/>
		 </div>
       <div>
		 <input id="material" type="text" placeholder="&#128100; Presentacion"name='material'/>
		 </div>
		 
		 <div>
		 <input type="text" placeholder="&#128100; contenido" name="links"/>
		 </div>
         
		 <div>
		 <input type="text" placeholder="&#128100; links" name="planes_estudio"/>
		 </div>
		 <div>
		 <input type="date" placeholder="&#128100; fecha de entraga" name="mod_examenes"/>
		 </div>
         	 <div>
                	<input type="submit" value="ingresar" class="boton">
             </div>
         <br>
         <br>
               <br> 

	</form>
         <div class="footer">
    facebook
</div>
         </center>
         <footer>
         <div>
             
         </div>
         </footer>
	</div> 
</body>
</html>
