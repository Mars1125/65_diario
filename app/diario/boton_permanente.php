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

  .btn-permantente{
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    color: #ffffff;
    background-color: #2E1B16;
    border-radius: 12px;
    width: 90%;
  }
  
</style>
<div style=" border:#F00 0px solid; position:relative; width:100%;">
<div style=" color: #2E1B16; text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5);" class="mb-5"><strong>Comisi&oacute;n Permanente</strong></div>
<!-- <div class="boton_personalizado" align="center" style=" display:inline-table;"> 
<a href="http://cronica.diputados.gob.mx/" style=" color:#FFF;">Primer Receso<br />C&aacute;mara de Diputados</a>
</div> -->
<?php 
	list($anio,$tp) = explode("_", $var2);
	if($tp=="CP"){$tp="R";}
 ?>
<!-- <div class="boton_personalizado" align="center" style=" display:inline-table;">
<a href="<?php echo URL.$watch."/".$var1."/".$anio."_".$tp; ?>_2"  style=" color:#FFF;">Segundo Receso<br />C&aacute;mara de Senadores</a>
 </div>  -->
</div>


<div class="row">
  <div class="col-md-5 col-lg-4 col-xl-3 ms-auto">
  <a class="btn btn-permantente mb-4" href="http://cronica.diputados.gob.mx/" style=" color:#FFF;">Primer Receso<br />C&aacute;mara de Diputados</a>
  </div>
  <div class="col-md-5 col-lg-4 col-xl-3 me-auto mb-4">
  <a class="btn btn-permantente" href="<?php echo URL.$watch."/".$var1."/".$anio."_".$tp; ?>_2"  style=" color:#FFF;">Segundo Receso<br />C&aacute;mara de Senadores</a>
  </div>
</div>