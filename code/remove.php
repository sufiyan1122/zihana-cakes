<?php
include "conn.php";
$id=$_GET["id"];

$query1="select * from product where productId=$id";
$sql=mysqli_query($con,$query1);
$res=mysqli_fetch_assoc($sql);
$path=$res['path'];
echo $query;


$query="DELETE FROM `product` WHERE productId=$id ";
$sql=mysqli_query($con,$query);
if(!$sql){
	echo "<h3>failed to remove please try again</h3><p>redirecting in 3 sec</p>";
	header("Location:listproduct.php?var=1");
}
else{

if(unlink($path)){
	echo "<h3>Removed sucessfully</h3><p>redirecting in 3 sec</p>";
	header("Location:listproduct.php?var=2");
}

else{
	echo "<h3>failed to remove from server</h3><p>redirecting in 3 sec</p>";
	header("Location:listproduct.php?var=1");
}

}



?>