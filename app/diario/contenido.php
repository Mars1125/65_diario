<div class="sub_menu">
  <div class="sub_menu_bar">
    <a href="#" class="bt-sub-menu"><span class="icon-list2"></span>Menú</a>
  </div>
  
  <nav>
    <ul>
      <li><a href="index.php?watch=52">¿C&oacute;mo se Desarrollan las Sesiones?</a></li>
      <li><a href="index.php?watch=44">Transmisión en Vivo</a></li>
      <li><a href="index.php?watch=10">Orden del Día</a></li>
      <li><a href="index.php?watch=11&sm=1">Gaceta del Senado</a></li>
      <li><a href="http://www.senado.gob.mx/sinopsis/index.php">Sinopsis</a></li>
      <li class="active"><a href="index.php?watch=13">Diario de los Debates</a></li>
      <li><a href="index.php?watch=15">Versión Estenográfica</a></li>
      <li><a href="index.php?watch=35">Asistencias</a></li>
      <li><a href="index.php?watch=36">Votaciones</a></li>
      <li><a href="http://comunicacion.senado.gob.mx/index.php/multimedia/fotos.html">Galería Fotográfica</a></li>
      <li><a href="http://comunicacion.senado.gob.mx/index.php/multimedia/videos.html">Videos</a></li>
      <li><a href="http://comunicacion.senado.gob.mx/index.php/informacion/boletines.html">Boletines</a></li>
    </ul>
  </nav>
</div>
<script>
    $( function() {
        $( 'audio' ).audioPlayer(); 
    });
</script>
<?php
  include"icons/index.php";
  echo "<table border='0' width='100%'><tr><td width='50%'><div align='left'>$actualizacion</div></td><td width='50%'><div align='right'><a href='http://www.senado.gob.mx/formatos_INAI/diario/'><img src='images/btn_trans.png' border='0' width='292'/></a></div></td></tr></table>";
  echo '
  <div style="width: 90%; margin: 10px auto; text-align: center; background: rgba(250, 250, 250, 0.5); padding: 10px 0; font-size: 20px;" class="border_box_claro">
    <strong>Diario de los Debates</strong>
  </div>';
  
    echo '
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#que_es">¿Qué es el Diario de los Debates?</a>
		<a href="#" class="btn btn-default" data-toggle="modal" data-target="#que_contine">¿Qué contiene?</a>
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#como_consulta">¿Cómo se consulta?</a>
        <a href="http://www.senado.gob.mx/formatos_INAI/diario/" class="btn btn-default" style="background: #3B443C; font-weight: bold; color: #FFF;">Obligaciones de Transparencia</a>
		&nbsp; &nbsp;&nbsp; <audio preload="auto" controls><source src="audio/diario/Que_es_el_Diario.mp3" type="audio/mpeg"></audio>
		<a href="docs/Que_es_el_Diario_de_los_Debates.doc"><img src="images/iconos_principales/doc.png" width="25"></a>
                                
    </div>';

    if ($sm == "") {
$conecta = mysql_connect("localhost", "root", "D3M0N");
	include("library/diario_debates/funciones.php");
	if(empty($anio)){	$anio = $_REQUEST['anio'];	}
	if(empty($mn)) {	$mn  = $_REQUEST['mn'];		}
	if(empty($sm)) {	$sm  = $_REQUEST['sm'];		}
	if(empty($id)) {	$id  = $_REQUEST['id'];		}
	if(empty($lg)) {	$lg  = $_REQUEST['lg'];		}
	if(empty($buscar)) {	$buscar  = $_REQUEST['buscar'];		}
	if($lg==""){$lg=62;}
	if($anio==""){$anio=3;}
	
	switch($lg){
		case 53: $lg="LIII"; break;
		case 54: $lg="LIV"; break;
		case 55: $lg="LV"; break;
		case 56: $lg="LVI"; break;
		case 57: $lg="LVII"; break;
		case 58: $lg="LVIII"; break;
		case 59: $lg="LIX"; break;
		case 60: $lg="LX"; break;
		case 61: $lg="LXI"; break;
		case 62: $lg="LXII"; break;
		case 63: $lg="LXIII"; break;
		}
	switch($anio){
		case 3: $anio="3er<br>A&ntilde;o"; break;
		case 2: $anio="2o<br>A&ntilde;o"; break;
		case 1: $anio="1er<br>A&ntilde;o"; break;
	}
	
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<style>
a.back-to-top {
	display: none;
	width: 60px;
	height: 60px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background-image:url(imagenes/ir_arriba.png);	
	
}
</style>
<link rel="stylesheet" href="library/diario_debates/css/bootstrap.min.css">
<link rel="stylesheet" href="library/diario_debates/css/bootstrap-theme.min.css">

<script src="library/diario_debates/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;		
    }
	.letra_grande50{ font-size:60px;}
	.letra_mediana30{ font-size:25px;}
