<?php
include 'menu.php';
?>

<nav class="navbar-header <?php echo $isHome ? "nohomepage" : "nohomepage"; ?>">

	<div class="container-fluid mobile">
		<div class="row">
			<div class="col-1">
				<a href="" class="hamburguess">
					<i class="fa-solid fa-bars fa-xl"></i>
				</a>
			</div>
			<div class="col-11">
				<form action="<?php echo URL; ?>buscador/" method="post">
					<div class="input-group">
						<input placeholder="Búsqueda ..." required="" class="form-control" type="text" name="q" id="q">
						<span class="input-group-append">
							<button type="submit" class="btn form-control" aria-expanded="false">
								<i class="fa fa-search"></i>
							</button>
							<button class="btn form-control" aria-expanded="false">

							</button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-12">
				<div class="social-media-rss">
					<div class="icon-rss">
						<a href="https://www.canaldelcongreso.gob.mx/" target="_blank"><img
								src="<?php echo URL; ?>images/canal_congreso_logo2.png"></a>
					</div>

					<div class="icon-rss">
						<a class="facebook" href="https://www.facebook.com/SenadoMexico" tabindex="81"
							target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
					</div>
					<div class="icon-rss">
						<a class="twitter" href="https://twitter.com/senadomexicano" tabindex="82" target="_blank"> <i
								class="fa-brands fa-twitter"></i> </a>
					</div>
					<div class="icon-rss">
						<a class="youtube" href="https://www.youtube.com/SenadoMexico" tabindex="83" target="_blank"><i
								class="fa-brands fa-youtube"></i> </a>
					</div>
					<div class="icon-rss">
						<a class="instagram" href="https://www.instagram.com/senadomexico/" tabindex="84"
							target="_blank"><i class="fa-brands fa-instagram"></i></a>
					</div>
					<div class="icon-rss">
						<a class="telegram" href="https://t.me/senadomexicano" tabindex="85" target="_blank"><i
								class="fa-brands fa-telegram"></i></a>
					</div>
					<div class="icon-rss">
						<a class="spotify"
							href="https://open.spotify.com/show/5uqzGC5WLRvspeSwB2LOlh?si=R3gUDA4DSJWumLTfF1sePw&amp;nd=1"
							target="_blank"><i class="fa-brands fa-spotify"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid nav-container">
		<ul class="menu-nav">
			<li class="item-menu">
				<a href="<?php echo URL; ?>" class="link-item">
					<span class="icon">
						<i class="fa-solid fa-house-chimney fa-xl"></i>
					</span>
				</a>
			</li>
			<li class="item-menu">
				<a class="link-item" rel="noopener noreferrer">
					<?php echo $arrayMenu['SobreSenado']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['SobreSenado']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['Integrantes']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['Integrantes']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['OrganosDirectivos']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['OrganosDirectivos']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a href="<?php echo $arrayMenu['belisarioDominguez']['Link']; ?>" class="link-item" target="_blank">
					<?php echo $arrayMenu['belisarioDominguez']['Nombre']; ?>
				</a>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['gruposParlamentarios']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['gruposParlamentarios']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>" target="_blank">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['Comisiones']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['Comisiones']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['organosTecnicos']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['organosTecnicos']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>" target="_blank">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['infoParlamentaria']['Nombre']; ?>
				</a>
				<div class="submenu-box multiple">
					<ul class="submenu">
						<?php
						$arrayInfo = array_chunk($arrayMenu['infoParlamentaria']['SubMenu'], 10, true);
						foreach ($arrayInfo[0] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
					<ul class="submenu">
						<?php foreach ($arrayInfo[1] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['infoAdministrativa']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['infoAdministrativa']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['comunicacionSocial']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['comunicacionSocial']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>" target="_blank">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu">
				<a class="link-item">
					<?php echo $arrayMenu['transparencia']['Nombre']; ?>
				</a>
				<div class="submenu-box">
					<ul class="submenu">
						<?php foreach ($arrayMenu['transparencia']['SubMenu'] as $row) { ?>
							<li class="submenu-link-item">
								<a href="<?= $row['Link'] ?>" target="_blank">
									<?= $row['Nombre'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</li>
			<li class="item-menu d-none d-xl-flex text_plugin_container">
				<a id="text_plugin" class="link-item scbasebin screenreader"
					style="background-color: transparent !important;">
					<span class="icon">
						<i class="fa-solid fa-universal-access fa-2xl"></i>
					</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="container-fluid nav-actions">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<a href="https://micrositios.senado.gob.mx/datos_abiertos" class="link-action text-center">Datos
						abiertos</a>
				</div>
				<div class="col-md-2">
					<a href="https://micrositios.senado.gob.mx/accesibilidad" class="link-action">Accesibilidad</a>
				</div>
				<div class="col-md-4 me-auto">
					<form action="<?php echo URL; ?>buscador/" method="post">
						<div class="input-group">
							<input placeholder="Búsqueda ..." required="" class="form-control" type="text" name="q"
								id="q">
							<span class="input-group-append">
								<button type="submit" class="btn form-control" aria-expanded="false">
									<i class="fa fa-search"></i>
								</button>
						</div>
					</form>
					
				</div>
				<div class="col-md-1 me-auto">
				
					<a href="<?php echo URL; ?>diario_de_los_debates"><span>Busqueda Avanzada</span></a>
					
				</div>

				<div class="col-md-3 me-auto">
					<div class="social-media-rss">
						<div class="icon-rss">
							<a href="https://www.canaldelcongreso.gob.mx/" target="_blank"><img
									src="<?php echo URL; ?>images/canal_congreso_logo2.png"></a>
						</div>

						<div class="icon-rss">
							<a class="facebook" href="https://www.facebook.com/SenadoMexico" tabindex="81"
								target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
						</div>
						<div class="icon-rss">
							<a class="twitter" href="https://x.com/senadomexicano" tabindex="82" target="_blank"> <i
									class="fa-brands fa-x-twitter"></i> </a>
						</div>
						<div class="icon-rss">
							<a class="youtube" href="https://www.youtube.com/SenadoMexico" tabindex="83"
								target="_blank"><i class="fa-brands fa-youtube"></i> </a>
						</div>
						<div class="icon-rss">
							<a class="instagram" href="https://www.instagram.com/senadomexico/" tabindex="84"
								target="_blank"><i class="fa-brands fa-instagram"></i></a>
						</div>
						<div class="icon-rss">
							<a class="telegram" href="https://t.me/senadomexicano" tabindex="85" target="_blank"><i
									class="fa-brands fa-telegram"></i></a>
						</div>
						<div class="icon-rss">
							<a class="spotify"
								href="https://open.spotify.com/show/5uqzGC5WLRvspeSwB2LOlh?si=R3gUDA4DSJWumLTfF1sePw&amp;nd=1"
								target="_blank"><i class="fa-brands fa-spotify"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
<?php
// include 'menuSecundario.php';
?>