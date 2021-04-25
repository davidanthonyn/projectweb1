<?php
include "sigadgetheadercustomer.php";
?>

<?php
if(empty($_SESSION['account_username'])) {
	header('location: ../home.php');
}

$checkdata = mysqli_query($conn,"SELECT * FROM user WHERE username = '$_SESSION[account_username]'");
$check = mysqli_fetch_array($checkdata);



if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../home.php');
}

if(isset($_POST['changepassword'])) {
		$oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
		$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
		$newpasswordagain = mysqli_real_escape_string($conn,$_POST['newpasswordagain']);
		$passhashnew = password_hash($newpassword,PASSWORD_DEFAULT);
		
		
		if(count($errors) == 0) {
					
					if(password_verify($oldpassword, $_SESSION['account_password'])) {
						if($newpassword == $newpasswordagain) {
							$passhash = password_hash($newpassword,PASSWORD_DEFAULT);
							$update = mysqli_query($conn, "UPDATE `user` SET password='$passhashnew',Updated_at=now() WHERE username='$_SESSION[account_username]'");
									
														if($update) {
															
															$checkdatasecond = mysqli_query($conn,"SELECT * FROM user WHERE ID_User='$check[ID_User]'");
															$checksecond = mysqli_fetch_array($checkdatasecond);
															$_SESSION["account_id"] = $checksecond["ID_User"];
															$_SESSION["account_username"] = $checksecond["username"];
															$_SESSION["account_password"] = $checksecond["password"];
															$_SESSION["account_userlevel"] = $checksecond["userlevel"];
															$_SESSION["account_userstatus"] = $checksecond["userstatus"];
															$_SESSION["account_fullname"] = $checksecond["Nama_Lengkap"];
															$_SESSION["account_email"] = $checksecond["email"];
															$_SESSION["account_phonenumber"] = $checksecond["No_Telepon"];
															$_SESSION["account_address"] = $checksecond["Alamat"];
															$_SESSION["account_create"] = $checksecond["Created_at"];
															$_SESSION["account_update"] = $checksecond["Updated_at"];
															?>
																				<script>
																				alert('Change password success, back to account.');
																				<?php echo("location.href = '../customaccount.php';");?>
																				</script>
																			<?php
														} else {
															?>
																				<script>
																				alert('Change password failed.');
																				<?php echo("location.href = '../customaccount.php';");?>
																				</script>	
																				<?php
								}	
						}
						array_push($errors, "Password baru dan Password baru kedua tidak sama, password belum terganti!");
		}
		array_push($errors, "Password lama salah, password belum terganti!");
	}
}
				

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='smartphone.png'");
		
?>
	<style>
form {
   width: 50%;
        margin-left : 25%
}

.input-element{
font-size: 100px; // for say a select
width: 400px;
}

textarea {
  resize: none;
}
	</style>

  <title>Change Password | SI Gadget</title>
  </head>
<body>

<?php
function endsWith($string, $endString)
{
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
  

if(endsWith($check['username'],"s"))
    echo "<h2 style='text-align: Center;'>$check[username]' Account Change Password</h2>";
else
    echo "<h2 style='text-align: Center;'>$check[username]'s Account Change Password</h2>";
?>

<form method="POST" action="changepassword.php" enctype="multipart/form-data">

	Old Password : <input type="password" name="oldpassword" placeholder="Enter Password Old" Required>
  <br><br>
	New Password : <input type="password" name="newpassword" placeholder="Enter Password New" Required>
	<br><br>
	New Password Again : <input type="password" name="newpasswordagain" placeholder="Enter Password New Again" Required>
	<br><br>

   <input type="submit" name="changepassword" value="Change Password"><br><br>

  <input type="button" value="Back" onclick="location.href='../customaccount.php'" />
  
  <?php include('../sigadgeterrors.php'); ?>
  
</form>
<br><br>


<!--Footer adalah Kaki website, Footer biasa sebagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di setiap halaman", Footer isinya bisa apa saja, yang memang penting-->
    <div class="newsletter">
    	<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
    		<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="Email" size="60">
    		<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM" onclick="newsletterCheck()">
    	</p>
    </div>
    <!-- penjelasan SI Gadget -->
    <div class="experience">
    <p class="animate__animated animate__fadeInLeft" style="text-align:center">SIGadget adalah reseller handphone terkemuka di Indonesia, yang menjual segala jenis produk handphone dari Apple, Android, dan aksesoris perlengkapan.</p>
    					<div class="column animate__animated animate__fadeInLeft">
    						<ul style="list-style-type:none">
    							<li>Jika Anda ingin bantuan atau memiliki masukan, silakan hubungi kami: </li><br>
    							<li>Jam 9.30 - 17.30(Senin s/d Minggu).</li>
    							<li>Email: customercare@sigadget.com</li>
    							<li>Phone: 911</li>
    							<li>WA: 081234567890</li>
    						</ul>
    					</div>
    															<div class="column animate__animated animate__fadeInLeft">
    																	<ul style="list-style-type:none">
    																		<li>Kami menerima metode pembayaran:</li><br>
    																		<li>OVO</li>
    																		<li>GO-PAY</li>
    																		<li>Cash on Delivery(COD)</li>
    																		<li>Debit card</li>
    																		<li>Credit card</li>
    																	</ul>
    															</div>

    																							<div class="column animate__animated animate__fadeInLeft">
    																									<ul style="list-style-type:none">
    																										<li>Kurir pengiriman:</li><br>
    																										<li>JNE</li>
    																										<li>JET Express</li>
    																										<li>SiCepat</li>
    																									</ul>
    																							</div>
    </div>

    					<div class="bottomnav">
    					  <p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2021 SIGADGET. ALL RIGHTS RESERVED.</p>
    					</div>
    <!--Copas footer sampai sini -->
<?php

$conn->close();

?>
</body>
</html>