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
<style>
header {
	width: 100%;
	height: 100px;
	display: block;
	background-color: #101010;
	
}

time {
	float: right;
	margin-top: 68px;
}
	

</style>
<body>
	<header>
		<div class="inner_header">
			<div class="logo_container">';
			if(isset($_GET['user'])){
				echo'
			<a href="Project_Home.php?user='.$_GET['user'].'"><br><h1>College<span>list &nbsp;</span></h1></br></a>';}
			else{
			echo'<a href="Project_Home.php"><br><h1>College<span>list &nbsp;</span></h1></br></a>';
			}
			echo'
			&nbsp; &nbsp;
			</div>
			
			  
			<time><a><li>Date/Time: <span id=\'datetime\'></span></li></a></time>
			<script>
			var dt = new Date();
			document.getElementById(\'datetime\').innerHTML = dt.toLocaleString();
			float: right;
			</script>
				
			  
			</div>
			
			</div>
			<br/>
			
</header>
';
?>