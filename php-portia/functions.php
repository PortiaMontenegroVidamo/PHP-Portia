<?php
include 'db.php';

function showData(){
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection,$query);

	if(!$query){
	die('Query failed' . mysqli_error());
	} 

	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$username = $row['username'];
		echo "<option value='$id'>$id . $username</option>";
	}


}


function updateTable(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
	$result = mysqli_query($connection,$query);

	
}


function deleteTable(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "DELETE FROM users SET username = '$username', password = '$password' WHERE id = $id";
	$result = mysqli_query($connection,$query);

	
}

function redirect($site){
	header('location:read.php');
}


?>