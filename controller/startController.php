<?php


require_once __DIR__ . '/../model/userservice.class.php';

class StartController
{
	private function checkPrivilege(){
		if (isset($_SESSION["account_type"])){
			if($_SESSION["account_type"]=="user"){
				header( 'Location: index.php?rt=main');
				exit();
			}
			elseif($_SESSION["account_type"]=="guest"){
				header( 'Location: index.php?rt=start/logout');
				exit();
			}



			
		}
	}



	public function index() 
	{
		session_start();

		$this->checkPrivilege();


		//ako je ulogiran, nema šta radit na login screenu
		if( isset( $_SESSION['user'] )) 
		{
			header( 'Location: index.php?rt=main');
			exit();
		}

        $title = 'Community Store - Welcome';

		require_once __DIR__ . '/../view/start_index.php';
		require_once __DIR__ . '/../view/_footer.php';
	}

	public function signup(){
		require_once __DIR__ . '/../view/start_signup.php';


	}

	public function signupResult(){
		
	}


	public function login() {
		session_start();

		$_SESSION["account_type"] = "user"; 


		$title = '';

		$us= new UserService();

		//$us->loadInput($user,$pass);

		

		if($us->checkUser()){
			header("Refresh:2; url=index.php?rt=main");
			$succesVar="successful. :)";
		}
		else{
			$succesVar="unsuccessful. :(";
			session_destroy();
			header("Refresh:2; url=index.php?rt=start");
		}

		require_once __DIR__ . '/../view/start_login.php';
		require_once __DIR__ . '/../view/_footer.php';
		
	}

	public function guestLogin() {
		session_start();
		$title = '';

		//$us= new UserService();

		//$us->loadInput($user,$pass);

		$_SESSION["account_type"] = "guest"; 

		header("Refresh:2; url=index.php?rt=guest");
		$succesVar="successful. (GUEST)";


		require_once __DIR__ . '/../view/start_login.php';
		require_once __DIR__ . '/../view/_footer.php';
		
	}

	public function logout() {
		session_start();
		

		$us= new UserService();


		if( isset( $_SESSION["account_type"] )) 
		{
			if ($_SESSION["account_type"] == "user"){
				header("Refresh:1; url=index.php?rt=start");
			}
			
		}
		else{
			;
		}


		session_destroy();

		
		header("Refresh:1; url=index.php?rt=start");

		//require_once __DIR__ . '/../view/start_logout.php';
		//require_once __DIR__ . '/../view/_footer.php';
		
	}
	

}; 

?>