<style type="text/css">
	/*{
		border: solid 1px #000;
	}*/
  .fondoMD{
    background: url(<?php echo URL; ?>img/mesa.jpg);
    background-repeat: no-repeat; background-size: 350px 280px; background-position:center;    
  } 
  .panel-default{
	padding:20px; 
  }
  .titulo-header{
	font-size:50px; margin-bottom:0px;
	line-height: 1
  }
  .buttons-actions{
	padding-top: 10px; 
	text-align: right; 
	padding-right:30px;
  }
  @media screen and (max-width: 640px) {
	.panel-default {
    	padding: 0px;
	}
	.titulo-header{
		font-size:40px;
		line-height: 1
  	}
	  .buttons-actions{
	padding-top: 0px; 
	text-align: center; 
	padding-right:0px;
	padding-bottom: 8px;
  }
  .buttons-actions a{

	display: block;
  }
  }
</style>
<!--<div class="row">
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
    <?php //echo contenidoDiario($var2,$conecta_base)?>
   </div>
</div>-->

<div class="container-fluid">
	<div class="row" >
		<div class="col-sm-12">
			<div style="background: url(<?php echo URL;?>images/diario_de_los_debates/fondo_cabecera_diario.jpg); background-repeat: no-repeat; background-size: cover; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; width: auto; min-height: 550px; max-height: 750px; padding-left: 5px; ">
		    	<div class="container-fluid">
			    	<div class="row">
			    		<div class="col-sm-6"><?php echo cabecera_diario_LXV($var2,$conecta_base)?></div>
			    		<div class="col-sm-6"></div>	
			    	</div>
			    </div>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-8 buttons-actions">
			<a href="<?php echo URL; ?>diario_de_los_debates/documentov/<?php echo $var2; ?>"><img src="<?php echo URL; ?>images/diario_de_los_debates/boton_01.png" width="180"></a><?php echo anexopdf_diario_LXV($var2,$conecta_base)?>
			<!-- &nbsp;	<img src="<?php //echo URL; ?>images/diario_de_los_debates/boton_02.png" width="180">-->
		</div>		
	</div>
	<div class="row" >
		<div class="col-sm-4"></div>
		<div class="col-sm-4">	 
		<hr style=" width: 80%; border: 0; height: 4px;  background: #d7942a; margin-top: 10px; margin-bottom: 5px;" />
		<p  style=" text-align:center; font-size:22px;">	
		<b>Sumario</b>	
		</p>
		<hr style=" width: 80%; border: 0; height: 4px;  background: #d7942a;margin-top: 5px;" />
		</div>
		<div class="col-sm-4"></div>
	</div>

</div>
<div class="container">

  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="background-color:rgba(255,255,255,0);"> 
    	
      <?php //echo cabeceraDiario($var2, $conecta_base);	?> 
      <?php echo inicio_diario_nuevo_sumario($var2, $conecta_base);	?>    	
    </div>        
  </div> 
</div>
<?php

function anexopdf_diario_LXV($var2,$conecta_base) {
		$sql = "SELECT anexopdf, legislatura, annus, np, tp FROM d_debates.diario WHERE id='".$var2."' AND activa='1'";		
		$result = $conecta_base->query($sql);
		$texto=NULL;		
		$link_2=NULL;		
		if($result->num_rows > 0) {				
			while ($row = $result->fetch_assoc()) {
					
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

					if(trim($row['anexopdf'])!="") {						
					$link_2="http://infosen.senado.gob.mx/sgsp/content/sp/dd/content/cale/diarios/".$row['legislatura']."/".$row['annus']."/$LTP/PDF-WEB/".$row['anexopdf'];
						$texto="&nbsp;	<a href=".$link_2."><img src='".URL."images/diario_de_los_debates/boton_02.png' width='180'></a>";
					}else{
						$texto=NULL;
					}
		}
		return($texto);		
	}
}

