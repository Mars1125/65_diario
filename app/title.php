<?php
	switch ($watch) {
		case 'eleccion_consecutiva':
			echo '<title>Elección consecutiva para Senadoras y Senadores proceso electoral 2023-2024</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Elección consecutiva para Senadoras y Senadores proceso electoral 2023-2024">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Elección consecutiva para Senadoras y Senadores<br>proceso electoral 2023-2024';
			break;

		case 'preseas_otorgadas_por_el_senado':
			echo '<title>Preseas otorgadas por en Senado</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Preseas otorgadas por en Senado">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Preseas otorgadas por en Senado';
			break;
		case 'convocatorias_y_comunicaciones_Organos':
			echo '<title>Preseas otorgadas por en Senado</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Convocatorias y comunicaciones de órganos de gobierno">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Convocatorias y comunicaciones de órganos de gobierno';
			break;
		case 'sobre_el_senado':
			switch ($var1) {
				case 'que_es_el_senado':
					echo '<title>¿Qué es el Senado?</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="¿Qué es el Senado?">'."\n";
					echo "\t".'<meta property="og:description" content="La Cámara de Senadores se integra por 128 senadores, los cuales son elegidos de entre las fórmulas de candidatos registrados por cada partido político en cada uno de los estados y el Distrito Federal.">'."\n";
					echo "\t".'<meta name="description" content="La Cámara de Senadores se integra por 128 senadores, los cuales son elegidos de entre las fórmulas de candidatos registrados por cada partido político en cada uno de los estados y el Distrito Federal.">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = '¿Qué es el Senado?';
					break;
				case 'que_es_la_sesion_plenaria':
					echo '<title>¿Qué es la Sesión Plenaria?</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="¿Qué es la Sesión Plenaria?">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = '¿Qué es la Sesión Plenaria?';
					break;
				case 'organizacion_y_funcionamiento':
					echo '<title>Organización y funcionamiento</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Organizació y funcionamiento">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Organización y funcionamiento';
					break;
				case 'proceso_legislativo':
					echo '<title>Proceso legislativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Proceso legislativo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Proceso legislativo';
					break;
				case 'historia':
					echo '<title>Breve historia</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Breve historia">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Breve historia';
					break;
				case 'represetacion_territorial':
					echo '<title>Representación territorial</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Representación territorial">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Representación territorial';
					break;
				case 'funcion_de_control':
					echo '<title>Función de control</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Función de control">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Función de control';
					break;
				case 'organizacion_tecnica_y_administrativa':
					echo '<title>Organización Técnica y Administrativa</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Organización Técnica y Administrativa">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Organización Técnica y Administrativa';
					break;
				case 'sede_y_patrimonio_historico':
					echo '<title>Sede y Patrimonio Histórico</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Sede y Patrimonio Histórico">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Sede y Patrimonio Histórico';
					break;
			}
			break;
		case 'informacion_historica':
			echo '<title>Información de Legislaturas Anteriores</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Información de Legislaturas Anteriores">'."\n";
			echo "\t".'<meta property="og:description" content="Es el archivo histórico de información de los trabajos legislativos de las legislaturas LVIII, LIX, LX , LXI y LXII, donde podrá consultar listados de integrantes de los Grupos Parlamentarios, la integración de los Órganos de Gobierno, los asuntos presentados por los Senadores, registros de la Gaceta del Senado, Versiones Estenográficas, Diario de los Debates y publicaciones institucionales.">'."\n";
			echo "\t".'<meta name="description" content="Es el archivo histórico de información de los trabajos legislativos de las legislaturas LVIII, LIX, LX , LXI y LXII, donde podrá consultar listados de integrantes de los Grupos Parlamentarios, la integración de los Órganos de Gobierno, los asuntos presentados por los Senadores, registros de la Gaceta del Senado, Versiones Estenográficas, Diario de los Debates y publicaciones institucionales.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Información de Legislaturas Anteriores';
			break;
		case 'senadores':
			switch ($var1) {
				case 'que_es_un_senador':
					echo '<title>¿Qué es un Senador?</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="¿Qué es un Senador?">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = '¿Qué es un Senador?';
					break;
				case 'por_orden_alfabetico':
					echo '<title>Por orden alfabético</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Por orden alfabético">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Por orden alfabético';
					break;
				case 'por_entidad_federativa':
					echo '<title>Por Entidad Federativa</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Por Entidad Federativa">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Por Entidad Federativa';
					break;
				case 'directorio_de_senadores':
					echo '<title>Directorio</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Directorio">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Directorio';
					break;
				case 'por_grupo_parlamentario':
					echo '<title>Por Grupo Parlamentario</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Por Grupo Parlamentario">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Por Grupo Parlamentario';
					break;
				case 'sin_grupo_parlamentario':
					echo '<title>Sin Grupo Parlamentario</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Sin Grupo Parlamentario">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Sin Grupo Parlamentario';
					break;
				case 'grupo_parlamentario':
					switch($var2) {
						case "PRI"; $tituloSeccion = "Grupo Parlamentario del Partido Revolucionario Institucional"; break;
						case "PAN"; $tituloSeccion = "Grupo Parlamentario del Partido Acción Nacional"; break;
						case "PRD"; $tituloSeccion = "Grupo Parlamentario del Partido de la Revolución Democrática"; break;
						case "PVEM"; $tituloSeccion = "Grupo Parlamentario del Partido Verde Ecologista de México"; break;
						case "PT"; $tituloSeccion = "Grupo Parlamentario del Partido del Trabajo"; break;
						case "MC"; $tituloSeccion = "Movimiento Ciudadano"; break;
						case "SG"; $tituloSeccion = "Sin Grupo"; break;
						case "NA"; $tituloSeccion = "Grupo Parlamentario del Partido Nueva Alianza"; break;
						case "PES"; $tituloSeccion = "Grupo Parlamentario del Partido Encuentro Social"; break;
						case "morena"; $tituloSeccion = "Movimiento Regeneración Nacional"; break;
					}
					echo '<title>'.$tituloSeccion.'</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="'.$tituloSeccion.'">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = $tituloSeccion;
					break;
				case 'por_principio_de_eleccion':
					echo '<title>Por principio de elección</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadoras y Senadores por Representación Proporcional">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Por principio de elección';
					break;
				case 'por_representacion_proporcional':
					echo '<title>Senadoras y Senadores por Representación Proporcional</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadoras y Senadores por Representación Proporcional">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Senadoras y Senadores por Representación Proporcional';
					break;
				case 'que_han_estado_en_funciones':
					echo '<title>Que han estado en funciones</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadoras y Senadores que ejercieron el cargo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Que han estado en funciones';
					break;
				case 'que_ejercieron_el_cargo':
					echo '<title>Senadoras y Senadores que ejercieron el cargo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadoras y Senadores que ejercieron el cargo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Senadoras y Senadores que ejercieron el cargo';
					break;
				case 'senadores_con_licencia':
					echo '<title>Senadoras y Senadores con licencia</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadoras y Senadores con licencia">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Senadoras y Senadores con licencia';
					break;
				case 'informes_de_viajes_oficiales':
					echo '<title>Informes de comisiones oficiales</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Informes de comisiones oficiales">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Informes de comisiones oficiales';
					break;
				case 'integracion':
					echo '<title>Integración</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Integracion">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Integración';
					break;

				case 'buscador':
					echo '<title>Buscador de Senadores</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Buscador de Senadores">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Buscador de Senadores';
					break;

				default:
					echo '<title>Senadores</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Senadores">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Senadores';
					break;
			}
			break;
		case 'administracion':
			echo '<title>Senadoras</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Senadoras">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Información Administrativa';
			break;
		case 'senadoras':
			echo '<title>Senadoras / Senadoras</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Senadoras">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Senadoras / Senadoras';
			break;
		case 'senador':
			include 'senadores/functions/functionInformacionSenador.php';
			echo '<title>'.nameSenadorID($var1, $conecta_base).'</title>'."\n";
				echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
				echo "\t".'<meta property="og:title" content="'.nameSenadorID($var1, $conecta_base).'">'."\n";
				echo "\t".'<meta property="og:description" content="">'."\n";
				echo "\t".'<meta property="og:description" content="">'."\n";
				echo "\t".'<meta name="description" content="">'."\n";
				echo "\t".'<meta name="keywords" content="">'."\n";
				$titleSeccion = nameSenadorID($var1, $conecta_base);
			break;
		case 'intervenciones':
			include 'intervenciones/functionsIntervenciones.php';
			include 'senadores/functions/functionInformacionSenador.php';
			if (strlen($var1) == 10) {
				$fechaTitulo = str_replace ('_', '-', $var1);
				echo '<title>Intervenciones del día '.viewDate($fechaTitulo).'</title>'."\n";
				echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
				echo "\t".'<meta property="og:title" content="Intervenciones del día '.viewDate($fechaTitulo).'">'."\n";
				echo "\t".'<meta property="og:description" content="">'."\n";
				echo "\t".'<meta property="og:description" content="">'."\n";
				echo "\t".'<meta name="description" content="">'."\n";
				echo "\t".'<meta name="keywords" content="">'."\n";
				$titleSeccion = 'Intervenciones del día '.viewDate($fechaTitulo);
			} else {
				switch ($var2) {
					case 'por_periodo':
						echo '<title>Intervenciones por Periodo '.nameSenadorIntervencion($var1, $conecta_base).'</title>'."\n";
						echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
						echo "\t".'<meta property="og:title" content="Intervenciones por Periodo '.nameSenadorIntervencion($var1, $conecta_base).'">'."\n";
						echo "\t".'<meta property="og:description" content="">'."\n";
						echo "\t".'<meta property="og:description" content="">'."\n";
						echo "\t".'<meta name="description" content="">'."\n";
						echo "\t".'<meta name="keywords" content="">'."\n";
						$titleSeccion = 'Intervenciones por Periodo '.nameSenadorIntervencion($var1, $conecta_base);
						break;

					default:
						if ($var2 != NULL) {
							echo '<title>Intervención '.nameSenadorIntervencion($var1, $conecta_base).'</title>'."\n";
							echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
							echo "\t".'<meta property="og:title" content="Intervención '.nameSenadorIntervencion($var1, $conecta_base).'">'."\n";
							echo "\t".'<meta property="og:description" content="">'."\n";
							echo "\t".'<meta name="description" content="">'."\n";
							echo "\t".'<meta name="keywords" content="">'."\n";
							//$titleSeccion = 'Intervención '.nameSenadorIntervencion($var1, $conecta_base);
							$titleSeccion = 'Intervenciones';
						} else {
							echo '<title>Intervenciones '.nameSenadorIntervencion($var1, $conecta_base).'</title>'."\n";
							echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
							echo "\t".'<meta property="og:title" content="Intervenciones '.nameSenadorIntervencion($var1, $conecta_base).'">'."\n";
							echo "\t".'<meta property="og:description" content="">'."\n";
							echo "\t".'<meta name="description" content="">'."\n";
							echo "\t".'<meta name="keywords" content="">'."\n";
							//$titleSeccion = 'Intervenciones '.nameSenadorIntervencion($var1, $conecta_base);
							$titleSeccion = 'Intervenciones';
						}
						break;
				}
			}			
			break;
		case 'organos_directivos':
			echo '<title>¿Qué son los órganos directivos?</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="¿Qué son los órganos directivos?">'."\n";
			echo "\t".'<meta property="og:description" content="Son las instancias de dirección de la Cámara de Senadores que tienen a su cargo funciones de control, regulación, organización, supervisión y conducción orientadas al óptimo desempeño del trabajo de los legisladores y de sus áreas de apoyo. En la Cámara de Senadores estas instancias son: Mesa Directiva y Junta de Coordinación Política.">'."\n";
			echo "\t".'<meta name="description" content="Son las instancias de dirección de la Cámara de Senadores que tienen a su cargo funciones de control, regulación, organización, supervisión y conducción orientadas al óptimo desempeño del trabajo de los legisladores y de sus áreas de apoyo. En la Cámara de Senadores estas instancias son: Mesa Directiva y Junta de Coordinación Política.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = '¿Qué son los órganos directivos?';
			break;
		case 'mesa_directiva':
			switch ($var1) {
				case 'integrantes':
					echo '<title>Integrantes de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Integrantes de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Integrantes de la Mesa Directiva';
					break;
				case 'antecedentes':
					echo '<title>Antecedentes de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Antecedentes de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Antecedentes de la Mesa Directiva';
					break;
				case 'facultades':
					echo '<title>Facultades de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Facultades de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Facultades de la Mesa Directiva';
					break;
				case 'acuerdos':
					echo '<title>Acuerdos de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Acuerdos de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Acuerdos de la Mesa Directiva';
					break;
				case 'informes':
					echo '<title>Infomres de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Infomres de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Infomres de la Mesa Directiva';
					break;
				
				default:
					echo '<title>Integrantes de la Mesa Directiva</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Integrantes de la Mesa Directiva">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Integrantes de la Mesa Directiva';
					break;
			}
			break;
		case 'junta_de_coordinacion_politica':
			switch ($var1) {
				case 'integrantes':
					echo '<title>Integrantes de la Junta de Coordinación Política</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Integrantes de la Junta de Coordinación Política">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Integrantes de la Junta de Coordinación Política';
					break;
				case 'antecedentes':
					echo '<title>Antecedentes de la Junta de Coordinación Política</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Antecedentes de la Junta de Coordinación Política">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Antecedentes de la Junta de Coordinación Política';
					break;
				case 'facultades':
					echo '<title>Facultades de la Junta de Coordinación Política</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Facultades de la Junta de Coordinación Política">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Facultades de la Junta de Coordinación Política';
					break;
				case 'acuerdos':
					echo '<title>Acuerdos de la Junta de Coordinación Política</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Acuerdos de la Junta de Coordinación Política">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Acuerdos de la Junta de Coordinación Política';
					break;
				
				default:
					echo '<title>Integrantes de la Junta de Coordinación Política</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Integrantes de la Junta de Coordinación Política">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Integrantes de la Junta de Coordinación Política';
					break;
			}
			break;
		case 'que_son_los_grupos_parlamentarios':
			echo '<title>¿Qué son los grupos parlamentarios?</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="¿Qué son los grupos parlamentarios?">'."\n";
			echo "\t".'<meta property="og:description" content="Los grupos parlamentarios son la forma de organización que podrán adoptar los senadores con igual afiliación de partido, para realizar las tareas específicas en el Senado y coadyuvar al mejor desarrollo del proceso legislativo. Sólo los senadores de la misma afiliación de partido pueden integrar un grupo parlamentario y para ello se requiere un mínimo de cinco senadores. Las disposiciones reglamentarias establecen que sólo puede existir un grupo parlamentario por cada partido político representado en la Cámara.">'."\n";
			echo "\t".'<meta name="description" content="Los grupos parlamentarios son la forma de organización que podrán adoptar los senadores con igual afiliación de partido, para realizar las tareas específicas en el Senado y coadyuvar al mejor desarrollo del proceso legislativo. Sólo los senadores de la misma afiliación de partido pueden integrar un grupo parlamentario y para ello se requiere un mínimo de cinco senadores. Las disposiciones reglamentarias establecen que sólo puede existir un grupo parlamentario por cada partido político representado en la Cámara.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = '¿Qué son los grupos parlamentarios?';
			break;
		case 'comisiones':
			switch ($var1) {
				case 'que_son_las_comisiones':
					echo '<title>¿Qué son las Comisiones?</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="¿Qué son las Comisiones?">'."\n";
					echo "\t".'<meta property="og:description" content="Las comisiones son los órganos técnicos encargados del análisis de los asuntos que se les turnan. Se integran por al menos tres y no más de quince senadores, incluidos el presidente y dos secretarios, los cuales deben ser de distintos grupos parlamentarios. Para la integración de estos órganos, la Junta de Coordinación Política es la facultada para proponer al Pleno, vía la Mesa Directiva, el acuerdo correspondiente con asignación de cargos para la respectiva Junta Directiva.">'."\n";
					echo "\t".'<meta name="description" content="Las comisiones son los órganos técnicos encargados del análisis de los asuntos que se les turnan. Se integran por al menos tres y no más de quince senadores, incluidos el presidente y dos secretarios, los cuales deben ser de distintos grupos parlamentarios. Para la integración de estos órganos, la Junta de Coordinación Política es la facultada para proponer al Pleno, vía la Mesa Directiva, el acuerdo correspondiente con asignación de cargos para la respectiva Junta Directiva.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = '¿Qué son las Comisiones?';
					break;
				case 'directorios_de_comisiones':
					echo '<title>Directorio de Comisiones</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Directorio de Comisiones">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Directorio de Comisiones';
					break;
				case 'ordinarias':
					echo '<title>Comisiones Ordinarias</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Comisiones Ordinarias">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Comisiones Ordinarias';
					break;
				case 'especiales':
					echo '<title>Comisiones Especiales</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Comisiones Especiales">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Comisiones Especiales';
					break;
				case 'bicamarales':
					echo '<title>Comisiones Bicamarales</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Comisiones Bicamarales">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Comisiones Bicamarales';
					break;
				case 'comites':
					echo '<title>Comités</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Comités">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Comités';
					break;
				case 'historico':
					echo '<title>Histórico de Comisiones de la LXII y LXIII Legislaturas</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Histórico de Comisiones de la LXII y LXIII Legislaturas">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Histórico de Comisiones de la LXII y LXIII Legislaturas';
					break;
				case 'grupo_tabajo':
					echo '<title>Grupos de Trabajo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Grupos de Trabajo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Grupos de Trabajo';
					break;
			}
			break;
		case 'asistencias':
			include 'asistencias/functions/functionsAsistencias.php';
			include 'senadores/functions/functionInformacionSenador.php';
			switch ($var1) {
				case 'por_periodo':
					echo '<title>Asistencias por Periodo Legislativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Asistencias por Periodo Legislativo">'."\n";
					echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Asistencias por Periodo Legislativo';
					break;
				case 'por_anio':
					echo '<title>Asistencias por A&ntilde;o Legislativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Asistencias por A&ntilde;o Legislativo">'."\n";
					echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Asistencias por A&ntilde;o Legislativo';
					break;
				case 'por_legislatura':
					echo '<title>Asistencias por Legislatura</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Asistencias por Legislatura">'."\n";
					echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Asistencias por Legislatura';
					break;

				default:
					if ($var1 != NULL) {
						if ($var2 != NULL) {
							echo '<title>Asistencias del '.viewDate(str_replace("_", "-", $var1)).'</title>'."\n";
							echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
							echo "\t".'<meta property="og:title" content="Asistencias del '.viewDate(str_replace("_", "-", $var1)).'">'."\n";
							echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
							echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
							echo "\t".'<meta name="keywords" content="">'."\n";
							$titleSeccion = 'Asistencias del '.viewDate(str_replace("_", "-", $var1));
						} else {
							echo '<title>Asistencias '.nameSenador($var1, $conecta_base).'</title>'."\n";
							echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
							echo "\t".'<meta property="og:title" content="Asistencias '.nameSenador($var1, $conecta_base).'">'."\n";
							echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
							echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
							echo "\t".'<meta name="keywords" content="">'."\n";
							//$titleSeccion = 'Asistencias '.nameSenador($var1, $conecta_base).'';
							$titleSeccion = 'Asistencias';
						}
					} else {
						echo '<title>Asistencias</title>'."\n";
						echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
						echo "\t".'<meta property="og:title" content="Asistencias">'."\n";
						echo "\t".'<meta property="og:description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
						echo "\t".'<meta name="description" content="Es un micrositio que permite conocer el registro de asistencias de los senadores a las sesiones de la Cámara de Senadores.">'."\n";
						echo "\t".'<meta name="keywords" content="">'."\n";
						$titleSeccion = 'Asistencias';
					}
					break;
			}
			break;
		case 'votaciones':
			include 'votaciones/functions/functionsVotaciones.php';
			include 'senadores/functions/functionInformacionSenador.php';
			switch ($var1) {
				case 'economicas':
					echo '<title>Votaciones Econ&oacute;micas</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Votaciones Econ&oacute;micas">'."\n";
					echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Votaciones Econ&oacute;micas';
					break;
				case 'por_cedula':
					echo '<title>Votaciones por C&eacute;dula</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Votaciones por C&eacute;dula">'."\n";
					echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Votaciones por C&eacute;dula';
					break;
				case 'por_periodo':
					echo '<title>Votaciones por Periodo Legislativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Votaciones por Periodo Legislativo">'."\n";
					echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Votaciones por Periodo Legislativo';
					break;
				case 'por_anio':
					echo '<title>Votaciones por A&ntilde;o Legislativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Votaciones por A&ntilde;o Legislativo">'."\n";
					echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Votaciones por A&ntilde;o Legislativo';
					break;
				case 'por_legislatura':
					echo '<title>Votaciones por Legislatura</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Votaciones por Legislatura">'."\n";
					echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
					echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Votaciones por Legislatura';
					break;

				default:
					$verifivarFeca = strlen($var1);
					if ($verifivarFeca == 10) {
						$fecha = str_replace("_", "-", $var1);
						echo '<title>Votaciones del '.viewDate($fecha).'</title>'."\n";
						echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
						echo "\t".'<meta property="og:title" content="Votaciones del '.viewDate($fecha)."\n";
						echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="keywords" content="">'."\n";
						$titleSeccion = 'Votaciones del '.viewDate($fecha);
					} elseif($verifivarFeca == 4) {
						echo '<title>Votaciones '.nameSenador($var1, $conecta_base).'</title>'."\n";
						echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
						echo "\t".'<meta property="og:title" content="Votaciones '.nameSenador($var1, $conecta_base).'">'."\n";
						echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="keywords" content="">'."\n";
						//$titleSeccion = 'Votaciones '.nameSenador($var1, $conecta_base).'';
						$titleSeccion = 'Votaciones';
					} else {	
						echo '<title>Votaciones</title>'."\n";
						echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
						echo "\t".'<meta property="og:title" content="Votaciones">'."\n";
						echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
						echo "\t".'<meta name="keywords" content="">'."\n";
						$titleSeccion = 'Votaciones';
					}
					break;
			}
			break;
		case 'votacion':
			include 'votaciones/functions/functionsVotaciones.php';
			echo '<title>Votaciones</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Votaciones">'."\n";
			echo "\t".'<meta property="og:description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
			echo "\t".'<meta name="description" content="El voto es una obligación y un derecho de cada senador, personal e intransferible, por medio del cual decide libremente sobre los asuntos sometidos a su consideración.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Votaciones';
			break;
		case 'gaceta_comision_permanente':
			echo '<title>Gaceta Parlamentaria</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Gaceta Parlamentaria">'."\n";
			echo "\t".'<meta property="og:description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Gaceta Parlamentaria';
			break;
		case 'gaceta_del_senado':
			echo '<title>Gaceta del Senado</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Gaceta del Senado">'."\n";
			echo "\t".'<meta property="og:description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Gaceta del Senado';
			break;
		case 'gaceta':
			echo '<title>Gaceta del Senado</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Gaceta del Senado">'."\n";
			echo "\t".'<meta property="og:description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="description" content="La Gaceta es el órgano informativo  oficial del Senado. Depende de la Mesa Directiva y cuenta con un Consejo Directivo formado por los miembros de la propia Mesa y por los secretarios generales de  Servicios Administrativos y de Servicios Parlamentarios; el Presidente de la Mesa lo es del Consejo.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Gaceta del Senado';
			break;
		case 'orden_del_dia':
			echo '<title>Orden del Día</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Orden del Día">'."\n";
			echo "\t".'<meta property="og:description" content="El Orden del Día de una sesión es el listado formulado por la Mesa con los asuntos que se presentan para el conocimiento, trámite o resolución del Pleno. (Artículo 69 del Reglamento del Senado). El Orden del Día se elabora en reunión previa a cada sesión, a partir de los informes, asuntos, solicitudes y comunicaciones que, en su caso, presentan: (Artículo 69 del Reglamento del Senado)">'."\n";
			echo "\t".'<meta name="description" content="El Orden del Día de una sesión es el listado formulado por la Mesa con los asuntos que se presentan para el conocimiento, trámite o resolución del Pleno. (Artículo 69 del Reglamento del Senado). El Orden del Día se elabora en reunión previa a cada sesión, a partir de los informes, asuntos, solicitudes y comunicaciones que, en su caso, presentan: (Artículo 69 del Reglamento del Senado">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Orden del Día';
			break;
		case 'sintesis_de_la_sesion':
			echo '<title>Síntesis de la Sesión</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Síntesis de la Sesión">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Síntesis de la Sesión';
			break;
		case 'version_estenografica':
			echo '<title>Versiones Estenográficas</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Versiones Estenográficas">'."\n";
			echo "\t".'<meta property="og:description" content="Es la transcripción puntual y fiel de lo expresado verbalmente por los integrantes de la Mesa Directiva o por los oradores en la tribuna en las sesiones del Pleno durante la celebración de los periodos ordinarios, extraordinarios, Comisión Permanente y sesiones solemnes.">'."\n";
			echo "\t".'<meta name="description" content="Es la transcripción puntual y fiel de lo expresado verbalmente por los integrantes de la Mesa Directiva o por los oradores en la tribuna en las sesiones del Pleno durante la celebración de los periodos ordinarios, extraordinarios, Comisión Permanente y sesiones solemnes.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Versiones Estenográficas';
			break;
		case 'diario_de_los_debates':
			echo '<title>Diario de los Debates</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Diario de los Debates">'."\n";
			echo "\t".'<meta property="og:description" content="El Diario de los Debates del Senado tiene su antecedente histórico en la creación del Diario de los Debates de la Cámara de Diputados del Congreso de la Unión en 1867, cuando “la crónica parlamentaria se institucionaliza a través de un medio oficial de los debates y actos parlamentarios.">'."\n";
			echo "\t".'<meta name="description" content="El Diario de los Debates del Senado tiene su antecedente histórico en la creación del Diario de los Debates de la Cámara de Diputados del Congreso de la Unión en 1867, cuando “la crónica parlamentaria se institucionaliza a través de un medio oficial de los debates y actos parlamentarios.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Diario de los Debates';
			break;
		/*case 'documentos_de_apoyo_parlamentario':
			echo '<title>Documentos de Apoyo Parlamentario</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Documentos de Apoyo Parlamentario">'."\n";
			echo "\t".'<meta property="og:description" content="Son documentos de apoyo para el público en general, sobre el trabajo legislativo de los senadores, entre ellos se encuentran la sinopsis legislativa, actividad legislativa, informe de la Mesa Directiva, suplemento, informe de actividades de la Comisión Permanente, marco jurídico, prontuario y glosario de términos legislativos, directorio de senadores, plano de distribución de senadores en el Salón y directorio de áreas administrativas.">'."\n";
			echo "\t".'<meta name="description" content="Son documentos de apoyo para el público en general, sobre el trabajo legislativo de los senadores, entre ellos se encuentran la sinopsis legislativa, actividad legislativa, informe de la Mesa Directiva, suplemento, informe de actividades de la Comisión Permanente, marco jurídico, prontuario y glosario de términos legislativos, directorio de senadores, plano de distribución de senadores en el Salón y directorio de áreas administrativas.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Documentos de Apoyo Parlamentario';
			break;*/

		case 'documentos_de_apoyo_parlamentario':
			switch ($var1) {
				case 'sinopsis': $titleSeccion = 'Sinopsis Legislativa'; break;
				case 'marco': $titleSeccion = 'Marco Jurídico'; break;
				case 'plano': $titleSeccion = 'Plano de distribución de senadores'; break;				
				case 'sinopsisCalendario': $titleSeccion = 'Calendario de Sinopsis'; break;				
				
				default: $titleSeccion = 'Documentos de Apoyo Parlamentario'; break;
			}
			echo '<title>'.$titleSeccion.'</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="'.$titleSeccion.'">'."\n";
			echo "\t".'<meta property="og:description" content="Las sesiones realizadas por el Pleno del Senado pueden ser: a) Ordinarias, b) Extraordinarias, c) Solemnes">'."\n";
			echo "\t".'<meta name="description" content="Las sesiones realizadas por el Pleno del Senado pueden ser: a) Ordinarias, b) Extraordinarias, c) Solemnes">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = $titleSeccion;
			break;



		case 'seguimiento_a_reformas_constitucionales':
			echo '<title>Seguimiento a Reformas Constitucionales</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Seguimiento a Reformas Constitucionales">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Seguimiento a Reformas Constitucionales';
			break;
		case 'sesiones':
			switch ($var1) {
				case 'ordinarias': $titleSeccion = 'Sesiones Plenarias Ordinarias'; break;
				case 'extraordinarias': $titleSeccion = 'Sesiones Plenarias Extraordinarias'; break;
				case 'seolemnes': $titleSeccion = 'Sesiones Plenarias Solemnes'; break;
				
				default: $titleSeccion = 'Sesiones Plenarias'; break;
			}
			echo '<title>'.$titleSeccion.'</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="'.$titleSeccion.'">'."\n";
			echo "\t".'<meta property="og:description" content="Las sesiones realizadas por el Pleno del Senado pueden ser: a) Ordinarias, b) Extraordinarias, c) Solemnes">'."\n";
			echo "\t".'<meta name="description" content="Las sesiones realizadas por el Pleno del Senado pueden ser: a) Ordinarias, b) Extraordinarias, c) Solemnes">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = $titleSeccion;
			break;
		case 'sinopsis_legislativa':
			echo '<title>Sinopsis Legislativa</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Sinopsis Legislativa">'."\n";
			echo "\t".'<meta property="og:description" content="La “Sinopsis Legislativa” es un documento que permite consultar en forma ejecutiva los contenidos de los proyectos de ley o decreto enviados por la Cámara de Diputados (minutas), de las iniciativas y de los dictámenes referidos a la creación o modificación del ordenamiento jurídico nacional. Se emite una sinopsis por sesión que celebre la Cámara de Senadores.">'."\n";
			echo "\t".'<meta name="description" content="La “Sinopsis Legislativa” es un documento que permite consultar en forma ejecutiva los contenidos de los proyectos de ley o decreto enviados por la Cámara de Diputados (minutas), de las iniciativas y de los dictámenes referidos a la creación o modificación del ordenamiento jurídico nacional. Se emite una sinopsis por sesión que celebre la Cámara de Senadores.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Sinopsis Legislativa';
			break;
		case 'sesion_al_minuto':
			echo '<title>Sesión al Minuto</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Sesión al Minuto">'."\n";
			echo "\t".'<meta property="og:description" content="Es un servicio de  infrmación en tiempo real de lo que acontece durante el desarrollo de las Sesiones Ordinarias, Extraordinarias o de la Comisión Permanente. Muestra en forma cronológica el desahogo de los asuntos, trámite y lo acordado por la Asamblea conforme al Orden del Día.">'."\n";
			echo "\t".'<meta name="description" content="Es un servicio de información en tiempo real de lo que acontece durante el desarrollo de las Sesiones Ordinarias, Extraordinarias o de la Comisión Permanente. Muestra en forma cronológica el desahogo de los asuntos, trámite y lo acordado por la Asamblea conforme al Orden del Día.">'."\n";
			echo "\t".'<meta name="keywords" content="Cámara,Senador, Senadores, Congreso, Congreso de la Unión,Leyes Federales, Gaceta, Gaceta del Senado, Gaceta Parlamentaria, Senado, Sesión al Minuto, Poder Legislativo, Legislación, Leyes, Comisiones, Gilberto Bósques, Comunicación Social, Grupo Parlamentario, Belisario Domínguez, Sesión, Salón de Sesiones">'."\n";
			$titleSeccion = 'Sesión al Minuto';
			break;
		case 'tratados_internacionales_aprobados':
			echo '<title>Tratados Internacionales aprobados</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="En este apartado se destaca la participación que el Senado tiene en la aprobación de los tratados internacionales que suscribe el Estado mexicano, a efecto de examinar, en el ámbito de su competencia, el contenido del documento que se somete a su consideración con el objeto de determinar su procedencia de conformidad con las disposiciones de la Constitución.">'."\n";
			echo "\t".'<meta name="description" content="En este apartado se destaca la participación que el Senado tiene en la aprobación de los tratados internacionales que suscribe el Estado mexicano, a efecto de examinar, en el ámbito de su competencia, el contenido del documento que se somete a su consideración con el objeto de determinar su procedencia de conformidad con las disposiciones de la Constitución.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Asuntos Internacionales aprobados';
			break;
		case 'legislacion_aprobada':
			switch ($var1) {
				case 'congreso_de_la_union': echo '<title>Decretos aprobados por el Congreso de la Unión</title>'."\n"; break;
				case 'senado_de_la_republica': echo '<title>Trabajo legislativo de la Cámara de Senadores</title>'."\n"; break;
				
				default: echo '<title>Legislación Aprobada</title>'."\n"; break;
			}			
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Es la sección que muestra los decretos aprobados por las Cámaras de Diputados y Senadores en el ejercicio de su función de crear normas, a través de una serie de pasos ordenados y sucesivos que se denomina procedimiento legislativo. / En esta sección se muestra el trabajo legislativo de la Cámara de Senadores referido esencialmente a la aprobación de los proyectos de decreto que analiza como cámara de origen o revisora, en el procedimiento de la creación normativa que realiza el Congreso de la Unión.">'."\n";
			echo "\t".'<meta name="description" content="Es la sección que muestra los decretos aprobados por las Cámaras de Diputados y Senadores en el ejercicio de su función de crear normas, a través de una serie de pasos ordenados y sucesivos que se denomina procedimiento legislativo. / En esta sección se muestra el trabajo legislativo de la Cámara de Senadores referido esencialmente a la aprobación de los proyectos de decreto que analiza como cámara de origen o revisora, en el procedimiento de la creación normativa que realiza el Congreso de la Unión.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			switch ($var1) {
				case 'congreso_de_la_union': $titleSeccion = 'Decretos aprobados por el Congreso de la Unión'; break;
				case 'senado_de_la_republica': $titleSeccion = 'Trabajo legislativo de la Cámara de Senadores'; break;
				
				default: $titleSeccion = 'Legislación Aprobada'; break;
			}
			break;		
		case 'respuestas_a_proposiciones_aprobadas':
			$verifivarFeca = strlen($var1);
			if($verifivarFeca == 4) {
				include 'senadores/functions/functionInformacionSenador.php';
				echo '<title>Respuestas a Proposiciones Aprobadas '.nameSenador($var1, $conecta_base).'</title>'."\n";
				echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
				echo "\t".'<meta property="og:title" content="Respuestas a Proposiciones Aprobadas '.nameSenador($var1, $conecta_base).'">'."\n";
				echo "\t".'<meta property="og:description" content="El artículo 135 de la Constitución Política de los Estados Unidos Mexicanos establece que el Congreso de la Unión, mediante el voto de las dos terceras partes de los individuos presentes, acuerde las reformas o adiciones a la Constitución y que éstas sean aprobadas por la mayoría de las legislaturas de los estados.">'."\n";
				echo "\t".'<meta name="description" content="El artículo 135 de la Constitución Política de los Estados Unidos Mexicanos establece que el Congreso de la Unión, mediante el voto de las dos terceras partes de los individuos presentes, acuerde las reformas o adiciones a la Constitución y que éstas sean aprobadas por la mayoría de las legislaturas de los estados.">'."\n";
				echo "\t".'<meta name="keywords" content="">'."\n";
				$titleSeccion = 'Respuestas a Proposiciones Aprobadas '.nameSenador($var1, $conecta_base).'';
			} else {	
				echo '<title>Respuestas a Proposiciones Aprobadas</title>'."\n";
				echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
				echo "\t".'<meta property="og:title" content="Respuestas a Proposiciones Aprobadas">'."\n";
				echo "\t".'<meta property="og:description" content="El artículo 135 de la Constitución Política de los Estados Unidos Mexicanos establece que el Congreso de la Unión, mediante el voto de las dos terceras partes de los individuos presentes, acuerde las reformas o adiciones a la Constitución y que éstas sean aprobadas por la mayoría de las legislaturas de los estados.">'."\n";
				echo "\t".'<meta name="description" content="El artículo 135 de la Constitución Política de los Estados Unidos Mexicanos establece que el Congreso de la Unión, mediante el voto de las dos terceras partes de los individuos presentes, acuerde las reformas o adiciones a la Constitución y que éstas sean aprobadas por la mayoría de las legislaturas de los estados.">'."\n";
				echo "\t".'<meta name="keywords" content="">'."\n";
				$titleSeccion = 'Respuestas a Proposiciones Aprobadas';
			}
			break;
		case 'medalla_belisario_dominguez':
			echo '<title>Medalla Belisario Domínguez</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Medalla Belisario Domínguez">'."\n";
			echo "\t".'<meta property="og:description" content="La Medalla Belisario Domínguez del Senado de la República es la Máxima Condecoración que el Senado de México otorga a los ciudadanos más eminentes.">'."\n";
			echo "\t".'<meta name="description" content="La Medalla Belisario Domínguez del Senado de la República es la Máxima Condecoración que el Senado de México otorga a los ciudadanos más eminentes.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Medalla Belisario Domínguez';
			break;
		case 'enlace_institucional':
			echo '<title>Enlace Institucional</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Enlace Institucional">'."\n";
			echo "\t".'<meta property="og:description" content="En esta sección usted encontrará información acerca de la estructura y funciones del gobierno mexicano en sus diversos niveles.">'."\n";
			echo "\t".'<meta name="description" content="En esta sección usted encontrará información acerca de la estructura y funciones del gobierno mexicano en sus diversos niveles.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Enlace Institucional';
			break;
		case 'congresos_estatales':
			echo '<title>Directorio de Congresos Estatales</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Directorio de Congresos Estatales">'."\n";
			echo "\t".'<meta property="og:description" content="El Directorio de Congresos Locales y Asamblea Legislativa del Distrito Federal contiene información sobre el número de diputados que integra cada uno de los cuerpos colegiados.">'."\n";
			echo "\t".'<meta name="description" content="El Directorio de Congresos Locales y Asamblea Legislativa del Distrito Federal contiene información sobre el número de diputados que integra cada uno de los cuerpos colegiados.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Directorio de Congresos Estatales';
			break;
		case 'organos_electorales':
			echo '<title>Directorio de Órganos Electorales</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Directorio de Órganos Electorales">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Directorio de Órganos Electorales';
			break;
		case 'mapa_del_sitio':
			echo '<title>Mapa del Sitio</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Mapa del Sitio">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Mapa del Sitio';
			break;
		case 'infografias':
			echo '<title>Infografías</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Infografías">'."\n";
			echo "\t".'<meta property="og:description" content="">'."\n";
			echo "\t".'<meta name="description" content="">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Infografías';
			break;
		case 'padron_de_cabilderos':
			echo '<title>Padrón de Cabilderos</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Padrón de Cabilderos">'."\n";
			echo "\t".'<meta property="og:description" content="Es el registro que identifica a las personas físicas y morales dedicadas a la promoción de intereses legítimos de particulares, ante las comisiones del Senado y los senadores de la República.">'."\n";
			echo "\t".'<meta name="description" content="Es el registro que identifica a las personas físicas y morales dedicadas a la promoción de intereses legítimos de particulares, ante las comisiones del Senado y los senadores de la República.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Padrón de Cabilderos';
			break;
		case 'parlamento_personas_discapacidad':
			echo '<title>Primer Parlamento de Personas con Discapacidad</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Primer Parlamento de Personas con Discapacidad">'."\n";
			echo "\t".'<meta property="og:description" content="Primer Parlamento de Personas con Discapacidad">'."\n";
			echo "\t".'<meta name="description" content="Primer Parlamento de Personas con Discapacidad">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Primer Parlamento de Personas con Discapacidad';
			break;
		case 'agendaLegislativa':
			echo '<title>Agendas Legislativas</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Agendas Legislativas">'."\n";
			echo "\t".'<meta property="og:description" content=Agendas Legislativas.">'."\n";
			echo "\t".'<meta name="description" content="Agendas Legislativas.">'."\n";
			echo "\t".'<meta name="keywords" content="">'."\n";
			$titleSeccion = 'Agendas Legislativas';
			break;
			/****************/
		case 'comunicacionSocial':
			switch ($var1) {				
				case 'portal':
					echo '<title>Portal informativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Portal informativo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Portal informativo';
					break;
				case 'informacion':
					echo '<title>Información</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Información">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Información';
					break;
				case 'multimedia':
					echo '<title>Portal informativo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Multimedia">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Multimedia';
					break;
				case 'sesion':
					echo '<title>Sesión en vivo</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Sesión en vivo">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Sesión en vivo';
					break;

				case 'sintesis':
					echo '<title>Síntesis</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Síntesis">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Síntesis';
					break;

				default:
					echo '<title>Comunicación Social</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="Comunicación Social">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Comunicación Social';
					break;
			}
			break;
		case 'decretos_plazos':
					echo '<title>Publicación de Decretos</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Publicación de Decretos';
					break;
		case 'contraloria':
					echo '<title>Contraloría Interna</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Contraloría Interna';
					break;
		case 'elvia_carrillo':
					echo '<title>Reconocimiento "Elvia Carrillo Puerto"</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Reconocimiento "Elvia Carrillo Puerto"';
					break;

		case 'privacidad':
					echo '<title>Reconocimiento "Elvia Carrillo Puerto"</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Avisos de privacidad';
					break;
		case 'consulta_popular':
					echo '<title>Reconocimiento "Elvia Carrillo Puerto"</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Consulta Popular';
					break;
		case 'convocatoriasOrganos':
					echo '<title>Convocatorias y comunicaciones de órganos de gobierno</title>'."\n";
					echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
					echo "\t".'<meta property="og:title" content="">'."\n";
					echo "\t".'<meta property="og:description" content="">'."\n";
					echo "\t".'<meta name="description" content="">'."\n";
				  	echo "\t".'<meta name="keywords" content="">'."\n";
					$titleSeccion = 'Convocatorias y comunicaciones de órganos de gobierno';
					break;
			/*********************/
		default:
			echo '<title>Senado de la República</title>'."\n";
			echo "\t".'<meta property="og:url" content="'.dameURL().'">'."\n";
			echo "\t".'<meta property="og:title" content="Senado de la República">'."\n";
			echo "\t".'<meta property="og:description" content="El Senado de la República es uno de los dos órganos que integran el Congreso de la Unión y representa los intereses de cada una de las entidades federativas del país por lo que, en adición a sus actividades legislativas, le corresponde salvaguardar las relaciones entre los Estados de la República y la Ciudad de México, así como vigilar las relaciones internacionales en las que participa el Estado mexicano.">'."\n";
			echo "\t".'<meta name="description" content="El Senado de la República es uno de los dos órganos que integran el Congreso de la Unión y representa los intereses de cada una de las entidades federativas del país por lo que, en adición a sus actividades legislativas, le corresponde salvaguardar las relaciones entre los Estados de la República y la Ciudad de México, así como vigilar las relaciones internacionales en las que participa el Estado mexicano.">'."\n";
			echo "\t".'<meta name="keywords" content="Cámara,Senador, Senadores, Congreso, Congreso de la Unión,Leyes Federales, Gaceta, Gaceta del Senado, Gaceta Parlamentaria, Senado, Senado de la República, Poder Legislativo, Legislación, Leyes, Comisiones, Gilberto Bósques, Comunicación Social, Grupo Parlamentario, Belisario Domínguez, Sesión, Salón de Sesiones">'."\n";
			$titleSeccion = 'Senado de la República';
			break;
	}
?>