                <?php
                    include "../conexion.php";
                    session_start();
                    $curso_actual="";
                    $materia_actual=""; 
                    $profesor = $_SESSION["u"]['Email'];
                $fecha_de_subida="fecha_de_subida";
                        $titulo="TITULO";
                        $fecha_de_entrega="FECHA DE ENTREGA";
                        $contenido="<h2>aqui se veran sus trabajos, que espera a publicar algo¿?";
                        $bibiografia="y aca de donde los alumnos se pueden guiar para estudiar";

                    if(isset($_REQUEST["curso"])){
                     $curso_actual=$_REQUEST["curso"];
                     $materia_actual=$_REQUEST["materia"];
                     $Email=$_SESSION["u"]['Email'];
                        
                     $sql =  "SELECT * FROM contenido where Email='$Email' and curso='$curso_actual' and materia='$materia_actual'";
                        
                     if ($resultado = $con->query($sql)){
                        if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                         $fecha_de_entrega =$fila["fecha_de_entrega"];
                         $titulo =$fila["titulo"];
                         $contenido =$fila["contenido"];
                         $bibiografia=$fila["bibiografia"];
                         $fecha_de_subida = date('Y/m/d');
            
                        }
                     }}else if(isset($_REQUEST["codigo"])){
                     $curso_actual=$_REQUEST["cursoactual"];
                     $materia_actual=$_REQUEST["materiaactual"]; 
                      $codigo = $_REQUEST["codigo"];
                        $sql =  "SELECT * FROM contenido where cod_trabajo='$codigo'";
                        
                     if ($resultado = $con->query($sql)){
                        if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                         $fecha_de_entrega =$fila["fecha_de_entrega"];
                         $titulo =$fila["titulo"];
                         $contenido =$fila["contenido"];
                         $bibiografia=$fila["bibiografia"];
                         $fecha_de_subida = date('Y/m/d');
            
                        }
                     }
                    }
                    
                    
                            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    
    <link rel="stylesheet" type="text/css" href="../css/estilo_clase.css">
    <link rel="stylesheet" type="text/css" href="../css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
       <script type="text/javascript" src="../js/jquery.min.js"></script>

    <header>
   
		<div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
			    <a href="vista_profesor_inicio.php">inicio</a>
				<a href="formulario_profesor.php">formulario</a>
				<a href="lista_de_alumnos.php">alumnos</a>
				<a href="../cerrar_sesion.php">cerrar sesion</a>
			</nav>
		</div>

	</header>
    
    <div class="contenedor_principal row">
        <div class="barra_lateral col-xs-12 col-md-3">
            <div class="arriba row center-xs">
               <div class="barra-h2 row center-xs">
                    <h2>Clases</h2>
                </div>
                <div class="select row center-xs">
                   <select name="curso" id="caja_busqueda" class="curso" class="col-xs-6">
                    <?php
                    $sql =  "SELECT distinct curso FROM cursos_y_materia where profesor='$profesor'";
                       if ($resultado = $con->query($sql)){
                            while ($fila = mysqli_fetch_array($resultado)){
                                $curso=$fila["curso"];   
                            
                                echo "<option> $curso </option>";
                            }}
                    ?>
            
                      
                   </select>
                </div>
            </div>
            <div class="medio row center-xs middle-md">
                <div class="cursos col-xs-12">
                <div id="datos">
                   <?php
        
                    $query = "SELECT * FROM  cursos_y_materia WHERE profesor='$profesor'";
                    $resultado = $con->query($query);
                    if ($resultado->num_rows>0) {
    	            while ($fila = $resultado->fetch_assoc()) {
                    $curso=$fila['curso'];
                    $materia=$fila['materia'];
                    $respuesta = "
                    <a href='clases.php?curso=$curso & materia=$materia'><p class='columna'>
                    $curso $materia
                    </p></a>
                    ";
                    echo $respuesta;
    	           }
                    }
                    $con->close();
    
                    ?>
                </div>  

                </div>
            </div>

        </div>
        
        <div class="contenido col-xs-12 col-md-9">
           <div class="lista-trabajos-arriba " id="lista-trab">    
                    <div class="row center-xs middle-xs top-lista" id="top-lista">
                        <h2>Trabajos</h2>
                    </div>
                    
                    <div class="row center-xs middle-xs fech-trabajos">
                       <div class="-tabla-fecha col-xs-12">
                        <p><?php echo $fecha_de_subida;?></p>
                        </div>
                    </div>
            </div>   
            <div class="row center-xs  between-xs contenido-arriba" id="contenido-arriba">
                <div class="fecha col-xs-3">
                    <p><?php echo "Fecha: ", $fecha_de_subida;?><p>
                </div>
                <div class="titulo col-xs-5">
                    <p><?php echo $titulo; ?></p>
                </div>
                <div class="fecha_entrega col-xs-4">
                    <p><?php echo "Fecha de Entrega: ", $fecha_de_entrega; ?></p>
                </div>
            </div>
            <div class="row center-xs end-md middle-xs contenido-medio">
                <div class="consigna col-xs-12 col-md-9">
                   <div class="row texto-consigna middle-xs">
                    <p> <?php echo nl2br($contenido);?></p>
                    </div>
                </div>
                <div class="lista-trabajos" id="lista-trabajos">
                    <div class="row center-xs middle-xs top-lista">
                        <h2>Trabajos</h2>
                    </div>
                    <div class="row center-xs middle-md fech-trabajos">
                       <div class="tabla-fecha col-xs-12">
                       <?php
                       include "../conexion.php";
                            $sql = "SELECT * FROM  contenido WHERE Email='$profesor' and curso='$curso_actual' and materia='$materia_actual'";
                           
                            if ($resultado = $con->query($sql)){
                                echo "fecha de antiguos trabajos";
                                while ($fila = mysqli_fetch_array($resultado)){
                                    $fecha_subida=$fila['fecha_de_subida'];
                                    $cod_trabajo=$fila['cod_trabajo'];
                                    
                        ?>
                        <p>
                                   <a href="clases.php?codigo=<?php echo $cod_trabajo;?> & materiaactual=<?php echo $materia_actual;?> & cursoactual=<?php echo $curso_actual;?>">
                                   <td><?php echo $fecha_subida;?></td>
                                   </a>
                                   <?php
                                }
                            }?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row center-xs contenido-abajo ">
                <div class="biliografia col-xs-7">
                   <h3>Bibliografía</h3>
                    <a href="<?php echo $bibiografia; ?>"><p><?php echo $bibiografia; ?></p></a>
                </div>
            </div>
        </div>
    </div>
  <script type="text/javascript" src="js/main1.js"></script>
    <footer class="row around-xs middle-xs">
    <p>Facebook</p>
    </footer>
</body>
</html>