<?php
	include ('Project_Header.php');
	
	include ('Project_Home.html');
	
	display();
	

function display(){
	echo '
<style>
#site-content {
	width:100%;
	float:left;
	background-color: #ffffff;
	}
#context {  
    display: inline-block; 
    width: 290px;  
	padding-bottom: 10px; 
	margin: 8px;   
	background-color: #ffb6c1;   
	text-align: left;   
	font-style: Times New Roman;
	font-size: 20px;
	padding: 5px;
	border: 1px solid black;
	}
</style>

<div id="site-content">
';

if(isset($_GET['user'])){
		echo '<h1>Welcome, '.$_GET['user'].'</h1>';
	}
	echo'
&nbsp;
<h1><center>Featured Colleges:</center></h1>
<center>
<p id="context"><img src="image/college1.jpg" alt="inti" width="288" height="288">INTI International University & College</p>
<p id="context"><img src="image/college3.jpg" alt="segi" width="288" height="288">SEGI University College<br></br></p>
<p id="context"> <img src="image/college4.jpg" alt="disted" width="288" height="288">DISTED University College<br></br></p>
<p id="context"> <img src="image/college2.jpg" alt="kdu" width="288" height="288">KDU University College<br></br></p>
<p id="context"> <img src="image/college5.jpg" alt="sunway" width="288" height="288"><br></br>SUNWAY University College</p>
<p id="context"> <img src="image/college6.jpg" alt="tarc" width="288" height="288"><br></br>TARC University College</p>
<br></br>
</center>
<h3><center>For More Information, Please see College Page <span style=\'font-size:28px;\'>&#128522;</span></br>
<br>
<img src="image/check.png" width="500" height="" alt="check" usemap="#check"></center>
<map name="check">
	<area shape="rect" coords="0,0,500,200" alt="checking" href="Project_College.php">
</map>
</br>
</h3>
	</div>';
}
	include ('Project_Footer.html');

?>