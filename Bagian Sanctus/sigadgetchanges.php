<?php
include "sigadgetconnection.php";

if(empty($_SESSION['account_username'])) {
	header('location: home.php');
} else if(!empty($_SESSION['account_username'])) {
if(!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel']=='admin') {
	
	} else {
		header('location: home.php');
	}
}

//Mengganti pembayaran dari pending menjadi terbayar
if($_GET['oppbayar']=="pendingtobayar") {
	$idbayar=$_GET['idbayar'];
	$idkirim=$_GET['idkirim'];
	
$sqlbayar = "UPDATE pembayaranuser SET Status_Pembayaran='Terbayar' WHERE ID_Pembayaran = '$idbayar'";
$sqlkirim = "UPDATE pengiriman SET Status_Pengiriman='Diproses' WHERE ID_Pengiriman = '$idkirim'";
	$resultbayar = $conn->query($sqlbayar);
	$resultkirim = $conn->query($sqlkirim);
	
	if($resultbayar&&$resultkirim) {
		?>
		<script>
		alert('Change Status Payment Success, from Proceed to Paid, back to Transactions.');
		window.location.href='sigadgettransactions.php';
		</script>
		
	<?php
	}
		else {
			?>
			<script>
		alert('Change Status Payment failed.');
		window.location.href='sigadgettransactions.php';
		</script>
			
			<?php
		}	
}

																		//Mengganti pengiriman dari proses ke kirim
																		if($_GET['opppengiriman']=="proceedtosend") {
																			$id=$_GET['id'];
																		$sql = "UPDATE pengiriman SET Status_Pengiriman='Dikirim' WHERE ID_Pengiriman = '$id'";
																			$result = $conn->query($sql);
																			
																			if($result) {
																				?>
																				<script>
																				alert('Change Shipment Success, from Proceed to Sent, back to Transactions.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																				
																			<?php
																			unlink("image/$id");
																			}
																				else {
																					?>
																					<script>
																				alert('Change Shipment failed.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																					
																					<?php
																				}	
																		}
																		
																		//Mengganti pengiriman dari kirim ke terima
																		if($_GET['opppengiriman']=="sendtoreceive") {
																			$id=$_GET['id'];
																		$sql = "UPDATE pengiriman SET Status_Pengiriman='Diterima' WHERE ID_Pengiriman = '$id'";
																			$result = $conn->query($sql);
																			
																			if($result) {
																				?>
																				<script>
																				alert('Change Shipment Success, from Sent to Receive, back to Transactions.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																				
																			<?php
																			unlink("image/$id");
																			}
																				else {
																					?>
																					<script>
																				alert('Change Shipment failed.');
																				window.location.href='sigadgettransactions.php';
																				</script>
																					
																					<?php
																				}	
																		}

?>