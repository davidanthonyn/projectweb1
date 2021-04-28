<?php
include "sigadgetheadercustomer.php";

if(!empty($_SESSION['account_username'])) {
	?>
																				<script>
																				alert('Anda sudah login');
																				window.location.href='../home.php';
																				</script>
																				
																			<?php
}

// register account
	if(isset($_POST['registeraccount'])) {
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		
		if(!empty($username) && !empty($password) && !empty($fullname) && !empty($email) && !empty($phonenumber) && !empty($address)) {

			$query = "SELECT username FROM user WHERE username='$username'";
			$result = mysqli_query($conn, $query);
			
				if(mysqli_num_rows($result) == 1) {
					?>
										<script>
										alert('Username already exists!');
										</script>
										<?php	
				} else {
					$passhash = password_hash($password,PASSWORD_DEFAULT);
					$insert = mysqli_query($conn,"INSERT INTO `user`(`ID_User`, `username`, `password`, `userlevel`, `userstatus`, `Nama_Lengkap`, `email`, `No_Telepon`, `Alamat`, 
					`Created_at`, `Updated_at`) 
					VALUES ('NULL','$username','$passhash','member','Activate','$fullname','$email','$phonenumber','$address',now(),now())");
					
					if($insert) {
									?>
																				<script>
																				alert('Registration successful, now return to login to input your username and password');
																				window.location.href='account.php';
																				</script>
																				
																			<?php
									
								} else {
									echo mysqli_error();
				}
					
					$conn->close();
					
					}
				
								
	} else {
		?>
																				<script>
																				alert('Form tidak boleh kosong');
																				window.location.href='account.php';
																				</script>
																				
																			<?php
	}
}
	
	
	
// login account
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
							$row_account = mysqli_fetch_array($result);
							$_SESSION["account_id"] = $row_account["ID_User"];
							$_SESSION["account_username"] = $row_account["username"];
							$_SESSION["account_password"] = $row_account["password"];
							$_SESSION["account_userlevel"] = $row_account["userlevel"];
							$_SESSION["account_userstatus"] = $row_account["userstatus"];
							
									if($_SESSION["account_userstatus"] == "Disabled") {
										?>
										<script>
										alert('Your account has been deleted.');
										</script>
										<?php
										session_destroy();
									} else if($_SESSION["account_userlevel"] == "member" && $_SESSION["account_userstatus"] != "Disabled") {
										$_SESSION["account_fullname"] = $row_account["Nama_Lengkap"];
										$_SESSION["account_email"] = $row_account["email"];
										$_SESSION["account_phonenumber"] = $row_account["No_Telepon"];
										$_SESSION["account_address"] = $row_account["Alamat"];
										$_SESSION["account_create"] = $row_account["Created_at"];
										$_SESSION["account_update"] = $row_account["Updated_at"];
										//header("location:../home.php");
										?><script><?php echo("location.href = '../home.php';");?></script><?php
									} else if($_SESSION["account_userlevel"] == "admin" && $_SESSION["account_userstatus"] != "Disabled") {
										$_SESSION["account_fullname"] = $row_account["Nama_Lengkap"];
										$_SESSION["account_email"] = $row_account["email"];
										$_SESSION["account_phonenumber"] = $row_account["No_Telepon"];
										$_SESSION["account_address"] = $row_account["Alamat"];
										$_SESSION["account_create"] = $row_account["Created_at"];
										$_SESSION["account_update"] = $row_account["Updated_at"];
										//header("location:../home.php");
										?><script><?php echo("location.href = '../home.php';");?></script><?php
									}
							
						} else {
							?>
										<script>
										alert('Username or password is invalid!');
										</script>
										<?php
						}
				}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link href="styles.php" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style> 
	body {
	font-family: 'Roboto', sans-serif;
	}
	
		.logo{
		background-image: url(../smartphone.png);
		width: 40px;
		margin: 4px 14px;
		height: 40px;
		background-size: 40px 40px;
		border: solid 2px #666;
		border-radius: 50px;
		background-color: #fff;
		href: url(home.php);
		}

.row {
display: flex;
align-items: center;
flex-wrap: wrap;
justify-content: space-around;
} 

.categories {
margin: 5px 0;
}

.small-container {
max-width: 60%;
margin: auto;
}

.col-4 {
flex-basis: 20%;
min-width: 100px;
margin-left: 5%;
margin-bottom: 20px;
transition: transform 0.5s;
border-style: ridge;
}

.col-4 img {
	width: 100%;
}

h4 {
color: #555;
font-weight: normal;
}

.col-4 p {
	font-size: 14px;
}

.col-4:hover {
	transform: translateY(-5px);
}

.btn-cart {
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
}

