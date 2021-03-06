<?php
include "sigadgetheadercustomer.php";

error_reporting(0);

if(empty($_GET['name'])) {
	header('location: ../home.php');
}

if(isset($_GET['name']) && $_GET['storage'] && $_GET['color']) {
$checkdata = mysqli_query($conn,"SELECT * FROM produk WHERE Nama_Produk = '$_GET[name]' AND Storage = '$_GET[storage]' AND Warna = '$_GET[color]'");
} else if(isset($_GET['name']) && $_GET['connectivity']) {
$checkdata = mysqli_query($conn,"SELECT * FROM produk WHERE Nama_Produk = '$_GET[name]' AND Konektivitas_Headphone = '$_GET[connectivity]'");
}

$check = mysqli_fetch_array($checkdata);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Krona One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="styles.php" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

  </style>
  <title><?php echo "$check[Nama_Produk]"; ?> | SI Gadget</title>
  <link rel="shortcut icon" type="image" href="../smartphone.png">
  </head>
<body>

<p style="text-align:center; font-size: 15px; position: relative; left: -545px;">Home / <?php echo "$check[Nama_Produk]"; ?></p>
<hr>

<!-----single product details------>

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
			
			<?php
			echo "<img src='../image/{$check['image']}' width='75%' id='ProductImg'>";
			?>
			</div>
			<div class="col-2">
			<?php
			echo "<h1>$check[Nama_Produk]</h1>";
			?>
			<h4 id="demo">Rp. <?php echo number_format($check['Harga_Produk'] , 0, ',', '.'); ?></h4>
													

				<br>
							<button hidden id="down" onclick="setQuantity('down');">-</button>
							<input hidden type="number" id="quantity" value="1" min="1" style="position:relative;left:5px;" readonly>
							<button hidden id="up" onclick="setQuantity('up');">+</button>
							<?php 
							$_SESSION["productbuy"] = $check["Nama_Produk"];
							
							if($check["Stok_Produk"]>=1) {
							echo "<a href='../Bagian Tius/sigadgetnavigation.php' class='btn-cart'>Beli</a>";
							} else if($check["Stok_Produk"]==0) {
								echo "Sold out";
							} else if($check["Stok_Produk"]<=5) {
								echo "<a href='../Bagian Tius/sigadgetnavigation.php' class='btn-cart'>Beli</a>";
								echo "Produk hampir habis";
							}
							?>
							<br><br><br>
				<?php
					if($check["Jenis_Produk"]=="Smartphone") {
							?>
							<h3>Spesifikasi</h3><hr>
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Warna</td>
									<td><?php echo "$check[Warna]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Storage</td>
									<td><?php echo "$check[Storage]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Memory</td>
									<td><?php echo "$check[RAM]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Layar</td>
									<td><?php echo "$check[Layar]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Chip</td>
									<td><?php echo "$check[Chipset]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Kamera Belakang</td>
									<td><?php echo "$check[Kamera_Belakang]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Kamera Depan</td>
									<td><?php echo "$check[Kamera_Depan]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Jaringan</td>
									<td><?php echo "$check[Jaringan]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Battery</td>
									<td><?php echo "$check[Baterai]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Brand</td>
									<td><?php echo "$check[Brand]"; ?></td>
								  </tr>
							</table>
							<hr><br>							
				<?php
									} else if($check["Jenis_Produk"]=="Accessories") {
?>				

								<h3>Spesifikasi</h3><hr>
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Warna</td>
									<td><?php echo "$check[Warna]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Warna</td>
									<td><?php echo "$check[Tipe_Headphone]"; ?></td>
								  </tr>
							</table>
							<hr><br>
							
							<table style="width:100%;table-layout: fixed;">
								  <tr>
									<td>Warna</td>
									<td><?php echo "$check[Konektivitas_Headphone]"; ?></td>
								  </tr>
							</table>
							<hr><br>
											<?php
									}
?>															
																				
																				  
</ul>
			</div>
		</div>
	</div>

<!-----featured categories------>
<div class="categories">
	<div class="row">
		<div class="col-3"></div>
</div>
</div>

<!-----featured products------>
<h2 style="text-align: Center;">Produk Terkait</h2>
<hr>
<div class="small-container">
<div class="row">
		<?php
	$sql = "SELECT Nama_Produk,Harga_Produk,image FROM produk WHERE Status_Produk='Published'";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		 while($row = $result->fetch_assoc()) {
		 echo "<a href='../Bagian David/product.php?name=$row[Nama_Produk]' style=width:25%>
			 <div class='col-4' onclick='location.href=../Bagian David/product.php;'>";
			 echo "<img src='../image/{$row['image']}' >";
					echo "<h4>$row[Nama_Produk]</h4>";
						echo "<p>$row[Harga_Produk]</p>";
							echo "</div></a>";
		 }
		} else {
  echo "0 results";
}
	?>

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

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "Rp. " + x;
}
</script>
<?php

$conn->close();

?>

</body>
</html>