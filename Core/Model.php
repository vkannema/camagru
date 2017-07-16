<?php

namespace Core;

use PDO;

abstract class Model
{
	protected static function getDB()
	{
		static $db = null;
		if ($db === null) {
			$host = 'localhost';
			$dbname = 'mvc';
			$username = 'root';
			$password = 'root';

			try {
				$db = new PDO('mysql:host=localhost', $username, $password);

			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		return $db;
	}
}
