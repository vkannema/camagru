<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>

	<nav>

		<a href="index.php" class="align-left">Camagru</a>
		<ul class="align-right">
			<?php 
				if (isset($_SESSION['loggued_on_user'])) {
			?>
			<li><a href="my_acc.php">My account</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php 
			} else {
			 ?>
			<li><a href="login.php">Login</a></li>
            <li><a href="photo.php">Take photo</a></li>
			<?php } ?>
		</ul>
		<div class="clear"></div>

	</nav>