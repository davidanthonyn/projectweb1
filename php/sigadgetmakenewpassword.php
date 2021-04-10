<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

	session_start();
	
	if(empty($_SESSION['email']) && empty($_SESSION['phonenumber'])) {
		header('location: sigadgetsignin.php');
	}
	
	if(isset($_GET['cancel'])) {
		session_destroy();
		unset($_SESSION['email']);
		unset($_SESSION['phonenumber']);
		header('location: sigadgetsignin.php');
	}
	?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Success!</title>
</head>
<body>
		<?php if (isset($_SESSION['success'])) : ?>
		<div>
		<h3>
		<?php
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		?>
		</h3>
		</div>
		
		<?php endif ?>

		<?php if(isset($_SESSION['email'])) : ?>
			<h3>Welcome, <strong><?php echo $_SESSION['email']?></strong></h3>
			<button><a href="sigadgetsignin.php">Cancel</a></button>

		<?php endif ?>
</body>
</html>