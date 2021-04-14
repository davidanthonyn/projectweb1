<?php
include "sigadgetconnection.php";

session_start();

if(empty($_SESSION['account_username'])) {
	header('location: home.php');
} else if(!empty($_SESSION['account_username'])) {
if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
	
	} else {
		header('location: home.php');
	}
}

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: pagetemplate.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="styles.php" rel="stylesheet">
  <style>
	body {
	font-family: 'Roboto', sans-serif;
	}
	
		.logo{
		background-image: url(smartphone.png);
		width: 40px;
		margin: 4px 14px;
		height: 40px;
		background-size: 40px 40px;
		border: solid 2px #666;
		border-radius: 50px;
		background-color: #fff;
		}

			.navbar-left{
				float:left;
			}

			.navbar{width: 100%;
				height:51px;
				background:#000000;
			}
 
			.navbar ul{
				float:left;
				margin:0;
				padding:0;
			}

			.navbar li{
				float:left;
				list-style:none;
				margin:0;
				padding:0;
			}

			.navbar li a, .navbar li a:link {
				float: left;
				padding: 17px 12px;
				color: #fff;
				text-decoration: none;
				position: relative;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
			}

			.navbar li a:hover{
				background: #ddd;
				color: #444;
			}

			.navbar li li a, .navbar li li a:link {
				text-decoration: none;
				font-size: 16px;
				background: #444;
				color: #fff;
				width: 108px;
				padding: 0px 0px 0 12px;
				font-size: 12px;
				line-height: 35px;
			}

			.navbar li li a:hover{
				background: #ddd;
				color: #444
			}

			.navbar li ul{
				z-index:9999;
				position:absolute;
				left:-999em;
				height:auto;
				width:120px;
				margin-top:50px;
				border:1px solid #666;
			}

			.navbar li:hover ul,
			.navbar li li:hover ul,
			.navbar li li li:hover ul{left:auto;}
			.navbar li:hover{position:auto;}

			li a#dropdown{
				width: 100%;
				height: 50%;
				background-color: #9BC7D3;
				padding-left :5px;
			}

					* {box-sizing: border-box}
					body {font-family: 'Roboto', sans-serif; margin:0;}
					.mySlides {display: none}
					img {vertical-align: middle;}

					/* Slideshow container */
					.slideshow-container {
					  position: relative;
					  margin: auto;
					}

					/* Next & previous buttons */
					.prev, .next {
					  cursor: pointer;
					  position: absolute;
					  top: 50%;
					  width: auto;
					  padding: 16px;
					  margin-top: -22px;
					  color: white;
					  font-weight: bold;
					  font-size: 18px;
					  transition: 0.6s ease;
					  border-radius: 0 3px 3px 0;
					  user-select: none;
					}

					/* Position the "next button" to the right */
					.next {
					  right: 0;
					  border-radius: 3px 0 0 3px;
					}

					/* On hover, add a black background color with a little bit see-through */
					.prev:hover, .next:hover {
					  background-color: rgba(0,0,0,0.8);
					}

					/* Caption text */
					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

					/* Number text (1/3 etc) */
					.numbertext {
					  color: #f2f2f2;
					  font-size: 12px;
					  padding: 8px 12px;
					  position: absolute;
					  top: 0;
					}

					/* The dots/bullets/indicators */
					.dot {
					  cursor: pointer;
					  height: 15px;
					  width: 15px;
					  margin: 0 2px;
					  background-color: #bbb;
					  border-radius: 50%;
					  display: inline-block;
					  transition: background-color 0.6s ease;
					}

					.active, .dot:hover {
					  background-color: #717171;
					}

					/* Fading animation */
					.fade {
					  -webkit-animation-name: fade;
					  -webkit-animation-duration: 1.5s;
					  animation-name: fade;
					  animation-duration: 1.5s;
					}

					@-webkit-keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					@keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					/* On smaller screens, decrease text size */
					@media only screen and (max-width: 300px) {
					  .prev, .next,.text {font-size: 11px}
					}

					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




  </style>
  <title>SI Gadget | Menjual Smartphone dan Aksesoris</title>
  </head>
