<?php
include "sigadgetheadercustomer.php";
?>

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

  <title>Track Resi | SI Gadget</title>
								
  </head>
<body>

<br>

<center>
<h3>Nomor Resi</h3>
<form method="POST" action="nomorresi.php">
	
	<input type="number" name="keyword" min="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, 12);" autocomplete="off">
	
	<button type="submit" name="cari">Cari</button><br><br>
</form>
<br>
</center>
<center>
<?php
//Transaksi berdasarkan pencarian
if(isset($_POST["cari"])) {
	$transaksi = ($_POST["keyword"]);
	
	$sql = "SELECT pengiriman.Nomor_Resi,kurir.Nama_Kurir,kurir.Produk_Kurir,pengiriman.Alamat,
	user.Nama_Lengkap,pengiriman.Created_at,pengiriman.Updated_at,pengiriman.Status_Pengiriman
	FROM pengiriman,kurir,user 
	WHERE kurir.ID_Kurir = pengiriman.ID_Kurir AND 
	user.ID_User = pengiriman.ID_User AND 
	pengiriman.Nomor_Resi = '$transaksi'";
	
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) {
		
		echo "<table style='width:75%'>
			<tr>
				<th>Nomor Resi</th>
				<th>Kurir</th>
				<th>Layanan</th>
				<th>Tujuan</th>
				<th>Penerima</th>
				<th>Waktu</th>
				<th>Status</th>
			</tr>";
		
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["Nomor_Resi"] . "</td><td>" . $row["Nama_Kurir"] . "</td><td>" . 
	  $row["Produk_Kurir"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Nama_Lengkap"] . "</td>";
	  
	  if($row['Status_Pengiriman']=='Diproses') {
			echo "<td>" . $row["Created_at"] . "</td>";
		} else if($row['Status_Pengiriman']=='Dikirim') {
			echo "<td>" . $row["Updated_at"] . "</td>";
		} else if($row['Status_Pengiriman']=='Diterima') {
			echo "<td>" . $row["Updated_at"] . "</td>";
		}
		
	  echo "<td>" . $row["Status_Pengiriman"] .  "</td></tr>";
	
  }
  echo "</table>";
  echo "<p>Waktu menyesuaikan status pengiriman.</p>";
} else {
  echo "Nomor Resi tidak ditemukan.";
}
$conn->close();
}

?>
</center>

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
    <p style="text-align:center;" class="animate__animated animate__fadeInLeft">SIGadget adalah reseller handphone terkemuka di Indonesia, yang menjual segala jenis produk handphone dari Apple, Android, dan aksesoris perlengkapan.</p>
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