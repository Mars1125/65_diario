<script>
$(document).ready(function(){
  $('.slider5').bxSlider({
    slideWidth: 220,
    minSlides: 2,
    maxSlides: 5,
    slideMargin: 10
  });
});
</script>
<div class="slider5">
<?php 
echo "$lg,$anio,$tp,$np";
echo slider_diario($lg,$anio,$tp,$np,$conecta_base); 
?>
</div>
<?php
function slider_diario($lg,$anio,$tp,$np,$conecta_base) {
	if ($lg==""){$lg="64";}
	if ($anio==""){$anio="1";}
	if ($tp=="" || $tp=="O" || $tp=="JP" || $tp=="SC" || $tp=="Proto"){$tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S' OR tp='Proto')";}
	switch($np){
		case "1": $np="AND np='1'"; break;
		case "2": $np="AND np='2'";break;
		default: $np=""; break;
	}
	switch($tp){
		case "O": $tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S' OR tp='Proto')"; break;
		case "JP": $tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S' OR tp='Proto')"; break;
		case "SC": $tp="(tp='O' OR tp='JP' OR tp='SC' OR tp='S' OR tp='Proto')"; break;
		case "R": $tp="(tp='R' OR tp='RI' OR tp='S' OR tp='Proto')";break;
		case "E": $tp="(tp='E')"; break;
	}
		$sql = "SELECT * FROM d_debates.diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND ".$tp." ".$np." AND activa ='1' ORDER BY  `diario`.`fecha` DESC";		
		$result = $conecta_base->query($sql);
		$texto=NULL;
		$watch=NULL;
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {				
				switch($row['tp']){ 			
							case "O" : $tp="Sesi&oacute;n Ordinaria"; break;
							case "OI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "RI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "R" : $tp="Comisi&oacute;n Permanente"; break;
							case "E" : $tp="Sesi&oacute;n Extraordinaria"; break;
							case "S" : $tp="Sesi&oacute;n Solemne"; break;
							case "SR" : $tp="Sesi&oacute;n Solemne"; break;
							case "JP" : $tp="Junta Previa"; break;
							case "SC" : $tp="Sesión Constitutiva"; break;
							case "Proto" : $tp="Sesión Protocolaria"; break;
							}
				switch($row['np']){ 			
							case "1" : $np="1er. Periodo"; break;
							case "2" : $np="2do. Periodo"; break;
							case "3" : $np="3er. Periodo"; break;
							case "4" : $np="4to. Periodo"; break;
							case "5" : $np="5to. Periodo"; break;
							}
							
			$texto.="<div class='slide'>
				<div class='tabla_sombra' style='text-shadow: 0.0em 0.0em 0.00em #000;'>
					<table border='0'>
						<tr valign='middle'>
							<td><a href='".URL."diario_de_los_debates/documento/".$row['id']."'><img src='../../images/diario_de_los_debates/libro.png' width='55'></a></td>
							<td><p align='center'><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style='font-size:13px;'>".traducefecha_slider($row['fecha'])."<br>$tp<br>$np</a></p></td>
						</tr>
					</table>
				</div>
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