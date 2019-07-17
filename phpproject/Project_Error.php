<?php
	session_start();
	if (isset($_SESSION['errorQuery'])){
		$errorQuery = $_SESSION['errorQuery'];
	}
	$errorMsg = $_SESSION['errorMsg'];
	$error_id = $_GET['err'];
?>

<!DOCTYPE html>
<html lang="en">
	
		<?php
		//header
		include "Project_Header.php";
		?>
		<!-- Main container -->
		<div class="container main-container clearfix"> 
			<div class="col-md-12">
				<div class="h-90"></div>
				<h2 style="text-align:center;">Please complete the form.</h2>
				<?php 
				if (isset($errorQuery)){
					echo "<h4 style='text-align:center;'>Error:$errorQuery $errorMsg</h4>"; 
				} else {
					echo "<h4 style='text-align:center;'>Error: $errorMsg</h4>"; 
				}
				?>
				<div class="h-20"></div>
			</div>
		</div>
		<!-- end Main container -->
		<?php
		$_SESSION = array();
		session_destroy();
		//footer
		include "Project_Footer.php";
		?>
	</body>
</html>