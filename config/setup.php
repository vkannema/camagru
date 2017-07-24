<?php

include "database.php";

$dbh = new PDO('mysql:host=localhost', $DB_USER, $DB_PASSWORD);
$sql = "CREATE DATABASE IF NOT EXISTS `cama_db`;";
$dbh->exec($sql);

try {
	$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "use `cama_db`;";
	$sql = $sql . " CREATE TABLE IF NOT EXISTS `user` (
		id int(11) NOT NULL,
		name varchar(50) CHARACTER SET utf8 NOT NULL,
		email varchar(255) CHARACTER SET utf8 NOT NULL,
		password_hash varchar(255) CHARACTER SET utf8 NOT NULL
	);";
	$dbh->exec($sql);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	return ;
}




?>
