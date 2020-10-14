   <?php
    include "../conexion.php";
    session_start();
    if ($_SESSION["u"]['sesion']!="s.p"){
            header ("location: login.php");
    }
    $nombre= $_SESSION["u"]['nombre'];
    $apellido=  $_SESSION["u"]['apellido'];
    $Email=$_SESSION["u"]['Email'];
   ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    
    <title><?php echo $nombre, $apellido;?></title>
    
    <link rel="stylesheet" href="../css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/inicio_prof.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    
</head>
<body>
<header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="">Reporte</a>
				<a href="">Ajustes</a>
				<a href="">Ayuda</a>
				<a href="../cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>
    
    <div class="contenedor_principal row center-xs">
    <div class="bienvenido">
    <h1 class="col-xs-12">Bienvenido, <?php echo $nombre .' '.  $apellido;?></h1>
    </div>
     
      <div class="cuadros col-xs-12">
        <div class="row center-xs">   
            <div class="opciones alumnos col-xs-11 col-lg-4">
             
               <a href="lista_de_alumnos.php" blank="target" >
                <h2>Alumnos</h2>
                <p class="texto_alumnos">En esta ventana se administra la lista de todos los Estudiantes que tenga a su cargo. <br>
                Podrá aceptar o denegar peticiones de ingreso hacia alguna materia que imparta o eliminarlos de la misma.</p>
                </a>
                
            </div>
        
            <div class="opciones clases col-xs-11 col-lg-4">
               

                <a href="../profesor/clases.php">
                <h2>Trabajos enviados</h2>
                <p class="texto_clases">Aqui dentro podra ver todos los trabajos practicos enviados de sus difentes cursos y materias, o del mismo modo fijarse en cual no envio.</p>
                </a>
                <div class="fondo">
                </div>
            </div>  
        </div>
        <div class="row center-xs">
            <div class="opciones cargar_clase col-xs-11 col-lg-4">
             
               <a href="formulario_profesor.php">
                <h2>Subir trabajos</h2>
                <p class="texto_cargar">¿desea enviar una actividad?. <br><br> bueno solo entra compla los campos y todos los estudiantes del año seleccionado se le notificara y recibiran el trabajo</p>
                </a>
                 <div class="fondo">
                </div>
            </div>
        
            <div class="opciones indefinido col-xs-11 col-lg-4 ">
              
               <a href="">
                <h2>administracion</h2>
                <p> Administra la cantidad de trabajos subidos, si los alumnos tienen alguna duda, o si recibio alguna respuesta por parte de los administradores</p>
                </a>
                <div class="fondo">
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <div class="footer row center-xs">
        <footer class="col-xs-12">
            <h3>Feisbuk</h3>
        </footer>
    </div>  
</body>
</html>