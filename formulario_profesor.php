<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" type="text/css" href="css/formulario_profesor.css">
    
</head>
<body>
    




<div class="container">
    <p>Subir Contenido</p>
            
    
    <div class="subject">
     <input placeholder="Fecha de Entrega" class="input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
      
    


    
      
    </div>
    
    
   
    
    <div class="subject">
      <input type="text" placeholder="Titulo" class="input">
      
    </div>
    
    
  
       <div class="input">
                <select id="curso" name="curso">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">7</option>
                </select>
            </div>
    
    
    <div class="msg">
      <textarea  class="area" placeholder="Contenido"></textarea>
    </div>
    
    <div class="msg">
      <input type="text" placeholder="Anotaciones" class="input">
    </div>
     <div class="boton">
    
      
      <div class="btn">Enviar</div> 


    
      
    </div>
</div>



</body>
</html>