<?php
include ('Project_Header.php');
?>
<?php
if(isset($_POST['submitted'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$country=$_POST['country'];
	$comment=$_POST['comment'];
if ((empty($fname)==TRUE)|| (empty($lname)==TRUE) || (empty($country)==TRUE) || (empty($comment)==TRUE)){
echo '<h1>&nbsp;&nbsp;Please complete the form. </h1>';
echo '<br/><br/>';
}
else {
echo '<h1>&nbsp;&nbsp; Thanks for the feedback </h1>';	
echo '<br/><br/>';}
	
}
else{
echo"<style>
	input[type=text], select, textarea {
	width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
	 </style>
	<form action='Contact.php' method='post'>
	<div class='container'>
	<center>
	<h1>Contact Us</h1> <br/>
	<label for='fname'>First Name</label>
        <input type='text' id='fname' name='fname' placeholder='Your name..'> <br/>
        <label for='lname'>Last Name</label>
        <input type='text' id='lname' name='lname' placeholder='Your last name..'><br/>
        <label for='country' style='margin-left:-22px;'>Country &nbsp &nbsp </label>
        <select id='country' name='country'>
          <option value='Malaysia'>Malaysia</option>
          <option value='Singapore'>Singapore</option>
          <option value='Thailand'>Thailand</option>
        </select><br/><br/>
        <label for='comment' style='margin-right:628px;'>Comment</label><br/>
        <textarea id='comment' name='comment' placeholder='Write something..' style='height:170px; margin-left:68px;'></textarea>
		<input type='hidden' name='submitted' value='true' ><br/><br/>
        <input type='submit' value='Submit' style='margin-right:628px;'><br/><br/>
	</center>
	</form>
	</div>
";	
}
	
?>
<?php
	include ('Project_Footer.html');
?>