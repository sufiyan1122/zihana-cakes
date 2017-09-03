<?php 

include"conn.php";
$query="SELECT * FROM `Workshop`";
$res=mysqli_query($con,$query);
$no=1;
if($_GET["var"]==1){
	?>
	<p  class="text-center" style="margin:5px auto;border-radius:10px;color:red;font-size:16px;padding:5px;width:70%;background-color:#99ff99;color:#004d00;">Registered sucessfully</p>
	<?php
}





?>




<div >

		<h3 class="agileits_head w3_agileits_head">Workshop<i class="fa fa-book" aria-hidden="true"></i></h3>
	<div class="container">
		<div class="row ">
			<?php
			while($row=mysqli_fetch_assoc($res)){
			?>

			<div class="col-sm-4 col-md-3 col-lg-3 wrkshh">
				<div class="text-center worksh"><span style="color:#333;">Click for <?php echo $no;?></span></div>
				

				<ul class="wk" >
					<h4>Workshop:<?php echo $row["name"];?></h4>
					<li><?php echo $row["content1"];?></li>
					<?php if($no!=11 && $no!=12 && $no!=13 ){?>
					<li><?php echo $row["content2"];?></li>
					<li><?php echo $row["content3"];?></li>
					<?php }?>
					<li>Duration:<?php echo $row["duration"];?> Days</li>

					<li class="price"><?php echo $row["price"];?>RS</li>
					
					<a class="text-center" href="intrested.php?id=<?php echo $row["workshopId"];?>">Intrested</a>

				

					<a class="text-center" id="close" href="#" style="bottom:8em;" >Close</a>
				</ul>
			</div>

			<?php $no+=1;}?>

			<script type="text/javascript">
			$(document).ready(function() {
					$("ul.wk").hide();
				$(".wrkshh").click(function(e){
					$(this).find("ul.wk").show();

						$(this).click(function(e){
							$(this).find("ul").toggle();
						});
					});
				});
			</script>

	</div>

</div>