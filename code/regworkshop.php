<?php

include "conn.php";  
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$doc=mysqli_real_escape_string($con,$_POST['doc']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$workshop=mysqli_real_escape_string($con,$_GET['id']);
$address=mysqli_real_escape_string($con,$_POST['address']);

$len=strlen($doc);


for ($i=0;$i<$len/2;$i++) {
	if(!is_numeric($doc[$i])){
		$dlmt=$doc[$i];
		break;
	}
}


$dodtmp=explode($dlmt,$doc);
$doc=$dodtmp[2]."-".$dodtmp[1]."-".$dodtmp[0];
$query="INSERT INTO `intrestedWork`(`name`,`address`, `phone`, `date`, `gender`, `workshop`) VALUES ('$name','$address','$phone','$doc','$gender',$workshop)";

$sql=mysqli_query($con,$query);
if(!$sql){
	echo"<div style='font-size:3em;width:100%;margin:10px auto;color:red;margin-top:6em'>FAILED TO REGISTER</div>";
	header("Location:intrested.php?id=$workshop&var=2");
}
else{
	echo"<div style='font-size:3em;width:100%;margin:10px auto;color:green;margin-top:6em'>REGISTERED</div>";
	header("Location:workshoppage.php?var=1");


}


?>