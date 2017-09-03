<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add image</title>
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
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Failed to upload</p>

	<?php
}

if($_GET["var"]==2){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99e699;color:#1f7a1f;">sucessfully uploaded.</p>
	<?php
}


?>
<div class="container">
<form method="POST" action="addimagephp.php" enctype="multipart/form-data" role="form">
						
						<div class="form-group">
							<h2>Add image</h2>
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
						
						<input type="file" class="btn btn-primary" name="image" required>
						</div>

    					<div class="form-group">
    					<input type="submit" class="btn btn-primary" value="Add" name="submit">
    					</div>





</form>
</div>
</body>
</html>
