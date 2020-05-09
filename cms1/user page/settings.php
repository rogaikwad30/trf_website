<?php
       include("../includes/db.php");
	     include ("../includes/header.php"); 
      $id=$_GET['user'];
	  $query="SELECT * FROM `users`   WHERE `user_id`='$id' ";
      $run=mysqli_query($con,$query);
      $r1=mysqli_fetch_assoc($run);
      $name=$r1['username'];
	   $img=$r1['user_image'];



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MAIN PAGE</title>
    
    
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
    <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
        <title>Responsive Bootstrap 4 Profile Page Example</title>
        <style type="text/css">
            html, body {
                height: 100%;
            }
        </style>
        <style type="text/css">
            header {
    padding: .4rem 0;
    border-bottom: 1px solid #e9e9e9;
    box-shadow: 0px 0px 6px rgba(0,0,0,.05);
}

.navbar-logo {
    width: 2.4rem;
    height: 2.4rem;
    margin-right: .5rem;
    margin-top: -.25rem;
}

.navbar-avatar {
    height: 3.4rem;
    width: 3.4rem;
}

.navbar-search {
    display: flex;
}

.navbar-search .form-control {
    padding: 1.36rem;
    background: #fff url(data:image/png;base64,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) no-repeat left 12px center;
    background-position: left 1rem center;
    background-size: 22px;
    border-radius: 4rem;
    border-color: #d9d9d9;
    padding-left: 2.9rem;
    box-shadow: 1px 1px 4px rgba(0,0,0,.1) inset;
}

.chart {
    position: relative;
    text-align: center;
}

.chart canvas {
    display: block;
    margin: 0px auto;
}

