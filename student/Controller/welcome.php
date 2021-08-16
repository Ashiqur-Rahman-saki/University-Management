<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Profile</title>
	<link rel="stylesheet" href="../View/css/welcome.css">
</head>
<body>
 
	<?php
	
	session_start();
	if(!isset($_SESSION['s_id']))
		header("location:../");

	
	 $page = 'welcome';
	 include('../View/html/header.php');
 	 include('../Model/dbwelcome.php');
 


			
            $profile_id = $_SESSION['s_id'];
  
            $profile_data = getProfileData($profile_id);
            for ( $i = 0; $i < count($profile_data); $i++)
            { 
                    if($profile_data[$i]["Username"] == $profile_id)
                    {
                        $Firstname = $profile_data[$i]['Firstname'];
                        $Lastname = $profile_data[$i]['Lastname'];
                        $Gender = $profile_data[$i]['Gender'];
                        $Email = $profile_data[$i]['Email'];
                        $Username = $profile_data[$i]['Username']; 
                    }
            }

 	?>
	 

	<div class="body">
	 <div class="container">
	 	<div class="card">
	 		<div class="box">
	 			<div class="content">
	 				<h2>Profile</h2>
 	 				<a href="#">Name: <?php echo $Firstname." ".$Lastname ?></a>
	 				<a href="#">User ID : <?php echo $Username ?></a>
	 				<a href="#">Gender : <?php echo $Gender ?></a>
	 				<a href="#">Email : <?php echo $Email ?></a>
	 			</div>
	 		</div>
	 	</div>
	 	
	 </div>
	 </div>
	
 
 


 	<?php
 	
	include('../View/html/footer.html');
	?>
	

	
</body>
</html>