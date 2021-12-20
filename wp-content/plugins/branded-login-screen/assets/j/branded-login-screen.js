jQuery(document).ready(function( $ ) {

	$('#backtoblog a').prop('title','Volver a inicio.');

	$('form#loginform').prepend('<h2>ingrese su información de acceso.</h2><br class="clear">');
	$('form#lostpasswordform').prepend('<h2>Introduzca su informacion. Recibirá una contraseña por e-mail.</h2><br class="clear">');
	$('form#resetpassform').prepend('<h2>Ingrese su nueva contraseña.</h2><br class="clear">');

	$('form#registerform').prepend('<h2>Crea tu cuenta. Una contraseña será<br\>enviada a tu correo.</h2><br class="clear">');
	$('form').prepend('<p class="ver"><a href="http://www.tdoee.com/">Bienvenidos al Blog de Tdoee.</a></p>');

	//TODO: make the alert boxes look prettier. :)

	$("p.reset-pass:contains('ingrese su nueva contraseña.')").hide();

	$("p.reset-pass:contains('Tu contraseña ha sido restablecida.')").show().addClass('backtologin').removeClass('message').removeClass('reset-pass');
});