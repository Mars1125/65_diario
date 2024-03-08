<?php //include 'includes/menuInformacionParlamentaria.php'; ?>
<?php include 'functions/funtionDiario.php'; ?>
<?php include 'modals.php'; ?>
<div class="container-fluid bg-content main">
	<?php //include 'functions/iconosSociales.php'; ?>
	<br>
<?php
	switch ($var1) {
		case 'historico': include 'diarios_historicos.php'; break;
		case 'punto':
			if(is_numeric($var2)) {
				include 'deployment2.php'; 
			}else{
				include 'principal.php'; break;
				}			
		break;
		case 'documento':
			if(is_numeric($var2)) {
				echo archivo_lg($var2,$conecta_base);
				///include 'deployment.php'; 
			}else{
				include 'principal.php'; 
				}			
		break;
		case 'documentov':
			if(is_numeric($var2)) {				
				include 'deployment.php'; 
			}else{
				include 'principal.php'; 
				}			
		break;
		default: include 'principal.php'; break;
	}

	function archivo_lg($var2,$conecta_base) {
		$sql = "SELECT * FROM d_debates.diario WHERE id='".$var2."' AND activa='1'";		
		$result = $conecta_base->query($sql);				
		if($result->num_rows > 0) {				
			while ($row = $result->fetch_assoc()) {					
				switch($row['legislatura']) {
					case 53: 
					case 54: 
					case 55: 
					case 56: 
					case 57: 
					case 58: 
					case 59: 
					case 60: 
					case 61: 
					case 62: 
					case 63: 
					case 64: include 'deployment.php';  break;
					case 65: 
					case 66: 
					case 67: include 'Diario_LXV.php';  break;
					default: include 'deployment.php';  break;
						}									
					}
				//return($texto);		
			}
		}
?>
</div>
<script>
	$( function() {
		$('audio').audioPlayer(); 
	});
</script>