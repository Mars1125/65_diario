<?php
	/**** Cabeceras de Secciones ****/
	switch($watch){		
		/** Cabeceras **/ 
		
		case"diario_de_los_debates": 					$imagenCabecera="banner_info_parlamentaria.jpg"; break;
			
					
	} 
?>
<?php if ($watch != NULL): ?>
	<style>
		.rowMenuSub{
			filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.2));
		}
	.portada{
	   background: url(<?php echo URL;?>images/cabeceras/<?php echo $imagenCabecera;?>) ;     
	   background-position:center; 
	   width: 100%;
	   text-align: center;
	   background-size: cover;
	   color: #fff;
	}
	.portada2{
	  /* background: url(<?php echo URL; ?>images/65/cabecera/inteior_Cab2.png);     */
	   /*background: url(<?php echo URL; ?>images/65/cabecera/cabecara2.jpg);     */
	   /*background-position:center; 
	   width: 100%;
	   text-align: center;
	   background-size: cover;*/	   
	   
	   background-repeat: no-repeat; background-size: cover; background-position: left;
	   color: #fff;
	   height: 110px;
	   /*background: transparent url(<?php echo URL; ?>images/65/pattern.png) repeat top left;*/
	   /*background-color: #4b565d;*/
	}
	.portada3{
	   background: url(<?php echo URL; ?>images/65/cabecera/inteior_Cab3.png);     
	   /*background-position:center; 
	   width: 100%;
	   text-align: center;
	   background-size: cover;*/
	   background-repeat: no-repeat; background-size: cover; background-position: left;
	   color: #fff;
	   min-height: 170px;
	}
	.text{
	  margin: 30px 0px 30px 0px;	
	  padding: 10px;
	  background: rgba(0, 0, 0, 0.3);
	  display: inline-block;
	  width: 100%;
	}
	@media only screen and (max-width: 1380px){
		ul>li{
			/* font-size: 12px; */
		}
		span{font-size: 12px;}
		h1{font-size: 24px;}
		.portada2{	     			   
			   background-repeat: no-repeat; background-size: cover; background-position: left;
			   color: #fff;
			   height: 170px;
			   padding-top: 70px;
			   /*background: transparent url(<?php //echo URL; ?>images/65/pattern.png) repeat top left;*/
	   		   /*background-color: #4b565d;*/
			}
		.portada3{	     			   
			   background-repeat: no-repeat; background-size: cover; background-position: left;
			   color: #000;
			   height: 170px;
			   padding-top: 70px;
			   /*background: transparent url(<?php //echo URL; ?>images/65/pattern.png) repeat top left;*/
	   		   /*background-color: #4b565d;*/
			}
	}

	h1, h2, h3, h4, h5, h6 {
    font-family: 'Open Sans',  sans-serif !important;
}
.bannerCabecera{
	/* background: transparent url(<?php echo URL; ?>images/65/cabecera/1.png); */
	background: #775D56;
background: -moz-linear-gradient(left, #775D56 0%, #775D56 50%, #775D56 54%, #775D56 100%);
background: -webkit-linear-gradient(left, #775D56 0%,#775D56 50%,#775D56 54%,#775D56 100%);
background: linear-gradient(to right, #775D56 0%,#775D56 50%,#775D56 54%,#775D56 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#775D56', endColorstr='#775D56',GradientType=1 );
}
.banner-global{
	background-repeat: no-repeat !important;
	background-position: top center !important;
	background-size: cover !important;
	margin-bottom: 24px;
}

.banner-global .portada_2{
	min-height: 100px;
    /* height: auto; */
	position: relative;
    display: flex;
    width: auto;
    align-content: center;
    align-items: center;
    flex-wrap: wrap;
    height: 100%;
}

.banner-global .portada_2 > div {
	/* display: block;
    width: 100%;
    text-align: center; */
}
.banner-global .portada_2 .container-banner .title-banner{
	font-weight: lighter; 
	color: #fff;
	flex: 1;
	margin-top: 0;
	margin-bottom: 0;
	font-size: 45px
}
.banner-global .portada_2 .container-banner-right{
	height: 100%;

    display: flex;
    width: 100%;
    align-items: center;
	--bs-gutter-x: 0;
	margin-right: 0;
	margin-left: 0;
}
.banner-global .portada_2 .container-banner-right .col-sm-12{
	/* width: 100%;
	text-align: center !important; */
}
.banner-global .portada_2 .container-banner-right p{
	margin-bottom: 0;
	display: block;
	font-size: 16px;
}
.banner-global .portada_2 .container-banner-right h3{
	margin-top: 0;
	margin-bottom: 0;
	display: block;
}
.ajusta_altura_contenido{
	height: 110px;
}
@media only screen and (max-width: 1680px) {
	.banner-global .portada_2 .container-banner .title-banner{
		font-size: 42px;
	}
	.ajusta_altura_contenido{
	  height: 123px;
  }

@media only screen and (max-width: 1500px) {
	.banner-global .portada_2 .container-banner .title-banner{
		font-size: 36px;
	}
	.ajusta_altura_contenido{
	  height: 123px;
  }
}
@media only screen and (max-width: 1400px) {
	
	.ajusta_altura_contenido{
	  height: 124px;
  }
}
@media only screen and (max-width: 1110px) {
	.banner-global .portada_2 {
    	min-height: 122px;
	}
	.ajusta_altura_contenido{
	  height: 60px;
  }
}

@media only screen and (max-width: 600px) {
	.ajusta_altura_contenido{
	  height: 59px;
  }
  .banner-global .portada_2 {
    min-height: 70px !important;
    height: auto;
}
	.banner-global .portada_2 .container-banner .title-banner{
		font-size: 26px;
		margin: .5em 0;
		text-align: center;
	}
	.banner-global .portada_2 {
    min-height: 150px;}
	.banner-global .portada_2 .container-banner-right {
    	padding-bottom: 1rem;
		align-items: start;
		display: none;
	}
	.banner-global .portada_2 .container-banner-right p,
	.banner-global .portada_2 .container-banner-right h3{
		font-size: 17px !important;
	}
}

.img-responsive{
	/* width: 100%;
	height: auto; */
}


	</style>
<?php endif ?>


<?php	    
$claseBanner=NULL;
$claseBanner2=NULL;
	switch($watch){				
		
		case"diario_de_los_debates":
			$claseBanner='class="col-xs-12 col-sm-12 col-md-8 col-lg-8"';
			$claseBanner2='class="col-xs-12 col-sm-12 col-md-4 col-lg-4 "';				
		break;

		default :
			$claseBanner='class="col-xs-12 col-sm-12 col-md-8 col-lg-8"';
			$claseBanner2='class="col-xs-12 col-sm-12 col-md-4 col-lg-4 "';				
		break;
		
		
	}

?>

<!-- DIV que ajusta la altura para el contenido de los menus principales -->
<div class="col ajusta_altura_contenido"></div>
<section  class="bannerCabecera">
<div class="container-fluid banner-global">  
  	<div class="row portada_2">	    	    
	    <div <?php echo $claseBanner;?>>
			<div class="container-banner">
				<h1 class="title-banner"><?php echo $titleSeccion;?></h1>
			</div>
	    </div>	    
	    <!--<div <?php echo $claseBanner2;?> style="padding-top: 15px; padding-left: 25px; margin:0px; background: transparent url(<?php echo URL; ?>images/65/pattern.png) repeat top left;
	   		   background-color: #4b565d;">-->
	   	<div <?php echo $claseBanner2;?>>
	    	<?php
	    	$informacionParlamentaria='
	    				 <div class="row text-left container-banner-right helper-s">
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">						    								    		
						    	<p aling="center" style="font-size: 1.17em; font-weight: lighter; font-family: Open Sans, sans-serif !important; ">
						    	<a href="#" data-toggle="modal" data-target="#queEs" style=" color:#fff;">¿Qué es?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#queContine" style=" color:#fff;">¿Qué contiene?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#comoConsulta" style=" color:#fff;">¿Cómo se consulta?</a></p>
						    		
						    </div>
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">
						    		<p >Cómo usar</p>
						    		<p align="center" style=" font-size:16px; padding-top:5px;"><img src="'.URL.'images/65/cabecera/Icons_como_usar/circle_lines.png" class="img-responsive" style=" max-width: 50px;"></p>				    
						    </div>						    		    
						</div>';
	    	switch($watch){				
				
				case"diario_de_los_debates":
					echo ' <div class="row text-left container-banner-right helper-s">
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">						    								    		
						    	<p aling="center" style="font-size: 1.17em; font-weight: lighter; font-family: Open Sans, sans-serif !important; ">
						    	<a href="#" data-toggle="modal" data-target="#queEs" style=" color:#fff;">¿Qué es?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#queContine" style=" color:#fff;">¿Qué contiene?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#comoConsulta" style=" color:#fff;">¿Cómo se consulta?</a></p>
						    		
						    </div>
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">
						    		<p><a href="#" data-toggle="modal" data-target="#comoUsar" style=" color:#fff;">Cómo usar</a></p>
						    		<p align="center" style=" font-size:16px; padding-top:5px;"><a href="#" data-toggle="modal" data-target="#comoUsar" style=" color:#fff;"><img src="'.URL.'images/65/cabecera/Icons_como_usar/circle_lines.png" class="img-responsive" style=" max-width: 50px;"></a></p>				    
						    </div>						    		    
						</div>';
				break;
				
				default:
					echo ' <div class="row text-left container-banner-right helper-s">
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">						    								    		
						    	<p aling="center" style="font-size: 1.17em; font-weight: lighter; font-family: Open Sans, sans-serif !important; ">
						    	<a href="#" data-toggle="modal" data-target="#queEs" style=" color:#fff;">¿Qué es?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#queContine" style=" color:#fff;">¿Qué contiene?</a><br>
						    	<a href="#" data-toggle="modal" data-target="#comoConsulta" style=" color:#fff;">¿Cómo se consulta?</a></p>
						    		
						    </div>
						    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style=" text-align:center;">
						    		<p><a href="#" data-toggle="modal" data-target="#comoUsar" style=" color:#fff;">Cómo usar</a></p>
						    		<p align="center" style=" font-size:16px; padding-top:5px;"><a href="#" data-toggle="modal" data-target="#comoUsar" style=" color:#fff;"><img src="'.URL.'images/65/cabecera/Icons_como_usar/circle_lines.png" class="img-responsive" style=" max-width: 50px;"></a></p>				    
						    </div>						    		    
						</div>';			
			break;

				
			}

	    	?>
	    </div>	    
	</div>
</div>
</section>
		