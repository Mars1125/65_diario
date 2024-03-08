$(document).ready(function(){
	/* Posicionarnos al Principio de la Pagina */
	$('#backTop').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('#backTop').slideDown(300);					
		} else {
			$('#backTop').slideUp(300);
		}
	});

	/* Imprimir Pagina */
	$('#printPage').click(function () {
		window.print();
		return false;
	});

	/* Incrementar y Decremar el tamaño de la Fuente */
	// Donde queremos cambiar el tamaño de la fuente
	var donde = $('body');
	var sizeFuenteOriginal = donde.css('font-size');

	// Resetear Font Size
	$("#resetearFont").click(function(){
		donde.css('font-size', sizeFuenteOriginal);
	});

	// Aumentar Font Size
	$("#increaseFont").click(function(){
		var sizeFuenteActual = donde.css('font-size');
		var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
		var sizeFuenteNuevo = sizeFuenteActualNum*1.2;
		donde.css('font-size', sizeFuenteNuevo);
		return false;
	});

	// Disminuir Font Size
	$("#diminishFont").click(function(){
		var sizeFuenteActual = donde.css('font-size');
		var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
		var sizeFuenteNuevo = sizeFuenteActualNum*0.8;
		donde.css('font-size', sizeFuenteNuevo);
		return false;
	});
	
	/* Incrementa y decrementa el zoom de la pagina */
	$("#zoomMore").click(function(){
		$("body").css({"zoom": "150%"});
		$("#zoomMore").css({"display": "none"});
		$("#zoomLess").css({"display": "inline"});
	});

	$("#zoomLess").click(function(){
		$("body").css({"zoom": "100%"});
		$("#zoomMore").css({"display": "inline"});
		$("#zoomLess").css({"display": "none"});
	});

	/* Muestra los tooltips de los link´s que lo contienen */
	$('[data-toggle="tooltip"]').tooltip();

	/* Hace Funcionar el Banner de las Convocatorias y Reuniones */
	$("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
		$(".transition-timer-carousel-progress-bar", this)
			.removeClass("animate").css("width", "0%");
	}).on("slid.bs.carousel", function(event) {
		$(".transition-timer-carousel-progress-bar", this)
			.addClass("animate").css("width", "100%");
	});

	$(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
		.css("width", "100%");
});

/* Oculta las Barras laterales en las tabletas */
var device = navigator.userAgent
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)) {
	$(function(){
		$("#ocultar_barra").css("display", "none");
		$("#ocultar_barra2").css("display", "none");
		$("#archivosDescarga").css("display", "none");
		$('#menuCont li').unbind('mouseenter mouseleave');
		 
	});
} else {
	$(function(){
		$("#ocultar_barra").css("display", "block");
		$("#ocultar_barra2").css("display", "block");
		$("#archivosDescarga").css("display", "block");
	});
}

// jquery Social´s icons //
// Abrir Ventana Nueva Estilo PopUp
var getWindowOptions = function() {
	var width = 600;
	var height = 470;
	var left = (window.innerWidth / 2) - (width / 2);
	var top = (window.innerHeight / 2) - (height / 2);

	return [
		'resizable,scrollbars,status',
		'height=' + height,
		'width=' + width,
		'left=' + left,
		'top=' + top,
	].join();
};

// Cambio de Pagina //
function ChangeUrlPage(formulaire) {
	if (formulaire.ListeUrlPage.selectedIndex != 0) {
		location.href = formulaire.ListeUrlPage.options[formulaire.ListeUrlPage.selectedIndex].value;
	} else  {
		alert('Tienes que elegir un destino.');
	}
}

// Like Facebook //
// (function(d, s, id) {
// 	var js, fjs = d.getElementsByTagName(s)[0];
// 	if (d.getElementById(id)) return;
// 	js = d.createElement(s); js.id = id;
// 	js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12';
// 	fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));

// Facebook //
// var fbBtn = document.querySelector('.facebook-share');
// var shareUrlFacebook = 'https://www.facebook.com/sharer/sharer.php?title=' + text + '&u=' + location.href;
// console.log(shareUrlFacebook);
// fbBtn.href = shareUrlFacebook ; // 1

// fbBtn.addEventListener('click', function(e) {
// 	e.preventDefault();
// 	var win = window.open(shareUrlFacebook, 'ShareOnFb', getWindowOptions());
// 	win.opener = null; // 2
// });

// var fbBtn = $('.facebook-share');
// var shareUrl = 'https://www.facebook.com/sharer/sharer.php?title=' + text + '&u=' + location.href;
// fbBtn.attr('href', shareUrl);
// $('.facebook-share').on('click', function(e) {
// 	e.preventDefault();
// 	var win = window.open(shareUrl, 'ShareOnFb', getWindowOptions());
// 	win.opener = null; // 2
// });




// Twitter //
// var twitterBtn = document.querySelector('.twitter-share');
// var shareUrlTwitter = 'https://twitter.com/intent/tweet?text=' + text + '&url=' + location.href;
// twitterBtn.href = shareUrlTwitter; // 1

// twitterBtn.addEventListener('click', function(e) {
// 	e.preventDefault();
// 	var win = window.open(shareUrlTwitter, 'ShareOnTwitter', getWindowOptions());
// 	win.opener = null; // 2
// });

 
// Twitter //
// var whatsappBtn = document.querySelector('.whatsapp-share');
// var shareUrlWhatsapp = 'https://api.whatsapp.com/send?text=' + text + ' - ' + location.href;
// whatsappBtn.href = shareUrlWhatsapp; // 1

// whatsappBtn.addEventListener('click', function(e) {
// 	e.preventDefault();
// 	var win = window.open(shareUrlWhatsapp, 'WhatsApp', getWindowOptions());
// 	win.opener = null; // 2
// });
 
// Envio de Correo //
// var emailBtn = document.querySelector('.email-share');
// var shareEmail = 'mailto:?subject='+ text +'&body=Visita este sitio: ' + text + ' - ' + location.href;
// emailBtn.href = shareEmail; // 1

 