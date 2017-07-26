<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Home</title>
</head>
<body>
	<h1>Welcome</h1>
	<?php if (isset($_SESSION['user'])): ?>
		Hello <?= $user->name ?> <a href="/logout">Log out</a>
	<?php else :?>
		<a href="/signup/new">Sign Up GROS</a>
		<a href="/login">Log in GROS</a>
	<?php endif; ?>
</body>
</html>
