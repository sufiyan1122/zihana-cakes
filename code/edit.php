<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="css/adminstyle.css">

	<?php
	include "links.php";
	?>
	<style type="text/css">
		.btn-file{
			width:300px;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
include "conn.php";
include "navbar.php";
include "admincheck.php";



if(isset($_GET['id'])){
	$proid=$_GET['id'];

	$query="select * from product where productId=$proid";
	$sql=mysqli_query($con,$query);
	if($sql){
		$res=mysqli_fetch_assoc($sql);
		$name=$res['name'];
		$description=$res['description'];
		$rpkg=$res['ratePerKg'];
		$mqty=$res['minQuantity'];
		$path=$res['path'];




	}

}




?>
<div class="container">
<form method="POST" action="editproductphp.php" enctype="multipart/form-data" role="form">
						
						<div class="form-group">
							<h2>Edit product</h2>
						</div>

						<input type="hidden" value="<?php echo $proid;?>" name="id">

						<input type="hidden" value="<?php echo $path;?>" name="path">


						<div class="form-group">
							<label class="control-label" for="fullName">Name</label>
							<input id="fullName" name="name" type="text" maxlength="50" class="form-control" required value="<?php if(isset($_GET['id'])){echo $name;}?>">
						</div>

						<div class="form-group">
							<label class="control-label" for="email">Description</label>
							<textarea id="email" type="text" name="description" class="form-control" required ><?php if(isset($_GET['id'])){echo $description;}?></textarea>
						</div>

						<div class="form-group">
							<label class="control-label" for="phone" >Rate per KG</label>
							<input  type="number" id="phone" name="rpkg" min="0" value="<?php if(isset($_GET['id'])){echo $rpkg;}?>" maxlength="12" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="password">Minimum QTY</label>
							<select name="mqty" class="form-control" required>
								<option value="NULL">........................</option>
								<option value="0.5" selected="selected">500 g</option>
								<option value="1">1 kg</option>
								<option value="1.5">1.5 kg</option>		
								<option value="2">2kg</option>
								<option value="2.5">2.5kg</option>
								<option value="3">3kg</option>
								<option value="4">4kg</option>


							</select>
						</div>

    					<label class="control-label" style="font-size:20px;" >Slider</label>
    					<div class="form-group">
						<input type="radio" name="slider" value="1" required checked>
    					<label class="control-label">Yes</label>
    					</div>

    					<div class="form-group">
						<input type="radio" name="slider" value="0">
						<label class="control-label" >No</label>
    					</div>

    					<div class="form-group">
    					<input type="submit" class="btn btn-primary" value="Update" name="submit">
    					</div>





</form>
</div>
</body>
</html>
