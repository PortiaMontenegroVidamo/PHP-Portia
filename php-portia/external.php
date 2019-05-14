<?php
//pag validate ng form, kung gumagana ang submit button

if(isset($_POST['submit'])){
	//$username = $_POST["username"];
	//$password = $_POST["password"];

	//echo "Hello " . $username;
	//echo "Your password is " . $password;

//login naman

$name = array("Adrian", "Jande", "Loreto", "Khim Shae", "Dan Leuter", "Roy");
$maximum = 10;
$minimum = 5;

$username = $_POST["username"];
$password = $_POST["password"];

	if(strlen($username) < $minimum){
		echo "Username has to be longer than 5 characters";
	}
	if(strlen($username) > $maximum){
		echo "Username cannot be longer than 10 characters";
	}
	//bagong if
	if(!in_array($username, $name)){
		echo "Sorry you're not allowed to login";
	}else {
		echo "Welcome";
	}


}

?>




<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
		<!-- <form method="post" action="external.php">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="submit">
</form>
 -->

</body>
</html>