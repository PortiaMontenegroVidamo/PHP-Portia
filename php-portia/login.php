<?php
		if (isset($_POST['submit'])){
			$username = $_POST["username"];
			$password = $_POST["password"];

			$connection = mysqli_connect("localhost", "root", "", "testphp");

				if($connection){
					echo "We are connected";
				}else {
					die("DB connection failed");
				}


				//CREATE insert

				$query = "INSERT INTO users (username,password) VALUES ('$username', '$password')";
				$result = mysqli_query($connection, $query);
				//validation
				if (!$result){
					die('Query FAILED' .mysqli_error());
				}

		}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container border border-primary col-lg-6 mx-auto rounded-lg">
		<h1>CREATE</h1>
		<div>
			<form method="post" action="login.php">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control">
					
				</div>
				
				<input type="submit" name="submit" value="create" class="btn btn-primary">
			</form>
		</div>
	</div>			


</body>
</html>