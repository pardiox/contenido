<?php
    include "../conexion.php";
    $query = "SELECT * FROM cursos_y_materia";    
    if (isset($_POST['consulta'])) {
    	$q = $_POST['consulta'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE curso LIKE '%$q%' or  materia LIKE '%$q%' ";
        $resultado = $con->query($query);
    if ($resultado->num_rows>0) {
        
    	while ($fila = $resultado->fetch_assoc()) {
             $curso=$fila['curso'];
             $materia=$fila['materia'];
    		?>                 
                   
                   <a href="clases.php?curso=<?php echo $curso;?> & materia=<?php echo $materia;?>"><p>
                    <?php echo $fila['curso'], " ", $fila['materia'];?>
                  </p></a>
               
            <?php
       
    	}
    }
        $con->close();
    }

?>