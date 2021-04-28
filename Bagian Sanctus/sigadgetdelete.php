<?php
include "sigadgetheader.php";

//Hapus produk
if($_GET['opproduk']=="delete") {
	$id=$_GET['id'];
$sql = "DELETE FROM produk WHERE ID_Produk = '$id'";
	$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Delete product success.');
		window.location.href='sigadgetdashboardproducts.php';
		</script>
		
	<?php
	unlink("image/$id");
	}
		else {
			?>
			<script>
		alert('Delete product success.');
		window.location.href='sigadgetdashboardproducts.php';
		</script>
			
			<?php
		}	
}

																		//Hapus gambar
																		if($_GET['opimage']=="delete") {
																			$id=$_GET['id'];
																		$sql = "DELETE FROM image WHERE ID_image = '$id'";
																			$result = $conn->query($sql);
																			
																			if($result) {
																				?>
																				<script>
																				alert('Delete image success.');
																				window.location.href='sigadgetregisterimage.php';
																				</script>
																				
																			<?php
																			unlink("image/$id");
																			}
																				else {
																					?>
																					<script>
																				alert('Delete product failed.');
																				window.location.href='sigadgetregisterimage.php';
																				</script>
																					
																					<?php
																				}	
																		}

?>
<?php 
//Hapus kurir
if($_GET['kurir']=="delete") {
	$id=$_GET['id'];
$sql = "DELETE FROM kurir WHERE ID_Kurir = '$id'";
	$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Delete kurir success.');
		window.location.href='sigadgetcouriers.php';
		</script>
		
	<?php
	unlink("image/$id");
	}
		else {
			?>
			<script>
		alert('Delete kurir success.');
		window.location.href='sigadgetcouriers.php';
		</script>
			
			<?php
		}	
}
?>

<?php
//Menonaktifan admin
if($_GET['admin']=="nonactivate") {
	$id=$_GET['id'];
	$sql = mysqli_query($conn, "UPDATE `user` SET userstatus='Disabled',Updated_at=now() WHERE ID_User='$id'");
	
		$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Non-activate admin success.');
		window.location.href='sigadgetadmins.php';
		</script>
		
	<?php
	}
		else {
			?>
			<script>
		alert('Non-activate admin success.');
		window.location.href='sigadgetadmins.php';
		</script>
			
			<?php
		}	
}
?>

<?php
//Mengaktifkan admin
if($_GET['admin']=="activate") {
	$id=$_GET['id'];
	$sql = mysqli_query($conn, "UPDATE `user` SET userstatus='Activate',Updated_at=now() WHERE ID_User='$id'");
	
		$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Re-activate admin success.');
		window.location.href='sigadgetadmins.php';
		</script>
		
	<?php
	}
		else {
			?>
			<script>
		alert('Re-activate admin success.');
		window.location.href='sigadgetadmins.php';
		</script>
			
			<?php
		}	
}
?>

<?php
//Menonaktifan customer
if($_GET['customer']=="nonactivate") {
	$id=$_GET['id'];
	$sql = mysqli_query($conn, "UPDATE `user` SET userstatus='Disabled',Updated_at=now() WHERE ID_User='$id'");
	
		$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Non-activate customer success.');
		window.location.href='sigadgetcustomers.php';
		</script>
		
	<?php
	}
		else {
			?>
			<script>
		alert('Non-activate customer success.');
		window.location.href='sigadgetcustomers.php';
		</script>
			
			<?php
		}	
}
?>

<?php
//Mengaktifkan customer
if($_GET['customer']=="activate") {
	$id=$_GET['id'];
	$sql = mysqli_query($conn, "UPDATE `user` SET userstatus='Activate',Updated_at=now() WHERE ID_User='$id'");
	
		$result = $conn->query($sql);
	
	if($result) {
		?>
		<script>
		alert('Re-activate customer success.');
		window.location.href='sigadgetcustomers.php';
		</script>
		
	<?php
	}
		else {
			?>
			<script>
		alert('Re-activate customer success.');
		window.location.href='sigadgetcustomers.php';
		</script>
			
			<?php
		}	
}
?>