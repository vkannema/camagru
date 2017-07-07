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
		Camagru
	</nav>
	<div class="container">
	<?php>
		print_r($_SESSION);
	<?>
		<div class="camera">
			<video id="video">Video stream not available</video>
			<canvas id="canvas">
  			</canvas>
				
		</div>
	<button id="startbutton">Take photo</button>
	<div class="output">
    				<img id="photo" alt="The screen capture will appear in this box."> 
  		</div>
	</div>
	
	<footer>
		@vkannema
	</footer>
</body>