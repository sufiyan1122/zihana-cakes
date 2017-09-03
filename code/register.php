<!DOCTYPE html>
<html>
<head>
	<title>Zihana cakes and cooking classes register</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/form.css" type="text/css" rel="stylesheet" media="all"> 
</head>
<body>
<?php
include "navbar.php";
if($_GET["var"]==1){
	?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;"> something went wrong please try to register once again.</p>
<?php
}
if($_GET["var"]==3){
?>
	<p class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;"> email id or phone number already registered.</p>
<?php
}

?>

<script>
    function validate() {
        var pass1 = document.getElementById("pass").value;
        var pass2 = document.getElementById("cpass").value;
        if (pass1 != pass2 || pass1.length<7) {
            document.getElementById("errmsg").style.display="inline-block";
            document.getElementById("submit").disabled=true;
    	}
    	else{
         	document.getElementById("errmsg").style.display="none";   
    		document.getElementById("submit").disabled=false;
		}
}
</script>

	<form method="POST" action="registerphp.php" role="form" class="container" style="min-width:70%">
						
						<div class="form-group">
							<h2>SIGN UP</h2>
						</div>

						<div class="form-group">
							<label class="control-label" for="fullName">Full name</label>
							<input id="fullName" name="fullName" type="text" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="email">Email</label>
							<input id="email" type="email" name="email" maxlength="50" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="phone" >Mobile no</label>
							<input  type="text" id="phone" name="phone" maxlength="10" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" for="pass">Password</label>
							<input  type="password" id="pass" name="password" maxlength="25" class="form-control" required placeholder="at least 6 characters" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="cpass">Password again</label>
							<input  name="cPassword" id="cpass" onblur="validate()" type="password" maxlength="25" class="form-control" required>
						</div>

		    			<span class="col-sm-12 form-group" style="display:none;color:red;" id="errmsg">password doesnot match or length should be more than 6 character</span>	


						<div class="form-group">
							<label class="control-label" for="address">Address</label>
							<textarea rows="4" id="address" name="address" class="form-control" required></textarea>
						</div>

						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btnn btnnn btn-info btn-block">Create your account</button>
						</div>
					</form>

				</body>
			</html>