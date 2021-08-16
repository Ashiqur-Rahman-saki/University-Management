 
		<tbody>
			<?php
			include '../Model/dbcourse.php';
			if(empty($_GET['datavalue']))
			{
				   $courseList = getAllCourses();
 				    
			}
		 	
			else 
			{
				   $courseList = getCourseId($_GET['datavalue']);
 
				    
 			}
		 		foreach ($courseList as $arr  )
				{
		  			foreach ($arr as $key => $value)
		  			{
		  				echo  "<td>".$value."</td>";
		   				if($key == "courseid")
		   				{
		   					$id = $arr["courseid"];
		  					echo "<td><a onclick=\"deleteFunction($id)\" href = '#'>Delete</a></td><tr>"; 

		   				}
					}
		 		}
			?>
		</tbody>
 


 

