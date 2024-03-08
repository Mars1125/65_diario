<!--<div class="row" >
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px;">
    buscador
    </div>
</div>-->
<div class="row" >
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; font-size: 30px; color: #2E1B16; text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5); " align="center">
   <?php
		switch($var1){
			
			case "LIII": $lg="53"; echo "<strong>LIII Legislatura (1985-1988)</strong>"; $periodo1="Septiembre 1985 - agosto 1986"; $periodo2="Septiembre 1986 - agosto 1987"; $periodo3="Septiembre 1987 - agosto 1988"; break;
			case "LIV": $lg="54"; echo "<strong>LIV Legislatura (1988-1991)</strong>"; $periodo1="Septiembre 1988 - agosto 1989"; $periodo2="Septiembre 1989 - agosto 1990"; $periodo3="Septiembre 1990 - agosto 1991"; break;
			case "LV": $lg="55"; echo "<strong>LV Legislatura (1991-1994)</strong>"; $periodo1="Septiembre 1991 - agosto 1992"; $periodo2="Septiembre 1992 - agosto 1993"; $periodo3="Septiembre 1993 - agosto 1994"; break;
			case "LVI": $lg="56"; echo "<strong>LVI Legislatura (1994-1997)</strong>"; $periodo1="Septiembre 1994 - agosto 1995"; $periodo2="Septiembre 1995 - agosto 1996"; $periodo3="Septiembre 1996 - agosto 1997"; break;
			case "LVII": $lg="57"; echo "<strong>LVII Legislatura (1997-2000)</strong>"; $periodo1="Septiembre 1997 - agosto 1998"; $periodo2="Septiembre 1998 - agosto 1999"; $periodo3="Septiembre 1999 - agosto 2000"; break;
			case "LVIII": $lg="58"; echo "<strong>LVIII Legislatura (2000-2003)</strong>"; $periodo1="Septiembre 2000 - agosto 2001"; $periodo2="Septiembre 2001 - agosto 2002"; $periodo3="Septiembre 2002 - agosto 2003"; break;
			case "LIX": $lg="59"; echo "<strong>LIX Legislatura (2003-2006)</strong>";$periodo1="Septiembre 2003 - agosto 2004"; $periodo2="Septiembre 2004 - agosto 2005"; $periodo3="Septiembre 2005 - agosto 2006"; break;
			case "LX": $lg="60"; echo "<strong>LX Legislatura (2006-2009)</strong>"; $periodo1="Septiembre 2006 - agosto 2007"; $periodo2="Septiembre 2007 - agosto 2008"; $periodo3="Septiembre 2008 - agosto 2009"; break;
			case "LXI": $lg="61"; echo "<strong>LXI Legislatura (2009-2012)</strong>"; $periodo1="Septiembre 2009 - agosto 2010"; $periodo2="Septiembre 2010 - agosto 2011"; $periodo3="Septiembre 2011 - agosto 2012"; break;
			case "LXII": $lg="62"; echo "<strong>LXII Legislatura (2012-2015)</strong>"; $periodo1="Septiembre 2012 - agosto 2013"; $periodo2="Septiembre 2013 - agosto 2014"; $periodo3="Septiembre 2014 - agosto 2015"; break;
			case "LXIII": $lg="63"; echo "<strong>LXIII Legislatura (2015-2018)</strong>";  $periodo1="Septiembre 2015 - agosto 2016"; $periodo2="Septiembre 2016 - agosto 2017"; $periodo3="Septiembre 2017 - agosto 2018"; break;
			case "LXIV": $lg="64"; echo "<strong>LXIV Legislatura (2018-2021)</strong>";  $periodo1="Septiembre 2018 - agosto 2019"; $periodo2="Septiembre 2019 - agosto 2020"; $periodo3="Septiembre 2020 - agosto 2021"; break;
			default : $lg="64";  echo "<strong>LXIV Legislatura (2018-2021)</strong>";  $periodo1="Septiembre 2018 - agosto 2019"; $periodo2="Septiembre 2019 - agosto 2020"; $periodo3="Septiembre 2020 - agosto 2021"; break;
			}
		?>
    </div>
