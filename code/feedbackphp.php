<?php
include "conn.php";
if(isset($_POST)){

$name=htmlspecialchars(stripcslashes(trim($_POST['name'])));
$message=htmlspecialchars(stripcslashes(trim($_POST['message'])));
$phone=htmlspecialchars(stripcslashes(trim($_POST['phone'])));
 

      $query="INSERT INTO `feedback`(`name`,`message`,`phone`) VALUES ('$name','$message','$phone')";
      $sql=mysqli_query($con,$query);
      if(!$sql){
         
      	header("Location:feedback.php?var=1");
      }
      else{
         header("Location:feedback.php?var=2");

      }




   }   



?>