<?php  
        session_start();
        include "../conexion.php";
       
            $foto = $_FILES['imagen1']['name'];
        
            $Email= $_SESSION["u"]['Email'];
            $extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
            $max_tamanyo = 1024 * 1024 * 8;
            $ruta_indexphp = dirname(realpath(__FILE__));
            $ruta_fichero_origen = $_FILES['imagen1']['tmp_name'];
            $ruta_nuevo_destino = $ruta_indexphp . '/imG/' . $_FILES['imagen1']['name'];
            if ( in_array($_FILES['imagen1']['type'], $extensiones) ) {
                echo 'Es una imagen';
                if ( $_FILES['imagen1']['size']< $max_tamanyo ) {
                    if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
                      $SQL="UPDATE alumno SET foto='$foto' where Email='$Email'"; 
                        if(!$error= $con-> query($SQL)){
                            echo $con->error;
	                    }
                        else{
                           $_SESSION["u"]['foto']=$_FILES['imagen1']['name'];
                            $_SESSION["tipo"] = "foto editada con exito";
                            header("Location: cambiar_foto.php"); 
                            exit();
                    }
                }
            }
                        
	                   }

                
                
            
        
  //   header("Location: cambiar_foto.php");

?>