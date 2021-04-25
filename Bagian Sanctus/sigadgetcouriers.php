
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

$conn->close();

?>

<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />

</form>
</body>
</html>