</style>
<style>
.sidebar {
    background-color: #95a496;
    height: 93%;
    min-height: 500px;
    max-height: 100%;
    position: fixed;
    top: 50px;
    bottom: 0px;
    right: 0px;
	max-width:280px;
    overflow-x: hidden;
    overflow-y: auto;
    display: block;
	z-index:100000;s
}
</style>
<script type="text/javascript" src="library/diario_debates/js/jquery-1.11.2.js"></script>
<script>
$("#busqueda").focus();

function realizaProceso(valorCaja1, valorCaja2){
        var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
        };
        $.ajax({
                data:  parametros,
                url:   'library/diario_debates/libreria/buscar.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}
</script>

<link rel="stylesheet" href="library/diario_debates/lib/print.css" type="text/css" media="print">
<!--[if IE]><link rel="stylesheet" href="../css/ie.css" type="text/css" media="screen, projection"><![endif]-->
<link href="library/diario_debates/lib/highlight.css" rel="stylesheet" type="text/css" media="screen">
<script src="library/diario_debates/lib/jquery.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
$('#example').dataTable( {
	"order": [[ 0, "asc" ]]
} );
} );
</script>
<script>
var min=8;
var max=18;
function increaseFontSize() {

   var p = document.getElementsByTagName('td');
   for(i=0;i<p.length;i++) {

      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {

         var s = 12;
      }
      if(s!=max) {

         s += 1;
      }
      p[i].style.fontSize = s+"px"

   }
}
function decreaseFontSize() {
   var p = document.getElementsByTagName('td');
   for(i=0;i<p.length;i++) {

      if(p[i].style.fontSize) {
         var s = parseInt(p[i].style.fontSize.replace("px",""));
      } else {

         var s = 12;
      }
      if(s!=min) {

         s -= 1;
      }
      p[i].style.fontSize = s+"px"

   }
}
</script>
<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function(){
	$("#submit").click(function(){
		
		// start variables as empty
		var term = "";
		var n = "0";
		
		// hide the results at first
		$("div.results").hide().empty();
        // grab the input value and store in variable
        term = $('#term').attr('value');
		console.log("The value of term is: "+term);

		$('span.highlight').each(function(){
			$(this).after($(this).html()).remove();
		});
		
		if($('#term').val() == ""){
			$("div.results").fadeIn().append("Ingrese el t&eacute;rmino a buscar");
			$('#term').fadeIn().addClass("error");
			return false;
		}else{
			$('div.mostrar_contenido :contains("'+term+'")').each(function(){
				$(this).html($(this).html().replace(new RegExp(term,'g'), '<span class="highlight"><a name="buscar">'+term+'</a></span>'));
				$(this).find('span.highlight').fadeIn("slow");
			});
			
			// how many did it find?
			n = $("span.highlight").length;
			console.log("Total de : "+n);

			if(n == 0){
				$("div.results").fadeIn().append("Sin Resultados");
			}else{
				$("div.results").fadeIn().append("<b>Se encontraron:</b> "+n+" coincidencia(s) con el t&eacute;rmino: <i><b><a href='#buscar'>"+term+"</a></b></i>.");
			}
			return false;
		}
	});      
});
/* ]]> */
</script>

    
<link rel="stylesheet" type="text/css" href="library/diario_debates/css/estilos.css"/>

<div id="contenedor_diario">
  <div id="anio_buscador">
      <div id="cuadro_info">
        <div id="legislatura_lg" align="center"><strong><em><?=$lg;?></em></strong></div>
        <div id="legislatura_contenido">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Legislatura</strong></div>
        <div id="anio"><strong><?=$anio;?></strong></div>
      </div>
    <div id="cuadro_buscador">
        <div align="center" class="texto_busqueda2"><strong>B&uacute;squeda:</strong></div>        
        <input type="hidden" name="iddiario" id="iddiario" value="<?=$id?>"/>
        <input type="text" class="texto_buscar2" name="term" id="term" />        
        <input type="image" src="library/diario_debates/imagenes/lupa.jpg" class="lupa2"  name="submit" id="submit" />        
    </div>
    <a href="index.php?watch=13" target="_self"><img src="library/diario_debates/imagenes/menu_diario.png" border="0" class="diario_inicio" /></a>
  </div>
<div class="results"></div>
    <div class="mostrar_contenido">
        <img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='8'>
        <? echo inicio_diario_nuevo_formato($id, $conecta);?>
    </div>
</div>
<p>&nbsp;</p>

