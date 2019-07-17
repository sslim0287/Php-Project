<?php
include ('Project_Header.php');
echo "<div class='container'>";

	if(isset($_POST['submitted'])){
		$name = $_POST['name'];
		$year = $_POST['year'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$birthdate = $_POST['year']."/".$_POST['month']."/".$_POST['day'];
		$user = $_POST['user'];
		$password = $_POST['password'];
		$db = mysqli_connect('localhost','root','');
		mysqli_select_db($db,'project');
		if (!$db) {
			echo "Error 1.".mysqli_connect_error($db);
		}
		else
		{
			$query = mysqli_query($db,"INSERT INTO member (name, birthdate,
										   user, password , id, type)
										   VALUES ('$name', '$birthdate',
										   '$user', '$password', '0', 'user')");
				if($query)
				{
					echo "Account successfully created.";
					echo "Please log in in log in tab";
					
				}
				else
				{
					echo "Error create account. ".mysqli_error($db);
				}
				mysqli_close($db);
			}
		}
echo"	


 <form action='Project_Register.php' method='post'>
  <div class='container'>
    <h1 style='margin-left: 288px;'>Register</h1>
	<br/>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for='user'><b style='float: left;'>Name: </b></label>
	<br/>
    <input type='text' placeholder='Enter Name' name='name' required>
	<br/>";

	
echo"
	<br/>
	<label for='birthdate'><b>Birth Date: </b></label>
	<br/>
	Date: 
	<select name='day' style='margin-left: 50px;' required>
	<option value=''>Date</option>";

for ($i=1;$i<=31;$i++){
echo "<option value='$i'>$i</option>";
}
echo "
</select>
<br/>
Month:
	<select name='month' style='margin-left: 38px;' required>
	<option value=''>Month</option>";
	
for ($i=1;$i<=12;$i++){
echo "  <option value='$i'>$i</option>";
}

echo"
</select>
<br/>
Year:
<select name='year' style='margin-left: 51px;' required>
<option value=''>Year</option>";
 
for ($i=date("Y");$i>=1920;$i--){
echo "<option value='$i'>$i</option>";
}
echo "
</select>
<br/><br/><br/>

<label for='user'><b>Username: </b></label>
<br/>
<input type='text' placeholder='Enter Username' name='user' required>
	<br/>
	<br/>
   <label for='password'><b>Password: </b></label>
<br/>
<input type='password' placeholder='Enter Password' name='password' required>";

echo"
    <hr>
    <p>By creating an account you agree to our <a href='#'>Terms & Privacy</a>.</p> <br/>
	<input type='hidden' name='submitted' value='true'>
    <button type= 'submit' class='registerbtn' style='margin-left: 228px;'>Register</button>
  </div>
   <div class='container signin'>
	<br/><br/>
    <p>Already have an account? <a href='Project_SignIn.php'>Sign in</a>.</p>
	<br/><br/>
  </div>
  </form> 
</div>";
	include ('Project_Footer.html');
?>