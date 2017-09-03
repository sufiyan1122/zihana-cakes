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
include "navbar.php";
include "conn.php";
include "admincheck.php";
?><div class="table-responsive">
<table class="table">

<tr>
	<th>Name</th>
	<th>message</th>
	<th>Phone</th>
</tr>
<?php


$query="select * from feedback order by feedbackId desc";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

<tr style="background-color: #c6efd5;">
	<td><a><?php echo $row['name'];?></a></td>
	<td><?php echo $row['message'];?></td>
	<td><a href="<?php echo "tel:".$row['phone'];?>"><?php echo $row['phone'];?></a></td>


</tr>
<?php
}

?>

</table>
</div>

</body>
</html>