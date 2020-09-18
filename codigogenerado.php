

<html>
   <head>
      <title>Verificacion</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
      <link rel="stylesheet" type="text/css" href="css/header.css">
   </head>
<html lang="en">
<head>

    <title>codigo</title>


</head>
<body>
 <header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="perfil_admin.php">inicio</a>
				<a href="admin_alumnos.php">alumnos</a>
				<a href="admin.contenido.php">contendio</a>
				<a href="cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>

    
       <center>
      <p>Codigo generado</p> 
       	 	</center>

      <?php
 session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: index.php");
    }
 function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrs';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
$cod= generarCodigo(6);

       ?>
    	
  <form action='codigogeneradoverificado.php' method='post' class='form-register'>   
<center>
<input  type='email' placeholder='Email' name='email' class="minusc"> 
<br>  
<?php echo "<input  type='codigo' value=".$cod." name='codigo'  class='minusc'>";?> 
<br>  
<input type='submit' value='aceptar' class='button'>
      </center>
</form>
<div class="footer">
    facebook
</div>
    
</body>
    
</html>
