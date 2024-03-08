<style>
	@media (min-width: 768px){
		.navbar-right .dropdown-left {
			right: auto;
			left: 0;
		}

		.navbar-right .dropdown-right {
			right: 0;
			left: auto;
		}

		.navbar-right .dropdown-center {
			right: -115px;
			left: auto;
		}

	}
</style>

<nav class="navbar navbar-default navbar-principal" data-spy="affix" data-offset-top="197">
	<div class="container" style="max-width: 1300px; width: 100%;">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- <a class="navbar-brand" href="<?php echo URL; ?>">Inicio</a> -->
		</div>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav navbar-right text-center">
				<li style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;"><a href="<?php echo URL; ?>" style="padding: 5px 5px;"><i class="fa fa-home fa-3x"></i></a></li>
				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

						Sobre el<br>Senado
					</a>

					<ul class="dropdown-menu dropdown-left">
						<li><a href="<?php echo URL; ?>sobre_el_senado/que_es_el_senado">¿Qué es el Senado?</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/que_es_la_sesion_plenaria">¿Qué es la Sesión Plenaria?</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/organizacion_y_funcionamiento">Organización y funcionamiento</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/proceso_legislativo">Proceso Legislativo</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/historia">Historia</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/represetacion_territorial">Representación territorial</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/funcion_de_control">Función de control</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/organizacion_tecnica_y_administrativa">Organización técnica y administrativa</a></li>
						<li><a href="<?php echo URL; ?>sobre_el_senado/sede_y_patrimonio_historico">Sede y patrimonio histórico</a></li>
						<li><a href="<?php echo URL; ?>politica_ninos/politica_ninos">Senado para niñas, niños y adolescentes</a></li>
						<li><a href="http://www.senado.gob.mx/AHyML/index.htm">Archivo Histórico y Memoria Legislativa</a></li>
						<li><a href="http://www.senado.gob.mx/BMO/index.htm">Biblioteca "Melchor Ocampo"</a></li>
						<li><a href="<?php echo URL; ?>informacion_historica">Información de Legislaturas Anteriores</a></li>
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 10px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Integrantes
					</a>

					<ul class="dropdown-menu dropdown-left">
						<li><a href="<?php echo URL; ?>senadores/que_es_un_senador">¿Qué es un Senador?</a></li>
						<li><a href="<?php echo URL; ?>senadores/integracion">Integraci&oacute;n</a></li>
						<li><a href="<?php echo URL; ?>senadores/por_orden_alfabetico">Por orden alfabético</a></li>
						<li><a href="<?php echo URL; ?>senadores/por_entidad_federativa">Por Entidad Federativa</a></li>
						<li><a href="<?php echo URL; ?>senadoras">Senadoras</a></li>
						<li><a href="<?php echo URL; ?>senadores">Senadores</a></li>
						<li><a href="<?php echo URL; ?>senadores/por_grupo_parlamentario">Por Grupo Parlamentario</a></li>
						<li><a href="<?php echo URL; ?>senadores/sin_grupo_parlamentario">Sin Grupo Parlamentario</a></li>
						<li><a href="<?php echo URL; ?>senadores/por_representacion_proporcional">Por Representación proporcional</a></li>
						<li><a href="<?php echo URL; ?>senadores/que_ejercieron_el_cargo">Que ejercieron el cargo</a></li>
						<li><a href="<?php echo URL; ?>senadores/senadores_con_licencia">Con licencia</a></li>
						<li><a href="<?php echo URL; ?>senadores/informes_de_viajes_oficiales">Informes de viajes oficiales</a></li>
						<li><a href="<?php echo URL; ?>senadores/directorio_de_senadores">Directorio</a></li>
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Órganos<br>Directivos
					</a>

					<ul class="dropdown-menu dropdown-left">
						<li><a href="<?php echo URL; ?>organos_directivos/que_son_los_organos_directivos">¿Qué son los órganos directivos?</a></li>
						<li><a href="<?php echo URL; ?>mesa_directiva/">Mesa Directiva</a></li>
						<li><a href="<?php echo URL; ?>junta_de_coordinacion_politica/">Junta de Coordinación Política</a></li>
					</ul>
				</li>

				<li style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;"><a href="http://www.ibd.senado.gob.mx/" target="_blank">Instituto<br>Belisario Domínguez</a></li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Grupos<br>Parlamentarios
					</a>

					<ul class="dropdown-menu dropdown-center">
						<!-- <li><a href="<?php echo URL; ?>que_son_los_grupos_parlamentarios">¿Qué son los grupos parlamentarios?</a></li> -->
                        <li><a href="http://morena.senado.gob.mx" target="_blank">Movimiento Regeneración Nacional (MORENA)</a></li>
                        <li><a href="http://www.pan.senado.gob.mx" target="_blank">Partido Acción Nacional (PAN)</a></li>
                        <li><a href="http://pri.senado.gob.mx" target="_blank">Partido Revolucionario Institucional (PRI)</a></li>
                        <li><a href="http://www.senadoresciudadanos.mx" target="_blank">Movimiento Ciudadano (MC)</a></li>
                        <li><a href="http://prd.senado.gob.mx" target="_blank">Partido de la Revolución Democrática (PRD)</a></li>
						<!--<li><a href="http://www.senado.gob.mx/64/senadores/grupo_parlamentario/PRD" target="_blank">Partido de la Revolución Democrática (PRD)</a></li>-->
                        <!-- <li><a href="#" data-toggle="modal" data-target="#PT">Partido del Trabajo (PT)</a></li> -->
                        <li><a href="http://pt.senado.gob.mx/">Partido del Trabajo (PT)</a></li>
                        <li><a href="http://www.partidoverde.org.mx/prensa/senado" target="_blank">Partido Verde Ecologista de México (PVEM)</a></li>					
						<!-- <li><a href="http://www.pvem.senado.gob.mx/pvemsenado.html" target="_blank">Partido Verde Ecologista de México (PVEM)</a></li>	-->
                        <!-- <li><a href="#" data-toggle="modal" data-target="#PES">Partido Encuentro Social (PES)</a></li> -->
                        <li><a href="http://pes.senado.gob.mx/">Partido Encuentro Social (PES)</a></li>
						<!-- <li><a href="<?php echo URL; ?>senadores/sin_grupo_parlamentario">Sin Grupo (SG)</a></li>-->
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 10px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Comisiones
					</a>

					<ul class="dropdown-menu dropdown-right">
						<li><a href="<?php echo URL; ?>comisiones/que_son_las_comisiones">¿Qué son las Comisiones?</a></li>
						<li><a href="<?php echo URL; ?>comisiones/directorios_de_comisiones">Directorio de Comisiones</a></li>
						<li><a href="<?php echo URL; ?>comisiones/ordinarias">Ordinarias</a></li>
                        <li><a href="<?php echo URL; ?>comisiones/bicamarales">Bicamarales</a></li>
                        <li><a href="<?php echo URL; ?>comisiones/especiales">Especiales</a></li>
                        <li><a href="<?php echo URL; ?>pdfs/documentos_apoyo/64-65/LXIV/Manual_de_Comisiones.pdf">Manual de Comisiones</a></li>
						<li><a href="http://comisiones.senado.gob.mx/calendario/">Calendario de Eventos</a></li>
						<!--<li><a href="<?php echo URL; ?>comisiones/comites">Comités</a></li>-->
						<!--<li><a href="http://www.parlatinomexico.senado.gob.mx" target="_blank">Parlamento Latinoamericano y Caribeño</a></li>-->
                        <li><a href="<?php echo URL; ?>comisiones/historico" target="_blank">Información correspondiente a las LXII y LXIII Legislaturas</a></li>
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Órganos<br>Técnicos
					</a>

					<ul class="dropdown-menu dropdown-right">
						<li><a href="http://centrogilbertobosques.senado.gob.mx" target="_blank">Centro de Estudios Internacionales "Gilberto Bosques"</a></li>
						<li><a href="http://www.cecafp.senado.gob.mx:8080/elearning/inicio.jsp" target="_blank">Centro de Capacitación y Formación Permanente</a></li>
						<li><a href="<?php echo URL; ?>contraloria">Contraloría Interna</a></li>				
						<li><a href="http://transparencia.senado.gob.mx" target="_blank">Transparencia</a></li>
						<li><a href="http://unidadgenero.senado.gob.mx" target="_blank">Unidad T&eacute;cnica para la Igualdad de G&eacute;nero</a></li>
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Informaci&oacute;n<br>Parlamentaria
					</a>

					<ul class="dropdown-menu dropdown-right">
						<li><a href="http://infosen.senado.gob.mx/infosen64/index.php">Iniciativas,<br />Minutas, Instrumentos internacionales <br />y proposiciones</a></li>
						<!--<li><a href="http://infosen.senado.gob.mx/fichas_tecnicas/index.php?w=1">Iniciativas</a></li>
						<li><a href="http://infosen.senado.gob.mx/fichas_tecnicas/index.php?w=8">Puntos de Acuerdo</a></li>
						<li><a href="http://infosen.senado.gob.mx/fichas_tecnicas/index.php?w=4">Proyectos de Decreto</a></li>-->
						<li><a href="<?php echo URL; ?>asistencias">Asistencias</a></li>
						<li><a href="<?php echo URL; ?>votaciones">Votaciones</a></li>
						<li><a href="<?php echo URL; ?>senadores/que_es_un_senador">Integrantes</a></li>
						<li><a href="<?php echo URL; ?>comisiones/que_son_las_comisiones">Comisiones</a></li>
						<li><a href="<?php echo URL; ?>gaceta_del_senado">Gaceta del Senado</a></li>
						<li><a href="<?php echo URL; ?>gaceta_comision_permanente">Gaceta de la Comisión Permanente</a></li>
						<li><a href="<?php echo URL; ?>orden_del_dia">Orden del d&iacute;a</a></li>
						<li><a href="<?php echo URL; ?>sintesis_de_la_sesion">S&iacute;ntesis de la Sesi&oacute;n</a></li>
						<li><a href="<?php echo URL; ?>version_estenografica">Versi&oacute;n Estenogr&aacute;fica</a></li>
						<li><a href="<?php echo URL; ?>diario_de_los_debates">Diario de los Debates</a></li>

                       <!-- <li><a href="http://sitl.diputados.gob.mx/LXIV_leg/permanente1r1a_lxiv.html">Comisi&oacute;n Permanente</a></li> -->
                        <li><a href="https://www.senado.gob.mx/permanente/CP64-2APPR/">Comisi&oacute;n Permanente</a></li>
						<li><a href="<?php echo URL; ?>documentos_de_apoyo_parlamentario">Documentos de Apoyo Parlamentario</a></li>
						<li><a href="<?php echo URL; ?>documentos_de_apoyo_parlamentario#Marco_Juridico">Marco Jur&iacute;dico</a></li>
						<li><a href="<?php echo URL; ?>consultoria">Consultor&iacute;a Jur&iacute;dica Legislativa</a></li>
						<li><a href="<?php echo URL; ?>seguimiento_a_reformas_constitucionales">Seguimiento a Reformas Constitucionales</a></li>
						<li><a href="<?php echo URL; ?>sesiones">Sesiones</a></li>
						<!--<li><a href="<?php echo URL; ?>sinopsis_legislativa">Sinopsis Legislativa</a></li>-->
						<li><a href="<?php echo URL; ?>documentos_de_apoyo_parlamentario#Sinopsis">Sinopsis Legislativa</a></li>
						<li><a href="<?php echo URL; ?>sesion_al_minuto">Sesión al minuto</a></li>
						<!--<li><a href="http://comunicacion.senado.gob.mx/index.php/en-vivo.html">Transmisión en vivo</a></li>-->
						<li><a href="<?php echo URL; ?>tratados_internacionales_aprobados">Tratados Internacionales aprobados</a></li>
						<li><a href="<?php echo URL; ?>legislacion_aprobada">Legislaci&oacute;n Aprobada</a></li>
						<li><a href="<?php echo URL; ?>respuestas_a_proposiciones_aprobadas">Respuestas a Proposiciones Aprobadas</a></li>
						<li><a href="http://infosen.senado.gob.mx/formatos_INAI-INFOSEN/" target="_blank">Transparencia Parlamentaria</a></li>
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Informaci&oacute;n<br>Administrativa
					</a>

					<ul class="dropdown-menu dropdown-right">
						<li><a href="<?php echo URL; ?>administracion/organizacion">Organización</a></li>
						<li><a href="<?php echo URL; ?>administracion/rec_humanos">Recursos humanos</a></li>
						<li><a href="<?php echo URL; ?>administracion/rec_materiales">Recursos materiales</a></li>
						<li><a href="<?php echo URL; ?>administracion/rec_financieros">Recursos financieros</a></li>
						<li><a href="<?php echo URL; ?>administracion/info_relevante">Información Relevante</a></li>
						<li><a href="<?php echo URL; ?>administracion/estado_financiero">Estado de situación financiera</a></li>
						<li><a href="<?php echo URL; ?>administracion/etica_conducta">Código de Ética y Conducta</a></li>
						<li><a href="http://comunicacion.senado.gob.mx/index.php/en-vivo.html" target="_blank">Transmisi&oacute;n en vivo</a></li>
						<li><a href="<?php echo URL; ?>administracion/licitaciones">Licitaciones públicas</a></li>
						<li><a href="http://sedeactual.senado.gob.mx" target="_blank">Transparencia y Rendición de Cuentas Sede Actual</a></li>
						<!--<li><a href="<?php echo URL; ?>administracion/contratos_relevantes">Contratos Relevantes</a></li>-->
					</ul>
				</li>

				<li class="dropdown" style="border-right: 1px solid; border-color: rgba(255, 255, 255, 0.3); padding: 0px 0px;">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						Comunicaci&oacute;n<br>Social
					</a>

					<ul class="dropdown-menu dropdown-right">
						<li><a href="http://comunicacion.senado.gob.mx" target="_blank">Portal Informativo</a></li>
						<li><a href="http://comunicacion.senado.gob.mx/index.php/informacion/boletines.html" target="_blank">Información</a></li>
						<li><a href="http://comunicacion.senado.gob.mx/index.php/multimedia/fotos.html" target="_blank">Multimedia</a></li>
						<li><a href="http://comunicacion.senado.gob.mx/index.php/en-vivo.html" target="_blank">Sesión en Vivo</a></li>
						<li><a href="http://comunicacion.senado.gob.mx/index.php/sintesis.html" target="_blank">Síntesis</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!-- Modales de la Asistencia -->
