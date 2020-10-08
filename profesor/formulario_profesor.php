<?php
session_start();
include "../conexion.php";
$Email=$_SESSION["u"]['Email'];

if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: ../index.php");
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>



    <link rel="stylesheet" type="text/css" href="../css/formulario_profesor.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    
</head>
<body>
    <header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				<a href="lista_de_alumnos.php">alumnos</a>
				<a href="clases.php">clases</a>
				<a href="#">indifinido</a>
				<a href="../cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>




<div class="container">
    <p>Subir Contenido</p>
            <form action="profesor_contenido_subido.php" method="post">  
    
    <div class="subject">
  
     <input placeholder="Fecha de Entrega" class="input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="fecha_de_entrega" required/>
      
    


    
      
    </div>
    
    
   
    
    <div class="subject">
      <input type="text" placeholder="Titulo" class="input" name="titulo" required>
    
    </div>
    
    
  
                <select class="select" name="curso" id="caja_busqueda" required>
                      <?php
                        $sql =  "SELECT distinct curso FROM cursos_y_materia where profesor='$Email'";
                        if ($resultad = $con->query($sql)){
                        while ($fila = mysqli_fetch_array($resultad)){ 
                        ?>
                        <option type="text" id="caja_busqueda">
                           <?php echo $fila["curso"]; ?>
                        </option>
                            <?php }} ?>
                </select>
            
 <script type="text/javascript">

function showKeyPress(evt)
{
a = evt.keyCode;
    if(a==13){
        var e = "</br>";
       
    }
}

</script>
                <div id="datos"></div>
    
    <div class="msg">
     
      <textarea  class="area" placeholder="Contenido" name="contenido" required onkeypress="showKeyPress(event);"
 onkeydown="keyDown(event);"></textarea>
    </div>
    
    <div class="msg" id="datos">
      <input type="text" placeholder="bibiografia" name="bibiografia" class="input">
    </div>
        <center><input type="submit" value="enviar" class="btn" class="boton"></center>
    </form>
</div>
 

</script>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>