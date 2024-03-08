<?php require_once '../../config/config.php'; ?>
<?php
	$month = $mes * 1;
	$year = $anio;

	$numero_mes_anterio = $month - 1;
	$numero_anio_anterior = $year;
	if($numero_mes_anterio <= 0) {
		$numero_mes_anterio = 12;
		$numero_anio_anterior = $numero_anio_anterior - 1;
	}
	
	$numero_mes_siguiente = $month + 1;
	$numero_anio_siguiente = $year;
	if($numero_mes_siguiente >= 13) {
		$numero_mes_siguiente = 1;
		$numero_anio_siguiente++;
	}

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
	<div class="panel panel-default">
		<div class="panel-heading" style="background: #2E1B16; color: #FFF;">
			<p class="text-center">
				<a href="javascript:void(0);" onclick='loadCalenadrio(<?php echo $numero_anio_anterior; ?>, <?php echo $numero_mes_anterio ?>)' style="color: #FFF;"><span class="pull-left fa fa-chevron-left fa-2x"></span></a>
				<?php echo $nameMonth." ".$year; ?>
				<a href="javascript:void(0);" onclick='loadCalenadrio(<?php echo $numero_anio_siguiente; ?>, <?php echo $numero_mes_siguiente; ?>)' style="color: #FFF;"><span class="pull-right fa fa-chevron-right fa-2x"></span></a>
			</p>


			<div class="row">
				<div class="col-sm-6 text-right">
					<form>
						<select name="ListeUrl" onchange="ChangeUrl(this.form)" style="color: #555; background: #FFF;">
							<option value="">Mes</option>
							<option value="anio=<?php echo $year; ?>&mes=1">Enero</option>
							<option value="anio=<?php echo $year; ?>&mes=2">Febrero</option>
							<option value="anio=<?php echo $year; ?>&mes=3">Marzo</option>
							<option value="anio=<?php echo $year; ?>&mes=4">Abril</option>
							<option value="anio=<?php echo $year; ?>&mes=5">Mayo</option>
							<option value="anio=<?php echo $year; ?>&mes=6">Junio</option>
							<option value="anio=<?php echo $year; ?>&mes=7">Julio</option>
							<option value="anio=<?php echo $year; ?>&mes=8">Agosto</option>
							<option value="anio=<?php echo $year; ?>&mes=9">Septiembre</option>
							<option value="anio=<?php echo $year; ?>&mes=10">Octubre</option>
							<option value="anio=<?php echo $year; ?>&mes=11">Noviembre</option>
							<option value="anio=<?php echo $year; ?>&mes=12">Diciembre</option>
						</select>
					</form>
				</div>
				
				<div class="col-sm-6 text-left">
					<form>
						<select name="ListeUrl" onchange="ChangeUrl(this.form)" style="color: #555; background: #FFF;">
							<option value="">A&ntilde;o</option>
							<?php for ($i = 1985; $i <= 2018; $i++) { 
								echo '<option value="anio='.$i.'&mes='.$month.'">'.$i.'</option>';
							} ?>
						</select>
					</form>
				</div>
			</div>
		</div>
		<div class="panel-body" style="padding: 0; background: url(<?php echo URL; ?>images/background.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
			<div class="table-responsive" style="margin-bottom: 0;">
				<table class="table table-condensed text-center calendario" style="margin-bottom: 0;">
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

									$sql = "SELECT * FROM d_debates.diario WHERE activa = '1' AND fecha = '".$date."' ORDER BY tp, fecha DESC";
									$result = $conecta_base->query($sql);
									if($result->num_rows > 0) {	
										while ($row = $result->fetch_assoc()) {
											$dayDB = date_format(date_create($row["fecha"]), "d") * 1;
											$monthDB = date_format(date_create($row["fecha"]), "m") * 1;
											$yearDB = date_format(date_create($row["fecha"]), "Y");
											$dateDB = $yearDB."-".$monthDB."-".$dayDB;
											$idSintesis = $row['id'];
										}
									} else {
										$dateDB = NULL;
									}

									if($date == $realDay) {
										if ($date == $dateDB) {
											echo '<td class="diarioDebates"><a href="'.URL.'diario_de_los_debates/documento/'.$idSintesis.'" target="_parent">'.$day.'</a></td>';
										} else {
											echo '<td class="today">'.$day.'</td>';
										}
									} else {
										if ($date == $dateDB) {
											echo '<td class="diarioDebates"><a href="'.URL.'diario_de_los_debates/documento/'.$idSintesis.'" target="_parent">'.$day.'</a></td>';
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
?>