</div>
<div class="row" >
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 5px; padding-left: 5px;">
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" style="position: relative;">
        <img src="<?php echo URL; ?>images/diario_de_los_debates/btn1.png"style="width: 100%;">
        <div class="lineaImageDiario" align="center"><?php echo $periodo1; ?></div>
        </td>
      </tr>
      <tr>
        <td width="33%"><?=busca_periodos($watch,$lg,1,"O",1,$conecta_base)?></td>
        <td width="34%"><?=busca_periodos($watch,$lg,1,"O",2,$conecta_base)?></td>
        <td width="33%"><?=busca_periodos($watch,$lg,1,"R",2,$conecta_base)?></td>
      </tr>
      <tr>
        <td colspan="3"><?php echo busca_extraordinario($watch,$lg,1,$conecta_base);?></td>
      </tr>
    </table>
		
	</div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 5px; padding-left: 5px;">
		<table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" style="position: relative;">
        <img src="<?php echo URL; ?>images/diario_de_los_debates/btn2.png"style="width: 100%;">
        <div class="lineaImageDiario" align="center"><?php echo $periodo2; ?></div>
        </td>
      </tr>
      <tr>
        <td width="33%"><?=busca_periodos($watch,$lg,2,"O",1,$conecta_base)?></td>
        <td width="34%"><?=busca_periodos($watch,$lg,2,"O",2,$conecta_base)?></td>
        <td width="33%"><?=busca_periodos($watch,$lg,2,"R",2,$conecta_base)?></td>
      </tr>
      <tr>
        <td colspan="3"><?php echo busca_extraordinario($watch,$lg,2,$conecta_base);?></td>
      </tr>
    </table>	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 5px; padding-left: 5px;">
		<table width="100%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" style="position: relative;">
        <img src="<?php echo URL; ?>images/diario_de_los_debates/btn3.png"style="width: 100%;">
        <div class="lineaImageDiario" align="center"><?php echo $periodo3; ?></div>
        </td>
      </tr>
      <tr>
        <td width="33%"><?=busca_periodos($watch,$lg,3,"O",1,$conecta_base)?></td>
        <td width="34%"><?=busca_periodos($watch,$lg,3,"O",2,$conecta_base)?></td>
        <td width="33%"><?=busca_periodos($watch,$lg,3,"R",2,$conecta_base)?></td>
      </tr>
      <tr>
        <td colspan="3"><?php echo busca_extraordinario($watch,$lg,3,$conecta_base);?></td>
      </tr>
    </table>
	</div>
</div><br>
<div class="row" >
	<div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; font-size: 30px; color: #2E1B16; text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5); " align="center">
     <?php					
		if($var2 != NULL){
			$conteo= substr_count($var2, '_');
			if($conteo==1){
				$anio=NULL;
				$tp=NULL;
				$np=NULL;
				list($anio,$tp) = explode("_", $var2);				
				if($tp=="CP"){ include("boton_permanente.php");}
				else{
				switch($tp){
				case "E": $periodo= "<strong>Periodo Extraordinario</strong>"; break;
				case "O":
        case "OD": $periodo= "<strong>Periodo Ordinario</strong>"; break;
				case "R": $periodo= "<strong>Receso</strong>"; break;
				case "CP": $periodo= ""; break;						
				default : $periodo= "<strong>Primer Periodo Ordinario</strong>"; break;
				}
			
			switch($np){
				case 1: $num_periodo= "<strong>Primer $periodo</strong>"; break;
				case 2: $num_periodo= "<strong>Segundo $periodo</strong>"; break;						
				default : $num_periodo= "<strong>$periodo</strong>"; break;
				}
			switch($anio){
				case 1: echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				case 2: echo "<strong>2do. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				case 3: echo "<strong>3er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;			
				default : echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				}
				include("bxslider/index.php");
				}
			}
			elseif($conteo==2){
				$anio=NULL;
				$tp=NULL;
				$np=NULL;
				list($anio,$tp,$np) = explode("_", $var2);
				switch($tp){
				case "E": $periodo= "<strong>Periodo Extraordinario</strong>"; break;
				case "O":
        case "OD": $periodo= "<strong>Periodo Ordinario</strong>"; break;
				case "R": $periodo= "<strong>Receso</strong>"; break;
				case "CP": $periodo= ""; break;						
				default : $periodo= "<strong>Primer Periodo Ordinario</strong>"; break;
				}
			
			switch($np){
				case 1: $num_periodo= "<strong>Primer $periodo</strong>"; break;
				case 2: $num_periodo= "<strong>Segundo $periodo</strong>"; break;						
				default : $num_periodo= "<strong>$periodo</strong>"; break;
				}
			switch($anio){
				case 1: echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				case 2: echo "<strong>2do. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				case 3: echo "<strong>3er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;			
				default : echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>"; break;
				}
				include("bxslider/index.php");
			}				
		}	
        ?>
    </div>
