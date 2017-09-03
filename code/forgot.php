<!DOCTYPE html>
<html>
<head>
	<title>Zihana cakes and cooking classes</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/form.css" type="text/css" rel="stylesheet" media="all"> 
</head>
<body>
<?php
include "navbar.php";

?>

	<form method="POST" class="container mid" style="min-width:54%" action="forgotphp.php" role="form">
					
						<div class="form-group">
							<h2>Forgot password</h2>
						</div>


						<div class="form-group">
							<label class="control-label" for="signupName">Email</label>
							<input id="signupName" name="email" type="text" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btnnn btnn btn-info btn-block">Send Email</button>
						</div>
						</form>
				</body>
			</html>