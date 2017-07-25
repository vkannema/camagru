<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

class Signup extends \Core\Controller
{
	public function newAction()
	{
		//echo 'Hello from the index action in the Home controller!';
		View::render('Signup/new.html', ['db' => $db]);
	}
	public function createAction()
	{
		$user = new User($_POST);

		$user->save();
		View::render('Signup/success.html');
	}
}
