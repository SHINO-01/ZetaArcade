<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password)) {

		//read from database
		$query = "select * from login where username = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['id'];
					header("Location: index.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>

	<style type="text/css">
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

		a {
			color: #aaa;
		}

		.log {
			background-color: #fa5353;
			border-radius: 25px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		label {
			color: #aaa;
		}

		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {

			padding: 10px;
			width: 100px;
			color: white;
			background-color: #b12cff;
			border-radius: 20px;
			border: none;

		}

		#box {


			margin: auto;
			width: 300px;
			padding: 20px;
			height: 500px;


		}
	</style>

	<div id="box" class="container">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white; text-align: center" class="log">Login</div>

			<label>username</label><input id="text" type="text" name="user_name"><br><br>
			<label>password</label><input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>

</html>