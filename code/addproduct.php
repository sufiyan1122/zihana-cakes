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

if($_GET["var"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Failed to add</p>
	
	<?php
}

if($_GET["var"]==2){
	?>



	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99e699;color:#1f7a1f;">sucessfully uploaded.</p>


	<?php
}


?>
<div class="container">
<form method="POST" action="addproductphp.php" enctype="multipart/form-data" role="form">
						
						<div class="form-group">
							<h2>Add product</h2>
						</div>

						<div class="form-group">
							<label class="control-label" for="fullName">Name</label>
							<input id="fullName" name="name" type="text" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="email">Description</label>
							<input id="email" type="text" name="description" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="phone" >Rate per KG</label>
							<input  type="number" id="phone" name="rpkg" min="0" maxlength="12" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="password">Minimum QTY</label>
							<select name="mqty" class="form-control" required>
								<option value="NULL">........................</option>
								<option value="0.5" selected="selected" >500 g</option>
								<option value="1">1 kg</option>
								<option value="1.5">1.5 kg</option>		
								<option value="2">2kg</option>
								<option value="2.5">2.5kg</option>
								<option value="3">3kg</option>
								<option value="4">4kg</option>


							</select>
						</div>

						<div class="form-group">
						
						<input type="file" class="btn btn-primary" name="image" required>


    					</div>
    					<label class="control-label" style="font-size:20px;" >Slider</label>
    					<div class="form-group">
						<input type="radio" name="slider" value="1" required checked="checked">
    					<label class="control-label">Yes</label>
    					</div>

    					<div class="form-group">
						<input type="radio" name="slider" value="0">
						<label class="control-label" >No</label>
    					</div>

    					<div class="form-group">
    					<input type="submit" class="btn btn-primary" value="Add" name="submit">
    					</div>





</form>
</div>
</body>
</html>
