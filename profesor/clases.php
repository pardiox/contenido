                <?php
                    include "../conexion.php";
                    session_start();
                    if(isset($_REQUEST["curso"])){
                     $curso=$_REQUEST["curso"];
                     $materia=$_REQUEST["materia"];
                        echo $curso;
                        echo $materia;
                    $Email=$_SESSION["u"]['Email'];
                     $sql =  "SELECT * FROM contenido where Email='$Email' and curso='$curso' and materia='$materia'";
                        
                     if ($resultado = $con->query($sql)){
                        if ($resultado->num_rows > 0){
                             $fila=$resultado->fetch_assoc();
                         $fecha_de_entrega =$fila["fecha_de_entrega"];
                         $titulo =$fila["titulo"];
                         $contenido =$fila["contenido"];
                         $bibiografia=$fila["bibiografia"];
                        
                         
                     
                        }else{
                            $titulo="TITULO";
                            $fecha_de_entrega="FECHA DE ENTREGA";
                            $contenido="<h2>aqui se veran sus trabajos, que espera a publicar algo¿? <br> hola</h2>";
                            $bibiografia="y aca de donde los alumnos se pueden guiar para estudiar";
                        }
                     }}
                    

/*
                    $Email=$_SESSION["u"]['Email'];
                        $sql =  "SELECT * FROM cursos_y_materia where profesor='$Email'";
                        if ($resultad = $con->query($sql)){
                        while ($fila = mysqli_fetch_array($resultad)){ 
                        $curso =$fila["curso"];
                        $materia=$fila["materia"];
                        echo " <p> $curso, $materia </p>";
                          }}*/
                            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    
    <link rel="stylesheet" type="text/css" href="../css/estilo_clase.css">
    <link rel="stylesheet" type="text/css" href="../css/flex/flexboxgrid.min.css">
</head>
<body>
       <script type="text/javascript" src="../js/jquery.min.js"></script>

    <header class="header">hola</header>
    
    <div class="contenedor_principal row">
        <div class="barra_lateral col-xs-12 col-md-3">
            <div class="arriba row center-xs">
               <div class="row center-xs">
                    <h2>Cursos</h2>
                </div>
                <div class="row center-xs">
                    <form action="">
                       
                        <input type="text" placeholder="Año" class="col-xs-3" id="caja_busqueda">
                      

                        <input type="text" placeholder="Materia" class="col-xs-8">
                    
                    </form>
                </div>
            </div>
            <div class="medio row center-xs middle-md">
                <div class="cursos col-md-12">
                <div id="datos"></div>
                <div id="datos1"></div>
                         
                </div>
            </div>
            <div class="abajo row start-xs">
               <div class="opciones col-xs-12">
                <a href="">hola</a>
                <a href="">hola</a>
                <a href="">Configuración</a>
                <a href="">Cerrar Sesión</a>
                </div>
            </div>
        </div>
        
        <div class="contenido col-xs-12 col-md-9">
            <div class="row center-xs between-md">
                <div class="fecha col-md-2">
                    <p>fecha de subida</p>
                </div>
                <div class="titulo col-md-4">
                    <p><?php echo $titulo; ?></p>
                </div>
                <div class="fecha_entrega col-md-2">
                    <p><?php echo $fecha_de_entrega; ?></p>
                </div>
            </div>
            <div class="row center-xs">
               
                <div class="consigna col-xs-12">
                    <p> <?php echo $contenido; ?></p>
                </div>
                <div class="biliografia col-xs-7">
                    <p><?php echo $bibiografia; ?></p>
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