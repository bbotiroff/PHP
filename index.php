<?php 

/*
	Include all the initializations of App.
*/	require_once('./config/init.php');



/*
	Instanciate Routing class and parse URL
*/	$ROUTER = new Router;
	$ROUTER->parseURL($_GET['url']);
	

/*
	Call Controller and get Data from it
*/ 

	$pageData =  $ROUTER->getControllerData();


/*
	Building template based of the passed page data.

*/ 

	$view = new Page;

	$view->render('/template/header', $pageData['arguments']);

	$view->render('/template/categories', $pageData['arguments']);
	
	$view->render($pageData['content'], $pageData['arguments']);

	$view->render('/template/footer', $pageData['arguments']);


 ?>


