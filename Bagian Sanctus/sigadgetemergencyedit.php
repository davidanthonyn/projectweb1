<?php
include "sigadgetheader.php";

$checkdata = mysqli_query($conn,"SELECT * FROM transaksi,pembayaran,pengiriman WHERE transaksi.ID_Transaksi = '$_GET[idtransaksi]' 
AND pembayaran.ID_Pembayaran= '$_GET[idpembayaran]' AND pengirimnan.ID_Pengiriman = '$_GET[idpengiriman]'");
$check = mysqli_fetch_array($checkdata);

?>

</body>
</html>