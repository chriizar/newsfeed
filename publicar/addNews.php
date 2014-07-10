<?php
include('../includes/conectionController.php');

// $new = $_POST;
$elementos = array( "titulo"=>'Caminero1 web',"descripcion"=>'Herramienta carretera por vistas georefenciada',"fecha"=>'10/10/2010' );

// $elementos = array( "titulo"=>$new['titulo'],"descripcion"=>$new['descripcion'],"fecha"=>$new['fecha'] );

$client = new mongoConection();

$existe = $client->verificaNew($elementos['titulo']);

if($existe){
  echo "error";
}else{
  $resultado =  $client->setNews($elementos);
  echo "success";
}

?>

