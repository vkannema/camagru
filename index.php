<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Camagru</title>

	<link rel="stylesheet" href="style.css">
	<script src="index.js"></script>	
</head>
<body>
	<nav>
	
		<a href="index.php" class="align-left">Camagru</a>
		<ul class="align-right">
			<?php 
				if (isset($_SESSION['loggued_on_user'])) {
			?>
			<li><a href="my_acc.php">My account</a></li>
			<?php 
				if ($_SESSION['admin'] !== "0") {
			?>
			<li><a href="admin/index.php">Admin</a></li>
			<?php } ?>
			<li><a href="logout.php">Logout</a></li>
			<?php 
			} else {
			 ?>
			<li><a href="login.php">Login</a></li>
			<?php } ?>
		</ul>

	</nav>
	<div class="container">
		This are the pictures from the community.
	</div>
	
	<footer>
		@vkannema
	</footer>
</body>