ul.no-bullets {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.cart-page {
	margin: 80px auto;
}

table {
width: 100%;
border-collapse: collapse;
}

.cart-info {
	display: flex;
	flex-wrap: wrap;
}

th {
	text-align: left;
	padding: 5px;
	Color: #fff;
	background: #27a3ff;
	font-weight: normal;
}

td {
	padding: 10px 5px;
}

td input {
	width: 40px;
	height: 30px;
	padding: 5px;
}

td a {
	color: #27a3ff;
	font-size: 12px;
}

td img {
	width: 80px;
	height: 80px;
	margin-right: 10px;

}

.total-price {
	display: flex;
	justify-content: flex-end;
}

.total-price table {
	border-top: 3px solid #27a3ff;
	width: 100%;
	max-width: 405px;
}

td:last-child {
text-align: right;
}

th: last-child {
text-align: right;
}

.account-page {
	padding: 50px 0;
	background: radial-gradient(#fff, #27a3ff);
}

.form-container {
	background: #fff;
	width: 300px;
	height: 500px;
	position: relative;
	text-align: center;
	padding: 20px 0;
	margin: auto;
	box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
	overflow: hidden;
}

.form-container span {
	font-weight: bold;
	padding: 0 10px;
	color: #555;
	cursor: pointer;
	width: 100px;
	display: inline-block;
}

.form-btn {
	display: inline-block;
}

.form-container form {
	max-width: 300px;
	padding: 0 20px;
	position: absolute;
	top: 130px;
	transition: transform 1s;
}

form input {
	width: 100%;
	height: 30px;
	margin: 10px 0;
	padding 0 10px;
	border: 1px solid #ccc;
}

form .btn {
	width: 100%;
	border: none;
	cursor: pointer;
	margin: 10px 0;
}

form .btn:focus {
	outline: none;
}

#LoginForm{
	left: -300px;
}

#RegForm {
	left: 0;
}

form a{
	font-size: 12px;
}

#Indicator{
	width: 100px;
	border: none;
	background: #27a3ff;
	height: 3px;
	margin-top: 8px;
	transform: translateX(100px);
	transition: transform 1s;
}

  </style>
  <title>Login/Register | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
<body>

<!-----accountpage------>
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="../smartphone.png" width="75%">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
					<span onclick="login()">Login</span>
					<span onclick="register()">Register</span>
					<hr id="Indicator"></hr>
					</div>
					
					<form id="LoginForm" method="POST" action="account.php">
						<input type="text" placeholder="Username" id="myUsernameLogin" name="username">
						<input type="password" placeholder="Password" id="myPasswordLogin" name="password">
						<button type="submit" class="btn-cart" onclick="loginAccount()" name="login">Login</button>
						<?php include('../sigadgeterrors.php'); ?>
				<!--		<a href="../Bagian David/forgotpassword.php">Forgot Password</a> -->
					</form>
					
					<form id="RegForm" method="POST" action="account.php">
						<input type="text" placeholder="Username" id="myUsernameReg" name="username">
						<input type="email" placeholder="Email" id="myEmailReg" name="email">
						<input type="password" placeholder="Password" id="myPasswordReg" name="password">
						<input type="text" placeholder="Nama Lengkap" id="myFullNameReg" name="fullname">
						<input type="number" placeholder="Nomor Telepon" id="myPhoneNumberReg" name="phonenumber" min="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, 12);">
						<input type="text" placeholder="Alamat" id="myAddressReg" name="address">
						<input type="submit" class="btn-cart" onclick="makeAccount()" name="registeraccount" value="Register">
						<?php include('../sigadgeterrors.php'); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Footer adalah Kaki website, Footer biasa sebagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di setiap halaman", Footer isinya bisa apa saja, yang memang penting-->
    <div class="newsletter">
    	<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
    		<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="email" size="60">
    		<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM">
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

<!----js for toggle menu--->
<script>
	var MenuItems = document.getElementById("MenuItems");
	
	MenuItems.style.maxHeight = "0px";
	
	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px";
			}
		else
			{
				MenuItems.style.maxHeight = "0px";
			}
	}
</script>

<!----js for toggle form--->
<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");
	
	var usernameLogin = document.getElementById("myUsernameLogin");
	var passwordLogin = document.getElementById("myPasswordLogin");
	
	var usernameSignUp = document.getElementById("myUsernameReg");
	var emailSignUp = document.getElementById("myEmailReg");
	var passwordSignUp = document.getElementById("myPasswordReg");
	var fullnameSignUp = document.getElementById("myFullnameReg");
	var phonenumberSignUp = document.getElementById("myPhoneNumberReg");
	var addressSignUp = document.getElementById("myAddressReg");
	
	function login() {
		LoginForm.style.transform = "translateX(300px)";
		RegForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(0px)";
	}
	
	function register() {
		LoginForm.style.transform = "translateX(0px)";
		RegForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}
	
	function makeAccount() {
		if(usernameSignUp.value.length == "0" || emailSignUp.value.length == "0" || passwordSignUp.value.length == "0" || fullnameSignUp.value.length == "0" || phonenumberSignUp.value.length == "0" || addressSignUp.value.length == "0") {
			alert("Form tidak boleh kosong");
			}
	}
	
	function loginAccount() {
		if(usernameLogin.value.length == "0" || passwordLogin.value.length == "0") {
			alert("Form tidak boleh kosong");
		}
	}
	
</script>




</body>
</html>