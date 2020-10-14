<?php
//trae la conexion

include "../conexion.php";
session_start();

$nombre = $_SESSION["u"]['nombre'];
$apellido = $_SESSION["u"]['apellido'];
$curso = $_SESSION["u"]['curso'];
$verifiado =$_SESSION["u"]['verificado'];
if( $_SESSION["u"]['sesion'] != "s.a"){
  header ("location: ../index.php");
}
?>

<html>
   <head>
      <title>Perfil</title>  
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estiloperfil.css">
	  <link rel="stylesheet" type="text/css" href="../css/flex/flexboxgrid.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 </head>

<body>
  
     <header>
               <div class="header ">
                   <div id="main">
                     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
                   </div>
                   <a href="../cerrar_sesion.php"> cerrar sesion </a>
         </div>
	</header>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Clases</a>
  <a href="#" name="tarea">Tareas pendientes</a>
  <a href="perfil_alumno.php">perfil</a>
  <a href="configuracion.php">configuracion</a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <a href="../cerrar_sesion.php">cerrar sesion</a>
</div>
<div class="body">
<?php
     $sql =  "SELECT * FROM cursos_y_materia where curso='$curso'";
            
        if ($resultad = $con->query($sql)){
            while ($fila = mysqli_fetch_array($resultad)){

                $materia=$fila["materia"];
                $Email=$fila["profesor"];
                $sq =  "SELECT * from profesor where Email='$Email'";
                if ($resultado = $con->query($sq)){
                    if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $nombre=$fila["nombre"];
                        $apellido=$fila["apellido"];
                    }else{
                        $nombre="no hay profesor";
                        $apellido="en esta materia";
                    }
                }
                $sq =  "SELECT * from contenido where Email='$Email' and materia='$materia'";
                if ($resultado = $con->query($sq)){
                    if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $fecha_de_subida=$fila["fecha_de_subida"];
                        $fecha_de_entrega=$fila["fecha_de_entrega"];
                    }else{
                        $fecha_de_subida="pronto habran nuevos trabajos";
                        $fecha_de_entrega="";
                    }
                }
?>

        <a href="ver_contenido.php?Email=<?php echo $Email;?> & materia=<?php echo $materia;?>">
            <div class="materia" >
                <h2><?php echo $materia; ?> </h2>
                <p><?php echo $nombre, " ", $apellido; ?></p>
                <p><?php echo $fecha_de_subida, " ", $fecha_de_entrega; ?></p>
            </div>
            
        </a>

<?php }} ?>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   </div>
    </body></html>    
