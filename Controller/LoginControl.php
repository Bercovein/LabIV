<?php

namespace Controller;
use Model\User as User;

class LoginControl{

	private $defaultName='admin';
	private $defaultPassword='1234';

	public function __construct(){}

	public function index(){
		if(!empty($this->message))
        	echo '<script language="javascript">alert("' . $this->message . '");</script>'; 
               
        require(ROOT.'Vista/Login.php'); /*REVISAR*/
	}

	public function UserLogin($name,$password){
		if($name==$this->defaultName&&$password==$this->defaultPassword){
			$user=new User();
			$user->setName($name);
			$user->setPassword($password);

			$_SESSION['UserLogged']=$user;
			
			require(ROOT.'Vista/Main.php');
		}
		else
			$this->index();	
	}

	public function UserLogout(){

		/*si hay un metodo login deberia haber un logout*/
	}


}

?>