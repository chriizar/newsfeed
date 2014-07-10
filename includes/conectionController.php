<?php

class mongoConection 
{			
	protected $conexion;
	const DB='semicdev';
//	const SERVER='mongodb://sctcloud.com.mx:27017';
	const SERVER='mongodb://localhost:27017';
	protected $db;

	function __construct() 
	{
		$this->conexion  = new MongoClient(self::SERVER);
		$this->db = $this->conexion->selectDB(self::DB);
	}

	function setNews($consulta)
	{
		return $this->db->news->insert($consulta);
	}

	function verificaNew($new)
	{	
		 $existe = false;
		 $response = $this->db->news->findOne(array("titulo"=>$new),array("_id"=>1));
		 $error =$this->getErrors();
		 if($response == null && $error['err'] == null)
		 {
		 	$existe = false;
		 }else{
		 	$existe = true;
		 }	
		return $existe;
	}

	function getErrors()
	{
		return $this->db->lastError();
	}




}

?>