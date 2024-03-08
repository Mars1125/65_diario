<?php require_once '../../config/config.php'; ?>
<style>
	.table-condensed>tbody>tr>td, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>td, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>thead>tr>th {
	    padding: 3px;
	}
</style>
<?php
	$day = $dia;
	$month = $mes * 1;
	$year = $anio;

	$numero_anio_anterior = $year - 1;
	$numero_anio_siguiente = $year + 1;

	$realDay = (date("Y"))."-".(date("m") * 1)."-".(date("d") * 1);
	
	$numberDays = evaluateMonth($month, true, $year);
	$nameMonth = evaluateMonth($month, false, $year);
	
	$timonthstamp = mktime(0, 0, 0, $month, 1, $year);
	$saute = date("w", $timonthstamp);
	$numberDays += $saute;

	$rows = ceil($numberDays / 7);
	$cellNumber = $rows * 7;
	$difference = $cellNumber - $numberDays;
	?>
	<div class="row" style="margin: 0;">
		<div class="col-sm-3 text-center" style="padding: 15px;">
			<p><a href="<?php echo URL; ?>diario_de_los_debates/historico/" style=" color:#000;font-size: 18px;"><strong>Diario de los<br />Debates de<br />1875 a 1984</strong></a>
			<br><hr>
			<p style="font-size: 40px; font-weight: bold; margin-bottom: -10px;"><?php echo $day; ?></p>
			<p style="font-size: 25px; font-weight: bold; margin-top: 0px; margin-bottom: 10px;"><?php echo $nameMonth; ?></p>
			<br>
			<table>
				<tr>
					<td><a href="mailto:diario_debates@senado.gob.mx"><img src="<?php echo URL; ?>images/diario_de_los_debates/correo.png" width="35" /></a></td>
					<td><strong><a href="mailto:diario_debates@senado.gob.mx">Correo Electr&oacute;nico</a></strong></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-9" style="padding: 0;">
			<div class="panel panel-default" style="margin-bottom: 0; border-radius: 15px; border-bottom-left-radius: 0;">
				<div class="panel-heading" style="padding: 10px; background: #FFF; border-top-left-radius: 0; border-top-right-radius: 15px; border-color: transparent;">
					<table class="pull-right" style="margin-right: 10px; margin-top: 20px; margin-bottom: 15px;">
						<tbody>
							<tr>
								<td><a href="javascript:void(0);" onclick='loadCalendario(<?php echo $numero_anio_anterior; ?>, <?php echo $mes; ?>)'><span class="pull-left fa fa-caret-left fa-2x"></span></a></td>
								<td style="font-size: 2em"><strong><?php echo $year; ?></strong></td>
								<td><a href="javascript:void(0);" onclick='loadCalendario(<?php echo $numero_anio_siguiente; ?>, <?php echo $mes; ?>)'><span class="pull-right fa fa-caret-right fa-2x"></span></a></td>
							</tr>
						</tbody>
					</table>

					<table class="table table-condensed" style="margin-bottom: 0px;">
						<thead>
							<tr>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 1) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 1)">Ene</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 2) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 2)">Feb</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 3) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 3)">Mar</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 4) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 4)">Abr</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 5) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 5)">May</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 6) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 6)">Jun</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 7) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 7)">Jul</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 8) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 8)">Ago</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 9) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 9)">Sep</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 10) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 10)">Oct</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 11) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 11)">Nov</a></th>
								<th class="text-center" style="border-bottom: none; font-size: 12px; <?php if ($mes == 12) {  } else { echo 'font-weight: normal;'; } ?>"><a href="javascript:void(0);" onclick="loadCalendario(<?php echo $year; ?>, 12)">Dic</a></th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="panel-body" style="padding: 0; height: 207px;">
					<table class="calendario table table-condensed text-center" style="margin-top: -5px; margin-bottom: 10px;">
						<thead>
							<tr>
								<th class="text-center">Dom</th>
								<th class="text-center">Lun</th>
								<th class="text-center">Mar</th>
								<th class="text-center">Mier</th>
								<th class="text-center">Jue</th>
								<th class="text-center">Vie</th>
								<th class="text-center">Sab</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								for ($i=1; $i <= $numberDays; $i++) { 

									if($i <= $saute) {
										echo '<td></td>';
									} else {
										$day = $i - $saute;
										$date = $year."-".$month."-".$day;

										$sql = "SELECT  id, fecha, COUNT(fecha) AS NumeroFecha FROM d_debates.diario WHERE DAY(fecha) = ".$day." AND MONTH(fecha) = ".$month." AND YEAR(fecha) = ".$year." AND (tp <> 'R' OR tp <> 'RI' OR tp <> 'SR') AND activa = 1 ";
										$result = $conecta_base->query($sql);
										if($result->num_rows > 0) {	
											while ($row = $result->fetch_assoc()) {
												$row['NumeroFecha'];
												if ($row['NumeroFecha'] > 1) {
													$styleNumero = 'moreGacetas';
													$moreAsistencias = moreAsistencia($date, $conecta_base);
												} else {
													$styleNumero = NULL;
													$moreAsistencias = NULL;
												}

												$dayDB = date_format(date_create($row["fecha"]), "d") * 1;
												$monthDB = date_format(date_create($row["fecha"]), "m") * 1;
												$yearDB = date_format(date_create($row["fecha"]), "Y");
												$dateDB = $yearDB."-".$monthDB."-".$dayDB;
												$idDiario = $row['id'];
												//$urlAsistencia = urls_amigables($row['fecha']).'/'.$row['numsis'];
												$urlAsistencia = urls_amigables($row['id']);
											}
										} else {
											$dateDB = NULL;
											$idDiario = NULL;
										}

										if($date == $realDay) {
											if ($date == $dateDB) {
												if ($idDiario == "") {
													echo'<td>'.$day.'</td>';
												} else {
													echo '<td class="asistencia '.$styleNumero.'">';
													if ($moreAsistencias == NULL) {
														echo '<a href="'.URL.'diario_de_los_debates/documento/'.$urlAsistencia.'">';
													}
													echo $day;
													if ($moreAsistencias == NULL) {
														echo '</a>';
													}
													echo $moreAsistencias;
													echo '</td>';
												}
											} else {
												echo '<td class="today">'.$day.'</td>';
											}
										} else {
											if ($date == $dateDB) {
												echo '<td class="asistencia '.$styleNumero.'">';
												if ($moreAsistencias == NULL) {
													echo '<a href="'.URL.'diario_de_los_debates/documento/'.$urlAsistencia.'">';
												}
												echo $day;
												if ($moreAsistencias == NULL) {
													echo '</a>';
												}
												echo $moreAsistencias;
												echo '</td>';
											} else {
												echo '<td>'.$day.'</td>';
											}
										}
									}

									if($i %7 == 0) {
										echo '</tr><tr>';
									}
								}

								for ($i=1; $i <= $difference; $i++) { 
									echo '<td></td>';
								}
								?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php

	function evaluateMonth($number, $bool, $year) {
		if (((fmod($year,4)==0) and (fmod($year,100)!=0)) or (fmod($year,400)==0)) { 
			$daysFebruary = 29; 
		} else { 
			$daysFebruary = 28; 
		} 
		switch ($number) {
			case 1: $numberDays = 31; $nameMonth = 'Enero'; break;
			case 2:	$numberDays = $daysFebruary; $nameMonth = 'Febrero'; break;
			case 3:	$numberDays = 31; $nameMonth = 'Marzo'; break;
			case 4:	$numberDays = 30; $nameMonth = 'Abril'; break;
			case 5: $numberDays = 31; $nameMonth = 'Mayo'; break;
			case 6:	$numberDays = 30; $nameMonth = 'Junio'; break;
			case 7:	$numberDays = 31; $nameMonth = 'Julio'; break;
			case 8:	$numberDays = 31; $nameMonth = 'Agosto'; break;
			case 9:	$numberDays = 30; $nameMonth = 'Septiembre'; break;
			case 10: $numberDays = 31; $nameMonth = 'Octubre';	break;
			case 11: $numberDays = 30; $nameMonth = 'Noviembre'; break;
			case 12: $numberDays = 31; $nameMonth = 'Diciembre'; break;
		}

		if($bool == true) {
			return $numberDays;
		} else {
			return $nameMonth;
		}
	}

	function moreAsistencia($date, $conecta_base) {
		//$sql = "SELECT * FROM registro.asistencia WHERE fecha = '".$date."' AND tipoperiodo <> 'R' AND activo = 1";
		$sql = "SELECT * FROM d_debates.diario WHERE fecha = '".$date."' AND (tp <> 'R' OR tp <> 'RI' OR tp <> 'SR') AND activa = 1";

		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {
			$tp=NULL;
			$np=NULL;
			$html = '<ul class="list-group calendarioMoreGaceta">';
			while ($row = $result->fetch_assoc()) {
				switch($row['tp']) {
					case "O": $tp="Ordinario"; break;
					case "E": $tp="Extraordinario"; break;
					case "R": $tp="de Receso"; break;
				}
				switch($row['np']) {
					case 1:	$np="Primer Periodo"; break;
					case 2:	$np="Segundo Periodo"; break;
					case 3:	$np="Tercer Periodo"; break;
					case 4:	$np="Cuarto Periodo"; break;
					case 5:	$np="Quinto Periodo"; break;
				}
				switch($row['annus']) {
					case 1:	$anio="Primer A&ntilde;o de Ejercicio"; break;
					case 2:	$anio="Segundo A&ntilde;o de Ejercicio"; break;
					case 3:	$anio="Tercer A&ntilde;o de Ejercicio"; break;
				}	
				switch($row['legislatura']){
					case 60: $legis="LX Legislatura"; break;
					case 61: $legis="LXI Legislatura"; break;
					case 62: $legis="LXII Legislatura"; break;
					case 63: $legis="LXIII Legislatura"; break;
					case 64: $legis="LXIV Legislatura"; break;
					case 65: $legis="LXV Legislatura"; break;
				}	

				$date = strtotime($row['fecha']);
				$day = date("d", $date);
				$month = date("m", $date);

				switch ($month) {
					case '01': $month = "enero"; break;
					case '02': $month = "febrero"; break;
					case '03': $month = "marzo"; break;
					case '04': $month = "abril"; break;
					case '05': $month = "mayo"; break;
					case '06': $month = "junio"; break;
					case '07': $month = "julio"; break;
					case '08': $month = "agosto"; break;
					case '09': $month = "septiembre"; break;
					case '10': $month = "octubre"; break;
					case '11': $month = "noviembre"; break;
					case '12': $month = "diciembre"; break;
				}

				$year = date("Y", $date);
				$date = $day." de ".$month." de ".$year;

				$urlAsistencia = urls_amigables($row['id']);

				$html .= '<li class="list-group-item" style="background: rgba(46, 27, 22, 0.75);">';

				$html .= '<a href="'.URL.'diario_de_los_debates/documento/'.$urlAsistencia.'">';

				$html .= 'Diario #'.$row['diario'].' de '.$date.' del '.$np.' '.$tp;
				$html .= '</a>';
				$html .= '</li>';
			}
			$html .= '</ul>';
			return $html;
		} else {
			return NULL;
		}	
	}
?>