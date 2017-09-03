
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
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
if($_GET["var"]==1){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;"> Please try again</p>
	<?php
}

if($_GET["var"]==2){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99ff99;color:#004d00;"> Feedback submitted.</p>
	<?php
}

?>


<div class="container">
<form method="POST" action="feedbackphp.php" role="form">
						
						<div class="form-group">
							<h2>Feedback</h2>
						</div>

						<div class="form-group">
							<label class="control-label" for="fullName">Name</label>
							<input id="fullName" name="name" type="text" maxlength="50" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label class="control-label" for="mobile">Mobile</label>
							<input id="mobile" type="text" name="phone" maxlength="10" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="message">Message</label>
							<textarea id="message" type="text" name="message" class="form-control" required></textarea>
						</div>


    					<div class="form-group">
    					<input type="submit" class="btnn btnnn btn-primary" value="Submit" name="submit">
    					</div>




</form>

</div>


</body>
</html>
