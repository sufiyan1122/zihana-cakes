	<div class="banner-bottom" id="cakes">
		<div class="container">
			<h3 class="agileits_head">Cakes<i class="fa fa-birthday-cake" aria-hidden="true"></i></h3>
		</div>
	

		<img  class="profimg img-responsive" style="z-index:28;margin-top:2.7em;margin-left:-.5em;min-height:180px;border-radius:0px; min-width:190px;" src="images/profile/prof.png">

		<ul id="flexiselDemo1">	
<?php  

include "conn.php";
$query="SELECT `productId`, `name`, `ratePerKg`, `minQuantity`, `path`, `slider` FROM `product` WHERE slider=1 ORDER BY productId desc ";
$sql=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($sql)){

?>
			<li>
				<div class="w3layouts_banner_bottom_left" style="margin:0px 1px;">
					<img src="<?php echo $row['path'];?>" alt="img" class=" sze img-responsive" style="width:100%; min-height:190px; " />
					<span style="position:absolute;z-index:29;width:100%;height:1em;background-color: white;display:inline-block;"></span>
					<h4><?php echo $row['name'];?><span style="display:block"><?php echo $row['minQuantity']*$row['ratePerKg'];?><span style="font-size:13px;";>Rs/<?php echo $row['minQuantity'];?>kg</span></span></h4>
				</div>
			</li>

<?php } ?>
			
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 4000,
					autoPlay: true,
					autoPlaySpeed: 10,    		
					pauseOnHover: false,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 2
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:3
						},
						tablet: { 
							changePoint:768,
							visibleItems: 4
						}
					}
				});
				
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>