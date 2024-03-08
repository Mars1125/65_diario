<?php
	include 'menu.php';
?>
<div id="menu">
<div id="nav">
	<div class="menu_bar">
		<!-- <a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a> -->
		<div class="menu-toggle first" style="background-color: white">
		<i></i>
		</div>
	</div>
	<div id="menuCont">
		<li class="page-item n1" style="width: 50px;">
			<a href="<?php echo URL; ?>" title="Home">
				<span class="menu-mid" style="width: 50px;">
					<span class="menu-caption" style="width: 50px;"><i class="fa fa-home " style="font-size: 2.5em;"></i></span>
				</span>
			</a>
		</li>
		
		<li class="page-item n1 liWidthMa" style="width: 80px;">
			<a href="#" title="Sobre el Senado">
				<div class="menu-mid" style="width: 80px;">
					<div class="menu-caption" style="width: 80px;"><?php echo $arrayMenu['SobreSenado']['Nombre']; ?></div>
				</div>
			</a>
			
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
					<?php foreach ($arrayMenu['SobreSenado']['SubMenu'] as $row) { ?>
					<li class="page-item">
						<a href="<?=$row['Link']?>">
							<span class="menu-mid">
								<span class="menu-caption"><?=$row['Nombre']?></span>
							</span>
						</a></li>
					<?php } ?>
				</ul>
			</div>
		</li>
		
		<li class="page-item n1 liWidthMa" style="width: 95px;">
			<a href="#" title="Integrantes">
				<span class="menu-mid" style="width: 90px;">
					<span class="menu-caption" style="width: 90px;"><?php echo $arrayMenu['Integrantes']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
					<?php foreach ($arrayMenu['Integrantes']['SubMenu'] as $row) { ?>
					<li class="page-item">
						<a href="<?=$row['Link']?>">
							<span class="menu-mid">
								<span class="menu-caption"><?=$row['Nombre']?></span>
							</span>
						</a></li>
					<?php } ?>
				</ul>
			</div>
		</li>
		<li class="page-item n1 liWidthMa" style="width: 95px;">
			<a href="#" title="<?php echo $arrayMenu['OrganosDirectivos']['Nombre']; ?>">
				<span class="menu-mid" style="width: 90px;">
					<span class="menu-caption" style="width: 90px;"><?php echo $arrayMenu['OrganosDirectivos']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['OrganosDirectivos']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div>
		</li>
		<li class="page-item n1">
			<a href="<?php echo $arrayMenu['belisarioDominguez']['Link']; ?>" title="<?php echo $arrayMenu['belisarioDominguez']['Nombre']; ?>" target="_blank">
				<span class="menu-mid">
					<span class="menu-caption"><?php echo $arrayMenu['belisarioDominguez']['Nombre']; ?></span>
				</span>
				
			</a>
		</li>
		<li class="page-item n1 liWidthMa" style="width: 115px;">
			<a href="#" title="<?php echo $arrayMenu['gruposParlamentarios']['Nombre']; ?>">
				<span class="menu-mid">
					<span class="menu-caption"><?php echo $arrayMenu['gruposParlamentarios']['Nombre']; ?></span>
				</span>
			</a> 
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['gruposParlamentarios']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div>
		</li>
		<li class="page-item n1 liWidthMa"  style="width: 95px;">
			<a href="#" title="<?php echo $arrayMenu['Comisiones']['Nombre']; ?>">
				<span class="menu-mid" style="width: 90px;">
					<span class="menu-caption" style="width: 90px;"><?php echo $arrayMenu['Comisiones']['Nombre']; ?></span>
				</span>
			</a> 
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['Comisiones']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div>
		</li>
		<li class="page-item n1 liWidthMa" style="width: 95px;">
			<a href="#" title="<?php echo $arrayMenu['organosTecnicos']['Nombre']; ?>">
				<span class="menu-mid" style="width: 85px;">
					<span class="menu-caption" style="width: 85px;"><?php echo $arrayMenu['organosTecnicos']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['organosTecnicos']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div>
		</li>
		<li class="page-item n1 liWidthMa" style="width: 115px;">
			<a href="#" title="<?php echo $arrayMenu['infoParlamentaria']['Nombre']; ?>">
				<span class="menu-mid" style="width: 115px;">
					<span class="menu-caption" style="width: 115px;"><?php echo $arrayMenu['infoParlamentaria']['Nombre']; ?></span>
				</span>
			</a> 
			<div style="" class="liSub">
						<?php  
						$arrayInfo = array_chunk($arrayMenu['infoParlamentaria']['SubMenu'], 10, true);
						//echo "<pre>";print_r($arrayInfo[0]); echo "</pre>";exit;
						echo '<ul style="width: 250px; display: table-cell;">';
						foreach ($arrayInfo[0] as $row) { ?>
							<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php 
						} 
						echo '</ul>';
						echo '<ul style="width: 250px; display: table-cell;">';
						foreach ($arrayInfo[1] as $row) { ?>
							<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php 
						} 
						echo '</ul>';
						?>
						
					
			</div>
		</li>
		<li class="page-item n1 liWidthMa" style="width: 120px;">
			<a href="#" title="<?php echo $arrayMenu['infoAdministrativa']['Nombre']; ?>">
				<span class="menu-mid" style="width: 115px;">
					<span class="menu-caption" style="width: 115px;"><?php echo $arrayMenu['infoAdministrativa']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['infoAdministrativa']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div> 
		</li>
		<li class="page-item n1">
			<a href="#" title="<?php echo $arrayMenu['comunicacionSocial']['Nombre']; ?>">
				<span class="menu-mid">
					<span class="menu-caption"><?php echo $arrayMenu['comunicacionSocial']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['comunicacionSocial']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div> 
		</li>
		<li class="page-item n1">
			<a href="#" title="<?php echo $arrayMenu['transparencia']['Nombre']; ?>">
				<span class="menu-mid">
					<span class="menu-caption"><?php echo $arrayMenu['transparencia']['Nombre']; ?></span>
				</span>
			</a>
			<div style="width: 265px;" class="liSub">
				<ul style="width: 150px; display: table-cell;">
						<?php foreach ($arrayMenu['transparencia']['SubMenu'] as $row) { ?>
						<li class="page-item">
							<a href="<?=$row['Link']?>">
								<span class="menu-mid">
									<span class="menu-caption"><?=$row['Nombre']?></span>
								</span>
							</a></li>
						<?php } ?>
				</ul>
			</div> 
		</li>

	</div>
</div> 
</div> 
 
<?php
	include 'menuSecundario.php';
?>