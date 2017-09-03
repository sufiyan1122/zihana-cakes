<div class="delicious_food">
		<div class="container">
			<h3 class="agileits_head w3_agileits_head">Our Gallery<i class="fa fa-picture-o" aria-hidden="true"></i></h3>
				<div class="agile_delicious_food_grids">

<?php
include "conn.php";
$query="select * from gallery order by imageId desc";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

				<div class="agile_delicious_food_grid">
					<a class="sb" href="<?php echo $row['path'];?>">
						<div class="view view-sixth">
							<img src="<?php echo $row['path'];?>" style="height:200px;width:100%;margin:2px auto;" alt=" " class="img-responsive" />
							<div class="mask">
								<h4><?php echo $row['name'];?></h4>
								<p><?php echo $row['description'];?></p>
							</div>
						</div>
					</a>
				</div>

<?php
}
?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/smoothbox.jquery2.js"></script>