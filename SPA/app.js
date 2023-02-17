$(document).ready(function(){
	// Oculta todas las tablas excepto la primera
	$('.tabla').hide();
	$('#tabla1').show();

	// Detecta los cambios en la URL y muestra/oculta las secciones correspondientes
	$(window).on('hashchange', function(){
		var hash = window.location.hash;
		$('.tabla').hide();
		$(hash).show();
	});

	// Muestra la tabla 1 por defecto
	window.location.hash = '#tabla1';
});
