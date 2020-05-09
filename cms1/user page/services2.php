<?php
      include("db.php");
      $id=$_GET['user'];
	  $query="SELECT * FROM `users`   WHERE `user_id`='$id' ";
      $run=mysqli_query($con,$query);
      $r1=mysqli_fetch_assoc($run);
      $name=$r1['username'];
	   $img=$r1['user_image'];
      $qry="SELECT * FROM `tasks` WHERE `user_id`='$id' ORDER BY start_date DESC";
      $runn=mysqli_query($con,$qry);
	  $count=0;
     



       ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasks Page</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="about.html"><span class="img" style="background-image: url(../admin/images/<?php echo $img; ?>);"></span><b><?php echo $name;?></b></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="about.html"><b>About Me</b></a></li>
					<li class="colorlib-active"><a href="services.php?user=<?php echo $id;?>"><b>Tasks</b></a></li>
					<li><a href="blog.php?user=<?php echo $id;?>"><b>Blog</b></a></li>
					<li><a href="logout.php"><b>Logout</b></a></li>
				</ul>
			</nav>

			
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"> <span>Tasks</span></p>
	            <h1 class="bread">My Tasks</h1>
	          </div>
	        </div>
				</div>
			</section>
            <div class="vcard-content-wrapper bg-img" style="background-image: url(images/bg5.jpg);">
            <div class="vcard-page-content-wrapper d-flex align-items-end" style="padding-left: 20px; padding-top: 30px; ">
                <div class="page-content" style="overflow-y: hidden;">

                    <!-- Work Experience Area -->
                    <div class="work-experience-area">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Section Heading -->
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="work-experience-timeline-wrapper">
                                        <!-- Timeline Row -->
                                        <div class="timeline-row"></div>
                                        <?php
     
	  
      while($row=mysqli_fetch_assoc($runn))
      {
       
		
		$title=$row['title'];
		$domain=$row['domain'];
		$description=$row['description'];
		$domain=$row['domain'];
		$startdate=$row['start_date'];
		$enddate=$row['end_date'];
		$query1="SELECT * FROM `tags` WHERE `name`='$domain'";
		$run1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_assoc($run1);
		$tag=$row1['name'];
       
			  
			  
			  ?>
                                        <!-- Single Work Experience -->
                                        <div <?php if(($count%2)==0){if($count==0){?>class="single-experience-timeline active odd-item" <?php }else {?> class="single-experience-timeline odd-item" <?php } }else { ?> class="single-experience-timeline even-item" <?php } ?> >
                                            <h5><?php echo $startdate; ?></h5>
                                            <h4><?php echo $title; ?></h4>
                                            <h6><?php echo $tag; ?></h6>
                                            <p><?php echo $description; ?></p>
		  
										</div>
                                      <?php 
									  
		  
		  $count++;
		  }
		 
		 
		
		
	
		
		
	  
	  ?>
                                        
                                    
									</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
			
            </div>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
 