
<html>
    <head>
      <title>verificar</title>  
	  <!--comentario-->
	  
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloadmincontendio.css">
      <link rel="stylesheet" type="text/css" href="css/header.css">
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      
      
    </head>
 
   <header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="perfil_admin.php">inicio</a>
				<a href="codigogenerado.php">codigo</a>
				<a href="admin_alumnos.php">alumnos</a>
				<a href="../cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>
 <body>
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
    <center>
    
         <p class="titulo">
         En esta pestaña podra ver en una tabla las tareas/trabajos/consignas subidas a la plataforma por los profesores.
         separado en columnas por nombre y apellido del profesor, materia del contendio, curso, y titulo del trabajo.
         para acceder a el solo tiene que dar click en "ver". si el contendio no le parece adecuado o hay algo mal, podra eliminarlo presionando en "eliminar" segido enviarle un E-mail al profesor de porque su tarea fue borrada
         </p>
     </center>
     <table>
        <tr class="tabla-arriba">
          <td class="tabla-arriba__profesor">Profesor</td>
          <td class="tabla-arriba__materia">Materia</td>
          <td>Curso</td>
          <td class="tabla-arriba__titulo">Titulo</td>
        </tr>
        <?php
        include "../conexion.php";
        session_start();
         
        if( $_SESSION["u"]['sesion'] != "s.admin"){
           header ("location: ../index.php");
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
        ?>
            <tr class='cuerpo'>
            
                <td class='hi' class='tabla-arriba__profesor'>
                    <?php echo $apellido, " ", $nombre;?> 
                </td>
            
                <td class='hi' class='tabla-arriba__materia'>
                    <?php echo $materia?>
                </td>
            
                <td class='hi'>
                    <?php echo $curso?>
                </td>
                
                <td class='hi' class='tabla-arriba__titulo'>
                    <?php echo $titulo?>
                </td>
                
                <td class='hi__boton'>
                    <a href='editar.php?cod_trabajo=$cod_trabajo'>
                        <button> ver </button>
                    </a>
                </td>
                
                <td class='hi__boton'>
                    <a href='eliminar.php?Email=$Email & curso=$curso & materia=$materia'>
                        <button>eliminar </button>
                    </a>
                </td>
            </tr>
            <?php
            }}}}
            ?>
     </table>
 <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
           <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
         <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>
          <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P> <P>sdadsadsadsadsadhsaudhsadasdjsakdjaskd</P>

<div class="footer">
<p>para mas informacionS</p>
</div>
</body>
</html>