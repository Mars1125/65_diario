<!--<div class="row" id="noImprimir">
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
    aqui va  el texto
    </div>
</div>-->

<?php echo cabecera_diario($var2,$conecta_base);?>
<div class="row">
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
    <?php echo contenidoDiario($var2,$conecta_base)?>
    </div>
</div>
<?php include("barra_sumario.php");?>
<?php 
function cabecera_diario($var2,$conecta_base) {
		$sql = "SELECT * FROM d_debates.diario WHERE id='".$var2."' AND activa='1'";		
		$result = $conecta_base->query($sql);
		$texto=NULL;
		$LTP=NULL;	
		$link_2=NULL;
		$tipo_mesa=NULL;
		$imprime_pdf=NULL;
		$tpm=NULL;
		if($result->num_rows > 0) {				
			while ($row = $result->fetch_assoc()) {
					switch($row['np']) {
						case 1: $nperiodo="Primer";	break;
						case 2: $nperiodo="Segundo"; break;
						case 3: $nperiodo="Tercero"; break;
						case 4: $nperiodo="Cuarto"; break;
						case 5: $nperiodo="Quinto"; break;					
					}	
					switch($row['tp']) {
						case "O": 
							$tperiodo=" Periodo Ordinario";	
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesi&oacute;n P&uacute;blica Ordinaria";
						;break;
						case "OD": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesi&oacute;n P&uacute;blica Ordinaria a Distancia";
						break;
						case "OI": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesi&oacute;n de Instalaci&oacute;n";
						break;
						case "RI": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="Sesi&oacute;n de Instalaci&oacute;n";
						break;
						case "R": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="Sesi&oacute;n P&uacute;blica de la Comisi&oacute;n Permanente";
						break;
						case "E": 
							$tperiodo=" Periodo Extraordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesi&oacute;n P&uacute;blica Extraordinaria";
						break;
						case "S": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesi&oacute;n P&uacute;blica Solemne";
						break;
						case "SR": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="Sesi&oacute;n P&uacute;blica Solemne";
						break;
						case "JP": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Junta Previa"; $nperiodo="";
						break;
						case "SC": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesión Constitutiva"; $nperiodo="";
						break;
						case "Proto": 
							$tperiodo=" Periodo Ordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="Sesión Protocolaria"; $nperiodo="";
						break;									
					}
					switch($row['legislatura']) {
						case 53: $lgs="LIII"; break;
						case 54: $lgs="LIV"; break;
						case 55: $lgs="LV"; break;
						case 56: $lgs="LVI"; break;
						case 57: $lgs="LVII"; break;
						case 58: $lgs="LVIII"; break;
						case 59: $lgs="LIX"; break;
						case 60: $lgs="LX"; break;
						case 61: $lgs="LXI"; break;
						case 62: $lgs="LXII"; break;
						case 63: $lgs="LXIII"; break;
						case 64: $lgs="LXIV"; break;
						case 65: $lgs="LXV"; break;
						case 66: $lgs="LXVI"; break;
						case 67: $lgs="LXVII"; break;
						default: $lgs="LXIV"; break;
					}				
					switch($row['annus']) {
						case 1: $annusp="I"; break;
						case 2: $annusp="II"; break;
						case 3: $annusp="III"; break;
					}
					if($row['np']==1 && $row['tp']=="O"){	$LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="O"){	$LTP='SPO';	}
					if($row['np']==1 && $row['tp']=="SE"){ $LTP='PPE'; }
			        if($row['np']==2 && $row['tp']=="SE"){ $LTP='SPE'; }
			        if($row['np']==3 && $row['tp']=="SE"){ $LTP='TPE'; }
			        if($row['np']==4 && $row['tp']=="SE"){ $LTP='CPE'; }
					if($row['np']==1 && $row['tp']=="Proto"){	$LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="Proto"){	$LTP='SPO';	}
					if($row['np']==1 && $row['tp']=="OD"){	$LTP='PPO';	}
					if($row['np']==1 && $row['tp']=="OI"){	$LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="OI"){	$LTP='SPO';	}
					if($row['np']==1 && $row['tp']=="RI"){	$LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="RI"){	$LTP='SPR';	}
					if($row['np']==1 && $row['tp']=="S"){	$LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="S"){	$LTP='SPO';	}
					if($row['np']==1 && $row['tp']=="SR"){ $LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="SR"){ $LTP='SPO';	}
					if($row['np']==1 && $row['tp']=="JP"){ $LTP='PPO';	}
					if($row['np']==1 && $row['tp']=="SC"){ $LTP='PPO';	}
					if($row['np']==2 && $row['tp']=="JP"){ $LTP='SPO';	}
					if($row['np']==2 && $row['tp']=="OD"){ $LTP='SPO';	}					
					if($row['np']==1 && $row['tp']=="R"){	$LTP='PPR';	}
					if($row['np']==2 && $row['tp']=="R"){	$LTP='SPR';	}
					if($row['np']==1 && $row['tp']=="E"){	$LTP='PPE';	}
					if($row['np']==2 && $row['tp']=="E"){	$LTP='SPE';	}
					if($row['np']==3 && $row['tp']=="E"){	$LTP='TPE';	}
					if($row['np']==4 && $row['tp']=="E"){	$LTP='CPE';	}
									
					$texto.='<div class="row" >
								<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;" align="center">
								<span style=" font-size:50px;"><strong>DIARIO DE LOS DEBATES</strong></span>
								<h1>'.$titulo_senado.'<br>DEL CONGRESO DE LOS ESTADOS UNIDOS MEXICANOS</h1>
								</div>
							</div>';
					if(trim($row['anexopdf'])!="") {						
					$link_2="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios/".$row['legislatura']."/".$row['annus']."/$LTP/PDF-WEB/".$row['anexopdf'];
						$imprime_pdf="<table width='100%'>
										<tr>
										<td width='80%'>
										<div align='right'><strong>Versi&oacute;n para descarga</strong>
										<a href='".$link_2."' target='_self'><img src='".URL."images/diario_de_los_debates/pdf_descarga.png' border='0' height='60'></a>																											
									</div>
								</td>
								</tr>
							</table>";
					}				
					
					if($row['tp']=="SC"){
						$tpm="1";
						}else{$tpm="2";}
					
					$texto.='<div class="row" >
								<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; border:1px solid #000; font-size:18px;" align="center">
								<table width="100%">
									<tr>
										<td align="center" width="25%" style="padding-top:10px;">'.$lgs.' Legislatura</td>
										<td align="center" width="25%" style="padding-top:10px;">AÑO '.$annusp.'</td>
										<td align="center" width="25%" style="padding-top:10px;">'.$nperiodo.' '.$tperiodo.'</td>										
										<td align="center" width="25%" style="padding-top:10px;">Sesi&oacute;n N&uacute;m. '.$row['diario'].'</td>
									</tr>
									<tr>
										<td colspan="4"><hr style=" border: 0; height: 2px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" /></td>
									</tr>
									<tr>
										<td colspan="4" align="center">'.presidencia_diario($row['presidente'],$tpm, $conecta_base).'</td>										
									</tr>
								</table>																	
								</div>
								
							</div>
							<div class="row" >
								<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; border:0px solid #000; font-size:18px;" align="center">								
								<p style=" text-align:center; padding-top:10px;">'.$ttp.' Celebrada<br>en la Ciudad de M&eacute;xico, el '.traducefecha_diario2($row['fecha']).'</p>
								'.$imprime_pdf.'
								<hr style=" border: 0; height: 2px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" />
								</div>';
		}
		return($texto);		
	}
}

