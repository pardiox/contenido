$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'buscar_curso.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});




$(buscar_datos1());

function buscar_datos1(consulta1){
	$.ajax({
		url: 'buscar_curso.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta1: consulta1},
	})
	.done(function(respuesta){
		$("#datos1").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda1', function(){
	var valor1 = $(this).val();
	if (valor1 != "") {
		buscar_datos1(valor1);
	}else{
		buscar_datos1();
	}
});