<div class="Access-button-3" id="ocultar_barra3">     
    <div class="Access-box" style="margin-left: 30px;">
        <div align="left" style="height: 100%;max-height: 520px; position: fixed; max-width:315px; overflow-x: hidden; overflow-y: auto;display: block;">
        	<?php echo inicio_diario_nuevo_sumario($var2, $conecta_base);?>			
   		 </div>
    </div>
    <a href=""><div class="Access-out"><img src="<?php echo URL; ?>images/diario_de_los_debates/menu2.jpg" alt="Portal de Accesso"></div></a>
</div>
<?php

function inicio_diario_nuevo_sumario($id, $conecta_base) {
		$sql = "SELECT contenido_diario.id AS contenido_docto_id, materia as materia_ss, punto as punto_ss, texto as texto_ss FROM d_debates.contenido_diario INNER JOIN d_debates.diario ON contenido_diario.id_diario=diario.id WHERE id_diario='$id' AND visible='1' ORDER BY contenido_diario.id ASC";
		$result = $conecta_base->query($sql);
		if($result->num_rows > 0) {	
			echo"<table border='0' cellspacing='5' cellpadding='5' width='98%'  align='center' class='sumario_enlaces' style='background: rgba(255, 255, 255, 0.5);'>";
			echo "<tr><td align='center'><strong>SUMARIO</strong></td></tr>";
			while ($row = $result->fetch_assoc()) {
				//return $row['ultimoID'];
				if(trim($row['punto_ss'])!=""){$row['punto_ss']="<br><br>".$row['punto_ss']."</a>";
					echo"<tr valign='top'><td><br><div align='justify'><a name='a".$row['contenido_docto_id']."'></a><a href='#".$row['contenido_docto_id']."'><strong> ".nl2br($row['materia_ss'])."</strong>".nl2br($row['punto_ss'])."</div></td></tr>";
					}
					else{echo"<tr valign='top'><td><br><div align='justify'><a name='a".$row['contenido_docto_id']."'></a><a href='#".$row['contenido_docto_id']."'><strong> ".nl2br($row['materia_ss'])."</strong></div></td></tr>";}
			}
			echo "</table><br><img src='library/diario_debates/imagenes/separador.jpg' width='100%' height='10'>";
		}
		$conecta_base->close();
	}

?>