function contenidoDiario($id,$conecta_base) {
		$sql = $consulta_base= "SELECT * FROM d_debates.contenido_diario WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";
		
		$result = $conecta_base->query($sql);
		$texto2=NULL;
		$cuadro_video=NULL;	
		if($result->num_rows > 0) {
			echo "<table cellspacing='0' cellpadding='0' width='95%'  align='center' style=' border: 0px solid #000'>";	
			while ($row = $result->fetch_assoc()) {
				if(busca_link_asunto($row['id'], $conecta_base)==2){						
					if($row['video']!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="https://infosen.senado.gob.mx/sgsp/content/sp/dd/videos/media/'.$row['video'].'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
					$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios', $row['texto']);
					$texto = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('>VER DOCUMENTO</', '><img src="'.URL.'images/diario_de_los_debates/ver_documento.png" border></', $texto);
					$texto = str_replace('<img ', '<br><br><img ',$texto);
					$texto = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="http://10.3.0.105/prototipo1/64/gaceta_del_senado/documento/',$texto);
					$texto = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios/', $texto);					

					if($row['id_video']!="" && $row['video_activo']=="1"){ $cuadro_video='<iframe width="400" height="225" src="https://www.youtube.com/embed/'.$row['id_video'].'?autoplay=0;start='.$row['inicio_video'].';end='.$row['fin_video'].';rel=0;" width="400" height="225" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}else{$cuadro_video="";}
			
																		
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><br></strong></a> <a name='".$row['id']."'></a>$texto</div></td></tr><tr><td align='right' colspan='2'><br><div align='right'><a href='#a".$row['id']."'><img src='".URL."images/diario_de_los_debates/regresar.png' border='0'><br></a></div><br><img src='".URL."images/diario_de_los_debates/separador.jpg' width='100%' height='10'><br></td></tr>";
					}else{						
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><strong><a name='".$row['id']."'></a>".$row['materia']."</strong><br>".$row['punto']."<br>";										
					
					
					
					$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios', $row['texto']);
					$texto = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('>VER DOCUMENTO</', '><img src="'.URL.'images/diario_de_los_debates/ver_documento.png" border></', $texto);
					$texto = str_replace('<img ', '<br><br><img ', $texto);
					$texto = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="'.URL.'/64/gaceta_del_senado/documento/',$texto);
					$texto = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="https://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios/', $texto);					
					
					$texto = str_replace('width="100%" height="940"></embed>', ' target="_blank"><strong><font color="red">VER DOCUMENTO EN PDF.</font></strong></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.URL.'images/diario_de_los_debates/pdf.png" border="0" width="50"></div></td><tr></table>', $texto);
					
						
						echo "<br><div align='justify'>$cuadro_video ".$texto."</div><br></td></tr>					
						<tr><td align='right' colspan='2'><div align='right'><a href='#a".$row['id']."'><img src='".URL."images/diario_de_los_debates/regresar.png' border='0'><br></a></div><br><img src='".URL."images/diario_de_los_debates/separador.jpg' width='100%' height='10'><br></td></tr>";
					}	
			}
			echo "<tr valign='top'colspan='2'><td >&nbsp;</td></tr>
				</table>";
		}
		//return($texto);
	}

function busca_link_asunto($id, $conecta_base) {
		$sql = "SELECT id, materia, punto, texto, visible FROM d_debates.contenido_diario WHERE id='$id' AND (materia LIKE '%<a h%' OR texto LIKE '%<embe%') ORDER BY contenido_diario.id DESC";
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {
				return (1);
			}
		}else{
			return (2);
			}
		$conecta_base->close();
	}

function presidencia_diario($id,$tpm, $conecta_base) {
		if($id!="0"){
			$sql = "SELECT * FROM senado_2.senadores WHERE id='".$id."'";
			$result = $conecta_base->query($sql);
			$texto=NULL;
			if($result->num_rows > 0) {	
				while ($row = $result->fetch_assoc()) {
					
					if($tpm=="1"){
						$tpm="de la Mesa de Decanos";
						}else{$tpm="de la Mesa Directiva";}
					
					switch($row['sexo']){
						case "H": $sexo="Presidente"; break;
						case "M": $sexo="Presidenta"; break;
						}
					$texto="<strong>$sexo $tpm<br> Sen. ".$row['nombre']." ".$row['apellidos']."</strong>";
				}				
			}
		}
		else{$texto="";}
		return($texto);
	}
function traducefecha_diario2($fecha) { 

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
   // $fecha= $diasemana.",<br>".$dia." de ".$mes ." de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
    $fecha= $dia." de ".$mes ." de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
    return $fecha; //enviamos la fecha al programa 
}
?>