<?php
include("auth.php");
if (isset($_POST['submit']))
{
	if ($_POST['login'] && $_POST['passwd'])
	{
		if (auth($_POST['login'], $_POST['passwd']) == TRUE)
		{
			$_SESSION['loggued_on_user'] = $_POST['login'];
			header('Location: index.php');
		}
		else
			$error = "Wrong id or password";
	}
	else
		$error = "Please fill all the champs";
}
?>

<?php require_once("header.php");?>

<div class="container">
<h1>Login</h1>
<form method="post" action="login.php">
            Login: <input type="text" name="login" required/></br>
			Password: <input type="password" name="passwd" required/></br>
			<input type="submit" name="submit" value="Log in" />
</form>
You don't have an account ? Please <a href="create.php">sign in</a>

<?php require_once("footer.php");?>