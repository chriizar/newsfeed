<?php
include('../../App/includes/conectionController.php');
$client = new mongoConection();
/*
 if ( empty($_SERVER['HTTP_REFERER']) ){  			  // <-- condicion en caso de que este vacia
 	echo "no hay ruta origen";			  			  //   desactivada por que siempre esta enviando la URL
 	//header("location:javascript://history.go(-1)"); // <-- regresa a la pagina anterior
 }else{
 */
 //	 $ruta = $_SERVER['HTTP_REFERER'];				  // <-- switch para determinar la url obtenida
 	 $ruta = "http://semicmex.com.mx/";				  //	 o fija para obtener la lista  de las noticias

 	// echo "ruta origen :".$ruta."<br>";
 	$elemntos = array("url"=>$ruta);
 	$respuesta = $client->verifyUrl($elemntos);		 // veroifica si la URL esta dentro 
 											    	 // de las URLs permitidas
	 	if ($ruta != $respuesta['url'] ){
	 		echo "no cuenta con acceso newsfeed";
	 		//	header("location:javascript://history.go(-1)");  // <-- regresa a la pagina anterior
	 	}else{

	 		// echo "acceso a newsfeed";
			$noticias = $client->listNews(); 		// obtener la lista de las noticias
			$json = json_encode($noticias, true);
			echo $json;								

	 	}


/*
$noticias = array(
				  array(
				  	'titulo'      => "no seas putocvbcvbcvb",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  ),array(
			 	  	'titulo'      => "yyyyyyyyyyyyyyyyyyyyyyyyyy",
			 	  	'descripcion' => "descrdfgdfgdfgipcion",
			 	  	'fecha'       =>"12-julio"
			 	  ),array(
			 	  	'titulo'      => "pinche moy",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	  ,array(
			 	  	'titulo'      => "titulo",
			 	  	'descripcion' => "descripcion",
			 	  	'fecha'       =>"12-julio"
			 	  )
			 	);
*/

