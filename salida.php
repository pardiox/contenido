<?php 

//Recogemos la cadena
$busqueda=$_POST['cadena'];

//Aquí hacer la consulta para la busqueda con LIKE $busqueda
$query = sprintf("SELECT * FROM alumno WHERE nombre LIKE %s", 
        GetSQLValueString("%" . $busqueda . "%", "text")); //Función GetSQLValueString al fina del tema

//Esto se pega en la div #mostrar
echo 'Demo '.$busqueda; //Mostrar lo