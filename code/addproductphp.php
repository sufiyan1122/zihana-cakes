<?php

// <?php 
//    function compress($source, $destination, $quality) {

//       $info = getimagesize($source);

//       if ($info['mime'] == 'image/jpeg') 
//          $image = imagecreatefromjpeg($source);

//       elseif ($info['mime'] == 'image/gif') 
//          $image = imagecreatefromgif($source);

//       elseif ($info['mime'] == 'image/png') 
//          $image = imagecreatefrompng($source);

//       imagejpeg($image, $destination, $quality);

//       return $destination;
//    }




include "conn.php";
if(isset($_POST)){

$name=htmlspecialchars(stripcslashes(trim($_POST['name'])));
$description=htmlspecialchars(stripcslashes(trim($_POST['description'])));
$rpkg=htmlspecialchars(stripcslashes(trim($_POST['rpkg'])));
$mqty=htmlspecialchars(stripcslashes(trim($_POST['mqty'])));
$slider=htmlspecialchars(stripcslashes(trim($_POST['slider'])));

if(isset($_FILES['image'])){
      $errors= array();
      $post_photo = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $post_photo_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $path="images/order/";
//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

$ext = pathinfo($post_photo, PATHINFO_EXTENSION);  // getting image extension 
   if(   $ext=='png' || $ext=='PNG' || 
   $ext=='jpg' || $ext=='jpeg' || 
   $ext=='JPG' || $ext=='JPEG' || 
   $ext=='gif' || $ext=='GIF'  )  // checking image extension 
{
   if($ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG')
   {   
   $src=imagecreatefromjpeg($post_photo_tmp);
   }
   if($ext=='png' || $ext=='PNG')
   {   
   $src=imagecreatefrompng($post_photo_tmp);
   }
      if($ext=='gif' || $ext=='GIF')
   {   
   $src=imagecreatefromgif($post_photo_tmp);
   }

      list($width_min,$height_min)=getimagesize($post_photo_tmp); // fetching original image width and height 
      
   $newwidth_min=350; // set compressing image width 
   
   $newheight_min=($height_min / $width_min) * $newwidth_min; // equation for compressed image height
   
   $tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min); // create frame  for compress image
   
   imagecopyresampled($tmp_min, $src, 0,0,0,0,$newwidth_min, $newheight_min, $width_min, $height_min); // compressing image
   
  $st=imagejpeg($tmp_min,$path.$post_photo,80); //copy image in folder//
echo"aaaa";}
//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa


         if(!$st){
         header("Location:addproduct.php?var=1");
      }else{
      

      $path=$path.$post_photo;

      $query="INSERT INTO `product`(`name`, `ratePerKg`, `minQuantity`, `description`, `path`, `slider`) VALUES ('$name',$rpkg,$mqty,'$description','$path',$slider)";
      echo $query;
      $sql=mysqli_query($con,$query);
      if(!$sql){
         header("Location:addproduct.php?var=1");
      }
      else{
         header("Location:addproduct.php?var=2");

      }
}


}
      
else
	echo"upload image";


}

?>