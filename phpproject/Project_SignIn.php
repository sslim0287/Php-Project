<?php
include('Project_Header.php');

if(isset($_POST['submitted'])){
$user = $_POST['user'];
$pwd = $_POST['password'];
$db = mysqli_connect('localhost','root','');
mysqli_select_db($db,'project');
if (!$db)
{
echo "Error! ".mysqli_connect_error($db);
}
else
{
$query = mysqli_query($db,"SELECT user, password FROM member");
	if($query){
	while ($row = mysqli_fetch_assoc($query)){
	if ($user == $row['user'] && $pwd == $row['password']){
		header("Location: Project_Home.php?user=$user");
		} 
	else 
	{
		signIn("Invalid user! Please register if you do not have user account.");
	}
	
	} 

	}
}
mysqli_close($db);
}
	
else{
	signIn("");
}

function signIn($message){
	echo "
	<style>
#temp{
	margin-bottom : 228px;
}
</style>
<div class='container'>";
echo $message;
echo "
	<form action='Project_SignIn.php' method='post'>
<center>
<div class='container'>
    <h1>Sign In</h1> <br/> <br/>
<label for='user'><b style='float: left; margin-left: 360px;'>Username: </b></label>
	<br/>
    <input type='text' placeholder='Enter Username' name='user' required>
	<br/>
<label for='password'><b style='float: left; margin-left: 360px;'>Password: </b></label>
	<br/>
    <input type='password' placeholder='Enter Password' name='password' required>
	<br/>
	<br/>
<button type= 'submit' class='registerbtn'>Login</button>

</div>
<input type='hidden' name='submitted' value='true'>
</center>
</form>

<p id=\"temp\"></p>
</div>
	";
}

include ('Project_Footer.html');
?>