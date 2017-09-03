<?php
session_start();
include "conn.php";

if(!empty($_POST["email"]) && !empty($_POST["password"])){
	$email=$_POST["email"];
	$pass=md5($_POST["password"]);
	$query="SELECT `userId`,`email`,`fullName`, `password`,`admin` FROM `user` WHERE email='$email' and password='$pass'";
	$sql=mysqli_query($con,$query);
	$count=mysqli_num_rows($sql);
	$proid=$_GET["proid"];
	if($count==1){
		$row=mysqli_fetch_assoc($sql);
		$_SESSION['id']=$row['userId'];
		$_SESSION['fullname']=$row['fullName'];
		echo"loged in ";//secure home page*************start session in new pag and check if $_SESSION is set or not
		
		if($row['admin']==1){
		header("Location:admin.php");
		}
		else{
		header("Location:singinadmin.php?var=1");
		}
	}
	else{
		echo "invalid username or password";
		header("Location:singinadmin.php?up=1");
		//login page**********
	}
}
?>