<?php

require_once __DIR__ . '/../app/database/db.class.php';
require_once __DIR__ . '/product.class.php';

class ProductService
{
	protected $myTable;

	
	function __construct($newGame=FALSE , $level=1) {
		if(!isset( $_SESSION['myTable']) || $newGame)
			$this->getTableFromSQL($level);
		else 
			$this->getTableFromSession();
		
        
    }
		
	function getTableFromSQL()
	{
		try
		{
			$db = DB::getConnection();
			$st = $db->prepare( 'SELECT * FROM ' . 'products');
			$st->execute();
		}
		catch( PDOException $e ) { exit( 'PDO error ' . $e->getMessage() ); }

		
		$this->myTable = [];	

		
		while( $row = $st->fetch() )
		{
			$this->myTable[]=new Product( $row["id"],$row["id_user"],$row["name"],$row["description"],$row["price"]);	

		}

		return $this->myTable;
	}


	


};