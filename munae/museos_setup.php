<?php 

function raiz(){
	$dir = getcwd();
	$dirE = explode('/',$dir);
	$ciclos = count($dirE);
	for($i = $ciclos; $i > 0; $i--){
		$dN = '';
		for($j = 0; $j<$i;$j++){
			$dN .= $dirE[$j].'/';
		}
		if(file_exists($dN.'/raiz')){
			return $dN;
		}else{
			if($i == 1){
				exit("Archivo 'raiz' no encontrado, inserta un archivo con nombre 'raiz' (sin extensiones) en el direcorio raiz.");
			}
		}
	}
}


function aRaizHtml(){
	$dirH = $_SERVER['REQUEST_URI'];
	$dirEH = explode('/',$dirH);
	$ciclosH = count($dirEH);
	$directorioH = $dirEH[$ciclosH-2];
	// print2($_SERVER);
	// echo 'dirH = '.$dirH.'<br/>';
	// print2($dirH);
	// print2($directorioH);
	// print2($ciclosH);


	$dir = getcwd();
	$dirE = explode('/',$dir);
	$ciclos = count($dirE);
	// echo 'dir1 = '.$dir.'<br/>';

	// print2($dir);
	// print2($ciclos);
	// print2($ciclos);

	for ($i=0; $i < $ciclos; $i++) { 
		if($dirE[$i] == $directorioH){
			$j = $i;
		}
	}
	// print2($j);
	$dTmp = $dirE[0];
	for ($i=1; $i <= $j; $i++) { 
		$dTmp .= '/'.$dirE[$i];
	}

	$dir = $dTmp;
	// print2($dir);
	$dirE = explode('/',$dir);
	$ciclos = count($dirE);
	$dN = '';
	// echo 'dir = '.$dir.'<br/>';
	if(file_exists($dir.'/raiz')){
		return './';		
	}
	
	// echo '----<br/>';
	for($i = $ciclos; $i > 0; $i--){
		
		// for($j = 0; $j<$i;$j++){
		$dN .= '../';
		$tmp = '';
		for($h = 0;$h<$i-1;$h++){
			$tmp .= $dirE[$h].'/';
		}
		// print2($tmp);
		// }
		if(file_exists($tmp.'raiz')){
			return $dN;
		}else{
			if($i == 1){
				exit("Archivo 'raiz' no encontrado, inserta un archivo con nombre 'raiz' (sin extensiones) en el direcorio raiz.");
			}
		}
	}
}


define("__CA_BASE_DIR__", raiz().'../providence/');

//nombre de la coleccion del museo en CA
if (!defined("__NOMBRE_COLECCION__")) {
	define("__NOMBRE_COLECCION__", 'MUNAE');
}

//path al direrctorio base de providence
if (!defined("__PATH_PROVIDENCE__")) {
	define("__PATH_PROVIDENCE__", raiz().'../providence/');
}

//path al directorio base del museo (absoluto - php)
if (!defined("__DIR_BASE__")) {
	define("__DIR_BASE__", raiz());
}

//path al direrctorio base del museo (web - js)
if (!defined("__DIR_WEB__")) {
	define("__DIR_WEB__", aRaizHtml());
}


// echo __DIR_WEB__;

