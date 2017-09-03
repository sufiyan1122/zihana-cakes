<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include "conn.php";
include "navbar.php";
include "admincheck.php";

?>
<div class="container">
	<div class="row">
		
		<div class="col-sm-4">
			<a class="box text-center" href="listorder.php"><img class="img-responsive lo" src="images/icon/order.png"></a>
		</div>

		<div class="col-sm-4">
			<a class="box text-center" href="listproduct.php"><img class="img-responsive lo" src="images/icon/product.png"></a>
		</div>


		<div class="col-sm-4">
			<a class="box text-center" href="listworkshop.php"><img class="img-responsive lo" src="images/icon/workshopad.png"></a>
		</div>

		<div class="col-sm-4">
			<a class="box text-center" href="listgallery.php"><img class="img-responsive lo" src="images/icon/gallery.png"></a>
		</div>

		<div class="col-sm-4">
			<a class="box text-center" href="listfeedback.php"><img class="img-responsive lo" src="images/icon/feedback.png"></a>
		</div>

	</div>
</div>
</body>
</html>

