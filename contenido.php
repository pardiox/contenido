
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilocontenido.css">
</head>
<body>
 <?php
    session_start();
  if( $_SESSION["u"]['sesion'] != "s.p"){
    header ("location: login.php");
    }
    echo   $_SESSION["u"]['curso'];
   include "conexion.php";
   if(isset($_POST['modificar'])){
  $curso=    $_SESSION["u"]['curso'];
  $materia=$_SESSION["u"]['materia'];
  $Email=$_SESSION["u"]['Email'];}
 else
  if(isset($_POST['buscar'])){
      echo"";
  }else
 {
  $curso=$_REQUEST['curso'];
  $materia=$_REQUEST['materia'];
  $_SESSION["u"]['curso'] = $curso;
  $_SESSION["u"]['materia'] = $materia;
  $Email=$_SESSION["u"]['Email'];
   }
              if(isset($_POST['buscar'])){
              $curso=$_SESSION["u"]['curso'];
              $materia=$_SESSION["u"]['materia'];
              $Email=$_SESSION["u"]['Email'];
              $buscar=$_REQUEST['recibir'];
              $sql =  "SELECT * from contenido  where titulo LIKE '%$buscar%' and Email='$Email' and curso='$curso' and materia='$materia' ";}
              else{
              $sql =  "SELECT * from contenido where Email='$Email' and curso='$curso' and materia='$materia'";}
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
             <a href="cerrar_sesion.php">  <img src="img/logo.png" width="50px" height="auto"></a>
         
            </div>
   </header>
   
    <nav class="row">
        <div class="col-xs-12">
           <img src="img/home.png" alt="Perfil"
           height="40px">
        </div>
    </nav>
    <div class='container'>
    <?php
    echo "
        <div class='row around-xs'>
            <div class='col-xs-12 center-xs col-md-4 middle-md offset-2'>
                <h2>Contenido de la materia</h2> 
            </div>
            <div class='col-xs12 center-xs col-md-4 end-md'>
                <h4>Curso: ".$curso."</h4>
                <h4>Materia:".$materia."</h4>
            </div>
        </div>
        ";
        ?>
        <section class="row around-xs middle-md principal" >
            <div class="col-xs-12 center-xs col-md-4 col-lg-3  boton-container">
               <?php
                echo"
                <a href='Formulariocontenido.php?curso=$curso & materia=$materia'  class='boton'>Subir contenido</a>
                ";
                ?>
            </div>
            <div class="col-xs-10 col-md-7 end-md col-lg-8 contenido">

               <div class="row center-xs middle-xs">
                  
                   <div class="col-xs-11 contenido_ind">
                       
                        <div class="row primer_fila">
                           
                            <div class="col-xs-12 center-xs col-md-3">
                               
                                          <?php
                     if(isset($_POST['modificar'])){
                                   echo"
                                   <div class='cajas'>
                                         <form action='editacontenido.php' method='post' class='form-register'>
                                 <input type='text' placeholder='codigo:' name='titulo' value=".$titulo.">
                                 </div>
                                    ";}
                                else{
                               echo" 
                                     <form action='contenido.php' method='post' class='form-register'>
                                 <input type='text' placeholder='buscar:' name='recibir' value=''>
                                  <input type='submit' placeholder='buscar:' name='buscar' value='buscar'>
                               <p>".$titulo."</p>
                               
                               ";}
                                ?>
                                
                            </div>
                            
                            <div class="col-xs-12 col-md-2 offset-md-10">
                            <?php 
                                if(isset($_POST['modificar'])){
                                    echo"
                            
                                    ";}                               
                                      else{
                                    echo"
                                     <form action='contenido.php' method='post' class='form-register'>
 	                                      <input type='submit' value='modificar contenido' class='boton' name='modificar'>
                                    ";
                                }
                                
                                ?>
                          
                            </div>
                            
                        </div>
                        
                        
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                     if(isset($_POST['modificar'])){
                                   echo"
                                    <div class='cajas'>
                                 <input type='codigo' placeholder='codigo:' name='material' value=".$material."> 
                                   </div>
                                    ";}
                                else{
                               echo" 
                               <p>".$material."</p>
                               
                               ";}
                                ?>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                                  <?php
                    
                                                        if(isset($_POST['modificar'])){
    
                                   echo"
                                    <div class='cajas'>
                                 <input type='codigo' placeholder='codigo:' name='links' value=".$links."> 
                                   </div>
                                    ";}
else{
                               echo" 
                               
                               <p>".$links."</p>
                               
                               
                               ";}
                                ?>
                             </div>
                            
                        </div>
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                             
                                 <?php
                                                        if(isset($_POST['modificar'])){
    
                                  echo"
                                   <div class='cajas'>
                                 <input type='codigo' placeholder='codigo:' name='planes_estudio' value=".$planes_estudio."> 
                                   </div>
                                    ";
                                                        }else{
                               echo" 
                               
                               <p>".$planes_estudio."</p>
                               
                               
                               ";}
                                ?>
                             </div>
                            
                        </div>
                       <div class="row start-xs">
                            <div class="col-xs-12 col-md-6 enunciado">
                            
                                 <?php
                                
                                                        if(isset($_POST['modificar'])){
    
                                  echo"
                                   <div class='cajas'>
                                 <input type='text' placeholder='mod:' name='mod_examenes' value=".$mod_examenes."> 
                                   </div>
                                    ";
                                                        }else{
                               echo" 
                               
                               <p>".$mod_examenes."</p>
                               
                               
                               ";}
                                 if(isset($_POST['modificar'])){
    
                                  echo"
                                   <div class='cajas'>
                                	<input type='submit' value='editar' class='boton' name='editar'>
                                   </div>
                                    ";
                                 }
                                ?>
                             </div>
                            
                        </div>
                    </div>    
                </div>
            </div>
        </section>
      
   </div>
   <footer class="row">
        <div class="col-xs-12">
           <div class="titulo row">
               
           </div>
        </div>
   </footer>
</body>
</html>