</div>
<div class="row" >
	<div class="col-sm-7" style="padding-right: 5px; padding-left: 5px;">
   <span style="padding-right: 5px; padding-left: 5px; font-size: 30px; color: #2E1B16; text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5); ">Diarios de Debates por Legislatura</span>
    <div style="width: 100%;">
              <ul id="hexGrid">
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LXIV/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/64.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LXIII/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/63.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LXII/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/62.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LXI/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/61.png" alt="" />
                     </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LX/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/60.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LIX/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/59.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LVIII/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/58.png" alt="" />
                      </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LVII/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/57.png" alt="" />
                     </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LVI/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/56.png" alt="" />
                     </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LV/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/55.png" alt="" />
                     </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LIV/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/54.png" alt="" />
                     </a>
                  </div>
                </li>
                <li class="hex">
                  <div class="hexIn">
                    <a class="hexLink" href="<?php echo URL.$watch."/LIII/1_O_1"; ?>">
                      <img src="<?php echo URL; ?>images/diario_de_los_debates/53.png" alt="" />
                      </a>
                  </div>
                </li>
              </ul>
            </div>
    </div>
    <div class="col-sm-5" style="padding-right: 5px; padding-left: 5px;">
    	<div align="center" style=" width:100%; background-color: #2E1B16; font-size:20px;" ><a href="<?php echo URL; ?>diario_de_los_debates/historico/" style=" color:#FFF;"><strong>Diario de los Debates<br />de 1875 a 1984</strong></a></div>
    	<div id="calendariosintesis"></div>
		<div id="loaderCalendario"></div>
        <div align="left" style=" padding:10px; "><a href="mailto:diario_debates@senado.gob.mx"><img src="<?php echo URL; ?>images/diario_de_los_debates/correo.png" width="45" /></a> &nbsp;<strong><a href="mailto:diario_debates@senado.gob.mx">Correo Electr&oacute;nico</a></strong></div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <?php echo listadoDiarios($lg, 1, $conecta_base); ?>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <?php echo listadoDiarios($lg, 2, $conecta_base); ?>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <?php echo listadoDiarios($lg, 3, $conecta_base); ?>
      </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		loadCalenadrio(<?php echo date("Y"); ?>, <?php echo date("m"); ?>);
	});

	function loadCalenadrio(anio, mes){
		var parametros = { "action":"ajax", "anio":anio, "mes":mes };
		$("#loaderCalendario").fadeIn('slow');
		$.ajax({
			url:'<?php echo URL; ?>app/diario/functions/calendarioMes.php',
			data: parametros,
			beforeSend: function(objeto){
				$("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
			},
			success:function(data){
				$("#calendariosintesis").html(data).fadeIn('slow');
				$("#loaderCalendario").html("");
			}
		})
	}
	function ChangeUrl(formulaire) {
		if (formulaire.ListeUrl.selectedIndex != 0) {
			$("#loaderCalendario").fadeIn('slow');
			console.log(formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value);
			$.ajax({
				url:'<?php echo URL; ?>app/diario/functions/calendarioMes.php',
				data: formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value,
				beforeSend: function(objeto){
					$("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
				},
				success:function(data){
					$("#calendariosintesis").html(data).fadeIn('slow');
					$("#loaderCalendario").html("");
				}
			})
		} else  {
			alert('Tienes que elegir un destino.');
		}
	}
</script>