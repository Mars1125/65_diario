<?php
include 'app/bannerCabeceras.php';
	switch ($watch) {
		case 'diario_de_los_debates':
			include 'app/diario/selectionDiario.php';
			break;
		default:
			echo "<script>
				location.href ='".URL."diario_de_los_debates';
				</script>";
			break;
	}
?>