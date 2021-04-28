<?php
include "../sigadgetconnection.php";

session_start();




if(empty($_SESSION['account_username'])) {
	header('location: ../Bagian David/account.php');
}

$checkdata = mysqli_query($conn,"SELECT * FROM user WHERE username = '$_SESSION[account_username]'");
$check = mysqli_fetch_array($checkdata);


if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: ../home.php');
}

if(empty($_SESSION['account_username']) && empty($_SESSION['productbuy'])) {
 header('location: ../home.php');
} 

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='smartphone.png'");

while($row=mysqli_fetch_array($sql)) {}
?>

<!DOCTYPE html>
<html>
<head>
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
   
	
	
	
	.tulisankurir {
		 margin: 20px 340px 200px 35px;
         padding: 25px 12px;
         position: relative;
         max-width: 800px;
		  
	
	}
	
	.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 60px;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
 
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
	
	.btn-cart {
  border: none;
  outline: 0;
  padding: 10px 100px ;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 25%;
  font-size: 15px;
  margin: 0px 340px 200px 35px;
  position: 400px;
}
	
	
	
	
	
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
				width:108px;
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
	
</style>
  <title>Product Navigation</title>
</head>
<body>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
</body>

<!----navigation--->
<nav class="navbar">
    <div class="navbar-left"  style="position: relative; left: 140px"><div class="logo animate__animated animate__fadeInDown" onclick="location.href='../home.php';"></div></div>
    <div class="navbar-right"  style="position: relative; left: 140px">
        <ul>
            <li><a href="../Bagian David/iPhoneproducts.php">iPhone</a>
			<ul class="dropdown-list">
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhoneSE.php">iPhone SE</a></li>
                    <li><a class="dropdown" href="../Bagian David/PromotioniPhone11Pro.php">iPhone 11 Pro</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhone11.php">iPhone 11</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXS.php">iPhone XS</a></li>
					<li><a class="dropdown" href="../Bagian David/PromotioniPhoneXR.php">iPhone XR</a></li>
            </ul>
          </li>

                              	<li><a href="../Bagian David/androidproducts.php">Android</a>
																			<ul class="dropdown-list">
																					<li><a class="dropdown" href="../Bagian Migel/huawei.new.php">Huawei</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/samsungads.new.php">Samsung</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/xiaomi.new.php">Xiaomi</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/asus.new.php">ASUS</a></li>
																					<li><a class="dropdown" href="../Bagian Migel/realme.php">Realme</a></li>
																				</ul>
                                  </li>
																																		<li><a href="../Bagian David/accessoriesproducts.php">Aksesoris</a>
																																		<ul class="dropdown-list">
																																				<li><a class="dropdown" href="../Bagian Tius/headphone.php">Headphone</a></li>
																																				<li><a class="dropdown" href="../Bagian Tius/wirelesscharger.php">Powerbank</a></li>
																																				<li><a class="dropdown" href="../Bagian Tius/aksesorislain.php">Aksesoris Lain</a></li>
																																			</ul>
                                                                    </li>

																																																			<li><a href="../Bagian Sanctus/eventpromo.php">Event and Promo</a>

																																																													<li><a href="#">Layanan</a>
																																																														<ul class="dropdown-list">
																																																															<li><a class="dropdown" href="../Bagian Sanctus/About.php">About</a></li>
																																																															<li><a class="dropdown" href="../Bagian Sanctus/lokasitoko.php">Lokasi Toko</a></li>
																																																															<li><a class="dropdown" href="../Bagian Sanctus/repair.php">Repair</a></li>
																																																														</ul>

                                                                                                                            <li>
																															<?php
																															if(empty($_SESSION['account_username'])) {
																																echo "<a href='../Bagian David/account.php'>Login</a>";
																																} else if(!empty($_SESSION['account_username'])) {
																																	echo "<a><strong>$_SESSION[account_username]</strong></a>";
																																	echo "<ul class='dropdown-list'>";
																																	echo "<form method='GET' action='../home.php' enctype='multipart/form-data'>";
																																	echo "<li><a class='dropdown' href='../customaccount.php'>Account</a></li>";
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
																																																								echo "<li><a class='dropdown' href='../sigadgettransactions.php'>Transactions</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetproducts.php'>Products</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetsales.php'>Sales</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetcourierdistributions.php'>Couriers & Distributions</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetcustomers.php'>Customers</a></li>";
																																																								echo "<li><a class='dropdown' href='../Bagian Sanctus/sigadgetadminds.php'>Admins</a></li>";
																																																								echo "<li><a class='dropdown' href='../sigadgetregisterimage.php'>Pictures</a></li>";
																																																									}
																																																							}
																																																						?>
																																																						</ul>
																																																								</li>

        </ul>
    </div>
</nav>
<form method="post" action=" ">
<h1 style="text-align:center;" >Payment Details</h1><br>

<br>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Product Purchase Information</h3>
			<hr>
           <p> Will be bought by : <strong>  <?php echo $_SESSION['account_fullname'] ?> (<?php echo $_SESSION['account_username'] ?>) </strong></p> 
	
	<p>Customer Phone Number: <?php echo $_SESSION['account_phonenumber'] ?> </p> 
	
	<p> Address : <?php echo $_SESSION['account_address'] ?></p> 
	

   </div>
    </div>
          </div>
		</form>
		
		 <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards | MANDIRI</label>
			<hr>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Fransiskus Advendtius Marlie">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
          </div>

        </div>
       
     
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Product Purchase Details
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>	
		  <?php
    $sql = "SELECT Nama_Produk,Harga_Produk,image,Storage,Warna FROM produk WHERE Nama_Produk='$_SESSION[productbuy]'";
    $result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_fetch_array($result);
    
    if ($resultCheck > 0){
        
             
       echo  "<h2>$resultCheck[Nama_Produk]</h2>";

	}
	
	 
	?>

	<hr>

	</b>

        </span>
      </h4>
	  <?php
		$_SESSION['id_kurir']=$_POST['radiobutton'];
		$kurirfinal = "SELECT Nama_Kurir , Produk_Kurir , Harga_Kurir FROM kurir WHERE ID_Kurir='$_SESSION[id_kurir]'";
		$hasil = mysqli_query($conn,$kurirfinal);
		$hasilarray = mysqli_fetch_array($hasil);
		
				
		echo "Quantity of Product Purchased : " . $_SESSION["kuantitas"] . ".<br>";
		echo "Total Product Price : " . $_SESSION["total_harga"] . ".<br>";
		
		echo "Courier Name : " . $hasilarray['Nama_Kurir'] . ".<br>";
		echo "Courier Type :" . $hasilarray['Produk_Kurir'] . ".<br>";
		echo "Courier Price : " . $hasilarray['Harga_Kurir'] . ".<br>";
	
		$Totalharga = $_SESSION["total_harga"];
		$Totalhargaint = (int)$Totalharga;
		
		$Totalhargakurir = $hasilarray["Harga_Kurir"];
		$Kurirhargaint = (int)$Totalhargakurir;
		$_SESSION['kurirfinale'] = $Kurirhargaint;
		$hargafinale = $Totalhargaint +$Kurirhargaint;
		
	
		?>
		
		
			 
			 
			
		
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo number_format($hargafinale,0,',','.');?></b></span></p>
	  
	  <input type="button" value="Back"  onclick="location.href='sigadgetnavigation.php'" />	
	  
		<form method="post" action="insertdatapembelian.php">  
	   <input type="submit" name="beli" value="Beli" class="btn">
	    </form>
		
    </div>
  </div>
</div>

</body>
</html>


			 
			

