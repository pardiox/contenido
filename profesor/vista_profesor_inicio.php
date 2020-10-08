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
    <h1 class="col-xs-12">Bienvenido, <?php echo $nombre, $apellido;?></h1>
    </div>
     
      <div class="cuadros col-xs-12">
       
        <div class="row center-xs">   
            <div class="opciones alumnos col-xs-11 col-lg-4">
             
               <a href="lista_de_alumnos.php" blank="target" >
                <h2>Alumnos</h2>
                <p class="texto_alumnos">En esta ventana se administra la lista de todos los Estudiantes que tenga a su cargo. Podrá aceptar o denegar peticiones de ingreso hacia alguna materia que imparta o eliminarlos de la misma.</p>
                </a>
                
            </div>
        
            <div class="opciones clases col-xs-11 col-lg-4">
               

                <a href="../profesor/clases.php">
                <h2>Clases</h2>
                <p class="texto_clases">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus temporibus fuga beatae voluptates qui nihil id ad dolor maiores, sint velit nemo dicta rerum alias cumque ipsa perspiciatis in architecto!</p>
                </a>
                <div class="fondo">
                </div>
            </div>  
        </div>
        <div class="row center-xs">
            <div class="opciones cargar_clase col-xs-11 col-lg-4">
             
               <a href="formulario_profesor.php">
                <h2>Cargar Clases</h2>
                <p class="texto_cargar">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum est delectus, ipsam optio, repellendus sed laboriosam dignissimos molestias autem suscipit numquam quaerat asperiores rerum cumque omnis maiores minima. Alias, provident.</p>
                </a>
                 <div class="fondo">
                </div>
            </div>
        
            <div class="opciones indefinido col-xs-11 col-lg-4 ">
              
               <a href="">
                <h2>????</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, sequi. Deserunt libero ratione saepe autem sapiente accusantium dolorem id ex, harum nihil qui, nesciunt culpa doloribus rem reprehenderit voluptate non.</p>
                </a>
                <div class="fondo">
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <footer></footer>
</body>
</html>