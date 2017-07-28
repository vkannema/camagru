<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

class Signup extends \Core\Controller
{
	public function newAction()
	{
		//echo 'Hello from the index action in the Home controller!';
		View::render('Signup/new.html');
	}
	public function createAction()
	{
		$user = new User($_POST);

		if ($user->save()){
			$this->redirect('/');
		} else {
			View::render('Signup/success.html');

		};
	}
}
