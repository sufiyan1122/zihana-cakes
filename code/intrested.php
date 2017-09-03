<?php
session_start();
include"conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zihana cakes and cooking classes Edit</title>
	<?php
	include "links.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/form.css" type="text/css" rel="stylesheet" media="all"> 
</head>
<body>
<?php
include "navbar.php";
include "banner.php";
$wrkid=$_GET['id'];
if(isset($_SESSION)){
	$useid=$_SESSION['id'];
	$tmpqu="select fullName,address,phone from user where userId=$useid";
	$sql=mysqli_query($con,$tmpqu);
	if($sql){
		$res=mysqli_fetch_assoc($sql);
		$name=$res["fullName"];
		$address=$res["address"];
		$phone=$res["phone"];
	}
}

if($_GET["var"]==2){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#ff9999;color:#ff0000;">Failed to register</p>
	<?php
}


?>
<form method="POST" action="regworkshop.php?id=<?php echo $wrkid; ?>" role="form" class="container" style="min-width:70%">
						
						<div class="form-group">
							<h2>Register for workshop</h2>
						</div>

						<div class="form-group">
							<label class="control-label" for="signupName">Name</label>
							<input id="signupName" type="text" name="name" value=" <?php if($_SESSION){echo $name;}?> " class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" >Phone</label>
							<input  type="text" maxlength="12" name="phone" value=" <?php if($_SESSION){echo $phone;}?> " class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" >Date to conduct</label>
							<input  type="date" maxlength="12" placeholder="DD/MM/YY" name="doc" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="control-label" >Address</label>
							<textarea name="address" class="form-control" value="<?php if($_SESSION){echo $address;}?>" required></textarea>
						</div>

						<div class="form-group">
							<label class="control-label" >Gender</label>
							<select name="gender" class="form-control" required>
								<option value="" class="form-control">........</option>
								<option value="M" class="form-control">Male</option>
								<option value="F" class="form-control">Female</option>
							</select>
						</div>


						<div class="form-group">
							<button id="signupSubmit" type="submit" class=" btnn btnnn btn-info btn-block">SUBMIT</button>
						</div>


					</form>

</body>
</html>
