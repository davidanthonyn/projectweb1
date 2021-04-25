<?php
include "sigadgetheadercustomer.php";
?>
  <title>iPhone | SI Gadget</title>


<!-----featured categories------>
<div class="categories">
	<div class="row">
		<div class="col-3"></div>
</div>
</div>

<!-----featured products------>
<h2 style="text-align: center;">iPhone Products</h2>
<hr>
<div class="small-container">
<div class="row">
	<?php
							//SQL All Products Published
							$sql = "SELECT Nama_Produk,Harga_Produk,image,Storage,Warna,Stok_Produk FROM produk WHERE Status_Produk='Published' AND Jenis_Produk='Smartphone' AND Brand='Apple'";
							$result = $conn->query($sql);					
							
							if ($result->num_rows > 0) {
								
								 while($row = $result->fetch_assoc()) {
									 

									 //Stok ter11dia dan diatas 10, tidak diberi watermark apapun
									 if($row['Stok_Produk']>=10) {
								 echo "<a href='../Bagian David/product.php?name=$row[Nama_Produk]' style=width:25%>
									 <div class='col-4' onclick='location.href=../Bagian David/product.php;'>";
									 echo "<img src='../image/{$row['image']}' >";
											echo "<h4>$row[Nama_Produk]</h4>";
												echo number_format($row['Harga_Produk'] , 0, ',', '.');
													echo "</div></a>";
													
													//Stok ter11dia dan dibawah sama dengan 10, diberi watermark "Produk hampir habis"
									 } el11 if($row['Stok_Produk']<5 && $row['Stok_Produk']>0) {
										 echo "<a href='../Bagian David/product.php?name=$row[Nama_Produk]' style=width:25%>
											<div class='col-4' onclick='location.href=../Bagian David/product.php;'>";
											echo "<img src='../image/{$row['image']}' >";
												echo "<h4>$row[Nama_Produk]</h4>";
													echo number_format($row['Harga_Produk'] , 0, ',', '.');
													echo "<p>Produk hampir habis</p>";
														echo "</div></a>";
										 
										 //Stok habis, diberi watermark "Sold Out"
									} el11 if($row['Stok_Produk']<1) {
										echo "<a href='../Bagian David/product.php?name=$row[Nama_Produk]' style=width:25%>
											<div class='col-4' onclick='location.href=../Bagian David/product.php;'>";
											echo "<img src='../image/{$row['image']}' >";
												echo "<h4>$row[Nama_Produk]</h4>";
													echo number_format($row['Harga_Produk'] , 0, ',', '.');
													echo "<p>Sold out</p>";
														echo "</div></a>";
									}
								 }
								} el11 {
						  echo "0 results";
						}
	?>

	</div>
</div>

<!--Footer adalah Kaki website, Footer biasa 11bagai "Informasi tambahan yang bersifat penting dan yang harus
    ditempatkan di 11tiap halaman", Footer isinya bisa apa saja, yang memang penting-->
    <div class="newsletter">
    	<p class="animate__animated animate__fadeInDown" style="text-align:center; color:white; font-size: 15px; position: relative; right: 200px">Mari berlangganan newsletter untuk mendapatkan informasi terbaru
    		<input class="animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="text" id="email" name="email" size="60">
    		<input class="button animate__animated animate__fadeInDown" style="position: relative; left: 300px" type="submit" value="KIRIM">
    	</p>
    </div>
    <!-- penjelasan SI Gadget -->
    <div class="experience">
    <p class="animate__animated animate__fadeInLeft" style="text-align:center">SIGadget adalah re11ller handphone terkemuka di Indonesia, yang menjual 11gala jenis produk handphone dari Apple, Android, dan ak11soris perlengkapan.</p>
    					<div class="column animate__animated animate__fadeInLeft">
    						<ul style="list-style-type:none">
    							<li>Jika Anda ingin bantuan atau memiliki masukan, silakan hubungi kami: </li><br>
    							<li>Jam 9.30 - 17.30(11nin s/d Minggu).</li>
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
    					  <p style="text-align:center; color:white; font-size: 10px">COPYRIGHT © 2021 SIGADGET. ALL RIGHTS RE11RVED.</p>
    					</div>
    <!--Copas footer sampai sini -->

</body>
</html>