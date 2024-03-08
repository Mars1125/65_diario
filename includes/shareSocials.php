<?php if ($watch != NULL): ?>
<style>
	/* Escritorio Grande */
	@media only screen and (min-width: 1201px) {
		
		/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
		.icons-bar {
			position: fixed;
			z-index: 99;
			top: 40%;
			right:  0;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
		}

		/* Style the icon bar links */
		.icons-bar a {
			display: block;
			text-align: center;
			padding: 10px;
			transition: all 0.3s ease;
			color: #FFF;
			font-size: 25px;
		}

		/* Style the social media icons with color, if you want */
		.icons-bar a:hover {
			-webkit-transform: translateX(-25%);
			-ms-transform: translateX(-25%);
			transform: translateX(-25%);
		}
	}
	/* Escritorio Normal */
	@media only screen and (min-width: 1025px) and (max-width: 1200px) {
		
		/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
		.icons-bar {
			position: fixed;
			z-index: 99;
			top: 40%;
			right:  0;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
		}

		/* Style the icon bar links */
		.icons-bar a {
			display: block;
			text-align: center;
			padding: 10px;
			transition: all 0.3s ease;
			color: #FFF;
			font-size: 25px;
		}

		/* Style the social media icons with color, if you want */
		.icons-bar a:hover {
			-webkit-transform: translateX(-25%);
			-ms-transform: translateX(-25%);
			transform: translateX(-25%);
		}
	}
	/* Tableta Horizontal */
	@media only screen and (min-width: 960px) and (max-width: 1024px) {
		.icons-bar {
			position: fixed;
			z-index: 99;
			top: 40%;
			right:  0;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
		}

		/* Style the icon bar links */
		.icons-bar a {
			display: block;
			text-align: center;
			padding: 10px;
			transition: all 0.3s ease;
			color: #FFF;
			font-size: 25px;
		}

		/* Style the social media icons with color, if you want */
		.icons-bar a:hover {
			-webkit-transform: translateX(-25%);
			-ms-transform: translateX(-25%);
			transform: translateX(-25%);
		}
	}
	/* Tableta Vertical */
	@media only screen and (min-width: 800px) and (max-width: 960px) {
		.icons-bar {
			position: fixed;
			z-index: 99;
			top: 40%;
			right:  0;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);
		}

		/* Style the icon bar links */
		.icons-bar a {
			display: block;
			text-align: center;
			padding: 10px;
			transition: all 0.3s ease;
			color: #FFF;
			font-size: 25px;
		}

		/* Style the social media icons with color, if you want */
		.icons-bar a:hover {
			-webkit-transform: translateX(-25%);
			-ms-transform: translateX(-25%);
			transform: translateX(-25%);
		}
	}
	/* Celular Horizontal */ 
	@media only screen and (min-width: 480px) and (max-width: 799px) {
		body { margin-bottom: 35px; }
		.icons-bar {
			position: fixed;
			bottom: 0;
			z-index: 99;
			display: flex;
			top: inherit;
			transform: none;
			margin: 0 auto;
			width: 100%;
			padding:0;
			justify-content: center;
		}

		/* Style the icon bar links */
		.icons-bar a {
			padding: 10px;
			width: 25%;
			text-align: center;
			color: #FFF;
			font-size: 18px;
		}
	}
	/* Celular Vertical */
	@media only screen and (max-width: 480px) {
		body { margin-bottom: 35px; }
		.icons-bar {
			position: fixed;
			bottom: 0;
			z-index: 99;
			display: flex;
			top: inherit;
			transform: none;
			margin: 0 auto;
			width: 100%;
			padding:0;
			justify-content: center;
		}

		/* Style the icon bar links */
		.icons-bar a {
			padding: 10px;
			width: 25%;
			text-align: center;
			color: #FFF;
			font-size: 18px;
		}
	}
</style>

<div class="icons-bar">
	<!--<a href="#">
		<div class="fb-like" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
		<div id="fb-root"></div>
	</a>-->

	<a rel="noopener noreferrer" class="btn-facebook facebook-share">
	<i class="fa-brands fa-facebook-f"></i>
	</a>
	
	<a rel="noopener noreferrer" class="btn-twitter twitter-share">
	<i class="fa-brands fa-x-twitter"></i>
	</a>
	
	<a rel="noopener noreferrer" data-event="social share" data-info="WhatsApp" class="btn-whatsapp whatsapp-share">
	<i class="fa-brands fa-whatsapp"></i>
	</a>
	

	<a rel="noopener noreferrer" class="btn-microsoft email-share">
	<i class="fa-regular fa-envelope"></i>
	</a>
</div>
<?php endif ?>