function cabecera_diario_LXV($var2,$conecta_base) {
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
						case 1: $nperiodo="PRIMER";	break;
						case 2: $nperiodo="SEGUNDO"; break;
						case 3: $nperiodo="TERCER"; break;
						case 4: $nperiodo="CUARTO"; break;
						case 5: $nperiodo="QUINTO"; break;					
					}	
					switch($row['tp']) {
						case "O": 
							$tperiodo=" PERIODO ORDINARIO";	
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N P&Uacute;BLICA ORDINARIA";
						;break;
						case "OD": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N P&Uacute;BLICA ORDINARIA A DISTANCIA";
						break;
						case "OI": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N DE INSTALACI&Oacute;N";
						break;
						case "RI": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="SESI&Oacute;N DE INSTALACI&Oacute;N";
						break;
						case "R": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="SESI&Oacute;N P&Uacute;BLICA de la Comisi&oacute;n Permanente";
						break;
						case "E": 
							$tperiodo=" Periodo Extraordinario";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N P&Uacute;BLICA EXTRAORDINARIA";
						break;
						case "S": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N P&Uacute;BLICA SOLEMNE";
						break;
						case "SR": 
							$tperiodo=" Receso Comisi&oacute;n Permanente";
							$titulo_senado="DE LA COMISI&Oacute;N PERMANENTE";
							$ttp="SESI&Oacute;N P&Uacute;BLICA SOLEMNE";
						break;
						case "JP": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="JUNTA PREVIA"; $nperiodo="";
						break;
						case "SC": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N CONSTITUTIVA"; $nperiodo="";
						break;
						case "Proto": 
							$tperiodo=" PERIODO ORDINARIO";
							$titulo_senado="DE LA C&Aacute;MARA DE SENADORES";
							$ttp="SESI&Oacute;N PROTOCOLARIA"; $nperiodo="";
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
								<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;" align="left">
								<p class="titulo-header"><strong>DIARIO DE<br>LOS DEBATES</strong></p>
								<h2>'.$titulo_senado.'<br>DEL CONGRESO DE LOS ESTADOS<br>UNIDOS MEXICANOS</h2>
								</div>
							</div>';
					/*if(trim($row['anexopdf'])!="") {						
					$link_2="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/".$row['legislatura']."/".$row['annus']."/$LTP/PDF-WEB/".$row['anexopdf'];
						$imprime_pdf="<table width='100%'>
										<tr>
										<td width='80%'>
										<div align='right'><strong>Versi&oacute;n en<br>formato PDF</strong>
										<a href='".$link_2."' target='_self'><img src='".URL."images/diario_de_los_debates/pdf_descarga.png' border='0' height='60'></a>																											
									</div>
								</td>
								</tr>
							</table>";
					}	*/	
					
					if($row['tp']=="SC"){
						$tpm="1";
						}else{$tpm="2";}
					
					$texto.='<div class="row" >
								<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; border:0px solid #000; font-size:18px;" align="center">
								<table width="100%">
									<tr>
										<td align="left" width="25%" style="padding-top:10px;">'.$lgs.' LEGISLATURA<br>
										AÑO '.$annusp.'<br>'.$nperiodo.' '.$tperiodo.'<br>SESI&Oacute;N N&Uacute;MERO. '.$row['diario'].'
										</td>
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
								
								<hr style=" border: 0; height: 2px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));" />
								</div>'.$imprime_pdf;

		}
		return($texto);		
	}
}

