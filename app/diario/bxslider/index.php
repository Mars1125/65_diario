<style type="text/css">    
    .slider { width: 93%; margin: 0px auto; }
    .slick-slide { margin: 0px }
    .slick-slide img { width: 100%; }
    .slick-prev:before,
    .slick-next:before { color: black; }
    .slick-slide { transition: all ease-in-out .3s; opacity: .2; }
    .slick-active { opacity: 1; }
    .slick-current { opacity: 1; }
  </style>
<section class="slider responsive" style=' border:#999 0px solid; background-color:#FFF'>
	<?php 
		//echo "$lg,$anio,$tp,$np";
		echo slider_diario($lg,$anio,$tp,$np,$conecta_base); 
    ?>
</section>
<script>
$('.responsive').slick({
  dots: false,
  infinite: false,
  speed: 300,
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
		dots: false,
		infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
		dots: false,
		infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
		dots: false,
		infinite: true,  
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
<?php
function slider_diario($lg,$anio,$tp,$np,$conecta_base) {
	if ($lg==""){$lg="65";}
	if ($anio==""){$anio="1";}
	if ($tp=="" || $tp=="O" || $tp=="JP" || $tp=="SC"){$tp="(tp='O' OR tp='OD' OR tp='JP' OR tp='SC' OR tp='S')";}
	switch($np){
		case "1": $np="AND np='1'"; break;
		case "2": $np="AND np='2'";break;
		default: $np=""; break;
	}
	switch($tp){
		case "O": $tp="(tp='O' OR tp='OD' OR tp='JP' OR tp='SC' OR tp='S' OR tp='Proto')"; break;
		//case "JP": $tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S')"; break;
		//case "SC": $tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S')"; break;
		case "R": $tp="(tp='R' OR tp='RI' OR tp='SR')";break;
		case "E": $tp="(tp='E')"; break;
	}
		$sql = "SELECT * FROM d_debates.diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND ".$tp." ".$np." AND activa ='1' ORDER BY  `diario`.`fecha` DESC";		
		$result = $conecta_base->query($sql);
		$texto=NULL;
		$watch=NULL;
		if($result->num_rows > 0) {	
			//$texto="<div class='container-fluid'>  <div class='row'>";
			while ($row = $result->fetch_assoc()) {				
				switch($row['tp']){ 			
							case "O" : $tp="Sesi&oacute;n Ordinaria"; break;
							case "OI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "OD" : $tp="Sesi&oacute;n Ordinaria a Distancia"; break;
							case "RI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "R" : $tp="Comisi&oacute;n Permanente"; break;
							case "E" : $tp="Sesi&oacute;n Extraordinaria"; break;
							case "S" : $tp="Sesi&oacute;n Solemne"; break;
							case "SR" : $tp="Sesi&oacute;n Solemne"; break;
							case "JP" : $tp="Junta Previa"; break;
							case "SC" : $tp="Sesión Constitutiva"; break;
							}
				switch($row['np']){ 			
							case "1" : $np="1er. Periodo"; break;
							case "2" : $np="2do. Periodo"; break;
							case "3" : $np="3er. Periodo"; break;
							case "4" : $np="4to. Periodo"; break;
							case "5" : $np="5to. Periodo"; break;
							}
							
			$texto.="<div style=' border:#999 0px solid; background-color:#FFF'>
						<table border='0' style=' border:#999 1px solid; background-color:#FFF width:100%;'>
								<tr valign='middle'>
									<td><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style='z-index:1000'><img src='../../images/diario_de_los_debates/libro.png' width='55'></a></td>
									<td><p align='center'><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style='font-size:13px;'>".traducefecha_slider($row['fecha'])."<br>$tp<br>$np</a></p></td>
								</tr>
							</table>
					</div>";			
			}				
		}else{$texto="";}
		return($texto);			
	}

function traducefecha_slider($fecha) { 

    $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo 
    $diasemana=date("w", $fecha);// optiene el número del dia de la semana. El 0 es domingo 
    switch ($diasemana) 
       	{ 
			case "0":  $diasemana="Domingo";   break; 
			case "1":  $diasemana="Lunes";     break; 
			case "2":  $diasemana="Martes";    break; 
			case "3":  $diasemana="Mi&eacute;rcoles"; break; 
			case "4":  $diasemana="Jueves";    break; 
			case "5":  $diasemana="Viernes";   break; 
			case "6":  $diasemana="S&aacute;bado";    break; 
		} 
	$dia=date("d",$fecha); // día del mes en número 
    $mes=date("m",$fecha); // número del mes de 01 a 12 
    switch($mes) 
		{ 
			case "01": $mes="Enero";   break; 
			case "02": $mes="Febrero"; break; 
			case "03": $mes="Marzo";   break; 
			case "04": $mes="Abril";   break; 
			case "05": $mes="Mayo";    break; 
			case "06": $mes="Junio";   break; 
			case "07": $mes="Julio";   break; 
			case "08": $mes="Agosto";  break; 
			case "09": $mes="Septiembre"; break; 
			case "10": $mes="Octubre"; break; 
			case "11": $mes="Noviembre"; break; 
			case "12": $mes="Diciembre"; break; 
		} 
    $ano=date("Y",$fecha); // optenemos el año en formato 4 digitos 
    $fecha= $dia." de ".$mes ."<br>de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
    return $fecha; //enviamos la fecha al programa 
}
?>