.chart span {
    position: absolute;
    width: 100%;
    text-align: center;
    left: 0;
    top: 50%;
    margin-top: -12px;
    color: #999;
}
            
        </style>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

        <!-- Required Resources -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rating/1.5.0/bootstrap-rating.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
      
  </head>
  <body style="background-image: url(images/bg5.jpg);">

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="about.php?user=<?php echo $id;?>"><span class="img" style="background-image: url(../admin/images/<?php echo $img; ?>);"></span><?php echo $r1['user_firstname']."  ".$r1['user_lastname']  ;?></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="../../home4/tp.php">HOME</a></li>
					<li><a href="about.php?user=<?php echo $id;?>">About Me</a></li>
					<li><a href="services.php?user=<?php echo $id;?>">Projects</a></li>
					<li><a href="blog.php?user=<?php echo $id;?>">Blog</a></li>
					<li class="colorlib-active"><a href="settings.php?user=<?php echo $id;?>">Change Settings</a></li>
                     <?php if($_SESSION['user_role']=="admin") {
                   ?>
                   
                    <li><a href="../admin/index.php">ADMIN PAGE</a></li> 
                  <?php  } ?>
					
					<li><a href="logout.php"><b>Logout</b></a></li>
				</ul>
			</nav>
		</aside> 
        
		<div id="colorlib-main" >
            
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"> <span>About me</span></p>
	            <h1 class="bread">User Profile</h1>
	          </div>
	        </div>
				</div>
			</section>
            <div class="vcard-content-wrapper bg-img" style="background-image: url(images/bg5.jpg);">
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
                    
					<div class="d-flex" style="background-image: url(images/bg5.jpg);">
                        <div class="container">
      <div class="col-md-6 mx-auto text-center">

      </div>
                            <style>
                                .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>
      
        <div class="myform form ">
           <form action="settings.php?user=<?php echo $_SESSION['user_id']; ?>" method="post" name="login" enctype="multipart/form-data">
               <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>First Name:</h2>
                         <input type="text" name="firstname" value="<?php echo $r1['user_firstname']; ?>" required class="form-control my-input"  style="height: 37px !important;">
                      </div>
                   </div>
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>Last Name:</h2>
                         <input type="text" name="lastname" value="<?php echo $r1['user_lastname']; ?>"required class="form-control my-input"  style="height: 37px !important;">
                      </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>Username:</h2>
                         <input type="text" name="username" value="<?php echo $r1['username']; ?>"required class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>E-mail ID:</h2>
                         <input type="text" name="email" value="<?php echo $r1['user_email']; ?>"  class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>Old Password:</h2>
                         <input type="text" name="passwordcurr" value="" class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>New Password:</h2>
                         <input type="text" name="password2" value=""  class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                     <div class="form-group">
                                <label for="state"><h2><span style="color: red;">*</span>Branch:</h2></label>
                                <div class="form-select">
                                    <select name="branch" id="state" class="form-control my-input" required style="height: 37px !important;">
                                        <option value="DESH" <?php if($r1['Branch']=="DESH" ){echo "selected"; }?>>DESH</option>
                                        <option value="Computer" <?php if($r1['Branch']=="Computer" ){echo "selected"; }?>>Computer</option>
                                        <option value="E&TC"  <?php if($r1['Branch']=="E&TC" ){echo "selected"; }?>>E&amp;TC</option>
                                        <option value="Electronics"  <?php if($r1['Branch']=="Electronics" ){echo "selected"; }?>>Electronics</option>
                                        <option value="IT"  <?php if($r1['Branch']=="IT" ){echo "selected"; }?>>IT</option>
                                        <option value="Mechanical"  <?php if($r1['Branch']=="Mechanical" ){echo "selected"; }?>>Mechanical</option>
                                        <option value="Instrumentation"  <?php if($r1['Branch']=="Instrumentation" ){echo "selected"; }?>>Instrumentation</option>
                                        <option value="Indus & Production" <?php if($r1['Branch']=="Indus & Production" ){echo "selected"; }?>>Indus Prod</option>
                                        <option value="Chemical" <?php if($r1['Branch']=="Chemical" ){echo "selected"; }?>>Chemical</option>
                                    </select>
                                </div>
                            </div>
                   </div>
                   <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <label for="state"><h2><span style="color: red;">*</span>Year</h2></label>
                                <div class="form-select">
                                    <select name="year" id="state" class="form-control my-input" required style="height: 37px !important;">
                                        <option value=""></option>
                                        <option value="FY" <?php if($r1['Year']=="FY" ){echo "selected"; }?>>FY</option>
                                        <option value="SY" <?php if($r1['Year']=="SY" ){echo "selected"; }?>>SY</option>
                                        <option value="TY" <?php if($r1['Year']=="TY" ){echo "selected"; }?>>TY</option>
                                        <option value="BE" <?php if($r1['Year']=="BE" ){echo "selected"; }?>>BE</option>
                                    </select>
                                </div>
                            </div>
               </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>LinkedIn Link:</h2>
                         <input type="text" name="linkedin" value="<?php echo $r1['linkedin_link']; ?>" name="linkedin"  class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>Github Link:</h2>
                         <input type="text" name="github" value="<?php echo $r1['github_link']; ?>"  class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2><span style="color: red;">*</span>Hackerrank ID:</h2>
                         <input type="text" name="hacker" value="<?php echo $r1['hacker_id']; ?>" class="form-control my-input" style="height: 37px !important;">
                      </div>
                   </div>
                    <div class="col-md-6 mx-auto">
                      <div class="form-group">
                          <h2>Choose profile picture:</h2>
                         <input type="file" name="img"  class="form-control my-input" style="height: 37px !important; font-size: 10px;">
                      </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-6 mx-auto">
                  <div class="text-center ">
                     <button type="submit" name="submit" class=" btn btn-block send-button tx-tfm" style="margin: 5% 0;">SUBMIT</button>
                  </div>
                   </div>
               </div>
           </form>
        </div>
   </div>
								
                        
					</div>
				</div>
			</section>
			
			
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
<?php
 $oldname=$r1['username'];

