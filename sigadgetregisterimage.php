<?php
include "sigadgetheaderhome.php";

if(empty($_SESSION['account_username'])) {
	header('location: home.php');
} else if(!empty($_SESSION['account_username'])) {
if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
	
	} else {
		header('location: home.php');
	}
}

if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['account_username']);
		header('location: home.php');
}

?>

<!DOCTYPE html>
<html>
<head>
 
  <title>Register Image | SI Gadget</title>
  </head>
<body>

<?php
$statusMsg = '';

if(isset($_POST['registerimage'])) {
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
									$insert = mysqli_query($conn,"INSERT INTO `image`(`ID_image`, `Filename`) 
									VALUES ('NULL','$fileName')");
									
									$conn->close();
									
														if($insert) {
															?>
																				<script>
																				alert('Register image success.');
																				window.location.href='sigadgetregisterimage.php';
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


				if(isset($_GET['$row[id]'])) {
				$id=$_GET['id'];
				$sql = "DELETE FROM produk WHERE ID_Produk = '$id'";
					$result = $conn->query($sql);
					
							if($result) {
								echo "Delete product success.";
							} else {
								echo "Failed to delete product.";
							}
				}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Input Image SI Gadget</title>
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

<?php
$sql = "SELECT * FROM image";
	$result = $conn->query($sql);	
	
	if ($result->num_rows > 0) {
		
		echo "<table>
			<tr>
				<th>ID Gambar</th>
				<th>Nama Gambar</th>
				<th>File Gambar</th>
				<th>Action</th>
			</tr>";
			
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<tr><td>" . $row["ID_image"] . "</td><td>" . $row["Filename"] . "</td><td><img src='image/{$row['Filename']}' width='100px' height='100px'></td>
	  <td><a href= 'sigadgetdelete.php?opimage=delete&id=$row[ID_image]'>Delete</a></td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>

<h2>Input Image</h2>

<form method="POST" action="sigadgetregisterimage.php" enctype="multipart/form-data">
Image : <input type="file" name="file" placeholder="Enter Product Image"> <strong><?php echo $statusMsg;?></strong>
	<br><br>


<input type="submit" name="registerimage" value="Register Image">
  <br><br>
  <input type="button" value="Back" onclick="location.href='sigadgetdashboard.php'" />
</form>

</body>
</html>