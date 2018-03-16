<?php 
	

class Page{





	public function render($pageParts, $arguments= array()){

	// will create particular variables based on the associative array, 
	//example: passed -> ['title' => 'Home'] return $title='Home' 
	//so now any views can access to the particular variables
		extract($arguments); 

		require_once(BASEPATH . '/views' . $pageParts . '.php');


	}



}



 ?>