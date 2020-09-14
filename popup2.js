
var btnregistrarPopup = document.getElementById('btn-registrar-popup'),
	overlay_r = document.getElementById('overlay_r'),
	popup_r = document.getElementById('popup_r'),
	btnCerrarPopup_r = document.getElementById('btn-cerrar-popup_r');

btnregistrarPopup.addEventListener('click', function(){
	overlay_r.classList.add('active');
	popup_r.classList.add('active');
});

btnCerrarPopup_r.addEventListener('click', function(e){
	e.preventDefault();
	overlay_r.classList.remove('active');
	popup_r.classList.remove('active');
});
 
