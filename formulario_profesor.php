<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/flex/flexboxgrid.min.css">
    <meta charset="UTF-8">
    <title>formulario</title>
    <style>
        contenidoprincipal{
            col-xs-12;
            fsdf
        }
    </style>
</head>
<body>
    <form actions=resultado.html method="get">
       
    <div id="contenidoprincipal">
               
            <div id="fechaa">
               
                <row>
                
                        <label for=fecha>Fecha</label>
                        <input type="date" fecha="fecha" id="fecha" required>
                        
                        
                    <button>enviar</button>
                
                </row>
                 
              
            </div>    
            
         
        <div>
            <label for=titulo>Titulo</label>
            <input type="text" titulo="titulo" id="titulo" placeholder="Nombre del trabajo" required>
        </div>
          
        <div>
            <label for=fecha>Fecha de Entrega</label>
            <input type="date" fde="fde" id="fde" required>
        </div>
           
        <div>
            <label for=contenido>Contenido</label>
            <input type="text" contenido="contenido" id="contenido" placeholder="contenido" required>
        </div>   
        
        <div>
            <label for=anotaciones>Anotaciones</label>
            <input type="text" contenido="anotaciones" id="anotaciones" placeholder="anotaciones" required>
        </div>      
           
           
        
    </div>
    </form>
</body>
</html>