

<?php require "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if(isset($_POST['submit'])){
	
	updateTable();

	// if(!$result){
	// 	die("QUERY FAILED" . mysqli_error());
	// }

}


?>


<!DOCTYPE html>
<html>
<head>

	<title>	UPDATE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container border border-primary col-lg-6 mx-auto rounded-lg">
		<h1>UPDATE</h1>
		<div>
			<form method="post" action="login-update.php">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control">
					
				</div>
				<select name="id" id="">
					<?php
							showData();
					?>
				</select>

				<br>
				<input type="submit" name="submit" value="UPDATE" class="btn btn-primary">

					

			</form>
		</div>
	</div>			

</body>
</html>