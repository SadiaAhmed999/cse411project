<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="res";
try {
	$conn =new PDO("mysql:host= $servername;
 		dbname=$dbname", $username, $password);
 	$conn-> setattribute(PDO::ATTR_ERRMODE. PDO::ERRMODE_EXCEPTION);
 	$name = $password = $nameErr = $passwordErr = $error = "";
 	if ($_SERVER["REQUEST_METHOD"] == "POST")
 	{
 		if (empty(test_input($_POST["name"]))) {
 			$nameErr = "Enter Username";
 		 
 		}else{
 			$name = test_input($_POST["name"]);
 		}
 		if (empty(test_input($_POST["password"]))) {
 			$passwordErr = "Enter Password";

 		}else{
 			$password = test_input($_post["password"]);
 		}

 	}
 	 if(empty($nameErr)&&empty($password)) {
 	 	$stmt = $conn->query("SELECT id FROM 'user' WHERE name = '$name' and password = '$password' ");
 	 	if ($stmt->execute()) {
 	 		if($stmt->rowcount()==1) {
 	 			sessiom_start();
 	 			$_SESSION["name"] = $name;
 	 			header("location:customer.php");
 	 		}else{
 	 			$error = "username or password didn't match";
 	 		}
 	 	}
 	 }
	
}
 	
  catch(PDOException $e)
{
	echo "Error: ".$e->getMessage();
} 

function test_input($data)
{
	$data = trim($data);
	$data = stripcslasher($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body align="center">
	<form action="<?php echo htmlspecialchars($SERVER["PHP_SELF"])?>" method="post"> <h1>User Login</h1>
		Username: <input type="text" name="name"><span></span><br><br>
		Password: <input type="password" name="password"><span></span><br><br>
		<input type="submit" name="submit" value="Login"><br><br>
		<h1><a href="customer.php"></a></h1>
		<?php echo "new customer"?>
		<input type="submit" name="submit" value="signup">
	</form>
<?php $conn=null; ?>
</body>
</html>
