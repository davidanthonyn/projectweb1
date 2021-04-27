<?php
include "../Bagian David/sigadgetheadercustomer.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Headphone | SI Gadget</title>
  </head>
<body>

<!-----featured categories------>
<div class="categories">
	<div class="row">
		<div class="col-3"></div>
</div>
</div>

<!-----featured products------>
<h2 style="text-align: center;">Headphone Products</h2>
<hr>
<div class="small-container">
<div class="row">
	<?php
							//SQL All Products Published
							$sql = "SELECT Nama_Produk,Harga_Produk,image,Konektivitas_Headphone FROM produk WHERE Jenis_Produk='Accessories' AND Status_Produk='Published'";
							$result = $conn->query($sql);	
							
							if ($result->num_rows > 0) {
								
								 while($row = $result->fetch_assoc()) {
								 echo "<a href='../Bagian David/product.php?name=$row[Nama_Produk]&connectivity=$row[Konektivitas_Headphone]' style=width:25%>
									 <div class='col-4' onclick='location.href=../Bagian David/product.php;'>";
									 echo "<img src='../image/{$row['image']}' >";
											echo "<h4>$row[Nama_Produk] $row[Konektivitas_Headphone]</h4>";
												echo number_format($row['Harga_Produk'] , 0, ',', '.');
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

</body>
</html>