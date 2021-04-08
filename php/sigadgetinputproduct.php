<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sigadget";

$conn = new mysqli($servername, $username, $password, $dbname);
$statusMsg = '';

// register account
	if(isset($_POST['registerproduct'])) {
		$name = mysqli_real_escape_string($conn,$_POST['productname']);
		$type = mysqli_real_escape_string($conn,$_POST['producttype']);
		$price = mysqli_real_escape_string($conn,$_POST['price']);
		$stock = mysqli_real_escape_string($conn,$_POST['stock']);
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
		
		if(!empty($_FILES["file"]["name"])) {
			//File formats that allow
			$allow = array('jpg', 'jpeg', 'png', 'svg');
			
				if(in_array($fileType, $allow)) {
						//Upload file to server
								if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
									//Insert database
									$insert = mysqli_query($conn,"INSERT INTO `produk`(`ID_Produk`, `Nama_Produk`, `Jenis_Produk`, `Harga_Produk`, `Stok_Produk`, `Created_at`, 
									`Updated_at`, `image`, `Brand`, `Warna`, `Jaringan`, `OS`, `Chipset`, `RAM`, `Storage`, `Layar`, `Kamera_Depan`, `Kamera_Belakang`, 
									`Baterai`, `Tipe_Headphone`, `Konektivitas_Headphone`) 
									VALUES ('NULL','$name','$type','$price','$stock',now(),now(),'$fileName','$brand','$color','$connectproduct','$software','$chip','$memory',
									'$storage','$screen','$frontcamera','$backcamera','$battery','$typeheadphone','$connectionheadphone')");
									
									$conn->close();
									
														if($insert) {
															header('location: sigadgetinputsuccess.php');
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
<!DOCTYPE html>
<html>
<head>
  <title>Input Product SI Gadget</title>
</head>
<body>
<h2>Input Product</h2>
<br>
<form method="POST" action="sigadgetinputproduct.php" enctype="multipart/form-data">
	Nama Produk : <input type="text" name="productname" placeholder="Enter Product Name" Required>
  <br><br>
	Jenis Produk : <input type="text" name="producttype" placeholder="Enter Product Type" Required>
  <br><br>
	Harga Produk : <input type="text" name="price" placeholder="Enter Price" Required>
  <br><br>
	Stok Produk : <input type="text" name="stock" placeholder="Enter Stock" Required>
  <br><br>
	Brand : <input type="text" name="brand" placeholder="Enter Brand" Required>
	<br><br>
	Warna : <input type="text" name="color" placeholder="Enter Color" Required>
	<br><br>
	Jaringan : <input type="text" name="connectproduct" placeholder="Enter Connectivity" Required>
	<br><br>
	OS : <input type="text" name="os" placeholder="Enter OS" Required>
	<br><br>
	Chipset : <input type="text" name="chip" placeholder="Enter Chipset" Required>
	<br><br>
	RAM : <input type="text" name="ram" placeholder="Enter RAM" Required>
	<br><br>
	Storage : <input type="text" name="rom" placeholder="Enter Storage" Required>
	<br><br>
	Layar : <input type="text" name="screen" placeholder="Enter Screen" Required>
	<br><br>
	Kamera Depan : <input type="text" name="frontcamera" placeholder="Enter Front Camera" Required>
	<br><br>
	Kamera Belakang : <input type="text" name="backcamera" placeholder="Enter Back Camera" Required>
	<br><br>
	Baterai : <input type="text" name="battery" placeholder="Enter Battery" Required>
	<br><br>
	Tipe Headphone : <input type="text" name="typeheadphone" placeholder="Enter Headphone Type" Required>
	<br><br>
	Konektivitas Headphone : <input type="text" name="connectionheadphone" placeholder="Enter Headphone Connection" Required>
	<br><br>
	Product Image : <input type="file" name="file" placeholder="Enter Product Image"> <strong><?php echo $statusMsg;?></strong>
	<br><br>
	
	

  <input type="submit" name="registerproduct" value="Register Product">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>