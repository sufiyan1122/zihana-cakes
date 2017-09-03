<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>orders</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		table tr th,table tr td{
			color:black !important;
			border:1px solid black;

		}
		table tr th{
			background-color: 	#ffffcc;
		}
		table tr td a{
			color:black;
			font-size: 16px;
			display: block;
		}
	</style>
</head>
<body>
<?php
include "conn.php";
include "navbar.php";
include "admincheck.php";
?><div class="table-responsive">
<table class="table">

<tr>
	<th>Product</th>
	<th>QTY</th>
	<th>Phone</th>
	<th>Address</th>
</tr>

<?php

$query="select * from productorder order by orderId desc";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

<tr style="<?php 
if($row['seen']==1 and $row['delivered']==1){ 
	echo "background-color:#5af46c";} 
		else if($row['seen']==1 ){ 
			echo "background-color:#5a93f4";} 
				else{
					echo "background-color:#ff5959"; 
					}
	?>">
	<td><a href="singleorder.php?orderid=<?php echo $row['orderId'];?>"><?php echo $row['name'];?></a></td>
	<td><?php echo $row['quantity'];?></td>
	<td><a href="<?php echo "tel:".$row['phone'];?>"><?php echo $row['phone'];?></a></td>
	<td><?php echo $row['address'];?></td>
</tr>
<?php
}

?>

</table>
</div>

</body>
</html>