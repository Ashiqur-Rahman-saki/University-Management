<?php 

function connect()
{
 	 $conn = new mysqli("localhost","root","mysql","student"); // host, user, user pass, database name.
	 if($conn->connect_errno)
	 {
	 	die ("Connection failed due to ". $conn->connect_error);
	 }
	 
	

	 return $conn;
	}
?>