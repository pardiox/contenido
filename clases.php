<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
    
    <link rel="stylesheet" type="text/css" href="css/estilo_clase.css">
    <link rel="stylesheet" type="text/css" href="css/flex/flexboxgrid.min.css">
</head>
<body>
   
    <header class="header">hola</header>
    
    <div class="contenedor_principal row start-xs">
        <div class="barra_lateral col-xs-12 col-md-3">
            <div class="arriba row center-xs">
                <h2>Cursos</h2>
                <form action="">
                    <input type="text" placeholder="Año" class="col-xs-2">
                    <input type="text" placeholder="Div" class="col-xs-2">
                    <input type="text" placeholder="Materia">
                    <input type="submit" class="col-xs-1" value="x">
                </form>
            </div>
            <div class="medio row center-xs">
                  <p class="col-md-5">Curso</p>
                  <p class="col-md-5">Materia</p>
                  
                <div class="cursos">
                    
                </div>
            </div>
            <div class="abajo row">
                
            </div>
        </div>
        
        <div class="contenido col-xs-12 col-md-9">
            <div class="row">
                <div class="fecha"></div>
                <div class="titulo"></div>
                <div class="fecha_entrega"></div>
            </div>
            <div class="row">
                <div class="consigna"></div>
            </div>
        </div>
    </div>
    
    <footer></footer>
</body>
</html>