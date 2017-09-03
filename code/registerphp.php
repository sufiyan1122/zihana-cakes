<?php
include "conn.php";

$lfullname=mysqli_real_escape_string($con,fix($_POST["fullName"]));
$email=mysqli_real_escape_string($con,fix($_POST["email"]));
$phone=mysqli_real_escape_string($con,fix($_POST["phone"]));
$lpassword=mysqli_real_escape_string($con,md5($_POST["password"]));
$address=mysqli_real_escape_string($con,fix($_POST["address"]));
$query="INSERT INTO `user`(`fullName`, `email`, `phone`, `password`, `address`) VALUES ('$lfullname','$email','$phone','$lpassword','$address')";
echo $query;
$sql=mysqli_query($con,$query);
if(!$sql){	
	if(mysqli_errno($con)==1062){
		header("Location:register.php?var=3");
			}
			else{
		header("Location:register.php?var=1");

			}
	}
	else{
	header("Location:signin.php?var=23");
			}


function fix($name){
    $name=trim($name);
    $name=  addslashes($name);
    return $name;
}



?>