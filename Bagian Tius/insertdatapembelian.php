<?php
include "../sigadgetconnection.php";

session_start();

 if(isset($_POST['beli'])){
	//masukin data pembelian customer ke database setelah pencet beli
		
		//untuk tabel penjualan
		$idproduk = (int)$_SESSION['idproduct'];
		$kuantitasproduk =(int) $_SESSION['kuantitas'];
		$hargaproduk = (int)$_SESSION["Harga_Produk"];
		$hargafinale = $kuantitasproduk * $hargaproduk + $_SESSION['kurirfinale'];
		$hargaproduktotal =(int)$hargafinale;
		
		//untuk tabel pembayaran user
		$iduser = $_SESSION['account_id'];
	
		

		
		
		
					$insert = mysqli_query($conn,"INSERT INTO penjualan (`ID_Penjualan`, `ID_Produk`, `Jumlah_Terjual`,
					`Harga_Produk`, `Total_Harga`, `Created_at`)
					 VALUES (NULL,$idproduk,$kuantitasproduk,$hargaproduk,$hargaproduktotal,now())");
					
					$insert2 = mysqli_query($conn,"INSERT INTO pembayaranuser(`ID_Pembayaran`, `ID_User`, `Kode_Pembayaran`, 
					`Card_Number`, `ID_Transaksi`, `Created_at`, `Updated_at`, `Status_Pembayaran`) 
					VALUES (NULL,$iduser,1,'111111',1,now(),now(),'Terbayar')");
					
					$insert3 = mysqli_query($conn," INSERT INTO `transaksi`(`ID_Transaksi`, `ID_User`, `ID_Pembayaran`, 
					`ID_Pengiriman`, `ID_Penjualan`) VALUES (NULL,$iduser,1,1,1)");
					
					if($insert) {
									?>
																				<script>
																				alert('Purchase succeed, back to home');
																				window.location.href='../home.php';
																				</script>
																				
																			<?php
									
								} else {
									echo mysqli_error($conn);


								}
 }
?>