<?php 
	 include "dbconnection.php";

	 function getAllCourses()
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM courses");
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); 
	} 

 ?>