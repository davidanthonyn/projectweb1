<html>
<head>
<title>SI Gadget Products Dashboard</title>
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
		<h1> Dashboard Products </h1>
			<?php
include "sigadgetconnection.php";

// output data order by product id ASC
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'idasc') {
	echo "<h3>Show All Products Order By ID Ascending</h3>";
	$sql = "SELECT * FROM produk ORDER BY ID_Produk ASC";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data product by smartphone
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'smartphone') {
	echo "<h3>Smartphone Products</h3>";
	$sql = "SELECT * FROM produk WHERE Jenis_Produk='Smartphone'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data product by accessories
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'accessories') {
	echo "<h3>Accessories Products</h3>";
	$sql = "SELECT * FROM produk WHERE Jenis_Produk='Accessories'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data product by price descending
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'pricedesc') {
	echo "<h3>Show All Products Order By Price Descending</h3>";
	$sql = "SELECT * FROM produk ORDER BY Harga_Produk DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data product by have stock
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'havestock') {
	echo "<h3>Show All Products That Have Stock</h3>";
	$sql = "SELECT * FROM produk WHERE Stok_Produk>0";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data product by time desc
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'timedesc') {
	echo "<h3>Show New Products</h3>";
	$sql = "SELECT * FROM produk ORDER BY Created_at DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by product under 5 stock
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'stockunderfive') {
	echo "<h3>Show All Products That Stock Below 5(Five)</h3>";
	$sql = "SELECT * FROM produk WHERE Stok_Produk<5 AND Stok_Produk>0";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by product no stock
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'stockempty') {
	echo "<h3>Show All Products That Stock Empty</h3>";
	$sql = "SELECT * FROM produk WHERE Stok_Produk=0";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by product pending
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'stockpending') {
	echo "<h3>Show All Products That Status Pending</h3>";
	$sql = "SELECT * FROM produk WHERE Status_Produk='Pending'";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by product published
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'stockpublished') {
	echo "<h3>Show All Products That Status Published</h3>";
	$sql = "SELECT * FROM produk WHERE Status_Produk='Published'";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

// output data order by product non activate
if(isset($_POST['sortallproduct']) && $_POST['sortallproduct'] == 'stocknonactivate') {
	echo "<h3>Show All Products That Status Non-Activate</h3>";
	$sql = "SELECT * FROM produk WHERE Status_Produk='Non-Activate'";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Jenis Produk</th>
				<th>Harga Produk</th>
				<th>Stok Produk</th>
				<th>Status Produk</th>
				<th>Waktu Dibuat</th>
				<th>Waktu Diubah</th>
				<th colspan=2 style='text-align:center'>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_Produk"] . "</td><td>" . $row["Nama_Produk"] . "</td><td>" . 
	$row["Jenis_Produk"] . "</td><td>" . $row["Harga_Produk"] . 
	  "</td><td>" . $row["Stok_Produk"] . "</td><td>" . $row["Status_Produk"] . "</td><td>" . $row["Created_at"] . "</td><td>" . $row["Updated_at"] . 
	  "</td><td><a href= 'sigadgetupdateproduct.php?id=$row[ID_Produk]'>Edit</a></td>
	  <td><a href= 'sigadgetdelete.php?opproduk=delete&id=$row[ID_Produk]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

}

?>
</table><br><br>
<form method="POST" action="sigadgetdashboardproducts.php">


<select name="sortallproduct">
<option></option>
<option value="idasc">Show All Products Order By ID Ascending</option>
<option value="stockpending">Show All Pending Products</option>
<option value="stockpublished">Show All Published Products</option>
<option value="stocknonactivate">Show All Non-Activate Products</option>
<option value="smartphone">Show All Smartphone Products</option>
<option value="accessories">Show All Accessories Products</option>
<option value="pricedesc">Show All Products Order By Price Descending</option>
<option value="havestock">Show All Products That Have Stock</option>
<option value="timedesc">Show All Products Order By Time Descending</option>
<option value="stockunderfive">Show All Products That Stock Below 5</option>
<option value="stockempty">Show All Products That Stock Empty</option>
</select>
<input type="submit" name="submit" value="Get Data" /><br><br>
<input type="button" value="Insert New Product" onclick="location.href='sigadgetinputproduct.php'" /><br><br>
<input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>