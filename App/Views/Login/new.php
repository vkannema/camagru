<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="/login/create" method="post">
		<div>
			<label for="inputEmail">Email adress</label>
			<input type="email" id="inputEmail" name="email" placeholder="Email adress" value="<?php $email ?>"/>
		</div>
		<div>
			<label for="inputPassword">Password</label>
			<input type="password" id="inputPassword" name="password" placeholder="Password" />
		</div>
		<button type="submit">Log in</button>
	</form>

</body>
</html>
