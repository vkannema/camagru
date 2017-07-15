<?php

/**
 * Autoloader
 */

spl_autoload_register(function ($class){
	$root = dirname(__DIR__); // get parent Directory
	$file = $root . '/' . str_replace('\\', '/', $class) . '.php';
	if (is_readable($file)) {
		require $root . '/' . str_replace('\\', '/', $class) . '.php';
	}
});
// require('../Core/Router.php');
// require('../App/Controllers/Posts.php');

$router = new Core\Router();

// echo get_class($router);

//Add the routes

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');


$router->dispatch($_SERVER['QUERY_STRING']);


?>
