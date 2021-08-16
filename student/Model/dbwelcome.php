<?php 
	include "dbconnection.php";
 
	function getProfileData($profileID)
	 {
 		$conn = connect();  
 		$statement = $conn->prepare("SELECT * FROM registration WHERE Username = ?");
 		$statement->bind_param("s", $profileID);
		$statement->execute(); 
		$records = $statement->get_result();
		return $records->fetch_all(MYSQLI_ASSOC); 
	} 

 
?>