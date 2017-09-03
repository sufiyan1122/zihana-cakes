<div style="margin-top:10px">
	<div class="container">
		<h3 class="agileits_head w3_agileits_head">Cakes<i class="fa fa-birthday-cake" aria-hidden="true"></i></h3>
		<div class="row ">





<?php

//greennn

if($_GET["var"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99ff99;color:#004d00;">Ordered placed</p>
	<?php
}





include "conn.php";
$query="select * from product order by productId desc";
$res=mysqli_query($con,$query);




while($row=mysqli_fetch_assoc($res)){
?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 text-center product">
				<img src="<?php echo $row['path']; ?>" alt=" " class="proim img-rounded" />
				<p style="white-space: nowrap;  text-overflow: ellipsis;font-size:14px;width:100%;height:21px;overflow:hidden;"><?php echo $row['name']; ?></p>
				<span style="color:red;width:100%; display:block;" >
					<span style="font-size:14px;" ><?php echo $row['ratePerKg']*$row['minQuantity']; ?>
						<span style="font-size:11px;" >Rs/<?php echo $row['minQuantity'];?>kg</span>
					</span>
				</span>
				<a class="btnn" href="singleproduct.php?id=<?php echo $row['productId']; ?>">Buy</a>
			</div>
<?php	
}
?>
		</div>
	</div>
</div>
