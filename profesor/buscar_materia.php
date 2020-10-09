<?php
    include "../conexion.php";
    session_start();
    $Email=$_SESSION["u"]["Email"];

    $query = "SELECT * FROM cursos_y_materia";    
    if (isset($_POST['consulta'])) {
    	$q = $_POST['consulta'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE curso='$q' and profesor='$Email'";
    

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
        
        echo "<select  class='select'name='materia' id='curso' required>";
    	while ($fila = $resultado->fetch_assoc()) {
            ?>                            
                   
                    <option><?php echo $fila['materia']; ?></option>

               
            <?php
       
    	}
         echo "</select>";
    }
        $con->close();
    }

?>
