<?php
include 'conn.php';
session_start();
$name=mysqli_real_escape_string($con,$_POST['name']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$quantity=mysqli_real_escape_string($con,$_POST['quantity']);
$dod=trim($_POST['date']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$proId=mysqli_real_escape_string($con,$_GET['id']);
$userId=mysqli_real_escape_string($con,$_SESSION['id']);

//$len=strlen($dod);


/*for ($i=0;$i<$len/2;$i++) {
	if(!is_numeric($dod[$i])){
		$dlmt=$dod[$i];
		break;
	}
}


$dodtmp=explode($dlmt,$dod);
$dod=$dodtmp[2]."-".$dodtmp[1]."-".$dodtmp[0];

*/


$query="INSERT INTO `productorder`(`userId`, `productId`, `date`, `name`, `address`, `phone`, `quantity`,`dateOfDelivery`) VALUES ($userId,$proId,now(),'$name','$address','$phone',$quantity,'$dod')";

$sql=mysqli_query($con,$query);

if(!$sql){
	echo "<div class='container text-center'>Ordered unsucessfull please try again later</div>";
	header("Location:takeorder.php?proid=$proid&var=2");
}
else{echo "<div class='container text-center'>Ordered sucessfull </div>";
	header("Location:buy.php?var=1");
}




?>