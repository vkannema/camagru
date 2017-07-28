<?php


include "database.php";

$dbh = new PDO('mysql:host=localhost', $DB_USER, $DB_PASSWORD);
$sql = "CREATE DATABASE IF NOT EXISTS camagru;";
$dbh->exec($sql);

try {
	$dbh = new PDO('mysql:host=localhost', $DB_USER, $DB_PASSWORD);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "use camagru;";
	$sql .= "CREATE TABLE IF NOT EXISTS `users` (
	id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
	name varchar(50) CHARACTER SET utf8 NOT NULL,
	email varchar(255) CHARACTER SET utf8 NOT NULL UNIQUE,
	password_hash varchar(255) CHARACTER SET utf8 NOT NULL
	);";
	$dbh->exec($sql);
	$sql = "CREATE TABLE `camagru`.`remembered_logins` (
		`token_hash` VARCHAR(64) NOT NULL ,
		`user_id` INT NOT NULL ,
		`expires_at` DATETIME NOT NULL ,
		PRIMARY KEY (`token_hash`),
		INDEX (`user_id`)
	) ENGINE = InnoDB;";
	$dbh->exec($sql);
	$sql = "ALTER TABLE `remembered_logins`
	ADD FOREIGN KEY (`user_id`),
	REFERENCES `users`(`id`),
	ON DELETE CASCADE ON UPDATE CASCADE;";
	$dbh->exec($sql);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	return ;
}




?>
