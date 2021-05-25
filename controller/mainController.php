<?php

require_once __DIR__ . '/../model/userservice.class.php';
require_once __DIR__ . '../../model/product.class.php'; 
require_once __DIR__ . '/../model/productservice.class.php';



class MainController
{
	private function checkPrivilege(){
		if (!isset($_SESSION["account_type"]) || $_SESSION["account_type"]=="guest"){
			header( 'Location: index.php?rt=start/logout');
			exit();
		}
	}

	public function index() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        $title = 'Community Store - Welcome';


		$activeInd=0;
		$userName= "UNDEFINED";
		$title="SHOP"; 


		$myProductList = [];
		$myProductList = $ps->getTableFromSQL();



		//ZAMIJENITI S MAIN_INDEX KASNIJE
		require_once __DIR__ . '/../view/main_index.php';
		require_once __DIR__ . '/../view/_footer.php';
	}


	public function add() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        $title = 'Community Store - Welcome';


		$activeInd=1;
		$userName= "UNDEFINED";
		$title="SHOP"; 


		$myProductList = [];
		$myProductList = $ps->getTableFromSQL();



		//ZAMIJENITI S MAIN_INDEX KASNIJE
		require_once __DIR__ . '/../view/main_add.php';
		require_once __DIR__ . '/../view/_footer.php';
	}


	public function addResult() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        echo $_POST["productName"];
		echo $_POST["description"];
		echo $_POST["price"];
	}

	public function history() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        $title = 'Community Store - Welcome';


		$activeInd=2;
		$userName= "UNDEFINED";
		$title="SHOP"; 


		$myProductList = [];
		$myProductList = $ps->getTableFromSQL();



		//ZAMIJENITI S MAIN_INDEX KASNIJE
		require_once __DIR__ . '/../view/main_index.php';
		require_once __DIR__ . '/../view/_footer.php';
	}

	public function search() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        $title = 'Community Store - Welcome';


		$activeInd=3;
		$userName= "UNDEFINED";
		$title="SHOP"; 


		$myProductList = [];
		$myProductList = $ps->getTableFromSQL();



		//ZAMIJENITI S MAIN_INDEX KASNIJE
		require_once __DIR__ . '/../view/main_search.php';
		require_once __DIR__ . '/../view/_footer.php';
	}

	public function searchResult() {  #MY PAGE
		session_start();

		$this->checkPrivilege();
		$ps=new ProductService();


        echo $_POST["searchTerm"];
		echo $_POST["searchType"];
		
	}



	
}; 

?>