<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="res";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome!!!!</title>
</head>
<body align ="center">
	<form action="<?php echo htmlspecialchars($SERVER["PHP_SELF"])?>" method="post"> <h1>User Login</h1>
		<input type="submit" name="submit" value="Login as Admin">
		<h1><a href="adminlog.php"></a></h1>
		<input type="submit" name="submit" value="Login as Customer">
		<h2><a href="index.php"></a></h2>
		<input type="submit" name="submit" value="Login as Staff">
		<h3><a href="stafflog.php"></a></h2>
	</form>

</body>
</html>