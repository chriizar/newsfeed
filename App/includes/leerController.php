<?php
include('conectionController.php');

 $new = $_POST;
//$elementos = array( "titulo"=>'Caminerytyo2314 web',"descripcion"=>'Herramienta carretera por vistas georefenciada',"fecha"=>time() );

$elementos = array( "titulo"=>$new['titulo'],"descripcion"=>$new['descripcion'],"fecha"=>time() );

$client = new mongoConection();

$existe = $client->verificaNew($elementos['titulo']);

	if (empty($existe)){
		//echo"no fue encontrada";	
		  $resultado =  $client->setNews($elementos);
	}else{
		//echo "fue encontrado con el id = ".$fila[0]; // 42	
		echo "error";
	}

?>

