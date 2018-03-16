<?php 

// This file basically initialize all the requred files .

/*
	# Include application global variables. 
*/
require("./__Globals.php");





require(BASEPATH . "/models/db.php");


/*
	# Include all classes from classes folder
*/
require(BASEPATH . "/classes/Router.php");
require(BASEPATH . "/classes/Templating.php");


/*
	# Include Controller from controllers folder
*/ 
require(BASEPATH . "/controllers/Controller.php");



































 ?>