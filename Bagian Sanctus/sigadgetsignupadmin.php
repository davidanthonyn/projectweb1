<?php
include "sigadgetheader.php";

// register account
	if(isset($_POST['registeraccountadmin'])) {
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
					VALUES ('NULL','$username','$passhash','admin','Activate','$fullname','$email','$phonenumber','$address',now(),now())");
					
					$conn->close();
					
				}
				
								if($insert) {
									?>
																				<script>
																				alert('Add admin success.');
																				window.location.href='sigadgetadmins.php';
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
  <title>Registration SI Gadget Admin</title>
</head>
<body>

<form method="POST" action="sigadgetsignupadmin.php">
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

  <input type="submit" name="registeraccountadmin" value="Register">
  <br><br>
  <input type="button" value="Cancel" onclick="location.href='sigadgetadmins.php'" />
</form>

</body>
</html>