<? } ?>
<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ($(window).scrollTop() > amountScrolled) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('body').animate({
		scrollTop: 0
	}, 'fast');
	return false;
});
</script>
<!-- Modal -->
<div class="modal fade" id="que_es" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿Qu&eacute; es el Diario de los Debates?</h4>
            </div>

            <div class="modal-body">
                <audio preload="auto" controls>
                    <source src="audio/diario/Que_contiene_Diario.mp3" type="audio/mpeg">
                </audio>

                <p align="justify">El Diario de los Debates del Senado tiene su  antecedente histórico en la creación del Diario de los Debates de la Cámara de  Diputados del Congreso de la Unión en 1867, cuando &ldquo;la crónica parlamentaria se  institucionaliza a través de un medio oficial de los debates y actos  parlamentarios. Antes de la creación de este medio, los periódicos de la época  fueron los únicos vehículos para este fin; de esta manera se divulgaron los  debates del Congreso mexicano durante la primera mitad del siglo XIX en  periódicos como El Águila o El Sol, que daban cuenta no sólo de lo ocurrido en  el Congreso, sino de la discusión, teorías y hechos detrás de los debates.  Durante la primera mitad del siglo XIX fue igualmente muy común que los propios  integrantes de los congresos y las legislaturas de los estados publicaran sus  iniciativas, debates u opúsculos que incidieran en el trabajo legislativo y  político de los congresos; de tal suerte, los dictámenes, votos y disensiones,  así como las iniciativas de ley o reformas, eran publicadas en folletos que  circulaban libremente fuera del recinto legislativo y que daban cuenta a la  población de la labor de los parlamentarios&rdquo; <span style=" font-size:10px;">(Manuel González Oropeza)</span>.</p>
<p align="justify">El Diario de los Debates del Senado concentra las  deliberaciones y acuerdos adoptados en las sesiones del Pleno, pero también  todos aquellos textos y documentos aludidos en las intervenciones a los cuales  se puede acceder fácilmente en la versión digital.</p>
<p align="justify">Así, el Diario de los Debates, al difundir los  debates parlamentarios, busca garantizar el ejercicio del derecho de acceso a  la información establecido en nuestra Constitución, bajo el principio de máxima  publicidad, considerada ésta como un principio constitucional de la democracia  representativa.</p>
<p align="justify">FUNDAMENTO LEGAL<br>
  Ley Orgánica del Congreso General de los Estados  Unidos Mexicanos, artículo 142, numeral 1. Reglamento del Senado, artículo 309. </p>




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="que_contine" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿Qu&eacute; contiene?</h4>
            </div>

            <div class="modal-body">
                <audio preload="auto" controls>
                    <source src="audio/diario/Que_contiene_Diario.mp3" type="audio/mpeg">
                </audio>

               <p align="justify"><strong>C</strong><strong>ONSTA DE LA SIGUIENTE  INFORMACIÓN DE LAS SESIONES DEL PLENO:</strong></p>
<p align="justify">Lugar, fecha y hora del inicio y término  de cada sesión.</p>
<p align="justify">Carácter de la sesión (Ordinaria, Extraordinaria,  Solemne y Comisión Permanente).</p>
<p align="justify">Declaratoria  de quórum.</p>
<p align="justify">Orden del Día.</p>
<p align="justify">Nombre del Presidente y de quienes  presidan la sesión durante su desarrollo.</p>
<p align="justify">Copia fiel del acta y lista de  asistencia de la sesión anterior.</p>
<p align="justify">Transcripción de los debates en el orden  en que se realizan.</p>
<p align="justify">Intervenciones de los Senadores en  tribuna y desde los escaños.</p>
<p align="justify">Textos leídos.</p>
<p align="justify">Textos no leídos cuya inserción ordenan  el Presidente o el Pleno.</p>
<p align="justify">Documentos a los que se dé turno.</p>
<p align="justify">Propuestas y resoluciones aprobadas.</p>
<p align="justify">Dictámenes y votos particulares; y.</p>
<p align="justify">Resultado de las votaciones.</p>
<p align="justify">El Diario de los Debates se publica  dentro de los cinco días hábiles posteriores al término de la sesión, en medio  impreso y en la página electrónica del Senado en: http://senado.gob.mx. <span style=" font-size:10px;">ARTÍCULO 309 DEL REGLAMENTO DEL SENADO DE LA  REPÚBLICA </span></p>
<p align="justify">O en la edición tradicional en Tomos, la  cual se encuentra a disposición del público en el Archivo Histórico y Memoria  Legislativa del Senado en la calle Ignacio Allende 23, segundo piso, Centro  Histórico, C.P. 06000 Ciudad de México. </p>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="como_consulta" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">¿C&oacute;mo se consulta?</h4>
            </div>

            <div class="modal-body">
                <table class="tableP">
                    <thead>
                        <tr>
                            <td colspan="3" style="background: #C4C4C4">
                                <audio preload="auto" controls>
                                    <source src="audio/diario/Como_consulta_Diario.mp3" type="audio/mpeg">
                                </audio>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                               
                                <object data='library/diario_debates/como_consulta/como_lo_buscamos_2.pdf' type='application/pdf' width='900' height='1000' ></object> 
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>