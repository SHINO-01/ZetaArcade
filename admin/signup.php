<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$email =  $_POST['email'];
	if (!empty($user_name) && !empty($password)) {

		//save to database
		$user_id = null;
		$query = "insert into login (email,username,password) values ('$email','$user_name','$password')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
</head>

<body>

	<style type="text/css">
		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		body {
			background-color: #322f40;
		}

		.container {
			width: 90%;
			border: 3px solid #b12cff;
			background-color: #1b182b;
			margin: 0 auto;
			padding: 1%;
			border-radius: 15px;
			margin-bottom: 2%;
		}

		#button {

			padding: 10px;
			width: 100px;
			color: white;
			background-color: #b12cff;
			border-radius: 20px;
			border: none;
		}

		a {
			color: #aaa;
		}
		label{
			color: #aaa;
		}

		.log {
			background-color: #fa5353;
			border-radius: 25px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#box {


			margin: auto;
			width: 300px;
			padding: 20px;
		}
	</style>

	<div id="box" class="container">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white; text-align: center" class="log">Signup</div>

			<label>User name </label> <input id="text" type="text" name="user_name"><br><br>
			<label>password</label><input id="text" type="password" name="password"><br><br>
			<label>email </label><input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>

</html>