<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding-top: 10px;
	margin:10px;
    font-weight: 600;
    font-size: 16px;
    color: #ffffff;
    background-color: #2E1B16;
    border-radius: 0px;
    border: 2px solid #ffffff;
	width:350px;
	height:50px;	
  }
  
</style>
<div style=" border:#F00 0px solid; position:relative; width:100%; height:80px;">
<div style=" color: #2E1B16; text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5);"><strong>Comisi&oacute;n Permanente</strong></div>
<div class="boton_personalizado" align="center" style=" display:inline-table;"><a href="http://cronica.diputados.gob.mx/" style=" color:#FFF;">Primer Receso<br />C&aacute;mara de Diputados</a></div>
<?php 
	list($anio,$tp) = explode("_", $var2);
	if($tp=="CP"){$tp="R";}
 ?>
<div class="boton_personalizado" align="center" style=" display:inline-table;"><a href="<?php echo URL.$watch."/".$var1."/".$anio."_".$tp; ?>_2"  style=" color:#FFF;">Segundo Receso<br />C&aacute;mara de Senadores</a></div>
</div>
<br />