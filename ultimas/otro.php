<?php

 if ( empty($_SERVER['HTTP_REFERER']) ){
 	echo "no hay ruta origen";
 }else{
 	echo $_SERVER['HTTP_REFERER'];
 }

?>