<?php
    include "../conexion.php";
    session_start();
    $query = "SELECT * FROM cursos_y_materia";    
    if (isset($_POST['consulta'])) {
    	$q = $_POST['consulta'];
        $profesor = $_SESSION["u"]['Email'];
    	$query = "SELECT * FROM  cursos_y_materia WHERE (curso LIKE '%$q%' or  materia LIKE '%$q%') and (profesor='$profesor')";
        $resultado = $con->query($query);
    if ($resultado->num_rows>0) {
        
    	while ($fila = $resultado->fetch_assoc()) {
             $curso=$fila['curso'];
             $materia=$fila['materia'];
            $respuesta = "
            <a href='clases.php?curso=$curso & materia=$materia'><p>
                    $curso $materia
                  </p></a>
            ";
       echo $respuesta;
    	}
    }else{
        echo "no hay resultados";
    }
    
        $con->close();
    }

?>