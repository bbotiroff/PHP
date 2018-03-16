<?php 

// This files stores all the class with properties and methods related to routing

class Router {

	public $CONTROLLER = "Home";
	public $ACTION = "index";
	public $PARAMETERS = [];




	public function parseURL($url){



		if(isset($url)){

		//	This will return an array something look like this Array([0] => $ControllerName, [1] => $MethodName, [...] => Parameters)	
			$parsedURL = explode('/', rtrim($url));



		//	Create controller string for checking purposes 
			$controller = BASEPATH . '/controllers/' . $parsedURL[0] . '.php';


			if(file_exists($controller)){
				$this->CONTROLLER = $parsedURL[0];
			}else{
				$this->CONTROLLER = 'error';
				echo "404 <br> Page not found :(";
			}

		//	Check if passed method exists, IF YES, ASSIGN TO ACTION VARIABLE 
			if(method_exists($this->CONTROLLER, $parseURL[1])){
				$this->ACTION = $parseURL[1];
			}

		}
	}


	public function getControllerData(){
		require_once(BASEPATH . '/controllers/' . $this->CONTROLLER . '.php');
		$Object = new $this->CONTROLLER;
		$action = $this->ACTION;
		return $Object->$action();

	}
	



}

 ?>