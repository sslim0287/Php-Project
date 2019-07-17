<?php
	include ('Project_Header.php');
	
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		echo'<style>
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

#site-content {
	width:100%;
	float:left;
	background-color: #ffffff;
	}	
	</style>
	<div id="site-content">
	<br/>
	<center><h1>&nbsp Search Results</h1><br></br></center>
	<center>
			<ul> ';
		if($search != ""){
		if (preg_match("/{$search}/i","INTI" )){
			echo'
			<li id="context">  <a href="college/INTI/Asgn_INTICollege_Home.html" target="_blank"><img src="image/college1.jpg" alt="cutter" width="290" height="290"></a><center>INTI International University & College</center></li>';
		}
		if (preg_match("/{$search}/i","SEGI" )){
			echo'
			<li id="context">  <a href="college/SEGI/SEGICollege_Home.html" target="_blank"><img src="image/college3.jpg" alt="Office box" width="290" height="290"></a><center>SEGI University College<br/><br/></center></li> ';
		}
		if (preg_match("/{$search}/i","DISTED" )){
			echo'
			<li id="context">  <a href="college/DISTED/home.html" target="_blank"><img src="image/college4.jpg" alt="Child set" width="290" height="290"></a><center>DISTED University College<br/><br/></center></li>';
		}
		if (preg_match("/{$search}/i","KDU" )){
			echo'
			<li id="context">  <a href="college/KDU/Asgn_KDUCollege_Home.html" target="_blank"><img src="image/college2.jpg" alt="File" width="290" height="290"></a><center>KDU University College<br/><br/></center></li>';
		}
		if (preg_match("/{$search}/i","SUNWAY" )){
			echo'
			<li id="context">  <a href="college/SUNWAY/home.html" target="_blank"><img src="image/college5.jpg" alt="box2" width="290" height="290"></a><center>SUNWAY University College<br/><br/></center></li>';
		}
		if (preg_match("/{$search}/i","TAR" )){
			echo'
			<li id="context">  <a href="college/TAR/TARCollege_Home.html" target="_blank"><img src="image/college6.jpg" alt="stapler" width="290" height="290"></a><center>TARC University College<br/><br/></center></li>';
		}
		}
		else{
			echo '<h3>No result found!</h3>';
		}
		echo'</ul>
</center>
</div>';
	}
	else{
echo'
<style>
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

#site-content {
	width:100%;
	float:left;
	background-color: #ffffff;
	}	
</style>
<div id="site-content"> 
<br/>
<center><h1>&nbsp Colleges</h1><br></br></center>
<center>
<ul> 
<li id="context">  <a href="college/INTI/Asgn_INTICollege_Home.html" target="_blank"><img src="image/college1.jpg" alt="cutter" width="290" height="290"></a><center>INTI International University & College</center></li> 
<li id="context">  <a href="college/SEGI/SEGICollege_Home.html" target="_blank"><img src="image/college3.jpg" alt="Office box" width="290" height="290"></a><center>SEGI University College<br/><br/></center></li> 
<li id="context">  <a href="college/DISTED/home.html" target="_blank"><img src="image/college4.jpg" alt="Child set" width="290" height="290"></a><center>DISTED University College<br/><br/></center></li> 
<li id="context">  <a href="college/KDU/Asgn_KDUCollege_Home.html" target="_blank"><img src="image/college2.jpg" alt="File" width="290" height="290"></a><center>KDU University College<br/><br/></center></li> 
<br/><br/>
<li id="context">  <a href="college/SUNWAY/home.html" target="_blank"><img src="image/college5.jpg" alt="box2" width="290" height="290"></a><center>SUNWAY University College<br/><br/></center></li> 
<li id="context">  <a href="college/TAR/TARCollege_Home.html" target="_blank"><img src="image/college6.jpg" alt="stapler" width="290" height="290"></a><center>TARC University College<br/><br/></center></li>
<br/><br/><br/><br/><br/>
</ul>
</center>
</div>
	';}
	
	include ('Project_Footer.html');
?>