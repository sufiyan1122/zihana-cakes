
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
<a href="addimage.php" class="apr">Add image+</a>
<div class="delicious_food">
		<div class="container">
			<h3 class="agileits_head w3_agileits_head">Our Gallery<i class="fa fa-picture-o" aria-hidden="true"></i></h3>
				<div class="agile_delicious_food_grids">

<?php
$query="select * from gallery order by imageId desc";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

				<div class="agile_delicious_food_grid">
					<a class="sb" href="<?php echo $row['path'];?>">
						<div class="view view-sixth">
							<img src="<?php echo $row['path'];?>" style="height:200px;margin:2px auto;" alt=" " class="img-responsive" />
							<div class="mask">
								<h4><?php echo $row['name'];?></h4>
								<p><?php echo $row['description'];?></p>
							</div>
						</div>
				<a class="rmbtn btnn" style="display:block;text-align: center; width:100px; margin:2px auto;" href="removeimage.php?id=<?php echo $row['imageId']; ?>">Remove</a>
					</a>
					
				</div>

<?php
}
?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
</body>
</html>