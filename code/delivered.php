<?php 
include "conn.php";
$order=$_GET["orderid"];
$seenquery="UPDATE `productorder` SET `delivered`=1 WHERE orderId=$order";
$sqls=mysqli_query($con,$seenquery);
if(!$sqls){	
		header("Location:delivered.php?orderid=$order");
			}
		else{
		header("Location:listorder.php");

		}

?>