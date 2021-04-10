<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";
$errors = array();

$conn = new mysqli($servername, $username, $password, $dbname);

// register account
	if(isset($_POST['forgotpassword'])) {
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
		
		$query = "SELECT * FROM user WHERE email='$email'";
					$getuser = $conn->prepare("SELECT No_Telepon FROM user WHERE email = ?");
					$getuser->bind_param('s', $username);
					$getuser->execute();
					$userdata = $getuser->get_result();
					$row = $userdata->fetch_array(MYSQLI_ASSOC);
					$result = mysqli_query($conn, $query);
					
						if(mysqli_num_rows($result) == 1) {
							session_start();
							$row_account = mysqli_fetch_array($result);
							$_SESSION["account_id"] = $row_account["ID_User"];
							$_SESSION["account_username"] = $row_account["username"];
							$_SESSION["account_password"] = $row_account["password"];
							$_SESSION["account_userlevel"] = $row_account["userlevel"];
							$_SESSION["account_userstatus"] = $row_account["userstatus"];
							$_SESSION["account_fullname"] = $row_account["Nama_Lengkap"];
							$_SESSION["account_email"] = $row_account["email"];
							$_SESSION["account_phonenumber"] = $row_account["No_Telepon"];
							$_SESSION["account_address"] = $row_account["Alamat"];
							$_SESSION["account_create"] = $row_account["Created_at"];
							$_SESSION["account_update"] = $row_account["Updated_at"];
							$_SESSION['username'] = $username;
			
									if($_SESSION["account_userstatus"] == "Disabled") {
												array_push($errors, "Your account has been deleted!");		
									} else {
										$_SESSION['email'] = $email;
										$_SESSION['phonenumber'] = $phonenumber;
												header("location:sigadgetmakenewpassword.php");
									}
							
						} else {
							array_push($errors, "Email or phone number didn't match!");
						}
					}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetforgotpassword.php">
	Email : <input type="text" name="email" placeholder="Enter Email" Required>
  <br><br>
	Phone Number : <input type="number" name="phonenumber" placeholder="Enter Phone Number" maxlength="15" min="0" Required>
  <br><br>

  <input type="submit" name="forgotpassword" value="Submit">
  <br><br>
  <input type="button" value="Login" onclick="location.href='sigadgetsignin.php'" />
</form>

</body>
</html>