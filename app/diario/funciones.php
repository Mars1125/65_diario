<?
function  diario_legislatura($lg,$anio,$conecta){ 
mysql_select_db('d_debates');
	if ($lg==""){$lg="63";}
	if ($anio==""){$anio="1";}
	//$consulta = "SELECT * FROM diario WHERE legislatura='".$lg."' AND annus='".$anio."' AND activa='1' ORDER by tp, fecha DESC";
	$consulta = "SELECT * FROM diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND activa =  '1' ORDER BY  `diario`.`fecha` DESC ";
	//echo "$consulta";
	$ejecuta  = mysql_query($consulta, $conecta) or die(mysql_error());
	$filas    = mysql_num_rows($ejecuta);
	if($filas > 0){
		$texto.="<div id='liquid1' class='liquid'>
					<span class='previous'></span>
						<div class='wrapper'>
							<ul>";
		while($deposito = mysql_fetch_array($ejecuta)){
			extract($deposito);
				switch($tp){ 			
							case "O" : $tp="Sesi&oacute;n Ordinaria"; break;
							case "OI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "RI" : $tp="Sesi&oacute;n de Instalaci&oacute;n"; break;
							case "R" : $tp="Comisi&oacute;n Permanente"; break;
							case "E" : $tp="Sesi&oacute;n Extraordinaria"; break;
							case "S" : $tp="Sesi&oacute;n Solemne"; break;
							case "SR" : $tp="Sesi&oacute;n Solemne"; break;
							case "JP" : $tp="Junta Previa"; break;
							}
				switch($np){ 			
							case "1" : $np="1er. Periodo"; break;
							case "2" : $np="2do. Periodo"; break;
							case "3" : $np="3er. Periodo"; break;
							case "4" : $np="4to. Periodo"; break;
							case "5" : $np="5to. Periodo"; break;
							}			
			$texto.="<li><div class='libro'><div class='globo'><div class='texto_globo'><div align='center'><a href='index.php?watch=13&mn=1&id=$id&lg=$legislatura&anio=$annus'>".traducefecha_diario($fecha)."<br>$tp<br>$np</a></div></div></div></div></li>";
			}
		$texto.="			</ul>
						</div>
					<span class='next'></span>
				</div>";
	}
	return($texto);
mysql_free_result($ejecuta);
}

function  busca_extraordinario($lg,$anio,$conecta){ 
mysql_select_db('d_debates');
	if ($lg==""){$lg="63";}
	if ($anio==""){$anio="1";}
	//$consulta = "SELECT * FROM diario WHERE legislatura='".$lg."' AND annus='".$anio."' AND activa='1' ORDER by tp, fecha DESC";
	$consulta = "SELECT DISTINCT(tp), legislatura, annus FROM diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND tp='E' ORDER BY  `diario`.`fecha` DESC ";	
	$ejecuta  = mysql_query($consulta, $conecta) or die(mysql_error());
	$filas    = mysql_num_rows($ejecuta);
	if($filas > 0){		
		while($deposito = mysql_fetch_array($ejecuta)){
			extract($deposito);
			$texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=E"><img src="library/diario_debates/img_nuevas/perio_extra.jpg" class="img-responsive"></a>';
			}
	}
	return($texto2);
mysql_free_result($ejecuta);
}


function  busca_periodos($lg,$anio,$tp,$np,$conecta){ 
mysql_select_db('d_debates');
	if ($lg==""){$lg="63";}
	if ($anio==""){$anio="1";}
	if ($tp==""){$tp="O";}	
	if ($np==""){$np="1";}
	switch($tp){
		case "O": $tp="tp='O'"; break;
		case "R": $tp="(tp='R' OR tp='RI')"; break;
		}
	$consulta = "SELECT DISTINCT(tp), legislatura, annus, np, tp FROM diario WHERE legislatura =  '".$lg."' AND annus =  '".$anio."' AND ".$tp." AND np='".$np."' AND activa='1' ORDER BY  `diario`.`fecha` DESC ";		
	$ejecuta  = mysql_query($consulta, $conecta) or die(mysql_error());
	$filas    = mysql_num_rows($ejecuta);
	if($filas > 0){		
		while($deposito = mysql_fetch_array($ejecuta)){
			extract($deposito);
			
			switch($tp){
				case "O":
					switch($np){
						case 1: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=O&np=1"><img src="library/diario_debates/img_nuevas/primer_period.jpg" class="img-responsive"></a>'; break;
						case 2: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=O&np=2"><img src="library/diario_debates/img_nuevas/segundo_period.jpg" class="img-responsive"></a>'; break;
						}
				break;				
				case "R": 
					switch($np){						
						case 1: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=CP"><img src="library/diario_debates/img_nuevas/cp.jpg" class="img-responsive"></a>'; break;
						case 2: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=CP"><img src="library/diario_debates/img_nuevas/cp.jpg" class="img-responsive"></a>'; break;
						}
				break;
				case "RI": 
					switch($np){						
						case 1: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=CP"><img src="library/diario_debates/img_nuevas/cp.jpg" class="img-responsive"></a>'; break;
						case 2: $texto2='<a href="index.php?watch=13&lg='.$legislatura.'&anio='.$annus.'&tp=CP"><img src="library/diario_debates/img_nuevas/cp.jpg" class="img-responsive"></a>'; break;
						}
				break;
				default: $texto2= "";break;
			}
		}
	}
	return($texto2);
mysql_free_result($ejecuta);
}

