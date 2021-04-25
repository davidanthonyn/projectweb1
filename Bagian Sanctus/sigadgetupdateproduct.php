<?php
include "sigadgetheader.php";
$statusMsg = '';

$checkdata = mysqli_query($conn,"SELECT * FROM produk WHERE ID_Produk = '$_GET[id]'");
$check = mysqli_fetch_array($checkdata);

// register account
	if(isset($_POST['updateproduct'])) {
		$id = mysqli_real_escape_string($conn,$_POST['productid']);
		$name = mysqli_real_escape_string($conn,$_POST['productname']);
		$type = mysqli_real_escape_string($conn,$_POST['producttype']);
		$price = mysqli_real_escape_string($conn,$_POST['price']);
		$stock = mysqli_real_escape_string($conn,$_POST['stock']);
		$status = mysqli_real_escape_string($conn,$_POST['status']);
		$brand = mysqli_real_escape_string($conn,$_POST['brand']);
		$color = mysqli_real_escape_string($conn,$_POST['color']);
		$connectproduct = mysqli_real_escape_string($conn,$_POST['connectproduct']);
		$software = mysqli_real_escape_string($conn,$_POST['os']);
		$chip = mysqli_real_escape_string($conn,$_POST['chip']);
		$memory = mysqli_real_escape_string($conn,$_POST['ram']);
		$storage = mysqli_real_escape_string($conn,$_POST['rom']);
		$screen = mysqli_real_escape_string($conn,$_POST['screen']);
		$frontcamera = mysqli_real_escape_string($conn,$_POST['frontcamera']);
		$backcamera = mysqli_real_escape_string($conn,$_POST['backcamera']);
		$battery = mysqli_real_escape_string($conn,$_POST['battery']);
		$typeheadphone = mysqli_real_escape_string($conn,$_POST['typeheadphone']);
		$connectionheadphone = mysqli_real_escape_string($conn,$_POST['connectionheadphone']);
		
		$targetDir = "image/";
		$fileName = basename($_FILES["file"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
		//Without picture
		if(empty($_FILES["file"]["name"])) {
			$update = mysqli_query($conn,"UPDATE `produk` SET Nama_Produk='$name',Jenis_Produk='$type',Harga_Produk='$price',Stok_Produk='$stock',Status_Produk='$status',
									Updated_at=now(),Brand='$brand',Warna='$color',Jaringan='$connectproduct',OS='$software',Chipset='$chip',RAM='$memory',Storage='$storage',
									Layar='$screen',Kamera_Depan='$frontcamera',Kamera_Belakang='$backcamera',Baterai='$battery',Tipe_Headphone='$typeheadphone',Konektivitas_Headphone='$connectionheadphone'
									WHERE ID_Produk=$id");
									
									$conn->close();
									
														if($update) {
															?>
																				<script>
																				alert('Update product success.');
																				window.location.href='sigadgetdashboardproducts.php';
																				</script>
																				
																			<?php
														} else {
																echo mysqli_error();
														}
		//With picture
		} else if(!empty($_FILES["file"]["name"])) {
			//File formats that allow
			$allow = array('jpg', 'jpeg', 'png', 'svg');
			
				if(in_array($fileType, $allow)) {
						//Upload file to server
								if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
									//Update database
									$update = mysqli_query($conn,"UPDATE `produk` SET Nama_Produk='$name',Jenis_Produk='$type',Harga_Produk='$price',Stok_Produk='$stock',Status_Produk='$status',
									Updated_at=now(),
									image='$fileName',Brand='$brand',Warna='$color',Jaringan='$connectproduct',OS='$software',Chipset='$chip',RAM='$memory',Storage='$storage',
									Layar='$screen',Kamera_Depan='$frontcamera',Kamera_Belakang='$backcamera',Baterai='$battery',Tipe_Headphone='$typeheadphone',Konektivitas_Headphone='$connectionheadphone'
									WHERE ID_Produk=$id");
									
									$conn->close();
									
														if($update) {
															?>
																				<script>
																				alert('Update product success.');
																				window.location.href='sigadgetdashboardproducts.php';
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
?>

<h2>Update Product</h2>
<br>
<form method="POST" action="sigadgetupdateproduct.php" enctype="multipart/form-data">
	ID Produk : <input type="text" name="productid" value="<?php echo $check['ID_Produk'] ?>" readonly="readonly" Required>
  <br><br>
	Nama Produk : <input type="text" name="productname" value="<?php echo $check['Nama_Produk'] ?>" placeholder="Enter Product Name" Required>
  <br><br>
	Jenis Produk : <input type="text" name="producttype" value="<?php echo $check['Jenis_Produk'] ?>" placeholder="Enter Product Type" Required>
  <br><br>
	Harga Produk : <input type="text" name="price" placeholder="Enter Price" value="<?php echo $check['Harga_Produk'] ?>" Required>
  <br><br>
	Stok Produk : <input type="text" name="stock" placeholder="Enter Stock" value="<?php echo $check['Stok_Produk'] ?>" Required>
  <br><br>
	Status Produk : <select name="status">
						<option value="Pending">Pending</option>
						<option value="Published">Published</option>
						<option value="Non-Activate">Non-Activate</option>
				</select>
  <br><br>
  
	Brand : <input type="text" name="brand" placeholder="Enter Brand" value="<?php echo $check['Brand'] ?>" Required>
	<br><br>
	Warna : <input type="text" name="color" placeholder="Enter Color" value="<?php echo $check['Warna'] ?>" Required>
	<br><br>
	Jaringan : <input type="text" name="connectproduct" placeholder="Enter Connectivity" value="<?php echo $check['Jaringan'] ?>" Required>
	<br><br>
	OS : <input type="text" name="os" placeholder="Enter OS" value="<?php echo $check['OS'] ?>" Required>
	<br><br>
	Chipset : <input type="text" name="chip" placeholder="Enter Chipset" value="<?php echo $check['Chipset'] ?>" Required>
	<br><br>
	RAM : <input type="text" name="ram" placeholder="Enter RAM" value="<?php echo $check['RAM'] ?>" Required>
	<br><br>
	Storage : <input type="text" name="rom" placeholder="Enter Storage" value="<?php echo $check['Storage'] ?>" Required>
	<br><br>
	Layar : <input type="text" name="screen" placeholder="Enter Screen" value="<?php echo $check['Layar'] ?>" Required>
	<br><br>
	Kamera Depan : <input type="text" name="frontcamera" placeholder="Enter Front Camera" value="<?php echo $check['Kamera_Depan'] ?>" Required>
	<br><br>
	Kamera Belakang : <input type="text" name="backcamera" placeholder="Enter Back Camera" value="<?php echo $check['Kamera_Belakang'] ?>" Required>
	<br><br>
	Baterai : <input type="text" name="battery" placeholder="Enter Battery" value="<?php echo $check['Baterai'] ?>" Required>
	<br><br>
	Tipe Headphone : <input type="text" name="typeheadphone" placeholder="Enter Headphone Type" value="<?php echo $check['Tipe_Headphone'] ?>" Required>
	<br><br>
	Konektivitas Headphone : <input type="text" name="connectionheadphone" placeholder="Enter Headphone Connection" value="<?php echo $check['Konektivitas_Headphone'] ?>" Required>
	<br><br>
	Product Image : 
	
	<br><br><?php
						include "sigadgetconnection.php";
						$sql = "SELECT image FROM produk WHERE ID_Produk ='$_GET[id]'";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result)) {
								echo "<img src='image/{$row['image']}' width='20%' height='20%'>";
										echo "</div>";
						}
	?>
	<br><br>
	
	<input type="file" name="file" placeholder="Enter Product Image" value="<?php echo $check['image']; ?>"> <strong><?php echo $statusMsg;?></strong>
	<br><br>
	
	

  <input type="submit" name="updateproduct" value="Update Product">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetproducts.php'" />
</form>

</body>
</html>