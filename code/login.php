<?php
session_start();
include "conn.php";

if(!empty($_POST["email"]) && !empty($_POST["password"])){
	$email=mysqli_real_escape_string($con,fix($_POST["email"]));
	$pass=mysqli_real_escape_string($con,md5($_POST["password"]));
	$query="SELECT `userId`,`email`,`fullName`, `password`,`admin` FROM `user` WHERE email='$email' and password='$pass'";
	$sql=mysqli_query($con,$query);
	$count=mysqli_num_rows($sql);
	$proid=$_GET["proid"];
	if($count==1){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['id']=$row['userId'];
		$_SESSION['fullname']=$row['fullName'];
		echo"loged in ";//secure home page*************start session in new pag and check if $_SESSION is set or not
		
		if($_GET['proid']>0){
		header("Location:singleproduct.php?id=$proid");
		}else if(!$row['admin']){
			$_SESSION['admin']=0;		
		header("Location:index.php");
		}else{
			$_SESSION['admin']=1;
		header("Location:admin.php");

		}
	}
	else{
		echo "invalid username or password";
		header("Location:signin.php?up=1");
		//login page**********
	}
}

function fix($name){
    $name=trim($name);
    $name=  addslashes($name);
    return $name;
}
?>