<?php

namespace App\Models;

use PDO;

class Setup extends \Core\Model
{
	public static function createdb()
	{
		// $host = 'localhost';
		// $dbname = 'mvc';
		// $username = 'root';
		// $password = 'root';
		try {
			// $db = new PDO('mysql:host=localhost', $username, $password);
			$db = static::getDB();
			$sql = "CREATE DATABASE IF NOT EXISTS mvc";
			$db->exec($sql);
			return ("Database created, well done !");

		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
