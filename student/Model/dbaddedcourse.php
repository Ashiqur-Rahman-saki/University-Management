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


	function getStudentId($studentId)
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM allcourses WHERE studentId = ?");
 		$statement->bind_param("i", $studentId);
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); 
	} 


 	function updateStudent($currentBorrow, $allhistory, $courseid, $studentId)
	 {
 		$conn = connect(); 
 		$statement = $conn->prepare("UPDATE allcourses SET currentBorrow = ?,allhistory = ?,courseid = ? WHERE studentId = ?");  
	 	$statement->bind_param("iiii",$currentBorrow,$allhistory,$courseid, $studentId);
		return ($statement->execute()); 
 	}


 	function getBorrowHistory()
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM allcourses");
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); 
	} 
 


 ?>