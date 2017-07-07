<?php

require_once('./database.php');
$dbh = new PDO('mysql:host=localhost', $DB_USER, $DB_PASSWORD);
$sql = "CREATE DATABASE IF NOT EXISTS camagru_db";
$dbh->exec( $sql );

try {
    $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = "CREATE DATABASE IF NOT EXISTS camagru_db";
$dbh->exec( $sql );

$sql = "CREATE TABLE IF NOT EXISTS Users (
id_users INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
Login VARCHAR(255),
Password VARCHAR(255),
Mail VARCHAR(255)
)";
$dbh->exec($sql);

header('Location: ../index.php');
?>