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

function UltimoDiarioD($conecta_base) {
	
		$sql = "SELECT * FROM d_debates.diario WHERE legislatura = 65 ORDER BY fecha DESC LIMIT 1;";		
		$result = $conecta_base->query($sql);
		$texto=NULL;
		$watch=NULL;
		if($result->num_rows > 0) {	
			//$texto="<div class='container-fluid'>  <div class='row'>";
			while ($row = $result->fetch_assoc()) {	
				switch($row['legislatura']){
						case 53: $legislatura="LIII Legislatura"; break;
						case 54: $legislatura="LVIV Legislatura"; break;
						case 55: $legislatura="LV Legislatura"; break;
						case 56: $legislatura="LVI Legislatura"; break;
						case 57: $legislatura="LVII Legislatura"; break;
						case 58: $legislatura="LVIII Legislatura"; break;
						case 59: $legislatura="LIX Legislatura"; break;
						case 60: $legislatura="LX Legislatura"; break;
						case 61: $legislatura="LXI Legislatura"; break;
						case 62: $legislatura="LXII Legislatura"; break;
						case 63: $legislatura="LXIII Legislatura"; break;
						case 64: $legislatura="LXIV Legislatura"; break;
						case 65: $legislatura="LXV Legislatura"; break;
					}		

				switch($row['tp']){ 			
							case "O" : $tp="Sesi&oacute;n Ordinaria"; $tpp="Ordinario"; break;
							case "OI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; $tpp="Ordinario"; break;
							case "OD" : $tp="Sesi&oacute;n Ordinaria a Distancia"; $tpp="Ordinario"; break;
							case "RI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; $tpp="Ordinario"; break;
							case "R" : $tp="Comisi&oacute;n Permanente"; $tpp="Ordinario"; break;
							case "E" : $tp="Sesi&oacute;n Extraordinaria"; $tpp="Ordinario"; break;
							case "S" : $tp="Sesi&oacute;n Solemne"; $tpp="Ordinario"; break;
							case "SR" : $tp="Sesi&oacute;n Solemne"; $tpp="Ordinario"; break;
							case "JP" : $tp="Junta Previa"; $tpp="Ordinario"; break;
							case "SC" : $tp="Sesión Constitutiva"; $tpp="Ordinario"; break;
							}
				switch($row['np']){ 			
							case "1" : $np="Primer Periodo"; break;
							case "2" : $np="Segundo Periodo"; break;
							case "3" : $np="Tercer Periodo"; break;
							case "4" : $np="Cuarto Periodo"; break;
							case "5" : $np="Quinto Periodo"; break;
							}							
			
			$texto.="<hr><p style=' font-size: 25px;'><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style='font-size:25px;'><b>$legislatura</b></a></p>";
			$texto.="<p style=' font-size: 20px;'><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style='font-size:20px;'>".viewDate($row['fecha'])."<br>$tp<br>$np $tpp</a></p>";		
			}				
		}else{$texto="";}
		return($texto);			
	}


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

function busca_periodos64($watch,$lg,$anio,$tp,$np,$conecta_base) {
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
					case 65: $legislatura="LXV"; break;
					default: $legislatura="LXV"; break;

				}
				switch($row['tp']){
				case "O":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1" class="btn btn-default" style=" border-radius:10px; width: 100%;">Primer<br>Periodo</a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2" class="btn btn-default"  style=" border-radius:10px; width: 100%;">Segundo<br>Periodo</a>'; break;
						}
				break;
				
				case "JP":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1" class="btn btn-default"  style=" border-radius:10px;  width: 100%;">Primer<br>Periodo</a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2" class="btn btn-default"  style=" border-radius:10px;  width: 100%;">Segundo<br>Periodo</a>'; break;
						}
				break;
				
				case "SC":
					switch($row['np']){
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_1" class="btn btn-default"  style=" border-radius:10px;  width: 100%;">Primer<br>Periodo</a>'; break;
						
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_'.$row['tp'].'_2" class="btn btn-default"  style=" border-radius:10px;  width: 100%;">Segundo<br>Periodo</a>'; break;
						}
				break;
								
				case "R": 
					switch($row['np']){						
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP" class="btn btn-default"  style=" border-radius:10px; width: 100%; ">Comisión<br>Permanente</a>'; break;
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP" class="btn btn-default"  style=" border-radius:10px; width: 100%; ">Comisión<br>Permanente</a>'; break;
						}
				break;
				case "RI": 
					switch($row['np']){					
						case 1: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP" class="btn btn-default"  style=" border-radius:10px; width: 100%; ">Comisión<br>Permanente</a>'; break;
						case 2: $texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_CP" class="btn btn-default"  style=" border-radius:10px;  width: 100%;">Comisión<br>Permanente</a>'; break;
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

function busca_extraordinario64($watch,$lg,$anio,$conecta_base) {
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
				$texto2='<a href="'.URL.$watch.'/'.$legislatura.'/'.$row['annus'].'_E" class="btn btn-default" style="width: 100%; padding:5px; border-radius:10px;">Periodo Extraordinario</a>';
			}
			
		}else{$texto2="";}		
		return($texto2);
	}

