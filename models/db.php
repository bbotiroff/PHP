<?php 

	class MyModel {

		private $firstName;
		private $lastName; 

		public function setData($firstName = "", $lastName = ""){
			$this->$firstName = $firstName;
			$this->$lastName = $lastName;
		}


		public function getData(){
			$userInfo = [
				'firstName' => $this->$firstName,
				'lastName' => $this->$lastName
			];
			echo "OK";
		}



	}



 ?>