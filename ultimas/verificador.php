<?php
include('../includes/conectionController.php');
$client = new mongoConection();
/*
 if ( empty($_SERVER['HTTP_REFERER']) ){  				    // <-- condicion en caso de que este vacia
 	echo "no hay ruta origen";			  				    //   desactivada por que siempre esta enviando la URL
 	//header("location:javascript://history.go(-1)");  // <-- regresa a la pagina anterior
 }else{
 */
 	$ruta = $_SERVER['HTTP_REFERER'];						// <-- switch para determinar la url obtenida
 	// $ruta = "http://semicmex.com.mx/";					//	 o fija para obtener la lista  de las noticias

 	// echo "ruta origen :".$ruta."<br>";
 	$elemntos = array("url"=>$ruta);
 	$respuesta = $client->verifyUrl($elemntos);			    // veroifica si la URL esta dentro 
 											    			// de las URLs permitidas
	 	if ($ruta == $respuesta['url'] ){
	 		echo "acceso a newsfeed";
			 	$resLista = $client->listNews(); 			// obtener la lista de las noticias
/*															
				foreach ($resLista as $key => $value) 		
				{
					var_dump($value);
				}
*/
	 	}else{
	 		echo "no cuenta con acceso newsfeed";
	 	//	header("location:javascript://history.go(-1)");  // <-- regresa a la pagina anterior

	 	}
	 
// }

?>