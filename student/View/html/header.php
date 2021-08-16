<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<body>

	<style>
*{
	margin: 0;
	padding: 0;
	
	font-family: Verdana;
}
body{
	background-color: #ebf5fc;
	min-height: calc(100vh);
}
a, h1, li, button{
	text-decoration: none;
	color: #0B2836;
}
header{
	display: flex;
	justify-content: space-between;
	align-items: center;
	position: sticky;
	top: 0;
	background-color: rgba(111, 143, 149, .3);
	
	box-shadow: 0 0 10px rgba(50, 50, 50, .6);
	z-index: 5;
	transition: all .9s ease 0s;
}
header:hover{
		background-color: rgba(111, 143, 149, .6);
}
.logo{
	display: flex;
	justify-content: center;
	align-items: center;
}

.logo img{
 	padding: 10px 20px;
 	width: 35px;
	height: 35px;
  }
.title{
	font-weight: 800;
	font-size: 20px;
	padding: 0 10px;
	letter-spacing: .2rem;
	cursor: pointer;

   }

.title::first-letter { 
			color: red;
			font-weight: bolder;
			font-size: 1.2em;
}

.nav-link li{
	list-style: none;
	display: inline-block;
}

.nav-link li a{
	padding: 15px 25px;
	transition: all .3s ease 0s; 
 	border-radius: 8px;
  }
.nav-link li a:hover{
	color: white;
	background-color: #229E61;
}
.setting img{
	width: 30px;
	height:30px;
	margin-right: 20px;
	padding: 15px;
 	transition: .4s;
 	cursor: pointer;
 	border-radius: 50%;

   }
.setting img:hover{
	transform: rotate(45deg);
	
	background-color: rgba(255,255,255,.5);
  }
 .setting:hover .dropdown-content{
 		display: block;
  }
 .dropdown-content{
 	position: absolute;
  	right: 0px;
 	text-align: left;
 	min-width: 150px;
 	display: none;
  }
  .dropdown-content a{
 	display: block;
 	padding: 10px;
	margin-top: 5px;
	background-color: rgba(111, 143, 149, .8);
  	border-radius: 5px;


  } 
  .dropdown-content a:hover{
 	color: white;
	background-color: #229E61;
  }

  .active {
	color: white;
	background-color: #229E61;

 }




	 
</style>
  

    <header>
		<div class="logo" >
	 		<img src="../View/img/student-logo.png" alt="Logo">
 	 		<a class="title" href="../Controller/welcome.php">Student</a>
		</div>
 		<nav>
 			<ul class="nav-link">
 				<li><a class="<?php if($page == 'welcome'){echo 'active';} ?>" href="../Controller/welcome.php">Home</a></li> 
				<li><a class="<?php if($page == 'addedcourse'){echo 'active';} ?>" href="../Controller/addedcourse.php">Offered Courses</a></li>   
				<li><a class="<?php if($page == 'addcourse'){echo 'active';} ?>" href="../Controller/addcourse.php">Add Course</a></li> 

				<li><a class="<?php if($page == 'coursehistory'){echo 'active';} ?>" href=" ../Controller/coursehistory.php ">Course history</a></li>  
			 
		 		
 		</nav>
  			<div class="setting">
 				<img src="../View/img/setting.svg" alt="Setting" title="Settings">
  				<div class="dropdown-content">
		 			<a href="../Controller/logout.php">Logout </a> 
					<a class="<?php if($page == 'changepassword'){echo 'active';} ?>" href="../Controller/changePassword.php">Change password </a>	
					<a class="<?php if($page == 'updateprofile'){echo 'active';} ?>" href="../Controller/updateprofile.php">Update Profile </a>	
 				</div>
 			</div>
	</header>

<body>
	
</body>
 </html>