<div class="modal fade" id="grupoMorena" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Movimiento de Regeneración Nacional (MORENA)</h4>
			</div>
			<div class="modal-body text-justify">
            
            <table>
            <tr valign="top">
            <td width="30%"><img src="<?php echo URL;?>images/grupos_parlamentarios/logo_morena.jpg" width="100%"></td>
            <td width="70%"><p style=" font-size: 25px;">La información del micrositio es generada por el Grupo Parlamentario, en el momento que se encuentre disponible el enlace será habilitado.</p></td>
            </tr>
            </table>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>
<div class="modal fade" id="movimientoCiudadano" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Movimiento Ciudadano (MC)</h4>
			</div>
			<div class="modal-body text-justify">
            
            <table>
            <tr valign="top">
            <td width="30%"><img src="<?php echo URL;?>images/grupos_parlamentarios/n5Y36xTg_400x400.jpg" width="100%"></td>
            <td width="70%"><p style=" font-size: 25px; padding:10px;">La información del micrositio es generada por el Grupo Parlamentario, en el momento que se encuentre disponible el enlace será habilitado.</p></td>
            </tr>
            </table>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>
<div class="modal fade" id="PES" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Partido Encuentro Social (PES)</h4>
			</div>
			<div class="modal-body text-justify">
            
            <table>
            <tr valign="top">
            <td width="30%"><img src="<?php echo URL;?>images/grupos_parlamentarios/pes.png" width="100%"></td>
            <td width="70%"><p style=" font-size: 25px; padding:10px;">La información del micrositio es generada por el Grupo Parlamentario, en el momento que se encuentre disponible el enlace será habilitado.</p></td>
            </tr>
            </table>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="PT" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header text-center">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Partido del Trabajo (PT)</h4>
			</div>
			<div class="modal-body text-justify">
            
            <table>
            <tr valign="top">
            <td width="30%"><img src="<?php echo URL;?>images/grupos_parlamentarios/pt.png" width="100%"></td>
            <td width="70%"><p style=" font-size: 25px; padding:10px;">La información del micrositio es generada por el Grupo Parlamentario, en el momento que se encuentre disponible el enlace será habilitado.</p></td>
            </tr>
            </table>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>
