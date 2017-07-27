<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Login</title>
</head>
<body>
	<?php require 'App/Views/Partials/Flash.php'; ?>
	<h1>Login</h1>
	<form action="/login/create" method="post">
		<div>
			<label for="inputName">Name</label>
			<input id="inputName" name="name" placeholder="Name" value="<?= $name ?>" autofocus required/>
		</div>
		<div>
			<label for="inputPassword">Password</label>
			<input type="password" id="inputPassword" name="password" placeholder="Password" />
		</div>
		<button type="submit">Log in</button>
	</form>

</body>
</html>
