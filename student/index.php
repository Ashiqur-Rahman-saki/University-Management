<?php 

	session_start();
	if(isset($_SESSION['s_id']))
		header('location:../student/Controller/welcome.php');
	     
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="View/css/index.css">
</head>
<body>
	 <div class="container">
	 	<div class="card">
	 		<div class="box">
	 			<div class="content">
	 				<h3>Log In here</h3>
	 				<p> </p>
	 				<a href="Controller/login.php">Log In</a>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="card">
	 		<div class="box">
	 			<div class="content">
	 				<h3>Create Account</h3>
	 				<p> </p>
	 				<a href="Controller/signup.php">Sign Up</a>
 	 			</div>
	 		</div>
	 	</div>
	 </div>
	
</body>
</html>