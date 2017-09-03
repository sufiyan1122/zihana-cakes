<div class="preloader" style="z-index:300;position:fixed;height:100%;width:100%;background-color:#FFF;">
 	<img src="images/icon/preloader.gif" class="status" style="z-index:300;height:10em;width:10em;display:block;margin:20% auto;">
</div>


<div class="nav_main">
		<div class="overlay"></div>
		<div class="mobile-side-menu" >
			<ul>
				<li><a href="index.php"><img  class="im" src="images/icon/home.png"> Home</a></li>
				<li><a href="buy.php"><img  class="im" src="images/icon/ord.png"> Buy</a></li>
				<li><a href="workshoppage.php"><img  class="im" src="images/icon/workshop.png"> Workshops</a></li>
				<li><a href="rate.php"><img  class="im" src="images/icon/rs.png"> Rate chart </a></li>
				<li><a href="feedback.php"><img  class="im" src="images/icon/feedback.png"></i> Feedback</a></li>
				<li><a href="location.php"><img  class="im" src="images/icon/loc.png"></i> About Us</a></li>
				<li><a href="app/zihanacakes.apk" style="display: block;"><img src="images/icon/android.png" class="im" > App</a></li>

				


				<?php
				if($_SESSION){
					?><li><h4 style="color:white;padding:1em;font-family: 'Lobster', cursive; ">Welcome <?php echo $_SESSION['fullname']; ?></h4></li><?php
				}

				if($_SESSION['admin']==1)
					include "shortcut.php";

				?>
				
			</ul>
		</div>
		<div class="navbar" style="background-image: url(images/icon/navback.png);">
			<div class="agile_container">
				<div class="w3_agile_nav_main_left">
					<div class="toggleMenu">
						<a href="#"> Menu </a>
					</div>
				</div>
				<?php
				if($_SESSION){
					?>
				<div class="w3_agile_nav_main_right">
					<div class="togglelog">
						<a href="logout.php" class=""><img  class="im" src="images/icon/logout.png"> logout</a>
					</div>
				</div>
				<?php	
				}
				else{
				?>
				<div class="w3_agile_nav_main_right">
					<div class="togglelog">
						<a href="signin.php" class=""><img  class="im" src="images/icon/login.png"> Login/Signup</a>
					</div>
				</div>

				<?php
			}
			?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/slide-from-top.js"></script> 
	<script type="text/javascript">
      $(document).ready(function() {
         $('.mobile-side-menu').slideFromTop({
            menuBtn: $('.toggleMenu'),
            navbar: $('.navbar'),
            menuSpeed: 500,
            bodyOverlay: $('.overlay')
         }); 
      });
    </script>