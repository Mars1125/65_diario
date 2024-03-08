<?php
	$arraySobreSenado = array();	
	$arraySobreSenado[0] = array('Nombre' => 'Sobre el Senado', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado');
	$arraySobreSenado[1] = array('Nombre' => '¿Qué es el Senado?', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/-que-es-el-senado-.html');
	$arraySobreSenado[2] = array('Nombre' => '¿Qué es un Senador?', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/-que-es-un-senador-.html');
	$arraySobreSenado[3] = array('Nombre' => '¿Qué es la Sesión Plenaria?', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/-que-es-la-sesion-plenaria-.html');
	$arraySobreSenado[4] = array('Nombre' => 'Organización y funcionamiento', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/organizacion-y-funcionamiento.html');
	$arraySobreSenado[5] = array('Nombre' => 'Proceso Legislativo', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/proceso-legislativo.html');
	$arraySobreSenado[6] = array('Nombre' => 'Historia', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/historia.html');
	$arraySobreSenado[7] = array('Nombre' => 'Representación territorial', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/representacion-territorial.html');
	$arraySobreSenado[8] = array('Nombre' => 'Función de control', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/funcion-de-control.html');
	$arraySobreSenado[9] = array('Nombre' => 'Sede y patrimonio histórico', 'Link' => 'https://micrositios.senado.gob.mx/sobre_el_senado/sede-y-patrimonio-historico.html');
	$arraySobreSenado[10] = array('Nombre' => 'Senado para niñas, niños y adolescentes', 'Link' => 'https://micrositios.senado.gob.mx/politica_ninos/');
	$arraySobreSenado[11] = array('Nombre' => 'Archivo Histórico y Memoria Legislativa', 'Link' => 'https://micrositios.senado.gob.mx/AHyML/index.html');
	$arraySobreSenado[12] = array('Nombre' => 'Biblioteca "Melchor Ocampo"', 'Link' => 'https://micrositios.senado.gob.mx/BMO/index.html');
	$arraySobreSenado[13] = array('Nombre' => 'Información de Legislaturas Anteriores', 'Link' => 'http://192.168.11.63/informacion/');
	
	$arrayIntegrantes = array();
	$arrayIntegrantes[0] = array('Nombre' => 'Integración', 'Link' => URL.'senadores/integracion');
	$arrayIntegrantes[1] = array('Nombre' => 'Por orden alfabético', 'Link' => URL.'senadores/por_orden_alfabetico');
	$arrayIntegrantes[2] = array('Nombre' => 'Por Entidad Federativa', 'Link' => URL.'senadores/por_entidad_federativa');
	$arrayIntegrantes[3] = array('Nombre' => 'Senadoras / senadores', 'Link' => URL.'senadores/genero');
	// $arrayIntegrantes[4] = array('Nombre' => 'Senadores', 'Link' => URL.'senadores');
	$arrayIntegrantes[5] = array('Nombre' => 'Por Grupo Parlamentario', 'Link' => URL.'senadores/por_grupo_parlamentario');
	$arrayIntegrantes[6] = array('Nombre' => 'Sin Grupo Parlamentario', 'Link' => URL.'senadores/sin_grupo_parlamentario');
	$arrayIntegrantes[7] = array('Nombre' => 'Por Principio de elección', 'Link' => URL.'senadores/por_principio_de_eleccion');
	$arrayIntegrantes[8] = array('Nombre' => 'Que han estado en funciones', 'Link' => URL.'senadores/que_han_estado_en_funciones');
	$arrayIntegrantes[9] = array('Nombre' => 'Informes de comisiones oficiales', 'Link' => URL.'senadores/informes_de_viajes_oficiales');
	$arrayIntegrantes[10] = array('Nombre' => 'Información Básica', 'Link' => URL.'pdfs/documentos_apoyo/64-65/Informacion_Basica_LXV.pdf');
	$arrayIntegrantes[11] = array('Nombre' => 'Directorio', 'Link' => URL.'senadores/directorio_de_senadores');
	
	$arrayMesaDirectiva = array();
	$arrayMesaDirectiva[0] = array('Nombre' => 'Integrantes', 'Link' => URL.'mesa_directiva/integrantes');
	$arrayMesaDirectiva[1] = array('Nombre' => 'Antecedentes', 'Link' => URL.'mesa_directiva/antecedentes');
	$arrayMesaDirectiva[2] = array('Nombre' => 'Facultades', 'Link' => URL.'mesa_directiva/facultades');
	$arrayMesaDirectiva[3] = array('Nombre' => 'Acuerdos', 'Link' => URL.'mesa_directiva/acuerdos');
	$arrayMesaDirectiva[4] = array('Nombre' => 'Información Histórica', 'Link' => '../informacion');

	$arrayJUCOPO = array();
	$arrayJUCOPO[0] = array('Nombre' => 'Integrantes', 'Link' => URL.'junta_de_coordinacion_politica/integrantes');
	$arrayJUCOPO[1] = array('Nombre' => 'Antecedentes', 'Link' => URL.'junta_de_coordinacion_politica/antecedentes');
	$arrayJUCOPO[2] = array('Nombre' => 'Facultades', 'Link' => URL.'junta_de_coordinacion_politica/facultades');
	$arrayJUCOPO[3] = array('Nombre' => 'Acuerdos', 'Link' => URL.'junta_de_coordinacion_politica/acuerdos');
	$arrayJUCOPO[4] = array('Nombre' => 'Información Histórica', 'Link' => '../informacion');

	$arrayOrganosDirectivos = array();
	$arrayOrganosDirectivos[0] = array('Nombre' => 'Mesa Directiva', 'Link' => URL.'mesa_directiva/', 'SubMenu' => $arrayMesaDirectiva);
	$arrayOrganosDirectivos[1] = array('Nombre' => 'Junta de Coordinación Política', 'Link' => URL.'junta_de_coordinacion_politica/', 'SubMenu' => $arrayJUCOPO);

	$arrayGruposParlamentarios = array();
	$arrayGruposParlamentarios[0] = array('Nombre' => 'Movimiento Regeneración Nacional (MORENA)', 'Link' => 'http://morena.senado.gob.mx');
	$arrayGruposParlamentarios[1] = array('Nombre' => 'Partido Acción Nacional (PAN)', 'Link' => 'http://www.pan.senado.gob.mx');
	$arrayGruposParlamentarios[2] = array('Nombre' => 'Partido Revolucionario Institucional (PRI)', 'Link' => 'http://pri.senado.gob.mx');
	$arrayGruposParlamentarios[3] = array('Nombre' => 'Movimiento Ciudadano (MC)', 'Link' => 'http://www.senadoresciudadanos.mx');
	$arrayGruposParlamentarios[4] = array('Nombre' => 'Partido de la Revolución Democrática (PRD)', 'Link' => 'http://prd.senado.gob.mx');
	$arrayGruposParlamentarios[5] = array('Nombre' => 'Partido del Trabajo (PT)', 'Link' => 'http://pt.senado.gob.mx/');
	$arrayGruposParlamentarios[6] = array('Nombre' => 'Partido Verde Ecologista de México (PVEM)', 'Link' => 'http://www.partidoverde.org.mx/prensa/senado');
	$arrayGruposParlamentarios[7] = array('Nombre' => 'Partido Encuentro Social (PES)', 'Link' => 'http://pes.senado.gob.mx/');
	$arrayGruposParlamentarios[8] = array('Nombre' => 'Agendas Legislativas', 'Link' => URL.'agendaLegislativa');
	
	$arrayComisiones = array();
	$arrayComisiones[0] = array('Nombre' => '¿Qué son las Comisiones?', 'Link' => URL.'comisiones/que_son_las_comisiones');
	$arrayComisiones[1] = array('Nombre' => 'Directorio de Comisiones', 'Link' => URL.'comisiones/directorios_de_comisiones');
	$arrayComisiones[2] = array('Nombre' => 'Ordinarias', 'Link' => URL.'comisiones/ordinarias');
	$arrayComisiones[3] = array('Nombre' => 'Bicamarales', 'Link' => URL.'comisiones/bicamarales');
	$arrayComisiones[4] = array('Nombre' => 'Especiales', 'Link' => URL.'comisiones/especiales');
	$arrayComisiones[5] = array('Nombre' => 'Grupos de Trabajo', 'Link' => URL.'comisiones/grupo_tabajo');
	$arrayComisiones[6] = array('Nombre' => 'Calendario de Reuniones y Eventos', 'Link' => 'http://comisiones.senado.gob.mx/calendario/');
	//$arrayComisiones[5] = array('Nombre' => 'Comités', 'Link' => URL.'comisiones/comites');
	
	$arrayOrganosTecnicos = array();
	$arrayOrganosTecnicos[0] = array('Nombre' => 'Centro de Estudios Internacionales "Gilberto Bosques"', 'Link' => 'http://centrogilbertobosques.senado.gob.mx');
	$arrayOrganosTecnicos[1] = array('Nombre' => 'Contraloría Interna', 'Link' => URL.'contraloria');
	$arrayOrganosTecnicos[2] = array('Nombre' => 'Centro de Capacitación y Formación Permanente', 'Link' => 'http://www.cecafp.senado.gob.mx:8080/elearning/inicio.jsp');
	$arrayOrganosTecnicos[3] = array('Nombre' => 'Unidad Técnica para la Igualdad de Género', 'Link' => 'http://unidadgenero.senado.gob.mx');

	$arrayInfoParlamentaria = array();
	$arrayInfoParlamentaria[0] = array('Nombre' => 'Asistencias', 'Link' => URL.'asistencias');
	$arrayInfoParlamentaria[1] = array('Nombre' => 'Votaciones', 'Link' => URL.'votaciones');
	$arrayInfoParlamentaria[2] = array('Nombre' => 'Consultoría Jurídica Legislativa', 'Link' => 'https://micrositios.senado.gob.mx/consultoria_Juridica/');
	$arrayInfoParlamentaria[3] = array('Nombre' => 'Diario de los Debates', 'Link' => URL.'diario_de_los_debates');
	$arrayInfoParlamentaria[4] = array('Nombre' => 'Documentos de Apoyo Parlamentario', 'Link' => 'https://micrositios.senado.gob.mx/documentos_apoyo_parlamentario/index.html');
	//$arrayInfoParlamentaria[5] = array('Nombre' => 'Gaceta de la Comisión Permanente', 'Link' => $gacetaURLCP);
	$arrayInfoParlamentaria[5] = array('Nombre' => 'Gaceta del Senado', 'Link' => $gacetaURL);
	$arrayInfoParlamentaria[6] = array('Nombre' => 'Iniciativas, Minutas, Instrumentos<br>internacionales y proposiciones', 'Link' => 'https://infosen.senado.gob.mx/infosen/infosen64/index.html');
	$arrayInfoParlamentaria[7] = array('Nombre' => 'Legislación Aprobada', 'Link' => URL.'legislacion_aprobada');
	$arrayInfoParlamentaria[8] = array('Nombre' => 'Marco Jurídico', 'Link' => URL.'documentos_de_apoyo_parlamentario#Marco_Juridico');
	$arrayInfoParlamentaria[9] = array('Nombre' => 'Micrositio Comisión Permanente', 'Link' => 'http://192.168.11.63/permanente/CP65-1ASPR/');
	$arrayInfoParlamentaria[10] = array('Nombre' => 'Orden del día', 'Link' => $ordenDiaURL);	
	//$arrayInfoParlamentaria[12] = array('Nombre' => 'Publicación de Decretos', 'Link' => URL.'decretos_plazos');
	$arrayInfoParlamentaria[11] = array('Nombre' => 'Publicación de Decretos', 'Link' => 'https://transparenciaparlamentaria.senado.gob.mx/decretos_plazos/');
	$arrayInfoParlamentaria[12] = array('Nombre' => 'Respuestas a Proposiciones Aprobadas', 'Link' => URL.'respuestas_a_proposiciones_aprobadas');
	$arrayInfoParlamentaria[13] = array('Nombre' => 'Seguimiento a Reformas Constitucionales', 'Link' => URL.'seguimiento_a_reformas_constitucionales');
	$arrayInfoParlamentaria[14] = array('Nombre' => 'Sesiones Plenarias', 'Link' => URL.'sesiones');
	$arrayInfoParlamentaria[15] = array('Nombre' => 'Sesión al minuto', 'Link' => URL.'sesion_al_minuto');
	$arrayInfoParlamentaria[16] = array('Nombre' => 'Sinopsis Legislativa', 'Link' => URL.'documentos_de_apoyo_parlamentario/sinopsis#LXIV3A');
	$arrayInfoParlamentaria[17] = array('Nombre' => 'Transparencia Parlamentaria', 'Link' => 'https://transparenciaparlamentaria.senado.gob.mx/formatos_INAI-INFOSEN/');
	$arrayInfoParlamentaria[18] = array('Nombre' => 'Tratados Internacionales aprobados', 'Link' => URL.'tratados_internacionales_aprobados');
	$arrayInfoParlamentaria[19] = array('Nombre' => 'Versión Estenográfica', 'Link' => URL.'version_estenografica');
	

	$arrayInfoAdministrativa = array();
	$arrayInfoAdministrativa[0] = array('Nombre' => 'Organización', 'Link' => URL.'administracion/organizacion');
	$arrayInfoAdministrativa[1] = array('Nombre' => 'Recursos humanos', 'Link' => URL.'administracion/rec_humanos');
	$arrayInfoAdministrativa[2] = array('Nombre' => 'Recursos materiales', 'Link' => URL.'administracion/rec_materiales');
	$arrayInfoAdministrativa[3] = array('Nombre' => 'Recursos financieros', 'Link' => URL.'administracion/rec_financieros');
	$arrayInfoAdministrativa[4] = array('Nombre' => 'Información Relevante', 'Link' => URL.'administracion/info_relevante');
	$arrayInfoAdministrativa[5] = array('Nombre' => 'Estado de situación financiera', 'Link' => URL.'administracion/estado_financiero');
	$arrayInfoAdministrativa[6] = array('Nombre' => 'Código de Ética y Conducta', 'Link' => URL.'administracion/etica_conducta');
	$arrayInfoAdministrativa[8] = array('Nombre' => 'Licitaciones públicas', 'Link' => URL.'administracion/licitaciones');
	// $arrayInfoAdministrativa[8] = array('Nombre' => 'Obras Senado', 'Link' => 'https://www.obras-senado.com/');
	$arrayInfoAdministrativa[9] = array('Nombre' => 'Organización técnica y administrativa', 'Link' => URL.'sobre_el_senado/organizacion_tecnica_y_administrativa');

	$arrayComunicacionSocial = array();
	$arrayComunicacionSocial[0] = array('Nombre' => 'Portal Informativo', 'Link' => 'https://comunicacionsocial.senado.gob.mx/');
	$arrayComunicacionSocial[1] = array('Nombre' => 'Información', 'Link' => 'https://comunicacionsocial.senado.gob.mx/informacion/comunicados');
	$arrayComunicacionSocial[2] = array('Nombre' => 'Multimedia', 'Link' => 'https://comunicacionsocial.senado.gob.mx/multimedia/galeria');
	$arrayComunicacionSocial[3] = array('Nombre' => 'Sesión en Vivo', 'Link' => 'https://comunicacionsocial.senado.gob.mx/directo');
	$arrayComunicacionSocial[4] = array('Nombre' => 'Síntesis', 'Link' => 'https://comunicacionsocial.senado.gob.mx/sintesiss');

	$arrayTransparencia = array();
	$arrayTransparencia[0] = array('Nombre' => 'Obligaciones de Transparencia', 'Link' => 'https://transparencia.senado.gob.mx/informacion');
	$arrayTransparencia[1] = array('Nombre' => '¿Cómo solicitar información pública?', 'Link' => 'https://transparencia.senado.gob.mx/solicitar-info');
	$arrayTransparencia[2] = array('Nombre' => '¿Cómo solicitar la protección de mis datos personales?', 'Link' => 'https://transparencia.senado.gob.mx/derechos-arco');
	$arrayTransparencia[3] = array('Nombre' => '¿Qué normativas aplican?', 'Link' => 'https://transparencia.senado.gob.mx/normas');
	$arrayTransparencia[4] = array('Nombre' => 'Estadísticas', 'Link' => 'https://transparencia.senado.gob.mx/estadisticas');
	$arrayTransparencia[5] = array('Nombre' => 'Informes', 'Link' => 'https://transparencia.senado.gob.mx/informe');
	$arrayTransparencia[6] = array('Nombre' => 'Información Histórica', 'Link' => 'https://transparencia.senado.gob.mx/informacionhistorica');
	$arrayTransparencia[7] = array('Nombre' => 'Escuesta de satisfaccón', 'Link' => 'https://transparencia.senado.gob.mx/encuesta');
	$arrayTransparencia[8] = array('Nombre' => 'Contacto', 'Link' => 'https://transparencia.senado.gob.mx/contacto');
	
	// $arrayMenu = array();
	// $arrayMenu['SobreSenado'] = array('Nombre' => 'Sobre el<br>Senado', 'Link' => NULL, 'SubMenu' => $arraySobreSenado, 'Descripcion' => 'En esta sección encontrará información sobre el origen del Senado, su función de control, una breve descripción del proceso legislativo, información de carácter histórico. Asimismo, podrá ingresar a los micrositios del Archivo Histórico y de la biblioteca "Melchor Ocampo".');
	// $arrayMenu['Integrantes'] = array('Nombre' => 'Integrantes', 'Link' => NULL, 'SubMenu' => $arrayIntegrantes, 'Descripcion' => 'Aquí podrá consultar la información institucional de las Senadoras y los Senadores, integración de los Grupos Parlamentarios, los asuntos presentados ante en Pleno tales como iniciativas, proposiciones, comunicaciones, intervenciones, enlaces a sus micrositios personales y redes sociales.');
	// $arrayMenu['OrganosDirectivos'] = array('Nombre' => 'Órganos<br>Directivos', 'Link' => NULL, 'SubMenu' => $arrayOrganosDirectivos, 'Descripcion' => 'La Mesa Directiva y la Junta de Coordinación Política son las instancias de dirección de la Cámara de Senadores. En esta sección se ubican su conformación, antecedentes, funciones,  acuerdos y comunicaciones.');
	// $arrayMenu['belisarioDominguez'] = array('Nombre' => 'Instituto<br>Belisario<br>Domínguez', 'Link' => 'http://www.ibd.senado.gob.mx/', 'SubMenu' => NULL, 'Descripcion' => '');;
	// $arrayMenu['gruposParlamentarios'] = array('Nombre' => 'Grupos<br>Parlamentarios', 'Link' => NULL, 'SubMenu' => $arrayGruposParlamentarios, 'Descripcion' => 'Enlace a los micrositios de los Grupos Parlamentarios que integran la LXIV y LXV Legislaturas.');
	// $arrayMenu['Comisiones'] = array('Nombre' => 'Comisiones', 'Link' => NULL, 'SubMenu' => $arrayComisiones, 'Descripcion' => 'En este apartado encontrará listados con las comisiones ordinarias, especiales, comités y grupos de trabajo, con los datos de integrantes y contacto, así como el enlace a los micrositios institucionales donde podrá consultar los asuntos que le son turnados para su análisis y sus actividades parlamentarias.');
	// $arrayMenu['organosTecnicos'] = array('Nombre' => 'Órganos<br>Técnicos', 'Link' => NULL, 'SubMenu' => $arrayOrganosTecnicos, 'Descripcion' => 'Encontrará los micrositios de los órganos especializados encargados de realizar investigaciones y estudios en apoyo al trabajo legislativo de Senadores y Comisiones, así como de capacitación y formación, y de fiscalización administrativa y parlamentaria.');
	// $arrayMenu['infoParlamentaria'] = array('Nombre' => 'Información<br>Parlamentaria', 'Link' => NULL, 'SubMenu' => $arrayInfoParlamentaria, 'Descripcion' => 'En está sección podrá conocer sobre las actividades parlamentarias de Senadores y Comisiones en el turno y desahogo de asuntos durante las sesiones Plenarias; asimismo, el orden del día, iniciativas, proposiciones, discusión y votación, registro y publicación del debate.');
	// $arrayMenu['infoAdministrativa'] = array('Nombre' => 'Información<br>Administrativa', 'Link' => NULL, 'SubMenu' => $arrayInfoAdministrativa, 'Descripcion' => 'En esta sección se informa sobre la gestión administrativa y técnica de recursos humanos, materiales, financieros, organización del Senado y lo referente a la normativa interna.');
	// $arrayMenu['comunicacionSocial'] = array('Nombre' => 'Comunicación<br>Social', 'Link' => NULL, 'SubMenu' => $arrayComunicacionSocial, 'Descripcion' => 'El Portal de Comunicación Social del Senado es la instancia de difusión de las actividades institucionales del Senado, a través del portal informativo se puede acceder a los resúmenes informativos de las Sesiones, transmisión en Vivo, síntesis de prensa, comunicados, boletines y galerías multimedia.');
	// $arrayMenu['transparencia'] = array('Nombre' => 'Transparencia', 'Link' => NULL, 'SubMenu' => $arrayTransparencia, 'Descripcion' => 'Portal que difunde las obligaciones que le confiere al Senado la Ley General de Transparencia y Acceso a la Información Pública, y la Ley Federal en la materia. Encontrará información que orienta al ciudadano para ejercer sus derechos de acceso a la información y de protección de datos personales. Asimismo, encontrará informes, estadísticas y datos para contacto.');
	$arrayMenu = array();
	$arrayMenu['SobreSenado'] = array('Nombre' => 'Sobre el Senado', 'Link' => NULL, 'SubMenu' => $arraySobreSenado, 'Descripcion' => 'En esta sección encontrará información sobre el origen del Senado, su función de control, una breve descripción del proceso legislativo, información de carácter histórico. Asimismo, podrá ingresar a los micrositios del Archivo Histórico y de la biblioteca "Melchor Ocampo".');
	$arrayMenu['Integrantes'] = array('Nombre' => 'Integrantes', 'Link' => NULL, 'SubMenu' => $arrayIntegrantes, 'Descripcion' => 'Aquí podrá consultar la información institucional de las Senadoras y los Senadores, integración de los Grupos Parlamentarios, los asuntos presentados ante en Pleno tales como iniciativas, proposiciones, comunicaciones, intervenciones, enlaces a sus micrositios personales y redes sociales.');
	$arrayMenu['OrganosDirectivos'] = array('Nombre' => 'Órganos Directivos', 'Link' => NULL, 'SubMenu' => $arrayOrganosDirectivos, 'Descripcion' => 'La Mesa Directiva y la Junta de Coordinación Política son las instancias de dirección de la Cámara de Senadores. En esta sección se ubican su conformación, antecedentes, funciones,  acuerdos y comunicaciones.');
	$arrayMenu['belisarioDominguez'] = array('Nombre' => 'Instituto Belisario Domínguez', 'Link' => 'http://www.ibd.senado.gob.mx/', 'SubMenu' => NULL, 'Descripcion' => '');;
	$arrayMenu['gruposParlamentarios'] = array('Nombre' => 'Grupos Parlamentarios', 'Link' => NULL, 'SubMenu' => $arrayGruposParlamentarios, 'Descripcion' => 'Enlace a los micrositios de los Grupos Parlamentarios que integran la LXIV y LXV Legislaturas.');
	$arrayMenu['Comisiones'] = array('Nombre' => 'Comisiones', 'Link' => NULL, 'SubMenu' => $arrayComisiones, 'Descripcion' => 'En este apartado encontrará listados con las comisiones ordinarias, especiales, comités y grupos de trabajo, con los datos de integrantes y contacto, así como el enlace a los micrositios institucionales donde podrá consultar los asuntos que le son turnados para su análisis y sus actividades parlamentarias.');
	$arrayMenu['organosTecnicos'] = array('Nombre' => 'Órganos Técnicos', 'Link' => NULL, 'SubMenu' => $arrayOrganosTecnicos, 'Descripcion' => 'Encontrará los micrositios de los órganos especializados encargados de realizar investigaciones y estudios en apoyo al trabajo legislativo de Senadores y Comisiones, así como de capacitación y formación, y de fiscalización administrativa y parlamentaria.');
	$arrayMenu['infoParlamentaria'] = array('Nombre' => 'Información Parlamentaria', 'Link' => NULL, 'SubMenu' => $arrayInfoParlamentaria, 'Descripcion' => 'En está sección podrá conocer sobre las actividades parlamentarias de Senadores y Comisiones en el turno y desahogo de asuntos durante las sesiones Plenarias; asimismo, el orden del día, iniciativas, proposiciones, discusión y votación, registro y publicación del debate.');
	$arrayMenu['infoAdministrativa'] = array('Nombre' => 'Información Administrativa', 'Link' => NULL, 'SubMenu' => $arrayInfoAdministrativa, 'Descripcion' => 'En esta sección se informa sobre la gestión administrativa y técnica de recursos humanos, materiales, financieros, organización del Senado y lo referente a la normativa interna.');
	$arrayMenu['comunicacionSocial'] = array('Nombre' => 'Comunicación Social', 'Link' => NULL, 'SubMenu' => $arrayComunicacionSocial, 'Descripcion' => 'El Portal de Comunicación Social del Senado es la instancia de difusión de las actividades institucionales del Senado, a través del portal informativo se puede acceder a los resúmenes informativos de las Sesiones, transmisión en Vivo, síntesis de prensa, comunicados, boletines y galerías multimedia.');
	$arrayMenu['transparencia'] = array('Nombre' => 'Transparencia', 'Link' => NULL, 'SubMenu' => $arrayTransparencia, 'Descripcion' => 'Portal que difunde las obligaciones que le confiere al Senado la Ley General de Transparencia y Acceso a la Información Pública, y la Ley Federal en la materia. Encontrará información que orienta al ciudadano para ejercer sus derechos de acceso a la información y de protección de datos personales. Asimismo, encontrará informes, estadísticas y datos para contacto.');
?>