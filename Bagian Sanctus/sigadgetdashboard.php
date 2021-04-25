<?php
	include "sigadgetheader.php";
?>





<div class="container animate__animated animate__fadeInLeftBig">

<h1> Welcome, <?php echo"$_SESSION[account_username]"?></h1>
<br>

<a href = "../sigadgettransactions.php" class="col">
<img src="money-transfer.png" alt="" width = "100px"><br>
<p>Transaction</p> 
</a>

<a href = "sigadgetproducts.php" class="col">
<img src="phone-call.png" alt="" width = "100px"><br>
<p>Products</p> 
</a>

<a href = "sigadgetsales.php" class="col">
<img src="business-and-finance.png" alt="" width = "100px"><br>
<p>Sales</p> 
</a>

<a href = "sigadgetcouriers.php" class="col">
<img src="delivery-man.png" alt="" width = "100px"><br>
<p>Couriers and Distributions</p> 
</a>

<a href = "sigadgetcustomers.php" class="col">
<img src="customer.png" alt="" width = "100px"><br>
<p>Customer</p> 
</a>

<a href = "sigadgetadmins.php" class="col">
<img src="engineer.png" alt="" width = "100px"><br>
<p>Admins</p> 
</a>

<a href = "../sigadgetregisterimage.php" class="col">
<img src="image-gallery.png" alt="" width = "100px"><br>
<p>Images</p> 
</a>

</div>


</body>
</html>