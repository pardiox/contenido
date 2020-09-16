<!DOCTYPE html>

<html lang="en">
<head>
   <?php
    include "conexion.php";
    session_start();
    if ($_SESSION["u"]['sesion']!="s.p"){
        
    }
   $nombre= $_SESSION["u"]['nombre'];
   $apellido=  $_SESSION["u"]['apellido'];
   $Email=$_SESSION["u"]['Email'];
    echo "
    <meta charset='UTF-8'>
    <title>".$nombre." ".$apellido."</title>
    <link rel='icon' href='img/logo.png'>
    
    <link rel='stylesheet' href='css/flex/flexboxgrid.min.css'>
    ";
    ?>
    <link rel="stylesheet" href="css/estilofooter.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="css/estiloperfil.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="css/estilo_boton12.css">
    	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
    <header>
        <center>
        <h1>E.E.S.T.N°14</h1>
        <a href="cerrar_sesion.php"><img src="img/logo.png" width="50px" height="auto"></a>
        </center>
   </header>
    <div class="container">
        
        <h2></h2>
        <?php
        include "conexion.php";
        $sql =  "SELECT * FROM materia where Email LIKE '$Email'";
        if ($resultado = $con->query($sql)){

    while ($fila = mysqli_fetch_array($resultado)){

        $curso=$fila["curso"];
        $materia=$fila["nombre_materia"];
        $verificado=$fila["verificado"];
echo "
        <table>
           <tr>
                <td>".$curso."</td>
                <td>".$materia."</td>
                <td>
                ";
       if ($verificado==1){
                echo"
                
                    <a href='contenido.php?curso=$curso & materia=$materia'>
                    <button>Enviar</button>
                    </a>
                </td>
            </tr>
      
        </table>
        
        ";
    }else{
            echo"
           
            
                    <button>no es posible</button>
                    
                </td>
            </tr>
      
        </table>
            ";
        }}}
        ?>

        <button class="btn-abir-popup"id="btn-abrir-popup">Cargar Materias</button> 
		
   <div class=overlay id="overlay" >
    <div class="popup" id="popup">
       <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
       
       <form action="guardarmateria.php" method="post" class="form-register">
           <div class="contenedor-inputs">
            <h2 class="form__titulo">cargar materia</h2>
           	
			<input type="text" maxlength="50" placeholder="Nombre de la Materia"  value="" name="nombre">
			<br>
           Curso
            <select name="curso"  class="curso">
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
                <option>4to_3ra</option>
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
            <br>
       <input type="submit" value="Enviar" class="submit"> 
             <br>
             </div>
		</form>
            
       
        
    </div>
   </div>
</div> 
 <a href='lista_de_alumnos.php'>
                    <button>Ver alumnos</button></a>
<script src="rpopup.js"></script>
    </div>
    	 <footer>
       
       <div class="container-footer-all"> 
        
            <div class="container-body">

                <div class="colum1">
                    <h1>Acerca de "Carpeta Virtual" 6º2ª</h1>
                    <p>Este grupo esta compuesto por:</p>
                    <p>Alvarado Matias    Guerrero Lucas</p>
                    <p>Ayala Victoria    Jaime Camila</p>
                    <p>Cabrera Jonatan    Pardo Axel</p>
                    <p>Galeano Roberto    Silva Mario</p>
                    
                    
                    
                    

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="img/facebook.png">
                        <label>Facebook</label>
                    </div>
                    <div class="row">
                        <img src="img/twitter.png">
                        <label>Twitter</label>
                    </div>
                    <div class="row">
                        <img src="img/instagram.png">
                        <label>Instagram</label>
                    </div>
                    <div class="row">
                        <img src="img/google-plus.png">
                        <label>Gmail</label>
                    </div>
                    <div class="row">
                        <img src="img/pinterest.png">
                        <label>Whatsapp</label>
                    </div>


                </div>

                <div class="colum3">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="img/house.png">
                        <label> Bariloche 6615, González Catán, Buenos Aires, Argentina.
                        </label>
                    </div>

                    <div class="row2">
                        <img src="img/smartphone.png">
                        <label>+02202 428307</label>
                    </div>

                    <div class="row2">
                        <img src="img/contact.png">
                         <label>mt69014@yahoo.com.ar</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 All rights reserved | <a href="">Carpeta Virtual</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>
</body>
</html>