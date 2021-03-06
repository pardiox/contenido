<?php
//trae la conexion

include "../conexion.php";
session_start();

$nombre = $_SESSION["u"]['nombre'];
$apellido = $_SESSION["u"]['apellido'];
$curso = $_SESSION["u"]['curso'];
$Email = $_SESSION["u"]['Email'];

if (empty($_SESSION["u"]['foto'])){
    $foto="foto_perfil";
}
else{
    $foto = $_SESSION["u"]['foto'];
}
$verifiado =$_SESSION["u"]['verificado'];
$biografia = $_SESSION["u"]['biografia'];

if(empty($biografia)){
    $biografia="hola eres nuevo por aqui¿? <br> agraga en la biografia algo sobre ti para que tus amigos/compañeros te conozcan mas";
}
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
	  <link rel="stylesheet" type="text/css" href="css/header.css">
	  <link rel="stylesheet" type="text/css" href="../css/flex/flexboxgrid.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 </head>

<body>
  
     <header>
        <div class="header ">
            <div id="main">
              <center>
                     <h2>Carpeta virtual</h2>
               </center>
               <button>
                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()" >&#9776; Menu</span>
                </button>
                    
            </div>
            
        </div>
	</header>
	<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <Updated upstream></Updated>
    <a href="configuracion.php">configuracion</a>
    <a href="#">Contact</a>
    <a href="../cerrar_sesion.php">cerrar sesion</a>
</div>
<div class="contenedor-principal row center-xs around-md">
   
    <div class="perfil col-xs-11 col-md-4" id="perfil">
       
        <div clas="foto">
           
            <img src="img/<?php echo $foto;?>"  class="img">
        </div>
        <div class="nombre"> 
        <p><?php echo $apellido . " " . $nombre?></p>
        </div>
        <div class="email">
            <p class="email_tex1"> Email de contacto:</p> 
            <p class="email_tex2"><?php echo $Email ?></p>
        </div>
        <div class="curso">
           <p class="curso_tex1"> Curso:</p> 
           <p class="curso_tex2"> <?php echo $curso;?></p> 
        </div>
        <div class="contendor">
            <div class="contenedor_tex1">
                <p>biografia</p>

            </div>
            <div class="contenedor_biografia">
            <p class="contenedor_biografia_parrafo"><?php echo nl2br($biografia);?></p>
            </div>
        </div>
        <a href='editar_perfil.php'>
                <button> Editar perfil</button>
        </a>
    </div>


<div class="body col-xs-11 col-md-6">
    <div class="top-body row center-xs middle-xs ">
        <h2>Cursos</h2>
       
    </div>
    
    <div class="cursos row center-xs">
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
                $sq =  "SELECT * from contenido where Email='$Email' and materia='$materia'and curso='$curso'";
                if ($resultado = $con->query($sq)){
                    if ($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $fecha_de_subida=$fila["fecha_de_subida"];
                        $fecha_e="fecha de entrega: ";
                        $fecha_de_entrega=$fila["fecha_de_entrega"];
                        $boton="activo";
                    }else{
                        $fecha_de_subida="No hay ningun trabajos disponible";
                        $fecha_e="";
                        $fecha_de_entrega="No hay trabajos disponibles";
                        $boton="desactivo";
                    }
                }
?>
<div class="materia col-xs-11">
    <div class="overlay col-xs-12">
        <div class="titulo-materia row center-xs">
            <h2><?php echo $materia; ?> </h2>
        </div>
        <div class="materia-info row start-md center-xs">
            <p><?php echo "Profesor: ", $apellido, " ", $nombre; ?></p>
            <p></p>
            <p><?php echo $fecha_e, " ", $fecha_de_entrega; ?></p>
        </div>
        <div class="ir-materia row center-xs middle-xs">
           <?php
           if($boton=="activo"){ ?>
           <div class="btn-ir col-xs-3">
          
            <a href="ver_contenido.php? Email=<?php echo $Email;?> & materia=<?php echo $materia;?>">
                Ir a la carpeta
            </a>
           
            </div>
             <?php } ?>
        </div>
        <div class="materia-bottom col-xs-12">
            
        </div>
    </div>
</div>
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
</div>

</div>
<div class="footer ">
       <footer class="col-xs-12">
           <p>Feis</p>
       </footer>
   </div>
</body>
</html>    
