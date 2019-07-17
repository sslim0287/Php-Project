<?php
echo'
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="slide.css">
	<link rel="stylesheet" type="text/css" href="home.css">

	<!-- Bootstrap -->
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<!--<link href="ionicons/css/ionicons.min.css" rel="stylesheet">-->
</head>
<body>
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">';
			if (isset($_GET['user'])){
				echo'<a href="Project_Home.php?user='.$_GET['user'].'"><br><h1>College<span>list &nbsp;</span></h1></br></a>';
			}
			else{
				echo'<a href="Project_Home.php"><br><h1>College<span>list &nbsp;</span></h1></br></a>';
			}
			echo'
			&nbsp; &nbsp;
			</div>
			<div class="navbar">
			  <div class="dropdown">
				<button class="dropbtn"><b>&#9776;</b>
				  <i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">';
				if(isset($_GET['user'])){
				echo'
					<a href="Project_Home.php?user='.$_GET['user'].'"><li>Home</li></a>
					<a href="Project_Edit.php?user='.$_GET['user'].'"><li>Edit Password</li></a>
					<a href="Project_SignOut.php?user='.$_GET['user'].'"><li>Sign Out</li></a>
					<a href="Project_College.php?user='.$_GET['user'].'"><li>College</li></a>
					<a href="Project_About.php?user='.$_GET['user'].'"><li>About Us</li></a>
					<a href="Project_Contact.php?user='.$_GET['user'].'"><li>Contact Us</li></a>
					<a href="Project_Review.php?user='.$_GET['user'].'"><li>Review</li></a>
					';
					}
					else{
					echo'
					<a href="Project_Home.php"><li>Home</li></a>
					<a href="Project_Register.php"><li>Register</li></a>
					<a href="Project_SignIn.php"><li>Sign In</li></a>
					<a href="Project_College.php"><li>College</li></a>
					<a href="Project_About.php"><li>About Us</li></a>
					<a href="Project_Contact.php"><li>Contact Us</li></a>
					<a href="Project_Review.php"><li>Review</li></a>';
					}	
					echo'
				</div>
			  </div>
			</form>
			  <div class="topnav">';
			  if(isset($_GET['user'])){
			  echo'<form action="Project_College.php?user='.$_GET['user'].'" method="POST">';}
				  else{
					  echo'<form action="Project_College.php" method="POST">';
				  }
			  echo'
				<input type="text" placeholder=" Search.." name="search">
				<button style=\'float: right;\' type="submit">Search</button>
				</form>
			  </div> 
			<a><li>Date/Time: <span id=\'datetime\'></span></li></a>
			<script>
			var dt = new Date();
			document.getElementById(\'datetime\').innerHTML = dt.toLocaleString();
			float: right;
			</script>
				
			  
			</div>
			
			</div>
			<br/>
			
</div>';

?>