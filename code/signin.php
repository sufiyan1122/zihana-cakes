<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/form.css" type="text/css" rel="stylesheet" media="all"> 
</head>
<body>
<?php
include "navbar.php";
if($_GET["up"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Invalid username or password</p>
	<?php
}

if($_GET["up"]==2){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Please login to Buy.</p>
	<?php
}



?>
<div class="container mid">
	<form method="POST" action="<?php if($_GET['proid']){echo "login.php?proid=".$_GET['proid'];}else{echo "login.php";} ?>" role="form">
						<div class="form-group">
							<h2>SIGN IN</h2>
						<p class="form-group"></p>Dont have an account? <a href="register.php">Sign up</a></p>
						</div>


						<div class="form-group">
							<label class="control-label" for="signupName">Email</label>
							<input id="signupName" name="email" type="text" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="signupPassword">Password</label>
							<input id="signupPassword" name="password" type="password" maxlength="25" class="form-control" required  length="40">
						</div>

						<input type="hidden" name="prev" value="buy">

						<div class="form-group">
							<button id="signupSubmit" type="submit" class=" btnnn btnn btn-info btn-block">Sign in</button>
							
						</div>
						
						</form>
</div>
				</body>
			</html>