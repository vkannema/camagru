<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Home</title>
</head>
<body>
	<h1>Welcome <?php echo htmlspecialchars($name)?></h1>

	<ul>
		<?php foreach ($colours as $colour) : ?>
			<li>
				<?php echo htmlspecialchars($colour); ?>
			</li>
		<?php endforeach; ?>
	</ul>

</body>
</html>
