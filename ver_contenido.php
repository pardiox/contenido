
<html>
    <head>
      <title>nc</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
          <link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
         <link rel="stylesheet" type="text/css" href="css/estilocontenido.css">
	 </head>
<body>
     
  <header>
         <center>
          <h1>E.E.S.T.N°14</h1>
        <a href="cerrar_sesion.php">     <img src="img/logo.png" width="50px" height="auto"></a>
 
        </center>
   </header>
      <?php
    session_start();
       if( $_SESSION["u"]['sesion'] != "s.a"){
    header ("location: index.php");
    }
    include "conexion.php";
    $cod_trabajo=$_REQUEST["cod_trabajo"];
$sql=  "SELECT * from contenido where  cod_trabajo='$cod_trabajo'";
    if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $titulo=$fila['titulo'];
    $material=$fila['material'];
    $links=$fila['links'];
    $planes_estudio=$fila['planes_estudio'];
    $mod_examenes=$fila['mod_examenes'];
}}
        ?>
<section class="row around-xs middle-md principal">
  
             
            <div class="col-xs-10 col-md-7 end-md col-lg-8 contenido">

               <div class="row center-xs middle-xs">
                  
                   <div class="col-xs-11 contenido_ind">
                       <center>
                        <div class="row primer_fila">
                           
                            <div class="col-xs-12 center-xs col-md-3">
                               <?php
                               echo" 
                               
                               <p>".$titulo."</p>
                               
                               
                               ";
                                ?>
                            </div>
                            
                            
                        </div>
                        
                        
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                               echo " 
                               
                               <p>".$material."</p>
                               
                               
                               ";
                                ?>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                               echo" 
                               
                               <p>".$links."</p>
                               
                               
                               ";
                                ?>
                             </div>
                            
                        </div>
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                               echo" 
                               
                               <p>".$planes_estudio."</p>
                               
                               
                               ";
                                ?>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                               echo" 
                               
                               <p>".$mod_examenes."</p>
                               
                               
                               ";
                                ?>
                             </div>
                            
                        </div>
                    </div>    
                    </center>
                </div>
            </div>
        </section>
    </html>