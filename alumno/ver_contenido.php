<?php
include "../conexion.php";
session_start();
$Email_profe=$_REQUEST["Email"];
$materia=$_REQUEST["materia"];
$curso=$_SESSION["u"]['curso'];

if(empty($Email_profe) || empty($materia)){
    header("Location: alumno.php");
}
    ?>
<html>
   <head>
         <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/seleccion_trabajo.css">
        <link rel="stylesheet" type="text/css" href="css/header.css"  >
   </head>
   <body>
      <header>
        <div class="header ">
            <div id="main">
               <button>
                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()" >&#9776; open</span>
                </button>
                     <h2>Carpeta virtual</h2>
               
            </div>
            
        </div>
	</header>
      <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <Updated upstream></Updated>
    <a href="alumno.php">inicio</a>
    <a href="configuracion.php">configuracion</a>

    <a href="../cerrar_sesion.php">cerrar sesion</a>
</div>
       
       <div class="cuerpo">
       <center>
       <h2 class="titulo"> Lista de trabajos subidos</h2>
       <table class="table">
           <tr class="tabla_arriba">
               <td>titulo</td>
               <td>fecha de entrega</td>
               <td>fecha de subida</td>
           </tr>
        <?php
        $sql =  "SELECT * FROM contenido where curso='$curso' and Email='$Email_profe' and materia='$materia'";    
        if ($resultad = $con->query($sql)){
            while ($fila = mysqli_fetch_array($resultad)){
                $titulo=$fila["titulo"];
                $materia=$fila["materia"];
                $fecha_de_entrega=$fila["fecha_de_entrega"];
                $fecha_de_subida=$fila["fecha_de_subida"];
                $cod_trabajo=$fila["cod_trabajo"];
                ?>
                <tr class="tabla_abajo">
                    <td>
                        <?php echo $titulo;?>
                    </td>
                    <td>
                        <?php echo $fecha_de_entrega;?>
                    </td>
                    <td>
                        <?php echo $fecha_de_subida;?>
                    </td>
                   
                    
                     <td class="button">
                      <a href="ver_contenido_subido.php">
                     <p> ver</p>
                      <button>  </button>
                    </a> 
                     </td>
                    
          
                </tr>
                
                <?php
            }
        }
        ?>
        </table>
        </center>
        </div>
        
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
    </body>
</html>