function traducefecha_diario($fecha) { 

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
    $fecha= $diasemana.", ".$dia."<br>de ".$mes ."<br>de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
    return $fecha; //enviamos la fecha al programa 
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


function traducefecha_diario3($fecha) { 

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
    $fecha= $diasemana.", ".$dia." de ".$mes ." de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
   // $fecha= $dia." de ".$mes ." de ".$ano; // unimos el resultado en una unica cadena ." de ".$ano
    return $fecha; //enviamos la fecha al programa 
}


function inicio_diario_nuevo_formato($id, $conecta){
	mysql_select_db("d_debates",$conecta);		
	
	$ano=$_REQUEST['ano'];
	$lg=$_REQUEST['lg'];
	$campos="contenido_diario.id AS contenido_docto, materia, punto, texto, visible, legislatura, tp, np, annus, fecha, diario, anexopdf, anexodiario_word,presidente, video_activo,id_video, inicio_video, fin_video ";
	$consulta_base= "SELECT $campos FROM d_debates.contenido_diario INNER JOIN diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";		
	//echo "$consulta_base";
	$ejecuta_base = mysql_query($consulta_base, $conecta) or die("Error en lista_doctos 2:  ".mysql_error($conecta));
	$row=mysql_num_rows($ejecuta_base);
	if ($row > 0 )  {
		echo"<table style='width: 100%;'>";
		while ($deposita_consulta_datos=mysql_fetch_array($ejecuta_base)) {
			extract($deposita_consulta_datos);					
			$link="index.php?ver=sp&mn=3&sm=2&lg=$lg&ano=$ano&id=$id";
			switch($np) {
				case 1: $nperiodo="Primer";	break;
				case 2: $nperiodo="Segundo"; break;
				case 3: $nperiodo="Tercero"; break;
				case 4: $nperiodo="Cuarto"; break;
				case 5: $nperiodo="Quinto"; break;					
			}	

			switch($tp) {
				case "O": $tperiodo=" Periodo Ordinario";	
				$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
						  $ttp="Sesi&oacute;n P&uacute;blica Ordinaria";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ";break;
				case "OI": $tperiodo=" Periodo Ordinario";
			 	$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
						  $ttp="Sesi&oacute;n de Instalaci&oacute;n";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ";break;
				case "RI": $tperiodo=" Receso Comisi&oacute;n Permanente";
				$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
						  $ttp="Sesi&oacute;n de Instalaci&oacute;n";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp;";break;
				case "R": $tperiodo=" Receso Comisi&oacute;n Permanente";
				$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
						  $ttp="Sesi&oacute;n P&uacute;blica de la Comisi&oacute;n Permanente";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp;";break;
				case "E": $tperiodo=" Periodo Extraordinario";
				$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
						  $ttp="Sesi&oacute;n P&uacute;blica Extraordinaria";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ";break;
				case "S": $tperiodo=" Periodo Ordinario";
				$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
						  $ttp="Sesi&oacute;n P&uacute;blica Solemne";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ";break;
				case "SR": $tperiodo=" Receso Comisi&oacute;n Permanente";
				$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
						   $ttp="Sesi&oacute;n P&uacute;blica Solemne";
						   $espacio=" &nbsp; &nbsp; &nbsp; &nbsp;";break;
				case "JP": $tperiodo="";
				$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
						  $ttp="Junta Previa"; $nperiodo="";
						  $espacio=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ";break;
			}
										
			if($np==1 && $tp=="O"){	$LTP='PPO';	}
			if($np==2 && $tp=="O"){	$LTP='SPO';	}
			if($np==1 && $tp=="OI"){	$LTP='PPO';	}
			if($np==2 && $tp=="OI"){	$LTP='SPO';	}
			if($np==1 && $tp=="RI"){	$LTP='PPO';	}
			if($np==2 && $tp=="RI"){	$LTP='SPR';	}
			if($np==1 && $tp=="S"){	$LTP='PPO';	}
			if($np==2 && $tp=="S"){	$LTP='SPO';	}
			if($np==1 && $tp=="SR"){ $LTP='PPO';	}
			if($np==2 && $tp=="SR"){ $LTP='SPO';	}
			if($np==1 && $tp=="JP"){ $LTP='PPO';	}
			if($np==2 && $tp=="JP"){ $LTP='SPO';	}					
			if($np==1 && $tp=="R"){	$LTP='PPR';	}
			if($np==2 && $tp=="R"){	$LTP='SPR';	}
			if($np==1 && $tp=="E"){	$LTP='PPE';	}
			if($np==2 && $tp=="E"){	$LTP='SPE';	}
			if($np==3 && $tp=="E"){	$LTP='TPE';	}
			if($np==4 && $tp=="E"){	$LTP='CPE';	}					
				
			$link_2="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/$legislatura/$annus/$LTP/PDF-WEB/$anexopdf";
			$link_3="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/$legislatura/$annus/$LTP/PDF-WEB/$anexodiario_word";					
	
			switch($lg) {
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
				default: $lgs="LXII"; break;
			}
		
			switch($annus) {
				case 1: $annusp="I"; break;
				case 2: $annusp="II"; break;
				case 3: $annusp="III"; break;
			}

			if(trim($anexopdf)!="") {
				$imprime_pdf="<tr>					
				<td align='center' colspan='2'>
					<table width='100%'>
						<tr>
						<td width='80%'>
							<div align='right'><strong>Versi&oacute;n para descarga</strong></div>
						</td>
						<td width='20%'>
							<div align='left '>
								<a href='$link_2' target='_self'><img src='library/diario_debates/imagenes/pdf_descarga.png' border='0' height='60'></a>
								<img src='http://infosen.senado.gob.mx/documentos/estenografias/print.png' border='0' width='40' alt='Imprimir Vesri&oacute;n Estenogr&aacute;fica' title='Imprimir Versi&oacute;n Estenogr&aacute;fica' onclick='window.print();'>&nbsp;&nbsp;<a href='javascript:increaseFontSize();'>
								<img src='images/iconos_principales/format_font_size_more.png' border='0' width='40'></a><a href='javascript:decreaseFontSize();'>
								<img src='images/iconos_principales/format_font_size_less.png' border='0' width='40'></a>
							</div>
						</td>
						</tr>
					</table>
				</td>
				</tr>";
			}
									
			if($np2!=$np) {
				$np2=$np;						
				echo"						
					<tr>
					<td colspan='2'>
						<table width='100%' height='50%' align='center' cellpadding='5' border='0'>
							<tr>
							<td >
								<br><p id='u6551-2' align='center'><div class='letra_grande50' align='center'><strong>DIARIO DE LOS DEBATES</strong></div></p>
								<p id='u6551-5' align='center'><div class='letra_mediana30' align='center'>$titulo_senado</div>
								<div class='letra_mediana30' align='center'>DEL CONGRESO DE LOS ESTADOS UNIDOS MEXICANOS</div></p><br>
							</td>
							</tr>
							<tr >
							<td >
								<table border='2' width='100%' align='center'>
									<tr>
									<td align='center' style='padding:5px;' >
										<div align='center'>
										A&Ntilde;O $annusp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
										$nperiodo $tperiodo $espacio
										$lgs Legislatura  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
										Sesi&oacute;n N&uacute;m. $diario</div><br>";
										if($presidente!="0"){echo presidencia_diario($presidente);}
								echo "</td></tr>
								</table>
							</td>
							</tr>
							<tr>
							<td scope='row'><hr><h4 align='center'><b>$ttp Celebrada<br>
					en la Ciudad de M&eacute;xico, el ".traducefecha_diario2($fecha)."</strong></h3>
							</td></tr>
								$imprime_pdf
						</table><hr>
					</td></tr>";
			}			
		}
	/*
		echo "<tr valign='top'><td width='70%' style='padding: 5px 20px 5px 10'><br>";
		inicio_contenido_diario($id, $conecta);
		echo "</td><td width='30%'>&nbsp;";		
		inicio_diario_nuevo_sumario($id, $conecta);
		echo "</td></tr>";
	*/
		echo "<tr valign='top'><td width='100%' style='padding: 5px 20px 5px 10'><br>";
		inicio_contenido_diario($id, $conecta);		
		echo "</td></tr>";
		echo "</table>";
		echo "<div class='sidebar'>";		
		inicio_diario_nuevo_sumario($id, $conecta);
		echo "</div>"; 
	}
}
/*
function inicio_contenido_diario($id, $conecta){
		mysql_select_db("d_debates",$conecta);		
	
	$ano=$_REQUEST['ano'];
	$lg=$_REQUEST['lg'];
	$campos="contenido_diario.id AS contenido_docto, materia, punto, texto,video, visible, legislatura, tp, np, annus, fecha, diario, anexopdf, anexodiario_word,presidente ";
	$consulta_base= "SELECT $campos FROM d_debates.contenido_diario INNER JOIN diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";
	$ejecuta_base = mysql_query($consulta_base, $conecta) or die("Error en lista_doctos 2:  ".mysql_error($conecta));
	$row=mysql_num_rows($ejecuta_base);
	if ($row > 0 ) {
		echo"<table width='100%' >";
		while ($deposita_consulta_datos=mysql_fetch_array($ejecuta_base)) {
			extract($deposita_consulta_datos);					
			$link="index.php?ver=sp&mn=3&sm=2&lg=$lg&ano=$ano&id=$id";					
			if(busca_link_asunto($contenido_docto, $conecta)==2) {
				$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
				$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
				$texto = str_replace('>VER DOCUMENTO</', '><img src="library/diario_debates/imagenes/ver_documento.png" border></', $texto);
				$texto = str_replace('<img ', '<br><br><img ', $texto);
				
				$texto = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $texto);
				
				if($video!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$video.'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
																	
					echo "<tr valign='top'>
							<td>$cuadro_video	<div align='justify'><br> <a name='$contenido_docto'></a>$texto</div></td>
						  </tr>
						  <tr>
						  	<td align='right' >
							<br><div align='right'><a href='#a$contenido_docto'><img src='library/diario_debates/imagenes/regresar.png' border='0'><br></a></div><br>
							<img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='10'><br>
							</td>
						  </tr>";
					}			
				}		
			}
		echo"</table>";
}
*/
/********* consulta original ******************/
/************************/
function inicio_contenido_diario($id, $conecta){
		mysql_select_db("d_debates",$conecta);		
	
	$ano=$_REQUEST['ano'];
	$lg=$_REQUEST['lg'];
	$campos="contenido_diario.id AS contenido_docto, materia, punto, texto,video, visible, legislatura, tp, np, annus, fecha, diario, anexopdf, anexodiario_word,presidente, video_activo,id_video, inicio_video, fin_video ";
	$consulta_base= "SELECT $campos FROM d_debates.contenido_diario INNER JOIN diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";		
	$ejecuta_base = mysql_query($consulta_base, $conecta) or die("Error en lista_doctos 2:  ".mysql_error($conecta));
	$row=mysql_num_rows($ejecuta_base);
	if ($row > 0 ) 
		{
			echo"<table cellspacing='0' cellpadding='0' width='100%'  align='center' style=' border: 0px solid #FC0'>";			
			while ($deposita_consulta_datos=mysql_fetch_array($ejecuta_base))
				{
					extract($deposita_consulta_datos);					
					$link="index.php?ver=sp&mn=3&sm=2&lg=$lg&ano=$ano&id=$id";					
											
									

					
					if(busca_link_asunto($contenido_docto, $conecta)==2){
						
					if($video!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$video.'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
					$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('>VER DOCUMENTO</', '><img src="library/diario_debates/imagenes/ver_documento.png" border></', $texto);
					$texto = str_replace('<img ', '<br><br><img ', $texto);
					
					$texto = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $texto);
					/*
					if($id_video!="" && $video_activo=="1"){ $cuadro_video='<video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$video.'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">
				Tu navegador no implementa el elemento <code>video</code>.
			</video>';}else{$cuadro_video="";}*/
					if($id_video!="" && $video_activo=="1"){ $cuadro_video='<iframe width="400" height="225" src="https://www.youtube.com/embed/'.$id_video.'?autoplay=0;start='.$inicio_video.';end='.$fin_video.';rel=0;" width="400" height="225" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}else{$cuadro_video="";}
			
																		
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><br></strong></a> <a name='$contenido_docto'></a>$texto</div></td></tr><tr><td align='right' colspan='2'><br><div align='right'><a href='#a$contenido_docto'><img src='library/diario_debates/imagenes/regresar.png' border='0'><br></a></div><br><img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='10'><br></td></tr>";
					}else{						
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><strong><a name='$contenido_docto'></a>$materia</strong><br>$punto<br>";										
					
					
					
					$texto = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $texto);
					$texto = str_replace('>VER DOCUMENTO</', '><img src="library/diario_debates/imagenes/ver_documento.png" border></', $texto);
					$texto = str_replace('<img ', '<br><br><img ', $texto);
					
					$texto = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $texto);					
					
					$texto = str_replace('width="100%" height="940"></embed>', ' target="_blank"><strong><font color="red">VER DOCUMENTO EN PDF.</font></strong></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="library/diario_debates/imagenes/pdf.png" border="0" width="50"></div></td><tr></table>', $texto);
					
						
						echo "<br><div align='justify'>$cuadro_video $texto</div><br></td></tr>					
						<tr><td align='right' colspan='2'><div align='right'><a href='#a$contenido_docto'><img src='library/diario_debates/imagenes/regresar.png' border='0'><br></a></div><br><img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='10'><br></td></tr>";
					}		
					
				}
			echo"<tr valign='top'colspan='2'><td >&nbsp;</td></tr>
				</table>";
		}
	mysql_free_result($ejecuta_base);
}
/**************************************/


