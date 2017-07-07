<?php require_once("header.php") ?>
<?php
if (isset($_SESSION['user'])){
?><script src="script.js"></script>
<div class="container">
  <div class="camera">
    <video id="video">Video stream not available.</video>
    <button id="startbutton">Take photo</button> 
  </div>
  <canvas id="canvas">
  </canvas>
  
</div>
<div class="output">
    <img id="photo" alt="The screen capture will appear in this box."> 
  </div>
<?php
} else {?>
<div class="container">You need to login first to share photos</div>
<?php } ?>
<?php require_once("footer.php") ?>
</html>