function listadoDiarios_XXX($lg, $anio, $conecta_base) {    

    //$sql = "SELECT DISTINCT(votacion.fecha),  votacion.legislatura, votacion.annus, votacion.nperiodo, votacion.tperiodo FROM registro.votacion WHERE votacion.legislatura='".$lg."' AND votacion.annus='".$anio."' AND (tperiodo='O' OR tperiodo='E') AND votacion.activa='1' ORDER by fecha ASC;";
    $sql = "SELECT diario.id, diario.fecha,  diario.legislatura, diario.annus, diario.np, diario.tp FROM d_debates.diario WHERE diario.legislatura='".$lg."' AND diario.annus='".$anio."' AND diario.activa='1' ORDER by fecha ASC;";

    $result = $conecta_base->query($sql);
    $texto = NULL;
    $cont1 = NULL;

    if($result->num_rows > 0) {
      $cont1 = 0;
       //$texto .= '<hr>';
       switch ($lg) {
        case "64": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LXIV Legislatura</b><span><br>'; break;
        case "63": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LXIII Legislatura</b><span><br>'; break;
        case "62": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LXII Legislatura</b><span><br>'; break;
        case "61": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LXI Legislatura</b><span><br>'; break;
        case "60": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LX Legislatura</b><span><br>'; break;
        case "59": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LIX Legislatura</b><span><br>'; break;
        case "58": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LVIII Legislatura</b><span><br>'; break;
        case "57": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LVII Legislatura</b><span><br>'; break;
        case "56": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LVI Legislatura</b><span><br>'; break;
        case "55": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LV Legislatura</b><span><br>'; break;
        case "54": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LIV Legislatura</b><span><br>'; break;
        case "53": $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LIII Legislatura</b><span><br>'; break;
        default: $texto .= '<p style=" text-align:center;"><span style=" font-size: 20px;"><b>LXIV Legislatura</b><span><br>'; break;
      }
      switch ($anio) {
        case 1:
          $texto .= '<span style=" font-size: 16px;">Primer A&ntilde;o Legislativo<span></p>';
          break;
        case 2:
          $texto .= '<span style=" font-size: 16px;">Segundo A&ntilde;o Legislativo<span></p>';
          break;
        case 3:
          $texto .= '<span style=" font-size: 16px;">Tercer A&ntilde;o Legislativo<span></p>';
          break;
      }
     //$texto .= '<hr>';
      $texto .= "<div class='row'>";
      $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
      $texto .= '<ul>';
      
      while ($row = $result->fetch_assoc()) {
        $cont1++;
        $texto .= '<li><a href="'.URL.'diario_de_los_debates/documento/'.$row['id'].'" style=" color:#000;">'.viewDate($row['fecha'])."</a></li>";        
        if($cont1=="32"){          
          $texto .= '</ul>';
          $texto .= '</div>';
          $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
          $texto .= '<ul>';
        }
        if($cont1=="64"){
          $texto .= '</ul>';
          $texto .= '</div>';
          $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
          $texto .= '<ul>';         
        }
        //$texto .= '<li><a href="'.URL.'votaciones/economicas/'.urls_amigables($row['fecha']).'">'.viewDate($row['fecha'])."</a></li>";
      }
      $texto .= '</ul>';
      $texto .= '</div>';
      $texto .= '</div>';
    }
    return $texto;
    //$conecta_base->close();
  }


  function listadoDiarios($lg, $anio, $conecta_base) {    

    $sql = "SELECT diario.id, diario.fecha,  diario.legislatura, diario.annus, diario.np, diario.tp FROM d_debates.diario WHERE diario.legislatura='".$lg."' AND diario.annus='".$anio."' AND diario.activa='1' ORDER by fecha ASC;";

    $result = $conecta_base->query($sql);
    $texto = NULL;
    $cont1 = NULL;
    $texto_lg = NULL;
    $texto_anio = NULL;
    $topeuno = NULL;
    $topedos = NULL;

    if($result->num_rows > 0) {
      $cont1 = 0;
      $topeuno= round($result->num_rows/3);
      $topedos=$topeuno*2;
       switch ($lg) {
        case "65": $texto_lg = 'LXV Legislatura'; break;
		case "64": $texto_lg = 'LXIV Legislatura'; break;
        case "63": $texto_lg = 'LXIII Legislatura'; break;
        case "62": $texto_lg = 'LXII Legislatura'; break;
        case "61": $texto_lg = 'LXI Legislatura'; break;
        case "60": $texto_lg = 'LX Legislatura'; break;
        case "59": $texto_lg = 'LIX Legislatura'; break;
        case "58": $texto_lg = 'LVIII Legislatura'; break;
        case "57": $texto_lg = 'LVII Legislatura'; break;
        case "56": $texto_lg = 'LVI Legislatura'; break;
        case "55": $texto_lg = 'LV Legislatura'; break;
        case "54": $texto_lg = 'LIV Legislatura'; break;
        case "53": $texto_lg = 'LIII Legislatura'; break;
        default: $texto_lg = 'LXV Legislatura'; break;
      }
      switch ($anio) {
        case 1: $texto_anio = 'Primer A&ntilde;o Legislativo'; break;
        case 2: $texto_anio = 'Segundo A&ntilde;o Legislativo'; break;
        case 3: $texto_anio = 'Tercer A&ntilde;o Legislativo'; break;
      }
     //$texto .= '<hr>';
      $texto.="<div class='panel panel-default'>";
      $texto.="<div class='panel-heading'><p style=' font-size:22px; text-align:center;'><b>".$texto_lg."</b><br>".$texto_anio."</p></div>";
      $texto.="<div class='panel-body'>";
  

      $texto .= "<div class='row'>";
      $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
      $texto .= '<table class="table table-striped table-hover table-bordered">';
      
      while ($row = $result->fetch_assoc()) {
        $cont1++;
        //$texto .= '<li><a href="'.URL.'diario_de_los_debates/documento/'.$row['id'].'" style=" color:#000;">'.viewDate($row['fecha'])."</a></li>"; 
        $texto .= "<tr><td><a href='".URL."diario_de_los_debates/documento/".$row['id']."' style=' color:#000;'>".viewDate($row['fecha'])."</a></td></tr>";

        if($cont1==$topeuno){          
           $texto .= '</table>';
          $texto .= '</div>';
          $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
          $texto .= '<table class="table table-striped table-hover table-bordered">';
        }
        if($cont1==$topedos){
           $texto .= '</table>';
          $texto .= '</div>';
          $texto .= "<div class='col-sm-4' style=' text-align: justify;'>";
          $texto .= '<table class="table table-striped table-hover table-bordered">';         
        }
        //$texto .= '<li><a href="'.URL.'votaciones/economicas/'.urls_amigables($row['fecha']).'">'.viewDate($row['fecha'])."</a></li>";
      }
       $texto .= '</table>';
      $texto .= '</div>';
      $texto .= '</div>';
      $texto .= '</div>';
      $texto .= '</div>';
    }
    return $texto;
    //$conecta_base->close();
  } 

?>