<?php
//trae la conexion

include "../conexion.php";
session_start();

$nombre = $_SESSION["u"]['nombre'];
$apellido = $_SESSION["u"]['apellido'];
$curso = $_SESSION["u"]['curso'];
$Email = $_SESSION["u"]['Email'];
$biografia = $_SESSION["u"]['biografia'];
if (empty($_SESSION["u"]['foto'])){
    $foto="foto_perfil";
}
else{
    $foto = $_SESSION["u"]['foto'];
}
$verifiado =$_SESSION["u"]['verificado'];

if(empty($biografia)){
    $biografia="hola eres nuevo por aqui¿? <br> agraga en la biografia algo sobre ti para que tus amigos/compañeros te conozcan mas";
}
   
if( $_SESSION["u"]['sesion'] != "s.a"){
  header ("location: ../index.php");
}
?>
   <html>
    <head>
    <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/editar_perfil.css">
	  <link rel="stylesheet" type="text/css" href="../css/flex/flexboxgrid.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <header></header>        
    
         <div class="perfil">
       
        <div clas="foto">
           <center>
            <img src="img/<?php echo $foto;?>" width="100" height="100"><a href="cambiar_foto.php"><button><p>cambiar foto</p></button></a>
            </center>
        </div>
        <div class="nombre"> 
        <center>
        <p class="nombre_p"><?php echo $apellido . " " . $nombre?>
        </p>
       <a href="cambiar_nombre.php"><button><p>editar nombre</p></button></a>
            
        </center>
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
                <a href="configuracion_biografia.php"><p class="contenedor_text1_p">editar biografia</p></a>
            </div>
            <div class="contenedor_biografia">
            <p class="contenedor_biografia_parrafo"><?php echo $biografia;?></p>
            </div>
        </div>
    </div>

        
        
        <footer></footer>
    </body>
</html>