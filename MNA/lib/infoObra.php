<?php

$objId = empty($_POST['objId'])?20:$_POST['objId'];


require '../museos_setup.php';
 // echo __PATH_PROVIDENCE__;

include_once __PATH_PROVIDENCE__.'setup.php';

include_once (__CA_LIB_DIR__.'/core/Db.php');
include_once (__CA_LIB_DIR__.'/ca/Search/ObjectSearch.php');
include_once (__CA_LIB_DIR__.'/ca/Search/ObjectSearchResult.php');
include_once (__CA_MODELS_DIR__.'/ca_objects.php');

// instantiate a model 
$t_object = new ca_objects($objId);   // load ca_object record with object_id = 40
// print "The title of the object is ".$t_object->get('ca_objects.preferred_labels.name')."<br/>\n";    // get the preferred name of the object


$cInf = $t_object->get("ca_objects.idno", array('returnAllLocales' => true, 'returnAsArray' => false));
$results['idno'] = $cInf[$objId][""][0];
$results['name'] = $t_object->get('ca_objects.preferred_labels.name');



$campos = ["tipoBic","permisosDigital","restriccionesDigital","bicPermisos",
"bicRestricciones","multimedia","institucionCustodia","description","dimensionTexto"];

$contenedores["dimension"] = ["dimensionTipo","dimensionValor","dimensionUnidad"];
$contenedores["creadorBIC"] = ["creadorGrupo","creadorPersona","creadorInstitucion"];
$contenedores["fechaCreacion"] = ["fechaValor","fechaPeriodo","fechaRango"];

foreach ($campos as $c) {
	$cInf = $t_object->get("ca_objects.$c", array('returnAllLocales' => true, 'returnAsArray' => false));
	$results[$c] = $cInf;
	// echo "$c : $cInf<br/>";
}

$aaa = $t_object->get('ca_objects.dimension', array('returnAllLocales' => true, 'returnAsArray' => true));
$results['dimensiones'] = array();
foreach ($aaa as $aa) {
	$tmp = array();
	$a = explode(';', $aa);
	$a = array_reverse($a);
	// echo "$a[2] : $a[1] $a[0] <br/>";
	$tmp['dimensionTipo'] = $a[2];
	$tmp['dimensionValor'] = $a[1];
	$tmp['dimensionUnidad'] = $a[0];
	$results['dimensiones'][] = $tmp;
}




$aaa = $t_object->get('ca_objects.creadorBIC', array('returnAllLocales' => true, 'returnAsArray' => true));
$results['creador'] = array();

$results['creador'][0]['creadorPersona'] = trim($t_object->get('ca_objects.creadorBIC.creadorPersona', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['creador'][0]['creadorPersona'] = str_replace(';', '', $results['creador'][0]['creadorPersona']);
$results['creador'][0]['creadorInstitucion'] = trim($t_object->get('ca_objects.creadorBIC.creadorInstitucion', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['creador'][0]['creadorInstitucion'] = str_replace(';', '', $results['creador'][0]['creadorInstitucion']);
$results['creador'][0]['creadorGrupo'] = trim($t_object->get('ca_objects.creadorBIC.creadorGrupo', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['creador'][0]['creadorGrupo'] = str_replace(';', '', $results['creador'][0]['creadorGrupo']);

// foreach ($aaa as $aa) {
// 	$tmp = array();
// 	$a = explode(';', $aa);
// 	$a = array_reverse($a);
// 	// echo "$a[0] : $a[1] :$a[2] <br/>";
// 	$tmp['creadorPersona'] = trim($a[0]);
// 	$tmp['creadorInstitucion'] = trim($a[2]);
// 	$tmp['creadorGrupo'] = trim($a[1]);
// 	$results['creador'][] = $tmp;
// }

$aaa = $t_object->get('ca_objects.fechaCreacion.fechaValor', array('returnAllLocales' => true, 'returnAsArray' => false));
// echo ($aaa);
$results['fecha'] = array();
$results['fecha'][0]['fechaValor'] = trim($t_object->get('ca_objects.fechaCreacion.fechaValor', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['fecha'][0]['fechaValor'] = str_replace(';', '', $results['fecha'][0]['fechaValor']);
$results['fecha'][0]['fechaPeriodo'] = trim($t_object->get('ca_objects.fechaCreacion.fechaPeriodo', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['fecha'][0]['fechaPeriodo'] = str_replace(';', '', $results['fecha'][0]['fechaPeriodo']);
$results['fecha'][0]['fechaRango'] = trim($t_object->get('ca_objects.fechaCreacion.fechaRango', 
	array('returnAllLocales' => true, 'returnAsArray' => false)));
$results['fecha'][0]['fechaRango'] = str_replace(';', '', $results['fecha'][0]['fechaRango']);


// foreach ($aaa as $aa) {
// 	$tmp = array();
// 	$a = explode(';', $aa);
// 	$a = array_reverse($a);
// 	// echo "$a[0] : $a[1] :$a[2] <br/>";
// }

echo json_encode($results);

// echo "<pre>";
// print_r($results);
// echo "</pre>";



