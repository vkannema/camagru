<?php

namespace App\Models;

use PDO;
use App\Token;

class User extends \Core\Model
{
	public function __construct($data = [])
	{
		foreach ($data as $key=>$value)
		{
			$this->$key = $value;
		}
	}

	public function save()
	{


		$password_hash = password_hash($this->password, PASSWORD_DEFAULT);

		$sql = 'INSERT INTO users (name, email, password_hash)
		VALUES (:name, :email, :password_hash)';

		$db = static::getDB();
		$stmt = $db->prepare($sql);

		$stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
		$stmt->bindValue('password_hash', $password_hash, PDO::PARAM_STR);
		return $stmt->execute();


	}

	public static function emailExists($email)
	{
		return static::findByEmail($email) !== false;
	}

	public static function findByEmail($email)
	{
		$sql = 'SELECT * FROM users WHERE email = :email';

		$db = static::getDB();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$stmt->execute();
		return $stmt->fetch();
	}

	public static function findByName($name)
	{
		$sql = 'SELECT * FROM users WHERE name = :name';

		$db = static::getDB();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$stmt->execute();
		return $stmt->fetch();
	}

	public static function authenticate($name, $password)
	{
		$user = static::findByName($name);
		if ($user)
		{
			if (password_verify($password, $user->password_hash)){
				return $user;
			}
			return false;
		}
	}
	public static function findByID($id)
	{
		$sql = 'SELECT * FROM users WHERE id = :id';

		$db = static::getDB();
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->setFetchMode(PDO::FETCH_CLASS, get_called_class());
		$stmt->execute();
		return $stmt->fetch();
	}

	public function rememberLogin()
	{
		$token = new Token();
		$hashed_token = $token->getHash();
		$this->remember_token = $token->getValue();

		$this->expiry_timestamp = time() + 60 * 60 * 24 * 30; // 30 days from now

		$sql = 'INSERT INTO remembered_logins (token_hash, user_id, expires_at)
				VALUES (:token_hash, :user_id, :expires_at)';
		$db = static::getDB();
		$stmt = $db->prepare($sql);

		$stmt->bindValue(':token_hash', $hashed_token, PDO::PARAM_STR);
		$stmt->bindValue(':user_id', $this->id, PDO::PARAM_INT);
		$stmt->bindValue(':expires_at', date('Y-m-d H-i-s', $this->expiry_timestamp), PDO::PARAM_STR);
		return $stmt->execute();
	}
}