if(isset($_POST['submit']))
{
  $oldpass=$_POST['passwordcurr'];
    $id=$_GET['user'];
  $newpass2=$_POST['password2'];
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
     $email=$_POST['email'];
     $branch=$_POST['branch'];
    
     $year=$_POST['year'];
     $linkedin=$_POST['linkedin'];
     $github=$_POST['github'];
     $hacker=$_POST['hacker'];
    $imgname=$_FILES['img']['name'];
   $tempname=$_FILES['img']['tmp_name'];
 move_uploaded_file($tempname,"../admin/images/$imgname");
    $qry2="SELECT * FROM `posts` WHERE `post_author`='$oldname'";
     $run2=mysqli_query($con,$qry2);
   $row2=mysqli_fetch_assoc($run2);
    $r1=mysqli_num_rows($run2);
    
    if($r1>0)
    {
        $qry3="UPDATE `posts` SET `post_author`='$username',`post_user`='$username' WHERE `post_author`='$oldname'";
         $run3=mysqli_query($con,$qry3);
    }
  $qry1="SELECT * FROM `users` WHERE `user_id`='$id' ";
  $run=mysqli_query($con,$qry1);
   $row=mysqli_fetch_assoc($run);

  $r1=mysqli_num_rows($run);
  	$pass=mysqli_real_escape_string($con,$oldpass);
    $password=mysqli_real_escape_string($con,$row['user_password']);
    if(($_POST['password2']=="") AND ($_POST['passwordcurr']==""))
    {
         if(isset($_FILES['img']['name']) AND ($_FILES['img']['name']!="")){
      
       $qry3="UPDATE `users` SET `username`='$username',`user_image`='$imgname',`user_firstname`='$firstname',`user_lastname`='$lastname',`Branch`='$branch',`Year`='$year',`user_email`='$email',`linkedin_link`='$linkedin',`github_link`='$github',`hacker_id`='$hacker' WHERE `user_id`='$id'";
       $run=mysqli_query($con,$qry3);
         }
         else
         {
             
          $qry3="UPDATE `users` SET `username`='$username',`user_firstname`='$firstname',`user_lastname`='$lastname',`Branch`='$branch',`Year`='$year',`user_email`='$email',`linkedin_link`='$linkedin',`github_link`='$github',`hacker_id`='$hacker' WHERE `user_id`='$id'";
       $run=mysqli_query($con,$qry3);
             
         }
          
        
        
         if($run==TRUE)
       {

         echo "<script>alert('Settings updated successfully')</script>";


       }
        else
            echo "<script>alert(mysqli_error($run))</script>";
        
    }
    else{
     if (password_verify($pass,$password)){
         if(isset($_FILES['img']['name']) AND ($_FILES['img']['name']!="")){
       $pass=password_hash( $newpass2, PASSWORD_BCRYPT, array('cost' => 12));
       $qry3="UPDATE `users` SET `user_password`='$pass',`username`='$username',`user_firstname`='$firstname',`user_lastname`='$lastname',`user_image`='$imgname',`Branch`='$branch',`Year`='$year',`user_email`='$email',`linkedin_link`='$linkedin',`github_link`='$github',`hacker_id`='$hacker' WHERE `user_id`='$id'";
       $run=mysqli_query($con,$qry3);
         }
         else
         {
             $pass=password_hash( $newpass2, PASSWORD_BCRYPT, array('cost' => 12));
          $qry3="UPDATE `users` SET `user_password`='$pass',`username`='$username',`user_firstname`='$firstname',`user_lastname`='$lastname',`Branch`='$branch',`Year`='$year',`user_email`='$email',`linkedin_link`='$linkedin',`github_link`='$github',`hacker_id`='$hacker' WHERE `user_id`='$id'";
       $run=mysqli_query($con,$qry3);
             
         }
       if($run==TRUE)
       {

         echo "<script>alert('Settings updated successfully')</script>";


       }
else {
  echo "<script>alert('Settings not updated ')</script>";
}

     }
    
     else {
       echo "<script>alert('Please reenter your old password!')</script>";
     }





}
}






 ?>
