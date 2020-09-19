<?php
    include "../conexion.php";


    $query = "SELECT * FROM cursos_y_materia";    
    if (isset($_POST['consulta'])) {
    	$q = $_POST['consulta'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE curso='$q'";
    

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
        
        echo "<select  name='materia' id='curso' required>";
    	while ($fila = $resultado->fetch_assoc()) {
    		?>                            
                   
                    <option><?php echo $fila['materia']; ?></option>

               
            <?php
       
    	}
         echo "</select>";
    }
        $con->close();
    }
    if (isset($_POST['consulta1'])) {
    	$qq = $_POST['consulta1'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE curso='$qq'";
    

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
        
        echo "<select  name='materia1' id='curso' required>";
    	while ($fila = $resultado->fetch_assoc()) {
    		?>                            
                   
                    <option><?php echo $fila['materia']; ?></option>

               
            <?php
       
    	}
         echo "</select>";
    }

        $con->close();
    }
    if (isset($_POST['consulta2'])) {
    	$qqq = $_POST['consulta2'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE curso='$qqq'";
    

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
        
        echo "<select  name='materia1' id='curso' required>";
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