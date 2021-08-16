<?php 
	 include "dbconnection.php";
 
	function getCourseId($courseid)
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM courses WHERE courseid = ?");
 		$statement->bind_param("i", $courseid);
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC);
	} 


	function AddCourse($coursename,$time,$room,$numberofcopy,$courseid)
	{
		$conn = connect(); 
		$statement = $conn->prepare("INSERT INTO courses (coursename,time,edition,numberofcopy,courseid)VALUES(?,?,?,?,?)"); 
	 	$statement->bind_param("sssii",$coursename,$time,$room,$numberofcopy,$courseid);
		return $statement->execute();
  	}


  	function getAllCourses()
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM courses");
		$statement->execute();
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); 
	} 


	function removeCourse($userId)
	 {
 		$conn = connect(); 
 		$statement = $conn->prepare("DELETE FROM courses WHERE courseid = ?");  
	 	$statement->bind_param("i", $userId);
		return ($statement->execute()); 
 	}


 ?>