function inicio_diario_nuevo_sumario($id, $conecta){
		mysql_select_db("d_debates",$conecta);			
	
	$campos="contenido_diario.id AS contenido_docto_id, materia as materia_ss, punto as punto_ss, texto as texto_ss";
	
	$consulta_base= "SELECT $campos FROM d_debates.contenido_diario INNER JOIN diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";		
	echo "$consulta_base";
	$ejecuta_base = mysql_query($consulta_base, $conecta) or die("Error en lista_doctos 2:  ".mysql_error($conecta));
	$row=mysql_num_rows($ejecuta_base);
	if ($row > 0 ) 
		{			
			echo"<table border='0' cellspacing='5' cellpadding='5' width='100%'  align='center' class='sumario_enlaces' style='background: rgba(255, 255, 255, 0.5);'>";
			echo "<tr><td align='center'><h3>SUMARIO</h3></td></tr>";
			while ($deposita_consulta_datos_ss=mysql_fetch_array($ejecuta_base))
				{
					extract($deposita_consulta_datos_ss);
					if(trim($punto_ss)!=""){$punto_sss="<br><br>$punto_ss</a>";
					echo"<tr valign='top'><td><br><div align='justify'><a name='a$contenido_docto_id'></a><a href='#$contenido_docto_id'><strong> $materia_ss</strong>$punto_sss</div></td></tr>";
					}
					else{echo"<tr valign='top'><td><br><div align='justify'><a name='a$contenido_docto_id'></a><a href='#$contenido_docto_id'><strong> $materia_ss</strong></div></td></tr>";}				
						
				}
			echo "</table><br><img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='10'>";
		}
}

