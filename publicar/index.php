<?php
include('../includes/conectionController.php');

// $new = $_POST;
$elementos = array( "titulo"=>'Caminerytyo2314 web',"descripcion"=>'Herramienta carretera por vistas georefenciada',"fecha"=>time() );

// $elementos = array( "titulo"=>$new['titulo'],"descripcion"=>$new['descripcion'],"fecha"=>time() );

$client = new mongoConection();

$existe = $client->verificaNew($elementos['titulo']);

if($existe){
  echo "error";
}else{
  $resultado =  $client->setNews($elementos);
  echo "success";
}

?>

