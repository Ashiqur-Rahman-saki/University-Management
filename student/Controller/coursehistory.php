<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Course history</title>
	<link rel="stylesheet" href="../View/css/coursehistory.css?v <?php echo time(); ?>">
</head>
<body>

	<?php


	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:../");

 	$page = 'coursehistory';
	include('../View/html/header.php');
	include '../Model/dbaddedcourse.php';
	$courseList = getBorrowHistory();
	?>


 	
	<div class="table">
	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Course Id</th> 
				<th>State</th>
				<th>Course Grade</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			<?php
		 		foreach ($courseList as $arr  )
				{
		  			foreach ($arr as $key => $value)
		  			{
		  				echo  "<td>".$value."</td>";
		   				if($key == "grade")
		   				{
		   					if($arr["state"] == 0) 
		   					{
 		   						?>
 		   						<td><div class="status-no">Dropped</div></td>
 		   						<?php

		   					}
		   					else
		   					{
		   						 ?>
  		   						<td><div class="status-yes">Passed</div></td>
 		   						<?php
		   					}
		  					echo "<tr>"; 
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
