<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

   <head>
      <title>verificar</title>  
	  <!--comentario-->
	  <meta http-equiv="Content-type" content="text/html;
	  charset=utf-8">
	  
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
	  <link rel="stylesheet" type="text/css" href="../css/header.css">
	  <link rel="stylesheet" href="../css/flex/flexboxgrid.min.css">
	  <link rel="stylesheet" type="text/css" href="../css/lista_alumnos.css">
	 </head>

<body>
    <header>  
      <div class="wrapper">

			<div class="logo">carpeta virtual</div>
			
			<nav>
				
				<a href="vista_profesor_inicio.php">Inicio</a>
				<a href="admin_alumnos.php">Ayuda</a>
				<a href="cerrar_sesion.php">Acerca de nosotros</a>
			</nav>
		</div>
    </header> 
    <div class="contendor_principal row around-md ">
        <div class="peticiones col-md-5 col-xs-12">
            <div class="row center-xs top-peticiones">
                <h2 class="col-xs-12">Peticiones de Ingreso</h2>
                <form action="">
                    <input type="text" placeholder="Curso" class="col-xs-12">
                </form>
            </div>
            <div class="tabla col-xs-12">
        <?php      
        session_start();
        if( $_SESSION["u"]['sesion'] != "s.p"){
            header ("location: login.php");
        }
   
        include "../conexion.php";
            
        $Email=$_SESSION["u"]['Email'];
        $sq =  "SELECT * FROM cursos_y_materia where profesor='$Email'";
            
        if ($resultad = $con->query($sq)){
            while ($fila = mysqli_fetch_array($resultad)){
        
                $materia=$fila["materia"];
                $curso=$fila["curso"];
                $sql =  "SELECT * FROM alumnos_verificados where curso='$curso' and materia='$materia'"; /*and verificacion='0'";*/
                
                if ($resultado = $con->query($sql)){
                    
                    while ($fila = mysqli_fetch_array($resultado)){
                        
                        $curso=$fila["curso"];
                        $materia=$fila["materia"];
                        $Email=$fila["Email"];
                        $_SESSION["u"]['materia']=$materia;
                        $ssql = "SELECT * FROM alumno where Email='$Email'";
             
                    if($resultadross = $con->query($ssql)){
                        if($resultadross ->num_rows > 0){
                            
                            $fila=$resultadross->fetch_assoc(); 
                            $nombre=$fila["nombre"];
                            $apellido=$fila["apellido"];
                        }
                    }  

                    echo"
        
                        <div class='contenedor-tabla row center-xs'> 
                            <table class='col-xs-12'>
                                <tr class='row around-xs middle-xs fila-peticiones '>
                                    <td class='col-xs-3'>  
                                        ". $nombre ."<br> ". $apellido."
                                    </td>  
                                    
                                    <td class='col-xs-2'>
                                        ".  $curso."
                                    </td>
                                    
                                    <td class='col-xs-2'>  
                                        ".  $materia."
                                    </td> 
                                    
                                    <td class='col-xs-2'>
                                        <a href='verificado_denegado.php?Email=$Email & materia=$materia' > <button>Denegar</button></a> </td>
                                    <td  class='col-xs-2'>
                                    <a href='verificado_alumno.php?Email=$Email & materia=$materia'> <button>Verificar</button>
                                    </a>
                                    </td>
                                </tr>
                            </table>
                        </div>";
}}
                }}   
        ?>
        </div>
        </div> 
        <div class="alu_aceptados col-xs-12 col-md-5">
        <div class="row top-inscriptos center-xs">
        <h2 class="col-xs-12">Alumnos Inscriptos</h2>
        <form action="">
            <input type="text" placeholder="Curso" class="col-xs-12">
        </form>
        </div>
        <div class="tabla col-xs-12"></div>
        <?php
            
        $Email=$_SESSION["u"]['Email'];
        $sqll =  "SELECT * FROM cursos_y_materia where profesor='$Email'";
            
        if ($resultadios = $con->query($sqll)){
            
            while ($fila = mysqli_fetch_array($resultadios)){
        
                $materia=$fila["materia"];
                $curso=$fila["curso"];  
                $sl =  "SELECT * FROM alumnos_verificados where curso='$curso' and materia='$materia'"; /*and verificacion='0'*/
                
                if ($resultados = $con->query($sl)){
                    
                    while ($fila = mysqli_fetch_array($resultados)){
                        
                        $curso=$fila["curso"];
                        $materia=$fila["materia"];
                        $Email=$fila["Email"];
                        $_SESSION["u"]['materia']=$materia;
                        $ssql = "SELECT * FROM alumno where Email='$Email'";
                        
                        if($resultadross = $con->query($ssql)){
                            
                            if($resultadross ->num_rows > 0){
                                
                                $fila=$resultadross->fetch_assoc(); 
                                $nombre=$fila["nombre"];
                                $apellido=$fila["apellido"];
                            }
                        }
                        echo" 
         
                            <div class='contenedor-tabla row center-xs'> 
                                <table class='col-xs-12'>
                                    <tr class='row around-xs middle-xs fila-aceptados'>
                                        <td class='col-xs-3'>  
                                            ". $nombre ."<br> ". $apellido."
                                        </td>
                                        
                                        <td class='col-xs-2'>
                                            ".  $curso."
                                        </td>
                                        
                                        <td class='col-xs-2'>  
                                            ".  $materia."
                                        </td> 
                                        
                                        <td class='col-xs-2'>
                                            <a href='verificado_denegado.php?Email=$Email & materia=$materia' > 
                                                <button>Eliminar</button>
                                            </a> 
                                        </td>
                                    </tr>
                                </table>
                            </div>";
                    } 
                }
            
            }
        }   
?>
</div>
    </div>
</body>
</html>