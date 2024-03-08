<?php
/********
function ultimaGacetaActiva($conecta_base) {
		$sql = "SELECT MAX(id) AS ultimoID FROM gaceta.gaceta WHERE activa = 1 AND tp = 'O';";
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {
				return $row['ultimoID'];
			}
		}
		$conecta_base->close();
	}
*********/
function busca_periodos($watch,$lg,$anio,$tp,$np,$conecta_base) {
	if ($lg==""){$lg="63";}
	if ($anio==""){$anio="1";}
	if ($tp=="" || $tp=="O" || $tp=="JP" || $tp=="SC" ){$tp="(tp='O' OR tp='JP' OR tp='SC')";}	
	if ($np==""){$np="1";}
	switch($tp){
		case "O": $tp="tp='O'"; break;
		case "R": $tp="(tp='R' OR tp='RI')"; break;
		}
		$sql = "SELECT DISTINCT(tp), legislatura, annus, np, tp FROM d_debates.diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND ".$tp." AND np='".$np."' AND activa='1' ORDER BY  `diario`.`fecha` DESC ";
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {				
				switch($row['legislatura']){
					case 53: $legislatura="LIII"; break;
					case 54: $legislatura="LVIV"; break;
					case 55: $legislatura="LV"; break;
					case 56: $legislatura="LVI"; break;
					case 57: $legislatura="LVII"; break;
					case 58: $legislatura="LVIII"; break;
					case 59: $legislatura="LIX"; break;
					case 60: $legislatura="LX"; break;
					case 61: $legislatura="LXI"; break;
					case 62: $legislatura="LXII"; break;
					case 63: $legislatura="LXIII"; break;
					case 64: $legislatura="LXIV"; break;
				}
				switch($row['tp']){
				case "O":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1"><img src="'.URL.'images/diario_de_los_debates/primer_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2"><img src="'.URL.'images/diario_de_los_debates/segundo_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						
						
						}
				break;
				
				case "JP":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1"><img src="'.URL.'images/diario_de_los_debates/primer_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2"><img src="'.URL.'images/diario_de_los_debates/segundo_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						
						
						}
				break;
				
				case "SC":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1"><img src="'.URL.'images/diario_de_los_debates/primer_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2"><img src="'.URL.'images/diario_de_los_debates/segundo_period.jpg" style="width: 100%; height:100%;"></a>'; break;
						
						
						
						}
				break;
								
				case "R": 
					switch($row['np']){						
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP"><img src="'.URL.'images/diario_de_los_debates/cp.jpg" style="width: 100%; height:100%;"></a>'; break;
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP"><img src="'.URL.'images/diario_de_los_debates/cp.jpg" style="width: 100%; height:100%;"></a>'; break;
						}
				break;
				case "RI": 
					switch($row['np']){					
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP"><img src="'.URL.'images/diario_de_los_debates/cp.jpg" style="width: 100%; height:100%;"></a>'; break;
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP"><img src="'.URL.'images/diario_de_los_debates/cp.jpg" style="width: 100%; height:100%;"></a>'; break;
						}
				break;
				default: $texto2= "";break;
			}
				
			}
		}else{$texto2="";}
		return($texto2);
	}
function busca_extraordinario($watch,$lg,$anio,$conecta_base) {
	if ($lg==""){$lg="63";}
	if ($anio==""){$anio="1";}
		$sql = "SELECT DISTINCT(tp), legislatura, annus FROM d_debates.diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND tp='E' ORDER BY  `diario`.`fecha` DESC ";		
		//echo "$sql";
		$texto2 = NULL;
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {				
				switch($row['legislatura']){
					case 53: $legislatura="LIII"; break;
					case 54: $legislatura="LVIV"; break;
					case 55: $legislatura="LV"; break;
					case 56: $legislatura="LVI"; break;
					case 57: $legislatura="LVII"; break;
					case 58: $legislatura="LVIII"; break;
					case 59: $legislatura="LIX"; break;
					case 60: $legislatura="LX"; break;
					case 61: $legislatura="LXI"; break;
					case 62: $legislatura="LXII"; break;
					case 63: $legislatura="LXIII"; break;
					case 64: $legislatura="LXIV"; break;
				}
				$texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_E"><img src="'.URL.'images/diario_de_los_debates/perio_extra.jpg" style="width: 100%;"></a>';
			}
			
		}else{$texto2="";}		
		return($texto2);
	}

?>