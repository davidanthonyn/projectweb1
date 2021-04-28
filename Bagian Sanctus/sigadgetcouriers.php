
<?php
include "sigadgetheader.php";
?>

<h1>Couriers Database</h1>

<input type="button" value="Insert Courier" onclick="location.href='sigadgetcourierdistributions.php'" /><br><br>

<?php
$sql = "SELECT * FROM kurir";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Kurir</th>
				<th>Nama Kurir</th>
				<th>Produk Kurir</th>
				<th>Harga Kurir</th>
                <th>Waktu dibuat</th>
				<th>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Kurir"] . "</td> <td>" . $row["Nama_Kurir"] . " </td><td>"  . $row["Produk_Kurir"] . "</td><td>" . $row["Harga_Kurir"] . "</td><td>" . $row["Created_at"] . "</td>
	  <td><a href= 'sigadgetdelete.php?kurir=delete&id=$row[ID_Kurir]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$sqlpengiriman = "SELECT pengiriman.ID_Pengiriman, pengiriman.Nomor_Resi,kurir.Nama_Kurir,kurir.Produk_Kurir,pengiriman.Alamat,
	user.Nama_Lengkap,pengiriman.Created_at,pengiriman.Updated_at,pengiriman.Status_Pengiriman,pembayaranuser.Status_Pembayaran
	FROM pengiriman,kurir,user,pembayaranuser
	WHERE kurir.ID_Kurir = pengiriman.ID_Kurir AND 
	user.ID_User = pengiriman.ID_User";
	
	$resultp = $conn->query($sqlpengiriman);	
	
	if ($resultp->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID_Pengiriman</th>
				<th>Nomor Resi</th>
				<th>Kurir</th>
				<th>Layanan</th>
				<th>Tujuan</th>
				<th>Penerima</th>
				<th>Waktu</th>
				<th>Status</th>
				<th>Action</th>
			</tr>";
			
  // output data of each row
  while($rowp = $resultp->fetch_assoc()) {
	   echo "<tr><td>" . $rowp["ID_Pengiriman"] . "</td><td>" . $rowp["Nomor_Resi"] . "</td><td>" . $rowp["Nama_Kurir"] . "</td><td>" . 
	  $rowp["Produk_Kurir"] . "</td><td>" . $rowp["Alamat"] . "</td><td>" . $rowp["Nama_Lengkap"] . "</td>";
	  
	  if($rowp['Status_Pengiriman']=='Diproses') {
			echo "<td>" . $rowp["Created_at"] . "</td>";
		} else if($rowp['Status_Pengiriman']=='Dikirim') {
			echo "<td>" . $rowp["Updated_at"] . "</td>";
		} else if($rowp['Status_Pengiriman']=='Diterima') {
			echo "<td>" . $rowp["Updated_at"] . "</td>";
		}
		
	  echo "<td>" . $rowp["Status_Pengiriman"] .  "</td>";
	  
	  if($rowp['Status_Pengiriman']=='Pending' && $rowp['Status_Pembayaran']=='Pending') {
		  echo "<td><a>Menunggu Proses Pembayaran Selesai</a></td></tr>";
	  } else if($rowp['Status_Pengiriman']=='Diproses' && $rowp['Status_Pembayaran']=='Terbayar') {
		echo "<td><a href= '../sigadgetchanges.php?opppengiriman=proceedtosend&id=$rowp[ID_Pengiriman]'>Diproses to Dikirim</a></td></tr>";
	  } else if($rowp['Status_Pengiriman']=='Dikirim' && $rowp['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a href= '../sigadgetchanges.php?opppengiriman=sendtoreceive&id=$rowp[ID_Pengiriman]'>Dikirim to Diterima</a></td></tr>";
	} else if($rowp['Status_Pengiriman']=='Diterima' && $rowp['Status_Pembayaran']=='Terbayar') {
		  echo "<td><a>Pesanan Diterima</a></td></tr>";
	}
  }
} else {
  echo "0 results";
}

$conn->close();
?>

<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />

</form>
</body>
</html>
