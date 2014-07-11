<?php
include('conectionController.php');

 $new = $_POST;
//$elementos = array( "titulo"=>'Caminerytyo2314 web',"descripcion"=>'Herramienta carretera por vistas georefenciada',"fecha"=>time() );

$elementos = array( "titulo"=>$new['titulo'],"descripcion"=>$new['descripcion'],"fecha"=>time() );

$client = new mongoConection();
$client->setNews($elementos);
	$err ="{ err:null }";
	echo json_encode($err);
//$existe = $client->verificaNew($elementos['titulo']);

//	if ( $existe == false){
//	echo json_encode( $client->setNews($elementos) );
//	}else{
//		$err ="{ err:true }";
//		echo json_encode($err);
//	}

?>

