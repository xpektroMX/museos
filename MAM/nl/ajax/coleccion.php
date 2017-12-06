<?php

// echo $_SERVER['DOCUMENT_ROOT'].'/guilsys/munae/museos_setup.php';

require $_SERVER['DOCUMENT_ROOT'].'/museos_setup.php';

// echo __PATH_PROVIDENCE__;

include_once __PATH_PROVIDENCE__.'setup.php';


include_once (__CA_LIB_DIR__.'/core/Db.php');
include_once (__CA_LIB_DIR__.'/ca/Search/ObjectSearch.php');
include_once (__CA_LIB_DIR__.'/ca/Search/CollectionSearch.php');
include_once (__CA_LIB_DIR__.'/ca/Search/ObjectSearchResult.php');
include_once (__CA_MODELS_DIR__.'/ca_objects.php');


// require './php-wrapper/ItemService.php';
// require './php-wrapper/ModelService.php';
// require './php-wrapper/SearchService.php';


define('__CA_SERVICE_API_USER__', 'ca_admin');
define('__CA_SERVICE_API_KEY__', '1234');

function prr($algo, $foo = false) {
  echo '<pre>';
  if(is_array($algo)) {
    print_r($algo, $foo);
  }
  else {
    $type = gettype($algo);
    if($type != "object")
      echo $algo;
    else{
      echo $type;
      print_r(get_object_vars($algo), true);
    }
  }
  echo '</pre>';
}




// function verificaId ($s){
// 	return $s;
// }

// if(isset($_POST['id_objeto'])) {
// 	$id = verificaId($_POST['id_objeto']);
// }
// else 
// 	$id = 1;


// $objSearch = new ObjectSearch();
// $queryResults = $objSearch->search($id);    


// echo ";;;;;;;;;;;;;;;;;;";

// instantiate a model 
// $t_object = new ca_objects(2);   // load ca_object record with object_id = 40

// $t_object -> getAttributesByElement();

// prr(get_object_vars($t_object));

// var_dump($t_object);


// $barcode = '1234567890';
// $t_object->addAttribute('barcode' , $barcode );//We insert value $address into address1  field inside address container.
// $t_object->setMode(ACCESS_WRITE); //Set access mode to WRITE
// $t_object->update(); //Update the record	


// $t_object->set('ca_objects.barcode', $barcode);

// echo "INFO>>>> <br> ";
// $aaa = $t_object->get('ca_objects.dimension', array('returnAsArray' => "true"));


// foreach ($aaa as $aa) {
// 	$a = explode(';', $aa);
// 	$n = count($a);
// 	echo $a[$n-3]." : ".$a[$n-2]." ". $a[$n-1]." <br/>";
// }


	$c_search = new CollectionSearch();
	$cr_res = $c_search->search("ca_collections.preferred_labels.name:".__NOMBRE_COLECCION__);

	$cr_res->nextHit();


// echo __NOMBRE_COLECCION__;

	$num = count($cr_res->get("ca_objects.preferred_labels.name", array("returnAsArray" => true)));

	// echo "<br>COLECCION: ". $cr_res->get("ca_collections.preferred_labels.name");
	
	$ids = $cr_res->get("ca_objects.hier_object_id", array("returnAsArray" => true));
	
	$tit = $cr_res->get("ca_objects.preferred_labels.name", array("returnAsArray" => true));
	// $desc = $cr_res->get("ca_objects.description", array("returnAsArray" => true));
	$img = $cr_res->get("ca_objects.multimedia", array("returnAsArray" => true));
	$autor = $cr_res->get("ca_objects.creadorBIC.creadorPersona", array("returnAsArray" => true));
	$grupo = $cr_res->get("ca_objects.creadorBIC.creadorGrupo", array("returnAsArray" => true));
	$inst = $cr_res->get("ca_objects.creadorBIC.creadorInstitucion", array("returnAsArray" => true));

	for($i=0; $i<$num; $i++){
		if($i%3 == 0) 
			echo '<div class="row row-coleccion">';
		?>
		<div class="col l4 s12 marco-filtro">
			<div class="caja-coleccion">
				<a href="#"><div class="imagen trigger" id="<?php echo $ids[$i]; ?>" 
					style="background-image: url('<?php echo __DIR_WEB__; ?>img/coleccion/<?php echo $img[$i]; ?>');";></div></a>
				<h3 ><span id="nl_objeto_creadorInstitucion"><?php echo empty($inst[$i]) ? '&nbsp;' : $inst[$i]; ?></span></h3>
				<h3><span id="nl_objeto_creadorGrupo"><?php echo empty($grupo[$i]) ? '&nbsp;' : $grupo[$i]; ?></span></h3>
				<h3><span id="nl_objeto_creadorPersona"><?php echo empty($autor[$i]) ? '&nbsp;' : $autor[$i]; ?></span></h3>
				<h4><span id="nl_objeto_name"><?php echo empty($tit[$i]) ? '&nbsp;' : $tit[$i]; ?></span></h4>
			</div>
		</div>
		<?php
		if($i%3 == 2) 
			echo '</div>';
	}

// // do a search and print out the titles of all found objects
// $o_search = new ObjectSearch();
// $qr_results = $o_search->search("001-002");    // ... or whatever text you like

// $count = 1;
// while($qr_results->nextHit()) {
//     print "Hit ".$count.": ".$qr_results->get('ca_objects.preferred_labels.name')."<br/>\n";
//     $count++;
// }




// echo "//////////////////////////////////<br/>";

//  //do a search and print out the titles of all found objects



// $o_search = new ObjectSearch();
// $qr_results = $o_search->search("001-002");    // ... or whatever text you like


// echo "aa";
// // dump preferred labels in all languages

// while($qr_results->nextHit()) {
//     print_r($qr_results->get('ca_objects.fechaCreacion', array('locale' => 2)));
//     echo "<br>";
//     print_r($qr_results->get('ca_objects.fechaCreacion', array('returnAllLocales' => false, 'returnAsArray' => true)));
//     echo "<br>";
//     print_r($qr_results->get('ca_objects.fechaCreacion', array('returnAllLocales' => true, 'returnAsArray' => false)));
//     echo "<br>";
//     print_r($qr_results->get('ca_objects.fechaCreacion', array('returnAllLocales' => true, 'returnAsArray' => true)));
//     echo "<br>";
// }