function busca_link_asunto($id, $conecta){
					mysql_select_db("d_debates", $conecta);
	
	$campos="id, materia, punto, texto, visible";
		
	$consulta_base= "SELECT $campos FROM d_debates.contenido_diario WHERE id='$id' AND (materia LIKE '%<a h%' OR texto LIKE '%<embe%') ORDER BY contenido_diario.id DESC";
	$ejecuta_base=mysql_query($consulta_base, $conecta) or die(mysql_error($conecta));	
	$row=mysql_num_rows($ejecuta_base);	
	if ($row > 0){				
		while ($deposita_consulta_datos=mysql_fetch_array($ejecuta_base))
			{
				extract($deposita_consulta_datos);
				return (1);
			}			
	}else{
		return (2);
	}
}

function presidencia_diario($presidente){	
	//$conecta_base = mysql_connect("localhost", "root","B4s3.W3b") or die ("1.- ".mysql_error());
	$conecta_base = mysql_connect("localhost", "root","D3M0N") or die ("1.- ".mysql_error());
	mysql_select_db("senado_2", $conecta_base);
	$consulta_base="SELECT * FROM senadores WHERE id='$presidente'";
	$ejecuta_base = mysql_query($consulta_base, $conecta_base);
	$row =mysql_num_rows($ejecuta_base);
	if($row > 0)
		{					
			while ($deposita_consulta=mysql_fetch_array($ejecuta_base))
				{	
					extract($deposita_consulta);			
					$texto.="<hr style='border-top: 1px solid #000000;'><br><div align='center'><strong>Presidente de la Mesa Directiva<br> Sen. $nombre $apellidos</strong></div>";
				}
				return($texto);
		}
	
}
?>