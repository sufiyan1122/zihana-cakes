<?php

$query="select userId,admin from user where admin=1";
$sql=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($sql);
if($row['userId']!=$_SESSION['id'] or $_SESSION['admin']==0){
	header("Location:signin.php?var=34");

}


?>