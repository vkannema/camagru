<?php

namespace App\Controllers;

/**
 * Posts controller
 *
 * PHP version 5.4
 */
class Posts extends \Core\Controller
{


	public function indexAction()
	{
		echo 'Hello from the index action in the Posts controller!';
	}

	public function addNewAction()
	{
		echo 'Hello from the addNew action in the Posts controller!';
	}

	public function editAction()
	{
		echo 'Hello from the edit action in the Posts controller!';
		echo '<p>Route parameters: <pre>' .
			htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
	j}
}
