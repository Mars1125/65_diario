<?php
	/* Coneccion Base de Datos */
	$db_host="localhost"; 	
	$db_usuario="root";	
	$db_password="";	
	$conecta_base = new mysqli($db_host, $db_usuario, $db_password);
	if ($conecta_base->connect_error) {
		die("Connection failed: " . $conecta_base->connect_error);
	}
	mysqli_set_charset($conecta_base,"utf8");
 
	/* Zona Horaria */
	setlocale(LC_TIME, "es_MX.utf8");
	date_default_timezone_set('America/Mexico_City');
	
	define('URL', "/65_diario/");
	
	/* Variables Globales de GET y POST */
	if (!empty($_REQUEST['watch'])) { $watch = $_REQUEST['watch']; } else { $watch = NULL; }
	if (!empty($_REQUEST['var1'])) { $var1 = $_REQUEST['var1']; } else { $var1 = NULL; }
	if (!empty($_REQUEST['var2'])) { $var2 = $_REQUEST['var2']; } else { $var2 = NULL; }
	if (!empty($_REQUEST['var3'])) { $var3 = $_REQUEST['var3']; } else { $var3 = NULL; }
	if (!empty($_REQUEST['var4'])) { $var4 = $_REQUEST['var4']; } else { $var4 = NULL; }
	if (!empty($_REQUEST['var5'])) { $var5 = $_REQUEST['var5']; } else { $var5 = NULL; }
	if (!empty($_REQUEST['q'])) { $q = $_REQUEST['q']; } else { $q = NULL; }

	if (!empty($_REQUEST['anio'])) { $anio = $_REQUEST['anio']; } else { $anio = NULL; }
	if (!empty($_REQUEST['dia'])) { $dia = $_REQUEST['dia']; } else { $dia = NULL; }
	if (!empty($_REQUEST['mes'])) { $mes = $_REQUEST['mes']; } else { $mes = NULL; }
	if (!empty($_REQUEST['idCategoria'])) { $idCategoria = $_REQUEST['idCategoria']; } else { $idCategoria = NULL; }
	if (!empty($_REQUEST['idGaceta'])) { $idGaceta = $_REQUEST['idGaceta']; } else { $idGaceta = NULL; }
	if (!empty($_REQUEST['action'])) { $action = $_REQUEST['action']; } else { $action = NULL; }
	if (!empty($_REQUEST['congresov'])) { $congresov = $_REQUEST['congresov']; } else { $congresov = NULL; }
	if (!empty($_REQUEST['indice'])) { $indice = $_REQUEST['indice']; } else { $indice = NULL; }
	if (!empty($_REQUEST['indicea'])) { $indicea = $_REQUEST['indicea']; } else { $indicea = NULL; }
	if (!empty($_REQUEST['indiceg'])) { $indiceg = $_REQUEST['indiceg']; } else { $indiceg = NULL; }
	if (!empty($_REQUEST['contenido'])) { $contenido = $_REQUEST['contenido']; } else { $contenido = NULL; }
	if (!empty($_REQUEST['tipo'])) { $tipo = $_REQUEST['tipo']; } else { $tipo = NULL; }

	function dameURL(){
		$url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}
	
	function urls_amigables($url) {
	      $url = mb_strtolower($url);

	      $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
	      $repl = array('a', 'e', 'i', 'o', 'u', 'n');

	      $url = str_replace ($find, $repl, $url);

	      $find = array(' ', '&', '\r\n', '\n', '+');
	      $url = str_replace ($find, '-', $url);

	      $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	      $repl = array('', '_', '');
	      $url = preg_replace ($find, $repl, $url);
	      return $url;
	}

	function url_cambio($url) {
		$url = str_replace ('_', ' ', $url);
		return $url;
	}

	function viewDate($date) {
		$date = strtotime($date);
		$weekday = date("w", $date);

		switch ($weekday) {
			case '0': $weekday = "Domingo"; break;
			case '1': $weekday = "Lunes"; break;
			case '2': $weekday = "Martes"; break;
			case '3': $weekday = "Miércoles"; break;
			case '4': $weekday = "Jueves"; break;
			case '5': $weekday = "Viernes"; break;
			case '6': $weekday = "Sabado"; break;
		}

		$day = date("d", $date);
		$month = date("m", $date);

		switch ($month) {
			case '01': $month = "enero"; break;
			case '02': $month = "febrero"; break;
			case '03': $month = "marzo"; break;
			case '04': $month = "abril"; break;
			case '05': $month = "mayo"; break;
			case '06': $month = "junio"; break;
			case '07': $month = "julio"; break;
			case '08': $month = "agosto"; break;
			case '09': $month = "septiembre"; break;
			case '10': $month = "octubre"; break;
			case '11': $month = "noviembre"; break;
			case '12': $month = "diciembre"; break;
		}

		$year = date("Y", $date);
		$date = $weekday." ".$day." de ".$month." de ".$year;
		return $date;
	}

	function seguridadCaracter($buscar) {  
	    $buscar = str_replace("!"," ", $buscar);	
		$buscar = str_replace('"'," ", $buscar);	
		$buscar = str_replace("#"," ", $buscar);	
		$buscar = str_replace("$"," ", $buscar);	
		$buscar = str_replace("%"," ", $buscar);	
		$buscar = str_replace("&"," ", $buscar);	
		$buscar = str_replace("/"," ", $buscar);	
		$buscar = str_replace("("," ", $buscar);
		$buscar = str_replace(")"," ", $buscar);	
		$buscar = str_replace("="," ", $buscar);	
		$buscar = str_replace("'"," ", $buscar);
		$buscar = str_replace("."," ", $buscar);
		$buscar = str_replace(","," ", $buscar);
		$buscar = str_replace(";"," ", $buscar);	
		$buscar = str_replace(":"," ", $buscar);
		$buscar = str_replace("-"," ", $buscar);
		$buscar = str_replace("_"," ", $buscar);
		$buscar = str_replace("{"," ", $buscar);
		$buscar = str_replace("}"," ", $buscar);
		$buscar = str_replace("["," ", $buscar);
		$buscar = str_replace("]"," ", $buscar);
		$buscar = str_replace("+"," ", $buscar);
		$buscar = str_replace("*"," ", $buscar);
		$buscar = str_replace("~"," ", $buscar);
		$buscar = str_replace("^"," ", $buscar);
		$buscar = str_replace("¡"," ", $buscar);
		$buscar= str_replace( "'", " ", $buscar );
		$buscar= str_replace( "xp_", " ", $buscar );
		$buscar= str_replace( "XP_", " ", $buscar );
		$buscar= str_replace( "%", " ", $buscar );
		$buscar= str_replace( "like", " ", $buscar );
		$buscar= str_replace( "LIKE", " ", $buscar );
		$buscar= str_replace( "SCRIPT", " ", $buscar );
		$buscar= str_replace( "OBJECT", " ", $buscar );
		$buscar= str_replace( "APPLET", " ", $buscar );
		$buscar= str_replace( "EMBED", " ", $buscar );
		$buscar= str_replace( "CHAR", " ", $buscar );
		$buscar= str_replace( "-", " ", $buscar );
		$buscar= str_replace( "/*", " ", $buscar );
		$buscar= str_replace( "*/", " ", $buscar );
		$buscar= str_replace( "...", " ", $buscar );
		$buscar= str_replace( ";", " ", $buscar );
		$buscar= str_replace( "[", " ", $buscar );
		$buscar= str_replace( "]", " ", $buscar );
		$buscar= str_replace( "(", " ", $buscar );
		$buscar= str_replace( ")", " ", $buscar );
		$buscar= str_replace( "DROP", " ", $buscar );
		$buscar= str_replace( "TABLE ", " ", $buscar );
		$buscar= str_replace( "DELETE ", " ", $buscar );
		$buscar= str_replace( " INTO ", " ", $buscar );
		$buscar= str_replace( "INSERT ", " ", $buscar );
		$buscar= str_replace( " JOIN ", " ", $buscar );
		$buscar= str_replace( ">", " ", $buscar );
		$buscar= str_replace( "<", " ", $buscar );
		$buscar= str_replace( "UPDATE", " ", $buscar );
		$buscar= str_replace( "ORDER", " ", $buscar );	
	    return $buscar;  
	}
?>