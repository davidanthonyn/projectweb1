<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";
$errors = array();

$conn = new mysqli($servername, $username, $password, $dbname);

// register account
	if(isset($_POST['login'])) {
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		
				if(count($errors) == 0) {
					$hash = "";
					$query = "SELECT * FROM user WHERE username='$username'";
					$getuser = $conn->prepare("SELECT password FROM user WHERE username = ?");
					$getuser->bind_param('s', $username);
					$getuser->execute();
					$userdata = $getuser->get_result();
					$row = $userdata->fetch_array(MYSQLI_ASSOC);
					$result = mysqli_query($conn, $query);
					
						if(mysqli_num_rows($result) == 1 && password_verify($password, $row['password'])) {
							session_start();
							$row_account = mysqli_fetch_array($result);
							$_SESSION["account_id"] = $row_account["ID_User"];
							$_SESSION["account_username"] = $row_account["username"];
							$_SESSION["account_password"] = $row_account["password"];
							$_SESSION["account_userlevel"] = $row_account["userlevel"];
							$_SESSION["account_fullname"] = $row_account["Nama_Lengkap"];
							$_SESSION["account_email"] = $row_account["email"];
							$_SESSION["account_phonenumber"] = $row_account["No_Telepon"];
							$_SESSION["account_address"] = $row_account["Alamat"];
							$_SESSION["account_create"] = $row_account["Created_at"];
							$_SESSION["account_update"] = $row_account["Updated_at"];
							$_SESSION['username'] = $username;
							
									if($_SESSION["account_userlevel"] == "member") {
										$_SESSION['username'] = $username;
										header("location:sigadgetsigninsuccess.php");
									} else if($_SESSION["account_userlevel"] == "admin") {
										$_SESSION['username'] = $username;
										header("location:sigadgetdashboard.php");
									}
							
						} else {
								array_push($errors, "Username or password is invalid!");
						}
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetsignin.php">
<?php include('sigadgeterrors.php'); ?>
	Username : <input type="text" name="username" placeholder="Enter Username" Required>
  <br><br>
  Password : <input type="password" name="password" placeholder="Enter Password" Required>
  <br><br>
  <input type="submit" name="login" value="Login"><br><br>
  <input type="button" value="Register" onclick="location.href='sigadgetsignup.php'" />
</form>

</body>
</html>