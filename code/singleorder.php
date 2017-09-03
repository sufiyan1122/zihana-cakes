<?php
session_start();
include "conn.php";
$order=$_GET["orderid"];
$seenquery="UPDATE `productorder` SET `seen`=1 WHERE orderId=$order";
$sqls=mysqli_query($con,$seenquery);
if(!$sqls){	
		header("Location:singleorder.php?orderid=$order");
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>order</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		table tr td{
			color:black !important;
			border:1px solid black;

		}
			</style>
</head>
<body>
<?php
include"navbar.php";
$fetchquery="SELECT * FROM `productorder` WHERE orderId=$order";
$res=mysqli_query($con,$fetchquery);
if($fetchquery){
$row=mysqli_fetch_assoc($res);
}
else
header("Location:singleorder.php?orderid=$order");

?>
<div class="table-responsive">
<table class="table">
	<tr>
		<td>Name</td>
		<td><?php echo $row['name']; ?> </td>
	</tr>

	<tr>
		<td>Address</td>
		<td><?php echo $row['address']; ?> </td>
	</tr>

	<tr>
		<td>Product name</td>
		<td><?php 
			$tmp=$row["productId"];
			$tempq=mysqli_query($con,"select * from product where productId=$tmp");
			$prod=mysqli_fetch_assoc($tempq);
			$path=$prod['path'];
			echo $prod['name']; ?></td>
	</tr>

	<tr>
		<td>Phone number</td>
		<td><a href="tel:<?php echo $row['phone'];?>"><?php echo $row['phone']; ?> </a></td>
	</tr>

	<tr>
		<td>Quantity</td>
		<td><?php echo $row['quantity']; ?> </td>
	</tr>

	<tr>
		<td>Price</td>
		<td><?php echo $row['quantity']*$prod['ratePerKg']." RS"; ?> </td>
	</tr>

</table>
	
</div>

<img style="width:300px;height:300px;margin:10px auto; display: block;" alt="product removed"  src="<?php echo $path;  ?>"/>
<a class="delbtn" style="" href="delivered.php?orderid=<?php echo $row['orderId'];?>">Delivered</a>

</body>
</html>
