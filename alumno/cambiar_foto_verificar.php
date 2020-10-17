<?php  
        session_start();
        include "../conexion.php";
        if(isset($_REQUEST["foto"])){
            $foto = $_REQUEST["foto"];
            $Email= $_SESSION["u"]['Email'];
     
                        $biografia = $_REQUEST["biografia"];
                        $SQL="UPDATE alumno SET foto='$foto' where Email='$Email'"; 
                        if(!$error= $con-> query($SQL)){
                            echo $con->error;
	                    }
                        else{
                           
                            $_SESSION["tipo"] = "foto editada con exito";
                            header("Location: cambiar_foto.php"); 
                            exit();
	                   }

                }
                
            
        
  //   header("Location: cambiar_foto.php");

?>