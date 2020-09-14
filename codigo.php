

<html>
   <head>
      <title>Generar Codigo</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  <link rel="stylesheet" type="text/css" href="css/estilologin1.css">
	 </head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>generar codigo</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
    <header>
         <center>
         <h1>E.E.S.T.N°14</h1>
        <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    
	<form action="codigogenerado.php" method="post" class="form-register">
     
       <center>
       Generar Codigo
       	<input type="submit" value="generar" class="button">
           <?php
           session_start();
       if(    $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: index.php");
    }
           ?>
       	 	</center>
       </form> 
        
<div class="footer">
    facebook
</div>
    
</body>
    
</html>
