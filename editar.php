<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>editar</title>
    <link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilocontenido.css">
</head>
<body>
 <?php
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.admin"){
    header ("location: index.php");
    }
   include "conexion.php";
$cod_trabajo=$_REQUEST['cod_trabajo'];
   
             
$sql=  "SELECT * from contenido where cod_trabajo='$cod_trabajo'";
if ($resultado = $con->query($sql)){
if ($resultado->num_rows > 0){
    $fila=$resultado->fetch_assoc();
    $titulo=$fila['titulo'];
    $material=$fila['material'];
    $links=$fila['links'];
    $planes_estudio=$fila['planes_estudio'];
    $mod_examenes=$fila['mod_examenes'];
     $cod_trabajo=$fila['cod_trabajo'];
  $_SESSION["u"]['cod_trabajo']=  $cod_trabajo;
}
    else{
header("Location: Formulariocontenido.php");
    
}
    }
    ?>
  
   <header class="row">
          <div class="col-xs-12 center-xs">
           <h1>E.E.S.T.N° 14</h1>
             <a href="cerrar_sesion.php">   <img src="img/logo.png" width="50px" height="auto"></a>
        
            </div>
   </header>
   
    <nav class="row">
        <div class="col-xs-12">
           <img src="img/home.png" alt="Perfil"
           height="40px">
        </div>
    </nav>
    <div class='container'>

        <section class="row around-xs middle-md principal" >
    
            <div class="col-xs-10 col-md-7 end-md col-lg-8 contenido">

               <div class="row center-xs middle-xs">
                  
                   <div class="col-xs-11 contenido_ind">
                       
                        <div class="row primer_fila">
                           
                            <div class="col-xs-12 center-xs col-md-3">
                                 <form action='admin_editar.php' method='post' class='form-register'>
                  <?php echo"  <input type='text' placeholder='codigo:' name='titulo' value=".$titulo.">"; ?>
                                
                            </div>
                            
        
                            
                        </div>
                        
                          <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                 <div class='cajas'>

                                  <?php

                            echo"     <input type='codigo' placeholder='codigo:' name='material' value=".$material."> ";
                                
          
                                ?>
                                   </div>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                 <div class='cajas'>
                                  <?php
                    
                                   
                            echo"     <input type='codigo' placeholder='codigo:' name='links' value=".$links.">"; 
                                   
                
                                ?>
                                </div>
                             </div>
                            
                        </div>
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                              <div class='cajas'>
                                 <?php

                                  echo"
                                  
                                 <input type='codigo' placeholder='codigo:' name='planes_estudio' value=".$planes_estudio."> ";
                               

                               
                               
                                ?>
                                    </div>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                   <div class='cajas'>
                                 <?php

                            
                  echo"      <input type='text' placeholder='mod:' name='mod_examenes' value=".$mod_examenes."> ";
                                  
                                ?>
                                 </div>
                             </div>
                              
                             </div>
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                   <div class='cajas'>
                              
                            
                     <input type='submit' value='modificar contenido' class='boton' name='modificar'>
                                  
                             
                                 </div></div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
      </from>
   </div>
   <footer class="row">
        <div class="col-xs-12">
           <div class="titulo row">
               
           </div>
        </div>
   </footer>
</body>
</html>