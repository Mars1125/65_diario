<?php include 'includes/menuInformacionParlamentaria.php'; ?>
<?php include 'functions/funtionDiario.php'; ?>
<?php include 'modals.php'; ?>
<div class="container-fluid bg-content main">
	<?php if ($watch == 'diario_de_los_debates'){?><div class="well well-sm text-center"><h1 style="margin-top: 10px;">Diario de los Debates</h1></div><?php } ?>
	<?php include 'functions/iconosSociales.php'; ?>
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
				include 'deployment.php'; 
			}else{
				include 'principal.php'; break;
				}			
		break;
		default: include 'principal.php'; break;
	}
?>
</div>
<script>
	$( function() {
		$('audio').audioPlayer(); 
	});
</script>