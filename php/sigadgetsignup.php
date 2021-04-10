<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);

// register account
	if(isset($_POST['registeraccount'])) {
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);

			$query = "SELECT username FROM user WHERE username='$username'";
			$result = mysqli_query($conn, $query);
			
				if(mysqli_num_rows($result) == 1) {
					array_push($errors, "Username already exists!");		
				} else {
					$passhash = password_hash($password,PASSWORD_DEFAULT);
					$insert = mysqli_query($conn,"INSERT INTO `user`(`ID_User`, `username`, `password`, `userlevel`, `userstatus`, `Nama_Lengkap`, `email`, `No_Telepon`, `Alamat`, 
					`Created_at`, `Updated_at`) 
					VALUES ('NULL','$username','$passhash','member','Activate','$fullname','$email','$phonenumber','$address',now(),now())");
					
					$conn->close();
					
					}
				
								if($insert) {
									?>
																				<script>
																				alert('Registration successful, now return to login page to login with your username and password');
																				window.location.href='sigadgetsignin.php';
																				</script>
																				
																			<?php
									
								} else {
									echo mysqli_error();
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration SI Gadget</title>
</head>
<body>

<form method="POST" action="sigadgetsignup.php">
	Username : <input type="text" name="username" placeholder="Enter Username" Required>
  <br><br>
	Password : <input type="password" name="password" placeholder="Enter Password" Required>
  <br><br>
	Nama Lengkap : <input type="text" name="fullname" placeholder="Enter Fullname" Required>
  <br><br>
	Email : <input type="text" name="email" placeholder="Enter Email" Required>
  <br><br>
	Phone Number(08) : <input type="number" name="phonenumber" placeholder="Enter Phone Number"  min="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, 12);" Required>
  <br><br>
	Alamat(Termasuk Kota & Provinsi) : <input type="text" name="address" placeholder="Enter Address" Required>
  <br><br>

  <input type="submit" name="registeraccount" value="Register">
  <br><br>
  <input type="button" value="Login" onclick="location.href='sigadgetsignin.php'" />
</form>

</body>
</html>