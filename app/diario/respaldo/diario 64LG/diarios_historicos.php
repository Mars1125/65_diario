<script type="text/javascript">
function Mostrar(Div){
   if (Div.style.display == "none"){
   Div.style.display = ""
   }
   else{
   Div.style.display = "none"
   }
}
</script>
<br>
<br>
<?php
function diario_historico($a,$anio,$conecta_base) {
		$date=NULL;
		for ( $i = 0 ; $i <= $a ; $i ++) {
		$date=$anio+$i;
		echo"<strong><a href='javascript:void(0);' onclick='Mostrar(nombredeldiv".$date.")' >".$date."</a></strong>";
		echo"<div id='nombredeldiv".$date."' style='display:none;' align='center'>";
		$sql = "SELECT id,ano,fecha,carpeta,anexo FROM d_debates.fecha_diario WHERE ano='".$date."'";
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			while ($row = $result->fetch_assoc()) {				
				$id=$row['id'];
				$ano=$row['ano'];
				$fecha=$row['fecha'];
				$carpeta=$row['carpeta'];
				$anexo=$row['anexo'];
				list( $year, $month, $day ) = explode( "-", $fecha );
				$cadena_cambiada = str_replace("01","Enero",$month);
				$cadena_cambiada = str_replace("02","Febrero",$cadena_cambiada);
				$cadena_cambiada = str_replace("03","Marzo",$cadena_cambiada);
				$cadena_cambiada = str_replace("04","Abril",$cadena_cambiada);
				$cadena_cambiada = str_replace("05","Mayo",$cadena_cambiada);
				$cadena_cambiada = str_replace("06","Junio",$cadena_cambiada);
				$cadena_cambiada = str_replace("07","Julio",$cadena_cambiada);
				$cadena_cambiada = str_replace("08","Agosto",$cadena_cambiada);
				$cadena_cambiada = str_replace("09","Septiembre",$cadena_cambiada);
				$cadena_cambiada = str_replace("10","Octubre",$cadena_cambiada);
				$cadena_cambiada = str_replace("11","Noviembre",$cadena_cambiada);
				$cadena_cambiada = str_replace("12","Diciembre",$cadena_cambiada);
				$mes=$cadena_cambiada;
				echo"<a href='http://infosen.senado.gob.mx/documentos/DIARIOS/".$carpeta."/".$anexo."' target='blank'>".$day." de ".$mes." de ".$year."</a><br>";
				}
		echo"</div><br>";
			}
		}
	}
?>
<table width="80%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr valign="top" align="center">
    <td  colspan="3" align="center" style="font-size:28px;"><strong>Diario de los Debates de 1875 - 1984</strong><br /><br /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div>
    </div>
      <div align="center"><strong>Diarios de<br>
        1875-1900</strong></div>
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div></td>
  </tr>
  <tr valign="top" align="center">
    <td width="270" align="center"><?php $a="5"; $anio="1875"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1881"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1891"; diario_historico($a,$anio,$conecta_base); ?></td>
  </tr>
  <tr valign="top" align="center" >
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div>
    </div>
      <div align="center"><strong>Diarios de<br>
        1901-1930</strong></div>
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div></td>
  </tr>
  <tr valign="top" align="center">
    <td width="270" align="center"><?php $a="9"; $anio="1901"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1911"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1921"; diario_historico($a,$anio,$conecta_base); ?></td>
  </tr>
  <tr valign="top" align="center" >
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div>
    </div>
      <div align="center"><strong>Diarios de<br>
        1931-1960</strong></div>
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div></td>
  </tr>
  <tr valign="top" align="center">
    <td width="270" align="center"><?php $a="9"; $anio="1931"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1941"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1951"; diario_historico($a,$anio,$conecta_base); ?></td>
  </tr>
  <tr valign="top" align="center" >
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div>
      <div align="center"><strong>Diarios de<br>
        1961-1984</strong></div>
      <div align="center"><img src='<?php echo URL;?>images/diario_de_los_debates/separador.jpg' width='100%' height='10'></div></td>
  </tr>
  <tr valign="top" align="center">
    <td width="270" align="center"><?php $a="9"; $anio="1961"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="9"; $anio="1971"; diario_historico($a,$anio,$conecta_base); ?></td>
    <td width="270" align="center"><?php $a="3"; $anio="1981"; diario_historico($a,$anio,$conecta_base); ?></td>    
  </tr>
  <tr valign="top" align="center" >
    <td colspan="3">&nbsp;</td>
  </tr>
</table>