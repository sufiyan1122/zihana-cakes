<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zihana cakes and cooking classes </title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		.sproduct img{
			height:20em;
			width:20em;
			margin:10px auto;
			box-shadow: 2px 2px 15px #0f0f0f;
		}

		.sproduct a{
  display: block;
  border:1px solid #337ab7;
  background-color:#337ab7;
  text-decoration:none;color:#fff;
  padding:.5em 3em;
  margin-bottom:2em
}

.sproduct p{
  padding:2em 1em 1em 1em;
}

	</style>
</head>
<body>
<?php
include "conn.php";
include "navbar.php";
$productId=$_GET['id'];

$query="SELECT * FROM `product` WHERE productId=$productId";
$sql=mysqli_query($con,$query);
if(!$sql){
	//header("Location:singleproduct.php?id=$productId");
}
$row=mysqli_fetch_assoc($sql);


?>

<div style="margin-top:10px">
	<div class="container">
		<div class="row ">
			<div class="text-center sproduct">
				<img src="<?php echo $row['path'];?>" alt="" class="img-responsive img-rounded" />
				<h2 class="text-center"><?php echo $row['name'];?></h2>
				<span style="color:red;width:100%; display:block;" >
					<span style="font-size:14px;" ><?php echo $row['ratePerKg']*$row['minQuantity']; ?>
						<span style="font-size:11px;" >Rs/<?php echo $row['minQuantity'];?>kg</span>
					</span>
				</span>
				<p><?php echo $row['description'];?></p>
				<a href="<?php if($_SESSION){ echo"takeorder.php?proid=$productId";} else{ echo"signin.php?up=2&proid=$productId";} ?> "">Buy</a>
			</div>



		</div>
	</div>
</div>