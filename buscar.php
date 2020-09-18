<?php
    include "conexion.php";

    $salida = "";

    $query = "SELECT * FROM materia";

    if (isset($_POST['consulta'])) {
    	$q = $_POST['consulta'];
    	$query = "SELECT * FROM materia WHERE curso LIKE'%$q%'";
    

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
echo "<select  name='materia' id='materia' class='select' required>";
    	while ($fila = $resultado->fetch_assoc()) {
    		?>                            
                   
                    <option><?php echo $fila['nombre_materia']; ?></option>

               
            <?php
    	}
        echo " </select>";
    }
    $con->close();
    }
?>