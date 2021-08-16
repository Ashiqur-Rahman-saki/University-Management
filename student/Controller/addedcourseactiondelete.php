 	<?php 

			$success = $failed = "";
 			include '../Model/dbcourse.php';
			 
			if(!empty(basic_validation($_GET['id'])))
			{
 				$response = removeCourse($_GET['id']);
				if ($response) 
				{
					$success = "Course remove successfull"; 
					$courseList = getAllCourses();
				}
				else
					$failed = "Error while removing user";
			}

		function basic_validation($data)
	    {
		    $data = trim($data);
		    $data = htmlspecialchars($data);
		    $data = stripcslashes($data);
		    return $data;
	    }
	     
 ?>
 
  