<?php

include "conn.php";

$id=$_GET["id"];

$query1="select * from gallery where imageId=$id";
$sql=mysqli_query($con,$query1);
$res=mysqli_fetch_assoc($sql);
$path=$res['path'];
echo $query;


$id=$_GET["id"];
$query="DELETE FROM `gallery` WHERE imageId=$id ";
$sql=mysqli_query($con,$query);
if(!$sql){
	echo "<h3>failed to remove please try again</h3><p>redirecting in 3 sec</p>";
	header("Refresh: 2; url=listgallery.php");
}
else{

if(unlink($path)){
	echo "<h3>Removed sucessfully</h3><p>redirecting in 3 sec</p>";
	header("Refresh: 2; url=listgallery.php");
}

else{
	echo "<h3>failed to remove  but not from server</h3><p>redirecting in 3 sec</p>";
	header("Location:listgallery.php?var=1");
}
}
?>