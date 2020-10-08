
<html>
   <head>
      <title>verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloadmincontendio.css">
      <link rel="stylesheet" type="text/css" href="css/header.css">
      <link rel="stylesheet" type="text/css" href="css/estilofooterchico.css">
      <link rel="stylesheet" type="text/css" href="css/estiloadminalumnos.css">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
	 </head>

<body>
<header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="perfil_admin.php">inicio</a>
				<a href="codigogenerado.php">codigo</a>
				<a href="admin.contenido.php">contendio</a>
				<a href="../cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>

	   		<script> 
            $(document).ready(function(){

	$(window).scroll(function(){
		if( $(this).scrollTop() > 100 ){
			$('header').addClass('header2');
		} else {
			$('header').removeClass('header2');
		}
	});

});
        </script>
         <p class="titulo">
         En esta pestaña podra ver en una tabla las tareas/trabajos/consignas subidas a la plataforma por los profesores.
         separado en columnas por nombre y apellido del profesor, materia del contendio, curso, y titulo del trabajo.
         para acceder a el solo tiene que dar click en "ver". si el contendio no le parece adecuado o hay algo mal, podra eliminarlo presionando en "eliminar" segido enviarle un E-mail al profesor de porque su tarea fue borrada
         </p>
  <table>
    <tr class="tabla-arriba">
       <td class="tabla-arriba__profesor">nombre</td>
        <td class="tabla-arriba__profesor">apellido</td>
       <td>curso</td>
    </tr>
  <?php
session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: ../index.php");
    }
include "../conexion.php";
$sql =  "SELECT * FROM alumno";
if ($resultado = $con->query($sql)){
    while ($fila = mysqli_fetch_array($resultado)){
        $nombre=$fila["nombre"];
        $apellido=$fila["apellido"];
        $curso=$fila["curso"]; 
        $Email=$fila["Email"];
?>
 <tr class='cuerpo'>     
     <td class='hi' class='tabla-arriba__profesor'>       
       <?php echo $nombre?>
     </td>
     <td class='hi' class='tabla-arriba__profesor'>       
       <?php echo $apellido?>
     </td>
     <td class='hi' >
      <?php echo $curso;?>
     </td>  
    <td class='hi__boton'>
        <a href='admin_perfil_alumno.php'.php?Email=<?php echo $Email;?>'> <button>perfil</button></a> 
     </td>
     <td class='hi__boton'>
        <a href='admin_eliminar_alumno.php?Email=<?php echo $Email;?>'> <button>eliminar</button></a> 
     </td>
 </tr>
<?php
}
}
?>
</table>
 <div class="footer">
    <div id="box">
        <span class="txt"> <p class="p">no pases el mous por aca</p>
        
        <p class="p">no pases el mous por aca</p>
        <p class="p">no pases el mous por aca</p><p class="p">no pases el mous por aca</p>
        <p class="p">no pases el mous por aca</p>
        
        
        </span>

  
</div>
    </div>
</body>
</html>