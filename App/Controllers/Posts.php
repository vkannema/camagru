<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;
use \App\Controllers\Authenticated;

class Posts extends Authenticated
{
	public function indexAction()
	{
		View::render('Posts/index.php');
	}
}
