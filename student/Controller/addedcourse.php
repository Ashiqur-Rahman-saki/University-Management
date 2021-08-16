	<?php 

	
	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:../");

			$success = $failed = "";
 			include '../Model/dbcourse.php';
			if(empty(basic_validation($_GET['courseid'])))
			{
				$courseList = getAllCourses();		
			}
		 	
			else 
			{
				$courseList = getCourseId(basic_validation($_GET['courseid']));
 			}
				$courseid = $_GET['courseid'];

			if(!empty(basic_validation($_GET['uid'])))
			{
 				$response = removeCourse($_GET['uid']);
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Added Courses</title>
	<link rel="stylesheet" href="../View/css/addedcourse.css?v <?php echo time(); ?>">
    <script src="../View/js/addedcourse.js"></script>

</head>
<body>

	<?php
 	$page = 'addedcourse';
	include('../View/html/header.php');
	?>


 <div class="box"  id="update">
 </div>
 

 	<div class="table">
	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Time</th> 
				<th>Room</th>
				<th>Section</th>
				<th>Course Id</th>
				<th></th>
			</tr>
		</thead>

		<tbody  id="result">
			<?php
		 		foreach ($courseList as $arr  )
				{
		  			foreach ($arr as $key => $value)
		  			{
		  				echo  "<td>".$value."</td>";
		   				if($key == "courseid")
		   				{
		  					echo "<td><a href = '".$_SERVER['PHP_SELF']."?uid=".$arr["courseid"] ."'>Drop</a></td><tr>"; 
		   				}
					}
		 		}
			?>
		</tbody>
	</table>
	</div>

<?php include('../View/html/footer.html');?>
</body>
</html>