<body>
<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo" onclick="location.href='home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="Bagian David/iphone12proproducts.php">iPhone 12 Pro</a></li>
                    <li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 12</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
					<li><a class="dropdown" href="Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
            </ul>
          </li>

                              	<li><a href="Bagian David/androidproducts.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="Bagian David/accessoriesproducts.php">Aksesoris</a>
																																		<ul class="dropdown-list">
																																				<li><a class="dropdown" href="Bagian Tius/headphone.php">Headphone</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/wirelesscharger.php">Powerbank</a></li>
																																				<li><a class="dropdown" href="Bagian Tius/aksesorislain.php">Aksesoris Lain</a></li>
																																			</ul>
                                                                    </li>

																																																			<li><a href="Bagian Sanctus/eventpromo.php">Event and Promo</a>

																																																													<li><a href="#">Layanan</a>
																																																														<ul class="dropdown-list">
																																																															<li><a class="dropdown" href="Bagian Sanctus/About.php">About</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/lokasitoko.php">Lokasi Toko</a></li>
																																																															<li><a class="dropdown" href="Bagian Sanctus/repair.php">Repair</a></li>
																																																														</ul>

                                                                                                                            <li>
																															<?php
																															if(empty($_SESSION['account_username'])) {
																																echo "<a href='Bagian David/account.php'>Login</a>";
																																} else if(!empty($_SESSION['account_username'])) {
																																	echo "<a><strong>$_SESSION[account_username]</strong></a>";
																																	echo "<ul class='dropdown-list'>";
																																	echo "<form method='GET' action='home.php' enctype='multipart/form-data'>";
																																	echo "<li><a class='dropdown' href='customaccount.php'>Account</a></li>";
																																	echo "<li><input class='dropdown' type='submit' name='logout' value='Logout'></a></li>";
																																	echo "</form>";
																																	
																																}
																															?>
																															</ul>
																																	
																																	
																																																			<li>
																																																						<?php
																																																						if(empty($_SESSION['account_username'])) {
																																																							} else if(!empty($_SESSION['account_username'])) {
																																																									if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
																																																								echo "<a href='sigadgetdashboard.php'>Dashboard</a>";
																																																								echo "<ul class='dropdown-list'>";
																																																								echo "<li><a class='dropdown' href='sigadgettransactions.php'>Transactions</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetproducts.php'>Products</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetsales.php'>Sales</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetcourierdistributions.php'>Couriers & Distributions</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetcustomers.php'>Customers</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetadminds.php'>Admins</a></li>";
																																																								echo "<li><a class='dropdown' href='sigadgetregisterimage.php'>Pictures</a></li>";
																																																									}
																																																							}
																																																						?>
																																																						</ul>
																																																								</li>

        </ul>
    </div>
</nav>

<?php
include "sigadgetconnection.php";
$statusMsg = '';

if(isset($_POST['registerimage'])) {
$targetDir = "image/";
		$fileName = basename($_FILES["file"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
			if(!empty($_FILES["file"]["name"])) {
			//File formats that allow
			$allow = array('jpg', 'jpeg', 'png', 'svg');
			
					if(in_array($fileType, $allow)) {
						
								//Upload file to server
								if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
									//Insert database
									$insert = mysqli_query($conn,"INSERT INTO `image`(`ID_image`, `Filename`) 
									VALUES ('NULL','$fileName')");
									
									$conn->close();
									
														if($insert) {
															?>
																				<script>
																				alert('Register image success.');
																				window.location.href='sigadgetregisterimage.php';
																				</script>
																				
																			<?php
														} else {
																echo mysqli_error();
														}
									
								} else {
									 $statusMsg = "Sorry, there was an error uploading your file.";
								}
					
				} else {
					$statusMsg = 'JPG/JPEG/PNG/SVG files only';
				}
			
		} else {
			$statusMsg = 'Please select a file to upload.';
		}
}


				if(isset($_GET['$row[id]'])) {
				$id=$_GET['id'];
				$sql = "DELETE FROM produk WHERE ID_Produk = '$id'";
					$result = $conn->query($sql);
					
							if($result) {
								echo "Delete product success.";
							} else {
								echo "Failed to delete product.";
							}
				}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Image SI Gadget</title>
  <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
</head>
<body>

<?php
$sql = "SELECT * FROM image";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Gambar</th>
				<th>Nama Gambar</th>
				<th>File Gambar</th>
				<th>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_image"] . "</td><td>" . $row["Filename"] . "</td><td><img src='image/{$row['Filename']}' width='100px' height='100px'></td>
	  <td><a href= 'sigadgetdelete.php?opimage=delete&id=$row[ID_image]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>

<h2>Input Image</h2>

<form method="POST" action="sigadgetregisterimage.php" enctype="multipart/form-data">
Image : <input type="file" name="file" placeholder="Enter Product Image"> <strong><?php echo $statusMsg;?></strong>
	<br><br>


<input type="submit" name="registerimage" value="Register Image">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>