<?php 
include "sigadgetheader.php";
?>
	<h1> Dashboard Sales </h1>
			<?php

// output data sales by quantity desc
if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'qtydesc') {
	echo "<h3>Show All Sales Ordered By Quantity Descending</h3>";
	
	$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
	FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk ORDER BY penjualan.Jumlah_Terjual DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Penjualan</th>
				<th>Nama Produk</th>
				<th>Jumlah Terjual</th>
				<th>Total Harga</th>
				<th>Waktu Penjualan</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	  $row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
	  "</td><td>" . $row["Created_at"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan";
$resulttotal = $conn->query($sqltotal);

if ($resulttotal->num_rows > 0) {
		
		echo "
			<tr>
				<th colspan=3 style='text-align:center'>Total Penjualan</th>
			";
			
  // output data of each row
  while($rowtotal = $resulttotal->fetch_assoc()) {
	  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

		// output data order by total salary desc
		if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'pricedesc') {
			echo "<h3>Show All Sales Ordered By Price Descending</h3>";
			$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
			FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk ORDER BY penjualan.Total_Harga DESC";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				
				echo "<table>
			<tr>
				<th>ID Penjualan</th>
				<th>Nama Produk</th>
				<th>Jumlah Terjual</th>
				<th>Total Harga</th>
				<th>Waktu Penjualan</th>
			</tr>";
					
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	  $row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
	  "</td><td>" . $row["Created_at"] . "</td></tr>";
		  }
		} else {
		  echo "0 results";
		}
		
		$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan";
		$resulttotal = $conn->query($sqltotal);

		if ($resulttotal->num_rows > 0) {
				
				echo "
					<tr>
						<th colspan=3 style='text-align:center'>Total Penjualan</th>
					";
					
		  // output data of each row
		  while($rowtotal = $resulttotal->fetch_assoc()) {
			  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
		  }
		} else {
		  echo "0 results";
		}

		$conn->close();

		}

				// output data order time desc
				if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'timedesc') {
					echo "<h3>Show All Sales Ordered By Time Descending</h3>";
					$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
			FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk ORDER BY penjualan.Created_at DESC";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						
						echo "<table>
							<tr>
								<th>ID Penjualan</th>
								<th>Nama Produk</th>
								<th>Jumlah Terjual</th>
								<th>Total Harga</th>
								<th>Waktu Penjualan</th>
							</tr>";
							
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
					$row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
					"</td><td>" . $row["Created_at"] . "</td></tr>";
				  }
				} else {
				  echo "0 results";
				}
				
				$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan";
				$resulttotal = $conn->query($sqltotal);

				if ($resulttotal->num_rows > 0) {
						
						echo "
							<tr>
								<th colspan=3 style='text-align:center'>Total Penjualan</th>
							";
							
				  // output data of each row
				  while($rowtotal = $resulttotal->fetch_assoc()) {
					  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
				  }
				} else {
				  echo "0 results";
				}

				$conn->close();

				}
				
								// output data order smartphone
								if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'smartphone') {
									echo "<h3>Show All Sales Ordered By Time Descending</h3>";
									$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
								FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk AND produk.Jenis_Produk='Smartphone'";
									$result = $conn->query($sql);
									
									if ($result->num_rows > 0) {
										
										echo "<table>
											<tr>
												<th>ID Penjualan</th>
												<th>Nama Produk</th>
												<th>Jumlah Terjual</th>
												<th>Total Harga</th>
												<th>Waktu Penjualan</th>
											</tr>";
											
								  // output data of each row
								  while($row = $result->fetch_assoc()) {
									echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
									$row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
									"</td><td>" . $row["Created_at"] . "</td></tr>";
								  }
								} else {
								  echo "0 results";
								}
								
								$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan,produk WHERE produk.Jenis_Produk='Smartphone' AND penjualan.ID_Produk=produk.ID_Produk";
								$resulttotal = $conn->query($sqltotal);

								if ($resulttotal->num_rows > 0) {
										
										echo "
											<tr>
												<th colspan=3 style='text-align:center'>Total Penjualan</th>
											";
											
								  // output data of each row
								  while($rowtotal = $resulttotal->fetch_assoc()) {
									  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
								  }
								} else {
								  echo "0 results";
								}

								$conn->close();

								}
								
												// output data order iphone
												if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'iphone') {
													echo "<h3>Show All Sales Ordered By Time Descending</h3>";
													$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
												FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk AND produk.Nama_Produk LIKE '%IPHONE%'";
													$result = $conn->query($sql);
													
													if ($result->num_rows > 0) {
														
														echo "<table>
															<tr>
																<th>ID Penjualan</th>
																<th>Nama Produk</th>
																<th>Jumlah Terjual</th>
																<th>Total Harga</th>
																<th>Waktu Penjualan</th>
															</tr>";
															
												  // output data of each row
												  while($row = $result->fetch_assoc()) {
													echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
													$row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
													"</td><td>" . $row["Created_at"] . "</td></tr>";
												  }
												} else {
												  echo "0 results";
												}
												
												$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan,produk WHERE produk.Nama_Produk LIKE '%IPHONE%' AND penjualan.ID_Produk=produk.ID_Produk";
												$resulttotal = $conn->query($sqltotal);

												if ($resulttotal->num_rows > 0) {
														
														echo "
															<tr>
																<th colspan=3 style='text-align:center'>Total Penjualan</th>
															";
															
												  // output data of each row
												  while($rowtotal = $resulttotal->fetch_assoc()) {
													  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
												  }
												} else {
												  echo "0 results";
												}

												$conn->close();

												}
												
																// output data order accessories
																if(isset($_POST['sortallsales']) && $_POST['sortallsales'] == 'accessories') {
																	echo "<h3>Show All Sales Ordered By Time Descending</h3>";
																	$sql = "SELECT penjualan.ID_Penjualan,produk.Nama_Produk,penjualan.Jumlah_Terjual,penjualan.Total_Harga, penjualan.Created_at 
																FROM penjualan,produk WHERE penjualan.ID_Produk=produk.ID_Produk AND produk.Jenis_Produk='Accessories'";
																	$result = $conn->query($sql);
																	
																	if ($result->num_rows > 0) {
																		
																		echo "<table>
																			<tr>
																				<th>ID Penjualan</th>
																				<th>Nama Produk</th>
																				<th>Jumlah Terjual</th>
																				<th>Total Harga</th>
																				<th>Waktu Penjualan</th>
																			</tr>";
																			
																  // output data of each row
																  while($row = $result->fetch_assoc()) {
																	echo "<tr><td>" . $row["ID_Penjualan"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
																	$row["Jumlah_Terjual"] . "</td><td>" . $row["Total_Harga"] . 
																	"</td><td>" . $row["Created_at"] . "</td></tr>";
																  }
																} else {
																  echo "0 results";
																}
																
																$sqltotal = "SELECT Sum(penjualan.Total_Harga) FROM penjualan,produk WHERE produk.Jenis_Produk='Accessories' AND penjualan.ID_Produk=produk.ID_Produk";
																$resulttotal = $conn->query($sqltotal);

																if ($resulttotal->num_rows > 0) {
																		
																		echo "
																			<tr>
																				<th colspan=3 style='text-align:center'>Total Penjualan</th>
																			";
																			
																  // output data of each row
																  while($rowtotal = $resulttotal->fetch_assoc()) {
																	  echo "<th colspan=1>" . $rowtotal["Sum(penjualan.Total_Harga)"] . "</th></tr>";
																  }
																} else {
																  echo "0 results";
																}

																$conn->close();

																}

?>
</table><br><br>
<form method="POST" action="sigadgetsales.php">


<select name="sortallsales">
<option></option>
<option value="qtydesc">Show All Sales Based on Quantity Descending</option>
<option value="pricedesc">Show All Sales Based on Total Price Descending</option>
<option value="timedesc">Show All Sales Based on Time Descending</option>
<option value="smartphone">Show All Sales of Smartphone</option>
<option value="iphone">Show All Sales of iPhone</option>
<option value="accessories">Show All Sales of Accessories</option>
</select>
<input type="submit" name="submit" value="Get Data" /><br><br>
<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>