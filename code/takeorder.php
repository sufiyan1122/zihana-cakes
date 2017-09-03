<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zihana cakes and cooking classes</title>
	<?php
	include "links.php";
	$id=$_GET["proid"];
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/form.css" type="text/css" rel="stylesheet" media="all"> 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>
<?php
include "navbar.php";
include 'conn.php';
$useid=$_SESSION['id'];
	$tmpqu="select fullName,address,phone from user where userId=$useid";
	$sql=mysqli_query($con,$tmpqu);
	if($sql){
		$res=mysqli_fetch_assoc($sql);
		$name=$res["fullName"];
		$address=$res["address"];
		$phone=$res["phone"];
	}

if($_GET["var"]==2){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Order failed please try again</p>
	<?php
}

?>
<form method="POST" action="placeorder.php?id=<?php echo $id; ?>" role="form" class="container" style="min-width:55%;">
						
						<div class="form-group">
							<h2>ORDER</h2>
						</div>

						<div class="form-group">
							<label class="control-label" for="signupName">Name</label>
							<input name="name" id="signupName" value="<?php echo $name;?>" type="text" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" >Phone</label>
							<input  name="phone" type="text" maxlength="12" value="<?php echo $phone;?>" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" >Quantity</label>
							<input type="number" name="quantity" value="1" min="1" class="form-control" required>
						</div>


						<div class="form-group">
							<label class="control-label">Date of delivery</label>
							<input id="datepicker" name="date" type="date" class=" form-control" placeholder="Can't deliver today....(dd-mm-yyyy)" class="form-control" required>
							
						</div>


						<div class="form-group">
							<label class="control-label">Address of shipment</label>
							<textarea name="address" rows="4" class="form-control" required><?php echo $address;?></textarea>
						</div>

						<p class="form-group">50% cash should be paid at the time of order</p>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btnn btnnn btn-info btn-block">Order</button>
						</div>
					</form>

</body>
</html>
