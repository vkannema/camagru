<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Home</title>
</head>
<body>
	<h1>Welcome</h1>
	<p>
		Hello from the view!
	</p>

	<h1>Output escaping</h1>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			echo "Hello; " . htmlspecialchars($_POST['name']);
		}
	?>
	<form method="post">
		<div>
			<label for="name">Your name</label>
			<input id="name" name="name" autofocus />
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>
