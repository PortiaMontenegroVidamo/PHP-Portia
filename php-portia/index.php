<!DOCTYPE html>
<html>
<head>
	<?php echo "Hello World"; ?>

	<title>	Log-In </title>
</head>
<body>
	<?php
// 	$title = "Master Bugs Site";
	
// 	echo 56 + 56;
// 	$number1 = 200;
// 	$number2 = 200;
	
	
// 	<br>
	
	
// 	echo $number1 + $number2 = "";
	
	
// 	$arrayNumber = array(190, 280, 780, "90", "200");

// 	$user = array("Username" => "James Roncy", "Password" => "Darna");

// 	print_r ($arrayNumber); 
// 	echo "<br>";
// 	//echo($arrayNUmber);
// 	print_r ($user);
// 	echo "<br>";

// 	echo $arrayNumber[0] . "<br>";
// 	echo $user["Username"] . " " . $user["Password"];
	 


// if (3 > 10) {
// 	echo "You're wrong";
// } else if (4 > 5 ) {
// 	echo "You're right";
// } else {
// 	echo "it's not!";
// }




//for ($i=0; $i < 10; i++){
	//echo $i . "<br>";
//}

	
	//<h1><?php echo $title; ?></h1>

	<h1>Log-In</h1>
	<div>
		<form method="post">
			<label>Username:</label>
			<input type="text" name="username"> //stored in backend
			<br>
			<label>Password:</label>
			<input type="password" name="password">
			<br>
			<input type="submit" name=""> //stored in super global post in backend
			
		</form>
	</div>


?>
</body>
</html>