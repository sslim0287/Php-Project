<?php
$user = $_GET['user'];

if(isset($_GET['changeuser'])){
	if ($_GET['changeuser'] == $user){
		include('Project_Header.php');
		displayChangePassword();
	}
	else{
		include('Project_Header.php');
		$changeuser = $_GET['changeuser'] ;
		$db5 = mysqli_connect('localhost','root','');
					mysqli_select_db($db5,'project');
					if (!$db5) {
						echo "Error 1.".mysqli_connect_error($db5);
					}
					else
					{
						$query5 = mysqli_query($db5,"UPDATE member SET password = '12345' WHERE user = '$changeuser'");
					if($query5)
					{
						echo "<h3>Password Reset! (default password is '12345')</h3>";
					
					}
					else
					{
						echo "Error change password. ".mysqli_error($db5);
					}
					mysqli_close($db5);
					}
	}
}
else if(isset($_GET['deleteuser'])){
	include('Project_Header.php');
		$deleteuser = $_GET['deleteuser'] ;
		$db6 = mysqli_connect('localhost','root','');
					mysqli_select_db($db6,'project');
					if (!$db6) {
						echo "Error 1.".mysqli_connect_error($db6);
					}
					else
					{
						$query6 = mysqli_query($db6,"DELETE FROM member WHERE user = '$deleteuser'");
					if($query6)
					{
						echo "<h3>Account deleted!</h3>";
					
					}
					else
					{
						echo "Error delete account. ".mysqli_error($db6);
					}
					mysqli_close($db6);
					}
}
else{
if(isset($_POST['submitted'])){
	$password = $_POST['password'];
	$newPassword = $_POST['newPassword'];
	$db2 = mysqli_connect('localhost','root','');
	mysqli_select_db($db2,'project');
	if (!$db2)
	{
		echo "Error! ".mysqli_connect_error($db2);
	}
	else
	{
	$query2 = mysqli_query($db2,"SELECT password FROM member WHERE user='$user'");
		if($query2){
			while ($row2 = mysqli_fetch_assoc($query2)){
				if ($row2['password'] == $password){
					include('Project_Header2.php');
					$db3 = mysqli_connect('localhost','root','');
					mysqli_select_db($db3,'project');
					if (!$db3) {
						echo "Error 1.".mysqli_connect_error($db3);
					}
					else
					{
						$query3 = mysqli_query($db3,"UPDATE member SET password = '$newPassword' WHERE user = '$user'");
					if($query3)
					{
						echo "<h3>Password Changed!</h3>";
					
					}
					else
					{
						echo "Error change password. ".mysqli_error($db3);
					}
					mysqli_close($db3);
					}
				}
				else{
					include('Project_Header.php'); 
					displayChangePassword();
				}
			}
			
		}
	}
mysqli_close($db2);
}
else{
	include('Project_Header.php'); 
$db = mysqli_connect('localhost','root','');
mysqli_select_db($db,'project');
if (!$db)
{
echo "Error! ".mysqli_connect_error($db);
}
else
{
$query = mysqli_query($db,"SELECT type FROM member WHERE user='$user'");
	if($query){
		while ($row = mysqli_fetch_assoc($query)){
			if ($row['type'] == "user"){
					displayChangePassword();
				} 
			else 
			{
				$db4 = mysqli_connect('localhost','root','');
				mysqli_select_db($db4,'project');
				if (!$db4){
					echo "Error! ".mysqli_connect_error($db4);
				}
				else{
					$query4 = mysqli_query($db,"SELECT * FROM member");
					if($query4){
						echo "
						<form action='Project_Edit.php?user=".$_GET['user']."' method='post'>
						<style>
						table {
								font-family: arial, sans-serif;
								border-collapse: collapse;
								width: 100%;
								}

						td, th {
								border: 2px solid #000000;
								text-align: left;
								padding: 8px;
								}

						tr:nth-child(even) {
								background-color: #dddddd;
								}
						tr:nth-child(odd) {
								background-color: #FFFFFF;
								}</style>
								<br/>
								<br/>
								<center>
								<table>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>User</th>
									<th>Password</th>
									<th>Birthdate</th>
									<th>Type</th>
									<th>Edit Password</th></tr>";
						while ($row4 = mysqli_fetch_assoc($query4)){
							echo "<tr>
									<td>".$row4["id"]."</td>
									<td>".$row4["name"]."</td>
									<td>".$row4["user"]."</td>
									<td>".$row4["password"]."</td>
									<td>".$row4["birthdate"]."</td>
									<td>".$row4["type"]."</td>
									<td>";
									if($row4['type'] == "admin"){
										echo "<a href='Project_Edit.php?user=".$_GET['user']."&changeuser=".$row4['user']."'>Change</a>";
									}
									else{
										echo "<a href='Project_Edit.php?user=".$_GET['user']."&changeuser=".$row4['user']."'>Reset</a>";
										echo "<a href='Project_Edit.php?user=".$_GET['user']."&deleteuser=".$row4['user']."'>&ensp;&ensp;Delete</a>";
									}
									echo "</td></tr>";
						}
					}
					echo "</center></form>";
				}
				mysqli_close($db4);
			}	
		} 
	}
}
mysqli_close($db);
}
}

function displayChangePassword(){
echo"
				<form action='Project_Edit.php?user=".$_GET['user']."' method='post'>
				<center>
				<div class='container'>";
				if(isset($_POST['submitted'])){
					echo "<label for='errorMsg'><b style='float: left;'>Wrong Password! Please try again or contact admin!</b></label>";
				}
				echo"
				<br/>
				<label for='password'><b style='float: left;margin-left: 380px;'>Current Password: </b></label>
				<br/>
				<input type='password' placeholder='Enter Password' name='password' required>
				<br/>
				<label for='password'><b style='float: left;margin-left: 380px;'>New Password: </b></label>
				<br/>
				<input type='password' placeholder='Enter Password' name='newPassword' required>
				<br/>
				<button type='submit' class='registerbtn'>Submit</button>
				</div>
				<input type='hidden' name='submitted' value='true'>
				</center>
				</form>";
	
}

?>