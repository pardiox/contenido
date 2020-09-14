

<html>
   <head>
      <title>Verificacion</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin1.css">
	 </head>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>codigo</title>
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">

</head>
<body>
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
         <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
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
