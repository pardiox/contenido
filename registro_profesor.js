var abrir_ventana = document.getElementById('abrir_ventana'),
	fondo_ventana = document.getElementById('fondo_ventana'),
	ventana = document.getElementById('ventana'),
	cerrar_ventana = document.getElementById('cerrar_ventana');

abrir_ventana.addEventListener('click', function(){
	fondo_ventana.classList.add('active');
	ventana.classList.add('active');
});

cerrar_ventana.addEventListener('click', function(e){
	e.preventDefault();
	fondo_ventana.classList.remove('active');
	ventana.classList.remove('active');
}); 