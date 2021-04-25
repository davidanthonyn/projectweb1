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