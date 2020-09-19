

<html>
   <head>
      <title>Verificacion</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
      <link rel="stylesheet" type="text/css" href="css/header.css">
      <link rel="stylesheet" type="text/css" href="css/estilocodigo.css"> 
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
      <p class="mensaje">A continuación ingrese su email y el su curso </p> 
       	 	</center>
<!--comentario
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
       -->
    	<div class="content__form">
    	<center>
  <form action='codigogeneradoverificado.php' method='post' class='form-register'>   

<input  type='email' placeholder='Email' name="Email" class="content__form">
<br>  
<input type="text" class="content__form" name="codigo" id="caja_busqueda" value=" <?php echo $cod; ?>" placeholder="codigo"><br>

 <select name="curso" id="caja_busqueda" class="curso" required >
                <option>1ro_1ra</option>
                <option>1ro_2da</option>
                <option>1ro_3ra</option>
                <option>1ro_4ta</option>
                <option>1ro_5ta</option>
                <option>1ro_6ta</option>
                <option>2do_1ra</option>
                <option>2do_2da</option>
                <option>2do_3ra</option>
                <option>2do_4ta</option>
                <option>2do_5ta</option>
                <option>2do_6ta</option>
                <option>3ro_1ra</option>
                <option>3ro_2da</option>
                <option>3ro_3ra</option>
                <option>3ro_4ta</option>
                <option>3ro_5ta</option>
                <option>3ro_6ta</option>
                <option>4to_1ra</option>
                <option>4to_2da</option>
                <option>4to_3rax</option>
                <option>4to_4ta</option>
                <option>4to_5ta</option>
                <option>5to_1ra</option>
                <option>5to_2da</option>
                <option>5to_3ra</option>
                <option>5to_4ta</option>
                <option>6to_1ra</option>
                <option>6to_2da</option>
                <option>6to_3ra</option>
                <option>7mo_1ra</option>
                <option>7mo_2da</option>
                <option>7mo_3ra</option>
            </select> 

             <div id="datos"></div>
<div id="campos">
<script type="text/javascript">
var nextinput = 0;
    
function AgregarCampos(){
    nextinput++;
    if (nextinput<5){
        campo = '<li id="rut'+nextinput+'"><select  class="curso" id="caja_busqueda'+nextinput+'"; name="materia' + nextinput + '"&nbsp;> <option>5to_1ra</option><option>5to_2da</option><option>5to_3ra</option></select></li>';
        
        campo2 = '<li id="rut'+nextinput+'"><div id="datos'+nextinput+'"></div></li>';
        $("#campos").append(campo);
        $("#campos").append(campo2);
        }
}
   
</script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
 </div>
<a href="#" onclick="AgregarCampos();">Agregar Campos</a>

<br>
<input type='submit' value='Enviar' class='button'>
            </center>
</div>

</body>
    
</html>