function inicio_diario_nuevo_sumario($id, $conecta_base) {
		$sql = "SELECT contenido_diario.id AS contenido_docto_id, materia as materia_ss, punto as punto_ss, texto as texto_ss, video,id_video, video_activo, inicio_video,fin_video  FROM d_debates.contenido_diario INNER JOIN d_debates.diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";
		$result = $conecta_base->query($sql);

		if($result->num_rows > 0) {	
		$textox=NULL;		
			while ($row = $result->fetch_assoc()) {				

				if(trim($row['materia_ss'])!="" && trim($row['punto_ss'])!=""){$row['punto_ss']="<br><br>".$row['punto_ss']."</a>";
					echo "<div class='panel-heading' style='border:1px solid #717171; text-align:justify;'>
					        <table width='100%'>
						        <tr>
							        <td width='90%'>

							        <h4 class='panel-title'>
							          <a data-toggle='collapse' data-parent='#accordion' href='#".$row['contenido_docto_id']."'><strong> ".nl2br($row['materia_ss'])."</strong>".nl2br($row['punto_ss'])."</a>
									  </h4>

							        </td>
							        <td width='10%' align='center'><a data-toggle='collapse' data-parent='#accordion' href='#".$row['contenido_docto_id']."'><img src='".URL."images/diario_de_los_debates/flecha_azul.png' width='50'></a></td>
						        </tr>
					        </table>
					      </div>
					      <div id='".$row['contenido_docto_id']."' class='panel-collapse collapse'>
					        <div class='panel-body' style='border:1px solid #717171; background-color:rgba(255,255,255,1); padding-right:40px; padding-left:40px;'>
							";
					/****************/
					        if(busca_link_asunto($row['contenido_docto_id'], $conecta_base)==2){	
								?><?php echo '<a type="button" class="class="btn btn-primary" href=""><i class="fa-solid fa-file-pdf" style="color: #dd4040;"></i>Descargar apartado</a>';			
					if($row['video']!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$row['video'].'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ',$textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="http://www.senado.gob.mx/prototipo1/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					

					if($row['id_video']!="" && $row['video_activo']=="1"){ $cuadro_video='<iframe width="400" height="225" src="https://www.youtube.com/embed/'.$row['id_video'].'?autoplay=0;start='.$row['inicio_video'].';end='.$row['fin_video'].';rel=0;" width="400" height="225" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}else{$cuadro_video="";}
			
																		
						echo "<div align='center'>$cuadro_video</div><div align='justify'><br></strong></a> <a name='".$row['contenido_docto_id']."'></a>".$textox."</div>";
					}else{						
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><strong><a name='".$row['contenido_docto_id']."'></a>".$row['materia']."</strong><br>".$row['punto']."<br>";										
					
					
					
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ', $textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="'.URL.'/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					
					
					$textox = str_replace('width="100%" height="940"></embed>', ' target="_blank"><strong><font color="red">VER DOCUMENTO EN PDF.</font></strong></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.URL.'images/diario_de_los_debates/pdf.png" border="0" width="50"></div>', $textox);
					
						
						echo "*-*-*---*-<div align='justify'>$cuadro_video ".$textox."</div><br>";
					}
					/****************/

					 echo "</div>
					      </div>";
					}
				elseif(trim($row['materia_ss'])=="" && trim($row['punto_ss'])!=""){$row['punto_ss']="".$row['punto_ss']."</a>";
				echo "<div class='panel-heading' style='border:1px solid #717171; text-align:justify;'>
				        <table width='100%'>
						        <tr>
							        <td width='90%'>
				        <h4 class='panel-title'>
						
				          <a data-toggle='collapse' data-parent='#accordion' href='#".$row['contenido_docto_id']."'>".nl2br($row['punto_ss'])."</a>
				        </h4>
				        </td>
							        <td width='10%' align='center'><a data-toggle='collapse' data-parent='#accordion' href='#".$row['contenido_docto_id']."'><img src='".URL."images/diario_de_los_debates/flecha_azul.png' width='50'></a></td>
						        </tr>
					        </table>
				      </div>
				      <div id='".$row['contenido_docto_id']."' class='panel-collapse collapse'>
				        <div class='panel-body' style='border:1px solid #717171; background-color:rgba(255,255,255,1); padding-right:40px; padding-left:40px;'>";
						

					/****************/
					        if(busca_link_asunto($row['contenido_docto_id'], $conecta_base)==2){
								
					?><?php echo '<a type="button" target="_self" class="btn " href=""><img src="'.URL.'images/diario_de_los_debates/pdf_descarga.png" border="0" height="60"></i>Descargar apartado</a>';	
					if($row['video']!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$row['video'].'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ',$textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="http://www.senado.gob.mx/prototipo1/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					

					if($row['id_video']!="" && $row['video_activo']=="1"){ $cuadro_video='<iframe width="400" height="225" src="https://www.youtube.com/embed/'.$row['id_video'].'?autoplay=0;start='.$row['inicio_video'].';end='.$row['fin_video'].';rel=0;" width="400" height="225" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}else{$cuadro_video="";}
			
														
						echo "<div align='center'>$cuadro_video</div><div align='justify'><br></strong></a> <a name='".$row['contenido_docto_id']."'></a>".$textox."</div>";
					}else{						
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><strong><a name='".$row['contenido_docto_id']."'></a>".$row['materia']."</strong><br>".$row['punto']."<br>";										
					
					
					
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ', $textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="'.URL.'/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					
					
					$textox = str_replace('width="100%" height="940"></embed>', ' target="_blank"><strong><font color="red">VER DOCUMENTO EN PDF.</font></strong></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.URL.'images/diario_de_los_debates/pdf.png" border="0" width="50"></div>', $textox);
					
						
						echo "<br><div align='justify'>$cuadro_video ".$textox."</div><br>";
					}
					/****************/



				        echo "</div>
				      </div>";
				}
				else{
					echo "<div class='panel-heading' style='border:1px solid #717171; text-align:justify;'>
				        <h4 class='panel-title'>
				          <a data-toggle='collapse' data-parent='#accordion' href='#".$row['contenido_docto_id']."'><strong> ".nl2br($row['materia_ss'])."</strong></a>
						  
						  </h4>
				      </div>
				      <div id='".$row['contenido_docto_id']."' class='panel-collapse collapse'>
				        <div class='panel-body' style='border:1px solid #717171; background-color:rgba(255,255,255,1); padding-right:40px; padding-left:40px;'>";



					/****************/
					        if(busca_link_asunto($row['contenido_docto_id'], $conecta_base)==2){	
					if($row['video']!=""){ $cuadro_video='<div align="center"><video style="max-width: 400px; width: 100%; float: right; padding: 35px 5px 10px 10px;" src="http://infosen.senado.gob.mx/content/sp/dd/videos/media/'.$row['video'].'" type="video/mp4" id="player1" poster="video/portada_video.jpg" controls="controls" preload="none">Tu navegador no implementa el elemento <code>video</code>.</video></div>'; } else { $cuadro_video=NULL; }
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ',$textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="http://www.senado.gob.mx/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					

					if($row['id_video']!="" && $row['video_activo']=="1"){ $cuadro_video='<iframe width="400" height="225" src="https://www.youtube.com/embed/'.$row['id_video'].'?autoplay=0;start='.$row['inicio_video'].';end='.$row['fin_video'].';rel=0;" width="400" height="225" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';}else{$cuadro_video="";}
						?><?php echo '<a><i class="fa-solid fa-file-pdf" style="color: #dd4040;"></i></a>';	
																		
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><br></strong></a> <a name='".$row['contenido_docto_id']."'></a>".$textox."</div></td></tr><tr><td align='right' colspan='2'><br><div align='right'><a href='#a".$row['contenido_docto_id']."'><img src='".URL."images/diario_de_los_debates/regresar.png' border='0'><br></a></div><br><img src='".URL."images/diario_de_los_debates/separador.jpg' width='100%' height='10'><br></td></tr>";
					}else{						
						echo "<tr valign='top'><td width='100%'><div align='center'>$cuadro_video</div><div align='justify'><strong><a name='".$row['contenido_docto_id']."'></a>".$row['materia']."</strong><br>".$row['punto']."<br>";										
					
					
					
					$textox = str_replace('" src="content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $row['texto_ss']);
					$textox = str_replace('" src="
content/sp/dd/content/cale/diarios', '" src="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios', $textox);
					$textox = str_replace('>VER DOCUMENTO</', ' target="popup" onClick="window.open(this.href, this.target, &quot;width=600,height=700&quot;); return false;"><img src="'.URL.'images/diario_de_los_debates/lupa.png" width="50"></', $textox);
					$textox = str_replace('<img ', '<br><br><img ', $textox);
					$textox = str_replace('<a href="http://www.senado.gob.mx/index.php?ver=sp&mn=2&sm=2&id=', '<a href="'.URL.'/64/gaceta_del_senado/documento/',$textox);
					$textox = str_replace('<embed src="content/sp/dd/content/cale/diarios/', '<table align="center" width="95%" border="0"><tr><td width="100%"><div align="right"><a href="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/', $textox);					
					
					$textox = str_replace('width="100%" height="940"></embed>', ' target="_blank"><strong><font color="red">VER DOCUMENTO EN PDF.</font></strong></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.URL.'images/diario_de_los_debates/pdf.png" border="0" width="50"></div></td><tr></table>', $textox);
					
						
						echo "<br><div align='justify'>$cuadro_video ".$textox."</div><br></td></tr>					
						<tr><td align='right' colspan='2'><div align='right'><a href='#a".$row['contenido_docto_id']."'><img src='".URL."images/diario_de_los_debates/regresar.png' border='0'><br></a></div><br><img src='".URL."images/diario_de_los_debates/separador.jpg' width='100%' height='10'><br></td></tr>";
					}
					/****************/




				        echo "</div>
				      </div>";
					}
			}

		}
		$conecta_base->close();
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
					$link_2="http://infosen.senado.gob.mx/content/sp/dd/content/cale/diarios/".$row['legislatura']."/".$row['annus']."/$LTP/PDF-WEB/".$row['anexopdf'];
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