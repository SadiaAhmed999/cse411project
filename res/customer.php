<?php
  session_start();
  if(empty($_SESSION["name"])) {
  	header("location: index.php");
  	exit;
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>welcome</title>
  </head>
  <body>
  	<h1>HI,<?php echo htmlspecialchars($_SESSION["name"]); ?> </h1>
  	<h2><a href="signout.php">Sign Out</a></h2>
  
  </body>
  </html>