<?php 
header("X-XSS-Protection: 1; mode=block");
require_once 'app/config/config.php'; 
include 'function/sesionParlamentaria.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<?php include 'app/title.php'; ?>
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo URL; ?>images/favicon.png">
	<meta name="author" content="Senado de la Rep&uacute;blica">
	<!--<meta http-equiv="X-UA-Compatible" content="IE=Edge, IE=11, IE=10, IE=9, IE=8, IE=7, chrome=1">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!--  Iconos para IOS, Android y Windows -->
	<link rel="icon" type="image/png" href="<?php echo URL; ?>images/favicon.ico" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo URL; ?>images/favicon.ico" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo URL; ?>images/favicon.ico" sizes="96x96">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="57x57">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="114x114">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="72x72">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="144x144">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="60x60">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="120x120">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="76x76">
	<link rel="apple-touch-icon" href="<?php echo URL; ?>images/favicon.png" sizes="152x152">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php echo URL; ?>images/favicon.png">
	<!-- Style -->	
	<?php 
	//  AND ($var1== 'integracion' OR $var1 == 'por_orden_alfabetico')		Bootstrap v3.3.7
	$isHome = false;
	if ($watch == 'senadores' || $watch == 'senadoras' || $watch == 'senador' ){ ?> 
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.min5.css"> 
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/style.css">
	<?php }
	else if ($watch == null){
		$isHome = true;
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.min5.css"> 
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/home23.css"> 
	<?php }
	else { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/style.css">
	<?php } ?>


	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap-social.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/menu23.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/menu_style.css?rdn=3">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/audioplayer.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/barraLateral.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/print.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/fodo_banner.css">
	<!--<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/datatables.min.css">-->

	<?php if ($watch == 'diario_de_los_debates' || $watch == 'senadores') { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/slick.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/jquery.bxslider.min.css">    
	<?php } ?>
	<?php if ($watch == 'version_estenografica') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/slick.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/jquery.fancybox.css?v=2.1.5">
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/jquery.bxslider.min.css">
	<?php } ?>
	<?php if ($watch == 'seguimiento_a_reformas_constitucionales' OR $watch == 'senadores') { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/jsmaps.css">
	<?php } ?>
	<!-- JavaScript y Jquery -->
	<script src="<?php echo URL; ?>js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo URL; ?>js/jquery-ui.js"></script>

	<?php if ($watch == 'senadores' || $watch == 'senadoras' || $watch == 'senador' || $watch == null ): ?> 
		<script src="<?php echo URL; ?>js/bootstrap5.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<?php else: ?>
		<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>	-->	
		<script src="<?php echo URL; ?>js/bootstrap.min.js"></script>
	<?php endif ?>

	<?php if ($watch == 'gaceta') { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>css/bootstrap-select.min.css">
		<script src="<?php echo URL; ?>js/bootstrap-select.min.js"></script>
	<?php } ?>
	
	
	<!--<script src="<?php echo URL; ?>js/datatables.min.js"></script>-->
	<?php if ($watch == NULL) { ?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>js/slick/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>js/slick/slick/slick-theme.css">
		<script src="<?php echo URL; ?>js/slick/slick/slick.min.js"></script>
		<script src="<?php echo URL; ?>js/micro-slider.min.js"></script>
		<script src="<?php echo URL; ?>js/hammer.min.js"></script>

	<?php } ?>

	<?php if ($watch !== NULL) { ?>
		<script src="<?php echo URL; ?>js/amcharts4/script/core.js"></script>
		<script src="<?php echo URL; ?>js/amcharts4/script/charts.js"></script>
		
		<script src="<?php echo URL; ?>js/audioplayer.js"></script>
	<?php } ?>
	<?php if ($watch == 'legislacion_aprobada' || $watch == 'respuestas_a_proposiciones_aprobadas' || $watch == 'seguimiento_a_reformas_constitucionales') { ?>
		<script src="<?php echo URL; ?>js/highcharts.js"></script>
		<script src="<?php echo URL; ?>js/highcharts-3d.js"></script>
		<script src="<?php echo URL; ?>js/item-series.js"></script>
		<?php } ?>
	
	<?php if ($watch == 'diario_de_los_debates' || $watch == 'senadores') { ?>	
	<script src="<?php echo URL; ?>js/slick.js"></script>
	<script src="<?php echo URL; ?>js/jquery.bxslider.min.js"></script>    
	 
	<?php } ?>
	<?php if ($watch == 'version_estenografica') { ?>
	<script src="<?php echo URL; ?>js/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="<?php echo URL; ?>js/slick.js"></script>
    <script src="<?php echo URL; ?>js/jquery.bxslider.min.js"></script>
	<?php } ?>
	<?php if ($watch == 'seguimiento_a_reformas_constitucionales' OR $watch == 'senadores') { ?>
	<script src="<?php echo URL; ?>js/jsmaps-libs.js"></script>
	<script src="<?php echo URL; ?>js/jsmaps-panzoom.js"></script>
	<script src="<?php echo URL; ?>js/jsmaps.min.js"></script>
	<?php } ?>
	<style>
		/* Note: Try to remove the following lines to see the effect of CSS positioning */
		/* Escritorio Grande */
		@media only screen and (min-width: 1100px) {
			.affix { position: fixed; *background-color: #2E1B16; top: 0; width: 100%; z-index: 9999 !important; }
			.affix + .container-fluid { padding-top: 70px; }
		}
	<?php if ($watch == NULL) { ?>
		.footer-black2 { margin-bottom: 30px; margin-right: 0px; }
		.footer-black2 { display: block; }
		.footer-black2 { padding-left: 0; margin-top: 0px; display: block; }

		.bg-22 { background: url(<?php echo URL; ?>images/paralax/fondo_1_paralax.jpg); background-clip: initial; background-color: rgba(0, 0, 0, 0); background-origin: initial; background-position: center center; background-repeat: no-repeat; background-size: cover !important; position: relative; z-index: 0; background-attachment: fixed; }
		
		.bg-overlay-black-902:before {  content: ""; height: 100%; left: 0; position: absolute; top: 0; width: 100%; z-index: -1; }

		.footer-black3 { margin-bottom: 30px; margin-right: 0px;}
		.footer-black3 { display: block; }
		.footer-black3 { padding-left: 0; margin-top: 20px; display: block; }

		.bg-23 { background: url(<?php echo URL; ?>images/paralax/fondo_2_paralax.jpg); background-clip: initial; background-color: rgba(0, 0, 0, 0); background-origin: initial; background-position: center center; background-repeat: no-repeat; background-size: cover !important; position: relative; z-index: 0; background-attachment: fixed; }
		.bg-overlay-black-903:before {  content: ""; height: 100%; left: 0; position: absolute; top: 0; width: 100%; z-index: -1; }

		.footer.footer-black .footer-box { margin-bottom: 30px; }
		.footer.footer-black .footer-box .box-content { display: block; }
		.footer.footer-black .footer-box .box-link { padding-left: 0; margin-top: 20px; display: block; }

		.bg-2 { background: url(<?php echo URL; ?>images/footer/info_parlamentaria/PieSenado2.png); background-clip: initial; background-color: rgba(1, 1, 1, 1); background-origin: initial; background-position: center center; background-repeat: no-repeat; background-size: cover !important; position: relative; z-index: 0; background-attachment: fixed; }
		.bg-overlay-black-90:before { background: rgba(1, 1, 1, 1); content: ""; height: 100%; left: 0; position: absolute; top: 0; width: 100%; z-index: -1; }

		/*social*/
		/*.social { margin-bottom: 80px; } */
		.social ul { width: 100%; display: table; padding:0px;}
		.social ul li { display: table-cell; padding:0px; background: transparent; transition: all 0.5s ease-in-out; -webkit-transition: all 0.5s ease-in-out; -ms-transition: all 0.5s ease-in-out; -moz-transition: all 0.5s ease-in-out; -o-transition: all 0.5s ease-in-out; }
		.social ul li a { line-height: 60px; width: 100%; padding: 0px 5px; display: block; color: #fff; font-size: 12px; font-weight: 600; text-transform: uppercase; }
		.social ul li a i { font-size: 30px; vertical-align: middle; color: rgba(255, 255, 255, 0.4); float: right; line-height: 60px; }
		.social ul li:hover a.facebook { background: #3a5897; }
		.social ul li:hover a.twitter { background: #41d1da; }
		.social ul li:hover a.pinterest { background: #c3222b; }
		.social ul li:hover a.dribbble { background: #dd4b80; }
		.social ul li:hover a.google-plus { background: #db2d2e; }
		.social ul li:hover a.behance { background: #005cff; }
		.social ul li:hover a.instagram { background: #fd0599; }
		.social ul li:hover a.telegram { background: #2481cc; }
		.social ul li:hover a.spotify { background: #1ed760; }
		

		.dt-sc-social-icons a.facebook:hover, ul#team-section li p a.facebook:hover { -webkit-box-shadow: inset -30px 0 0 0 #3b5998; -moz-box-shadow: inset -30px 0 0 0 #3b5998; box-shadow: inset -30px 0 0 0 #3b5998; }
		.dt-sc-social-icons a.twitter:hover, ul#team-section li p a.twitter:hover { -webkit-box-shadow: inset -30px 0 0 0 #55acee; -moz-box-shadow: inset -30px 0 0 0 #55acee; box-shadow: inset -30px 0 0 0 #55acee; }
		.dt-sc-social-icons a.google:hover, ul#team-section li p a.google:hover { -webkit-box-shadow: inset -30px 0 0 0 #dd4b39; -moz-box-shadow: inset -30px 0 0 0 #dd4b39; box-shadow: inset -30px 0 0 0 #dd4b39; }
		.dt-sc-social-icons a.pinterest:hover, ul#team-section li p a.pinterest:hover { -webkit-box-shadow: inset -30px 0 0 0 #cc2127; -moz-box-shadow: inset -30px 0 0 0 #cc2127; box-shadow: inset -30px 0 0 0 #cc2127; }
		.dt-sc-social-icons a.youtube:hover, ul#team-section li p a.youtube:hover { -webkit-box-shadow: inset -30px 0 0 0 #e52d27; -moz-box-shadow: inset -30px 0 0 0 #e52d27; box-shadow: inset -30px 0 0 0 #e52d27; }
		.dt-sc-social-icons a.linkedin:hover, ul#team-section li p a.linkedin:hover { -webkit-box-shadow: inset -30px 0 0 0 #0976b4; -moz-box-shadow: inset -30px 0 0 0 #0976b4; box-shadow: inset -30px 0 0 0 #0976b4; }
		.dt-sc-social-icons a.dribbble:hover, ul#team-section li p a.dribbble:hover { -webkit-box-shadow: inset -30px 0 0 0 #ea4c89; -moz-box-shadow: inset -30px 0 0 0 #ea4c89; box-shadow: inset -30px 0 0 0 #ea4c89; }
		.dt-sc-social-icons a.flickr:hover, ul#team-section li p a.flickr:hover { -webkit-box-shadow: inset -30px 0 0 0 #ff0084; -moz-box-shadow: inset -30px 0 0 0 #ff0084; box-shadow: inset -30px 0 0 0 #ff0084; }
		.dt-sc-social-icons a.tumblr:hover, ul#team-section li p a.tumblr:hover { -webkit-box-shadow: inset -30px 0 0 0 #35465c; -moz-box-shadow: inset -30px 0 0 0 #35465c; box-shadow: inset -30px 0 0 0 #35465c; }
	<?php } ?>
	</style>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<script src="<?php echo URL; ?>js/jquery.aniview.js"></script>



	<script>
		 
		var screenReaderConfigOptions = {
														//token: '35f9fe47ca69e4ee772cccab36a1702a',
														langCode: 'es',
														chunkLength: 500,
														screenReaderVolume: '80',
														screenReaderVoiceSpeed: 'normal',
														position: 'topright',
														scrolling: 'fixed',
														targetAppendto: 'html',
														targetAppendMode: 'bottom',
														preload: 0,
														autoBackgroundColor: 0,
														readPage: 1,
														readChildNodes: 1,
														ieHighContrast: 1,
														ieHighContrastAdvanced: 1,
														selectedStorage: 'session',
														gtranslateIntegration: 0,
														readElementsHovering: 0,
														elementsHoveringSelector: 'p',
														selectMainpageareaText: 0,
														excludeScripts: 0,
														readImages: 1,
														readImagesAttribute: 'title',
														readImagesOrdering: 'after',
														readImagesHovering: 1,
														mainpageSelector: '*[name*=main], *[class*=main], *[id*=imPageExtContainer], *[id*=container], *[class*=container]',
														showlabel: 1,
														labeltext: 'Accesibilidad',
														screenreaderIcon: 'audio',
														screenreader: 1,
														highcontrast: 1,
														highcontrastAlternate: 1,
														colorHue: 180,
														colorBrightness: 6,
														rootTarget: 1,
														dyslexicFont: 1,
														grayHues: 1,
														spacingSize: 0,
														spacingSizeMin: 0,
														spacingSizeMax: 10,
														bigCursor: 1,
														readingGuides: 1,
														readability: 0,
														readabilitySelector: '#imPage',
														readabilitySelector: 'div.item-page,#imPage,div[itemprop=articleBody],div.item-content',
														hideImages: 1,
														fontsizeMinimizedToolbar: 0,
														hoverMinimizedToolbar: 0,
														fontsize: 1,
														fontsizeDefault: 100,
														fontsizeMin: 50,
														fontsizeMax: 200,
														fontsizeSelector: '',
														fontSizeHeadersIncrement: 20,
														toolbarBgcolor: '#ededed',
														template: 'accessible.css',
														templateOrientation: 'vertical',
														accesskey_play: 'P',
														accesskey_pause: 'E',
														accesskey_stop: 'S',
														accesskey_increase: 'O',
														accesskey_decrease: 'U',
														accesskey_reset: 'R',
														accesskey_highcontrast: 'H',
														accesskey_highcontrast2: 'J',
														accesskey_highcontrast3: 'K',
														accesskey_dyslexic: 'D',
														accesskey_grayhues: 'G',
														accesskey_spacingsize_increase: 'M',
														accesskey_spacingsize_decrease: 'N',
														accesskey_bigcursor: 'W',
														accesskey_reading_guides: 'V',
														accesskey_readability: 'Q',
														accesskey_hideimages: 'F',
														accesskey_skiptocontents: 'C',
														accesskey_minimized: 'L',
														volume_accesskeys: 1,
														accesskey_increase_volume: '+',
														accesskey_decrease_volume: '-',
														readerEngine: 'proxy_responsive',
														useMobileReaderEngine: 0,
														mobileReaderEngine: 'proxy_responsive',
														proxyResponsiveApikey: 'YkiNlVQr',
														hideOnMobile: 1,
														useMinimizedToolbar: 1,
														statusMinimizedToolbar: 'closed',
														minimizedToolbarOnlyMobile: 0,
														showSkipToContents: 0,
														skipToContentsSelector: '',
														removeLinksTarget: 0,
														resetButtonBehavior: 'fontsize'
				};
	</script>
	
</head>
<body>

	<i class="fa-solid fa-chevron-up" id="backTop"></i>
	
	<!-- Cabecera -->
	<header>
		<!--<?php if ($watch == NULL OR $watch == 'contraloria' OR $watch == 'administracion' OR $watch	== 'consultoria' OR $watch	=='privacidad') { ?>
		<!<div class="container-fluid bg-header">
			<div class="row">
				<div class="col-sm-2 text-right desktop">
					<a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>images/LOGOSENADO-LXV_LEGISLATURA_circulo.png" alt="Logo"  style=" max-width:100px;"></a>
				</div>
				<div class="col-sm-10" style="padding: 10px">
					<h1 style="margin: 0; padding: 0; ">Senado de la República.</h1>
					<h2 style="margin: 0; padding: 0; ">LXV Legislatura, Segundo Año de Ejercicio.</h2>
				</div>
			</div>
		</div>
		<?php } ?>-->

		<!-- Menu -->
		<?php include 'includes/menuPrincipal.php'; ?>

		<!--
		<div class="container-fluid bg-buscador">
			<div class="container" style="max-width: 1300px; width: 100%;">
				<div class="row">
					<div class="col-sm-4 text-left desktop">
						<?php if ($watch != NULL) { ?>
						<a href="javascript:history.go(-1)"><span class="fa fa-arrow-left fa-2x" style="padding-top: 7px;"></span></a>
						<?php } ?>
					</div>
					<div class="col-sm-4 text-center desktop">
						<form action="<?php echo URL; ?>buscador/" style="padding: 4px 0;" method="post">
							<div class="input-group">
								<input type="search" class="form-control" placeholder="B&uacute;squeda" id="q" name="q" required autocomplete="off">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-4 text-right">
						<a rel="nofollow" href="<?php echo URL; ?>index.php" class="movil"><i class="fa fa-home fa-2x"></i></a>&nbsp;
						<a rel="nofollow" href="#" class="movil" data-toggle="modal" data-target="#buscadorModal"><i class="glyphicon glyphicon-search fa-2x"></i></a>&nbsp;
						<a rel="nofollow" href="#" id="printPage"><i class="fa fa-print fa-2x"></i></a>&nbsp;
						<a rel="nofollow" href="#" id="increaseFont"><i class="fa fa-font fa-2x"></i><span style="font-size: 2em; padding: 0; margin: 0;">+</span></a>&nbsp;
						<a rel="nofollow" href="#" id="diminishFont"><i class="fa fa-font fa-2x"></i><span style="font-size: 2em; padding: 0; margin: 0;">-</span></a>&nbsp;
						<a rel="nofollow" href="#" id="zoomMore"><i class="fa fa-search-plus fa-2x"></i></a>&nbsp;
						<a rel="nofollow" href="#" id="zoomLess" style="display: none;"><i class="fa fa-search-minus fa-2x"></i></a>
						
					</div>
				</div>
			</div>
		</div>-->
	</header>
	<!-- margin-top: 91px;position: absolute; -->
	<div id="imPage" style="">
		<?php include 'app/selection.php'; ?>
	</div>
	<?php	
	/** Footer principal **/
		include "footers/selectionFooter.php";
	?>

	<div id="buscadorModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Buscador</h4>
				</div>

				<div class="modal-body">
					<form action="<?php echo URL; ?>buscador/" style="padding: 4px 0;" method="post">
						<div class="input-group">
							<input type="search" class="form-control" placeholder="B&uacute;squeda" id="q" name="q" required autocomplete="off">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit" aria-labelledby="searchLabel">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>

		</div>
	</div>

	<?php

	if ($watch == ''){
		
	}
	?>

<script src="<?php echo URL; ?>/js/global.js"></script>
	<script>
		/* Menu */
		
		var sp = document.querySelector('.search-open');
		var searchbar = document.querySelector('.search-linea');
		var shclose = document.querySelector('.search-close');
		var contador = 1;
		$(document).ready(function(){
		    $(".dropdown").hover(            
		        function() {
		            $('.mega-dropdown-menu', this).stop( true, true ).slideDown("fast");
		            $(this).toggleClass('open');        
		        },
		        function() {
		            $('.mega-dropdown-menu', this).stop( true, true ).slideUp("fast");
		            $(this).toggleClass('open');
		        }
		    );
			if (screen.width <= 1200)
				$('.liSub').css('display', 'none');
			$('.menu_bar').click(function(){
					if(contador == 1){
						$('#menuCont').fadeIn('fast');
						contador = 0;
					} else {
						contador = 1;
						$('#menuCont').fadeOut();
					}

			});
				
				// $('#menuCont li').click(function(){	
				// 	$(this).find('ul').slideToggle('slow');	
				// });
			$('#menuCont>li').click(function(e){
				 
				//$('.liSub').hide();
				//$(this).find('.liSub').fadeIn();
				
				//e.preventDefault();
				$(this).children('.liSub').toggle(
					function(){
						 
					}, function(){
						 
					}
				);
				
				 
				
				// if(contador == 1){
					// 	$('.liSub').fadeIn('fast');
					// 	contador = 0;
					// } else {
					// 	contador = 1;
					// 	$('.liSub').fadeOut();
					// }

				});
			$(window).on('resize',function() {
				win = $(this); 
				if (win.width() >= 1200){ 
					$('#menuCont').fadeIn();
					
				}else{
					$('.liSub').fadeOut();
					$('#menuCont').fadeOut();
					$('#menuCont li').unbind('mouseenter mouseleave');
				}
			});
			$('.menu-toggle').click(function(){
				$(this).toggleClass('open');
			});

			var options = {
				animateClass: 'animate__animated',
				animateThreshold: 100,
				scrollPollInterval: 20
			}
			$('.aniview').AniView(options);

			
		});
 
 
	
		var text = encodeURIComponent('<?php echo $titleSeccion; ?>');

		/* Google Analitic */
		
		/* var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20685272-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})(); */
	</script>

	<!-- Google tag (gtag.js) -->
<!-- Google analytics version GA4 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-2DJ91Q41SV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2DJ91Q41SV');
</script>-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NPD6RLC83X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NPD6RLC83X');
</script>


	<!-- JavaScript y Jquery -->
	<script src="<?php echo URL; ?>js/jquerySenado.js"></script>



	<link href="<?php echo URL; ?>plugins/system/screenreader/screenreader/libraries/controller/css/accessible.css" rel="stylesheet" />	
	<style>
		#accessibility-links #text_plugin{width:80px;}

		.noscript div#off-menu_104 dl.level1 dl{
			position: static;
		}
		.noscript div#off-menu_104 dl.level1 dd.parent{
			height: auto !important;
			display: block;
			visibility: visible;
		}

		#g-social .g-socialpro {
			margin-top: -4px;
		}
		.scbasebin.screenreader.text {
		background-color: #380002  !important;
		margin-top: 2px;
		}

		.scaccessibletoolbar {
		background-color: #000!important;
		}

		.scaccessibletoolbarcloser{
			text-shadow: rgb(94 22 65) 0px 0px 0px!important;
		}

		div#accessibility-links button:hover {
			border: 2px solid #5e1641!important;
		}


		#fr_screenreader_play.active {
		background-color: #5e1641!important;
		}

		.scfontsizelabel {
		background-color: #5e1641!important;
		outline: 2px solid #5e164138!important;
		}

		body.scr_dyslexic ~ div#accessibility-links button#fr_screenreader_font_family, body.scr_grayhues ~ div#accessibility-links button#fr_screenreader_gray_hues, body.scr_bigcursor ~ div#accessibility-links button#fr_screenreader_bigcursor, body.scr_reading_guides ~ div#accessibility-links button#fr_screenreader_reading_guides, body.scr_readability ~ div#accessibility-links button#fr_screenreader_readability, body.scr_hideimages ~ div#accessibility-links button#fr_screenreader_hideimages, body.scr_highcontrast ~ div#accessibility-links button#fr_screenreader_highcontrast, body[style*=hue-rotate]:not([style*=brightness]) ~ div#accessibility-links button#fr_screenreader_highcontrast2, body[style*=brightness] ~ div#accessibility-links button#fr_screenreader_highcontrast3{
		background-color: #5e1641!important;
		}

		.sc-range-button {
		background-color: #5e1641;
		outline: 2px solid #5e16413d!important;
		color: #5e1641!important;
		}

		div.sc-range-base
		{
		background: linear-gradient(90deg, #5e1641 70%, rgb(242, 247, 250) 80%)!important;
		color: #fff!important;
		}
		div.sc-range-button {
		background-color: #5e1641!important;
		color: #fff!important;
		outline: 2px solid #5e164130!important;
		}
		div.scfontsizelabel {
		outline: 2px solid #5e16415c!important;
		}
		#sc_read_guide_bar, div.sc_read_guide_bar {
			background: #5e1641;
		}
	</style>

	<script src="<?php echo URL; ?>plugins/system/screenreader/screenreader/languages/es-ES.js"></script>
	<script src="<?php echo URL; ?>plugins/system/screenreader/screenreader/libraries/tts/soundmanager/soundmanager2.js"></script>
	<script src="<?php echo URL; ?>plugins/system/screenreader/screenreader/libraries/tts/responsivevoice.js" defer></script>
	<script src="<?php echo URL; ?>plugins/system/screenreader/screenreader/libraries/tts/tts.js" defer></script>
	<script src="<?php echo URL; ?>plugins/system/screenreader/screenreader/libraries/controller/controller.js" defer></script>
</body>
</html>