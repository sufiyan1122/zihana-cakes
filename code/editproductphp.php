<?php
include "conn.php";
if(isset($_POST)){
$proid=htmlspecialchars(stripcslashes(trim($_POST['id'])));
$path=htmlspecialchars(stripcslashes(trim($_POST['path'])));

$name=htmlspecialchars(stripcslashes(trim($_POST['name'])));
$description=htmlspecialchars(stripcslashes(trim($_POST['description'])));
$rpkg=htmlspecialchars(stripcslashes(trim($_POST['rpkg'])));
$mqty=htmlspecialchars(stripcslashes(trim($_POST['mqty'])));
$slider=htmlspecialchars(stripcslashes(trim($_POST['slider'])));

      $query="UPDATE `product` SET `name`='$name',`ratePerKg`=$rpkg,`minQuantity`=$mqty,`description`='$description',`path`='$path',`slider`=$slider WHERE `productId`=$proid";
      //echo $query;
      $sql=mysqli_query($con,$query);
      if(!$sql){
      	header("Location:listproduct.php?var1=1");
      }
      else{
         header("Location:listproduct.php?var1=2");

      }




   }   
?>