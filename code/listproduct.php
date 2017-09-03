
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
if($_GET["var"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Failed to remove</p>
	<?php
}

if($_GET["var"]==2){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99e699;color:#1f7a1f;">sucessfully removed.</p>
	
	<?php
}

if($_GET["var1"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Failed to Edit</p>
	<?php
}

if($_GET["var1"]==2){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99e699;color:#1f7a1f;">sucessfully edited.</p>
	
	<?php
}

?>
<a href="addproduct.php" class="apr">Add product+</a>


<div style="margin-top:10px">
	<div class="container">
		<div class="row ">
<?php
$query="select * from product order by productId desc";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center product">
				<img src="<?php echo $row['path']; ?>" alt=" " class="proim img-circle" />
				<p style="white-space: nowrap;  text-overflow: ellipsis;font-size:12px;width:100%;height:18px;overflow:hidden;"><?php echo $row['name']; ?></p>
				<span style="color:red;width:100%; display:block;" >
					<span style="font-size:14px;" ><?php echo $row['ratePerKg']*$row['minQuantity']; ?>
						<span style="font-size:11px;" >Rs/<?php echo $row['minQuantity'];?>kg</span>
					</span>
				</span>
				<a class="rmbtn" href="remove.php?id=<?php echo $row['productId']; ?>">Remove</a>
				<a class="rmbtn" style="margin:1px;" href="edit.php?id=<?php echo $row['productId']; ?>">Edit</a>

			</div>
<?php	
}
?>
		</div>
	</div>
</div>
</body>
</html>