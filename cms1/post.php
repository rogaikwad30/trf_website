<?php  include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
 
 <?php

    if(isset($_GET['p_id']))
    {
      $the_post_id = $_GET['p_id'];
      $update_statement = mysqli_prepare($connection, "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = ?");
      mysqli_stmt_bind_param($update_statement, "i", $the_post_id);
      mysqli_stmt_execute($update_statement);
      if(!$update_statement)
       {
        die("query failed" );
        }
      if(isset($_SESSION['username']) && is_admin($_SESSION['username']) )
       {
        $stmt1 = mysqli_prepare($connection, "SELECT post_title, post_author, post_date, post_image, post_content FROM posts WHERE post_id = ?");
        }
     else {
        $stmt2 = mysqli_prepare($connection , "SELECT post_title, post_author, post_date, post_image, post_content FROM posts WHERE post_id = ? AND post_status = ? ");

        $published = 'published'; 
      }//else closes
      if(isset($stmt1)){

        mysqli_stmt_bind_param($stmt1, "i", $the_post_id);

        mysqli_stmt_execute($stmt1);

        mysqli_stmt_bind_result($stmt1, $post_title, $post_author, $post_date, $post_image, $post_content);

      $stmt = $stmt1;


    }else {


        mysqli_stmt_bind_param($stmt2, "is", $the_post_id, $published);

        mysqli_stmt_execute($stmt2);

        mysqli_stmt_bind_result($stmt2, $post_title, $post_author, $post_date, $post_image, $post_content);

     $stmt = $stmt2;

    }?>   
<!doctype html>
<html lang="en">
  <head>
    <title>Blog Display Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="../blogs/css/bootstrap.css">
    <link rel="stylesheet" href="../blogs/css/animate.css">
    <link rel="stylesheet" href="../blogs/css/owl.carousel.min.css">

    <link rel="stylesheet" href="../blogs/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../blogs/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../blogs/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../blogs/css/style.css">
      
      
   <!-- style CSS -->
   <link rel="stylesheet" href="../blogs/header/css/style.css">
   
    <style>
        .firstcharacter {
          color: #903;
          float: left;
          font-family: Georgia;
          font-size: 75px;
          line-height: 60px;
          padding-top: 4px;
          padding-right: 8px;
          padding-left: 3px;
        }
    </style>
	<style>

/* Full-width input fields */
#usr, #pasw {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
#btn {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
#btn:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
        @media (max-width: 767.98px){
header .navbar {
    background: none !important;
}
            #comsub{
            margin-bottom: 5%;
        }
}
        #srchbtn:hover{
            cursor: pointer;
        }
        
        .post-entry-sidebar ul li a img {
            width: 90px;
            height: 60px;
            box-shadow: 1px 1px 5px 2px grey;
        }
        
</style>
  </head>
  <body style="background-color: white;">
  <div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="../cms1/login/login2.php" method="post">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="blank.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">TRF LOGIN</h1>
    </div>

    <div class="container">
      <input id="usr" type="text" placeholder="Enter Username" name="username">
      <input id="pasw" type="password" placeholder="Enter Password" name="password">        
      <button id="btn" type="submit">Login</button>
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>
  <header class="main_menu home_menu">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="../index.php" style="width: 15%; height: 10%;"> <img id="headimg"src="../blogs/header/trflogo6.png" alt="logo" > </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link headeranchors"  href="search4.php">Project Tables</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link headeranchors" style="color: red;" href="../blogs/index.php">Blogs</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Quiz
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item headeranchors" href="quiz_mainpage1.php">Quizzes</a>
                              <a class="dropdown-item headeranchors" href="leaderboard3.php">Leaderboard</a>
                           </div>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link headeranchors" href="devpage3.php">Developer's Page</a>
                        </li>
                       <?php //include("includes/header.php");
						if(!isset($_SESSION['user_id']))
						{?>
                        <li class="nav-item">
                            <a class="nav-link headeranchors" href="javascript:void(0)" onclick="document.getElementById('modal-wrapper').style.display='block'" >Login</a>
                        </li>
						<?php }
						?>
						<?php //include("includes/header.php");
						if(isset($_SESSION['user_id']))
						{
							?>
						<li class="nav-item dropdown" style="width: 100px;">
                           <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <img class=" rounded-circle" src="admin/images/<?php echo $_SESSION['user_image']; ?>" style="width: 50%; height: 50%;">
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item headeranchors" href="../cms1/user page/blog.php?user=<?php echo $_SESSION['user_id']?> " style="background:none !important;">User Page</a>
							  <?php if($_SESSION['user_role']=="admin"){ ?>
							   <a class="dropdown-item headeranchors" href="../cms1/admin/index.php" style="background:none !important;">Admin Page</a>
							  <?php } ?>
                              <a class="dropdown-item headeranchors" href="../cms1/user page/logout.php" style="background:none !important;">Logout</a>
                           </div>
                        </li>
						<?php } ?>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!--::menu part end::-->

   <!--::breadcrumb part start::-->
    <?php
          mysqli_stmt_fetch($stmt);
           
            $qq = "SELECT * FROM `users` WHERE username='$post_author'";
            $rr = mysqli_query($con,$qq);
            $row1 = mysqli_fetch_array($rr);
            $p_author_image = $row1['user_image'];
            $qqq = "SELECT * FROM `posts` WHERE post_title='$post_title'";
            $rrr = mysqli_query($con,$qqq);
            $row = mysqli_fetch_array($rrr)
                      ?>
   <section class="breadcrumb blog_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <h2>BLOGS: <?php echo $post_title; ?></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
    
    
   
    <div class="wrap" style="margin-top: 40px; margin-bottom: 40px;">
    <section class="site-section py-lg" style="padding-top: 50px; padding-bottom: 50px;">
      <div class="container">
        
        <div class="row blog-entries element-animate">

           

          <div class="col-md-12 col-lg-8 main-content">
            <img src="admin/images/<?php echo $post_image; ?>" alt="Image" class="img-fluid mb-5" >
             <div class="post-meta">
                        <span class="author mr-2" style="font-size: 18px;"><img style="height: 40px; width: 40px;" src="admin/images/<?php echo $p_author_image ?>" alt="Image" class="mr-2"> <?php echo $row1['user_firstname']." ".$row1['user_lastname'] ?></span>&bullet;
                        <span class="mr-2" style="font-size: 18px;"><i class="fa fa-calendar"></i> <?php echo $post_date ?> </span> &bullet;
                        <span class="ml-2" style="font-size: 18px;"><span class="fa fa-comments"></span> </span>
                      </div>
                      
            <h1 class="mb-4"><?php echo $post_title ?></h1>
            <a class="category mb-5" href="#"><?php echo $row['post_tags']; ?></a>
            <div class="post-content-body">
				<?php $string = $row['post_content']; 
				$firstcharacter = $string[0];
				$next = substr($string,1); ?>
             <p style="word-wrap: break-word;"><span class="firstcharacter"> <?php echo $firstcharacter; ?></span><?php echo $next; ?></p>
            </div>
<br>       
            <hr>
            <?php
			
            if(isset($_POST['create_comment'])) {
    if(isset($_SESSION['user_id']))
    {	
        $the_post_id = $_GET['p_id'];
        $comment_author_id = $_SESSION['user_id'];
        //$comment_email = $_POST['comment_email'];
        $comment_content = $_POST['comment_content'];

        if (!empty($comment_content)) {


            $query1 = "INSERT INTO comments (comment_post_id, comment_author, comment_content, comment_status,comment_date)";

            $query1 .= "VALUES ($the_post_id ,'{$comment_author_id}', '{$comment_content }', 'unapproved',now())";

            $create_comment_query = mysqli_query($con, $query1);
            #$create_comment_query->store_result();
            if (!$create_comment_query) {
                die('QUERY FAILED1' . mysqli_error($connection));


            }


        }

    }
    else
    {?>
            <?php
      echo "<script>alert('Please Login to Comment')</script>";
    }

    }?>
    
      
            <div class="pt-5" style="padding-top: 10px;">
              <ul class="comment-list">
                <?php
                if(isset($_SESSION['user_id']))
                 {

                    
            $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
            #$query .= "AND comment_status = 'approved' ";
            $query .= "ORDER BY comment_id DESC ";
            $select_comment_query = mysqli_query($con, $query);
            if(!$select_comment_query) {

                die('Query Failed' . mysqli_error($connection));
             }
            while ($row = mysqli_fetch_array($select_comment_query)) {
            $comment_date   = $row['comment_date']; 
            $comment_content= $row['comment_content'];
            $comment_author_id = $row['comment_author'];
      $q1 = "SELECT `username` FROM `users` WHERE `user_id` = {$comment_author_id}";
      $run = mysqli_query($con, $q1);
      $author_name = mysqli_fetch_assoc($run);
             ?>
                <li class="comment">
                  <div class="vcard">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $author_name['username'];   ?></h3>
                    <div class="meta"><?php echo $comment_date ?></div>
                    <p><?php echo $comment_content;   ?></p>
                  </div>
                </li>
                </ul>
                <?php } } }   else {


            header("Location: index.php");


            }?>
        
              
              <div class="comment-form-wrap pt-5">
            <form action="#" method="post" role="form">

                <div class="form-group">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment_content" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" name="create_comment" class="btn btn-primary" id="comsub">Submit</button>
            </form>
              </div>
            </div>

          </div>
		
          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap" style="margin-bottom: 50px;">
                <form action="../blogs/index.php" class="search-form" id="form2" method="post">
                  <div class="form-group">
                    <span class="icon fa fa-search" id="srchbtn" onclick="srchsubmit()"></span>
                    <input type="text" class="form-control" id="s" name="title" placeholder="Type post title ">
                  </div>
                  <button type="submit"  style="display:none;" form="form2" value="Submit1" id="Submit1" name="Submit1">Submit</button>
                </form>
              </div>
                <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  <form id="form1" name="form1" action="../blogs/index.php" method="post">
                  <?php 
                $qq1 = "SELECT * FROM `categories` WHERE 1";
                $rr1 = mysqli_query($con,$qq1);?>
                <input type="hidden" name="categories" id="categories" value="">
                <?php
                while($row = mysqli_fetch_array($rr1))
                {
                  $val = $row['cat_title'];
                ?>
                
                  <li><a href="javascript:void(0)" onclick="catfunc(this)"><?php echo $val; ?></a></li>
                  <?php } ?>

               
                <button type="submit" form="form1" value="Submit" id="Submit" name="Submit" style="display: none;">Submit</button>
              </form>
                </ul>
                
              </div>
              <div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  <ul><?php 
                     $qqq = "SELECT * FROM `posts` ORDER BY `post_views_count` DESC LIMIT 6";
                     $rrr = mysqli_query($con,$qqq);
                     while($row = mysqli_fetch_array($rrr))
                   {
                          $p_id1 = $row['post_id'];
                          $p_image = $row['post_image'];
                          $p_author = $row['post_author'];
                          $qq = "SELECT * FROM `users` WHERE username='$p_author'";
                          $rr = mysqli_query($con,$qq);
                          $row1 = mysqli_fetch_array($rr);
                          $p_author_image = $row1['user_image'];
                          ?>
                    <li>
                      <a href="../cms1/post.php<?php echo "?p_id=".$p_id1 ?>">
                        <img src="admin/images/<?php echo $p_image ?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4><?php echo $row['post_title']; ?> </h4>
                          <div class="post-meta">
                            <span class="mr-2"><?php echo $row['post_date']; ?></span>
                          </div>
                        </div>
                      </a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
          </div>
          <!-- END sidebar -->

           </div>
          </div></div>
    </section>


    </div>
     <style>
        
        /*FOOTER*/


        footer {
          background: #16222A;
          background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
          background: linear-gradient(59deg, #3A6073, #16222A);
          color: white;
            margin: 0px;
          margin-top:100px;
        }

        footer a {
          color: #fff;
          font-size: 14px;
          transition-duration: 0.2s;
        }

        footer a:hover {
          color: #FA944B;
          text-decoration: none;
        }

        .copy {
          font-size: 12px;
          padding: 10px;
          border-top: 1px solid #FFFFFF;
        }

        .footer-middle {
          padding-top: 2em;
          color: white;
        }


        /*SOCİAL İCONS*/

        /* footer social icons */

        ul.social-network {
          list-style: none;
          display: inline;
          margin-left: 0 !important;
          padding: 0;
        }

        ul.social-network li {
          display: inline;
          margin: 0 5px;
        }


        /* footer social icons */

        .social-network a.icoFacebook:hover {
          background-color: #3B5998;
        }

        .social-network a.icoLinkedin:hover {
          background-color: #007bb7;
        }
        .social-network a.icoInstagram:hover {
          background: #833ab4;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoInstagram:hover i,
        .social-network a.icoLinkedin:hover i {
          color: #fff;
        }

        .social-network a.socialIcon:hover,
        .socialHoverClass {
          color: #44BCDD;
        }

        .social-circle li a {
          display: inline-block;
          position: relative;
          margin: 0 auto 0 auto;
          -moz-border-radius: 50%;
          -webkit-border-radius: 50%;
          border-radius: 50%;
          text-align: center;
          width: 30px;
          height: 30px;
          font-size: 15px;
        }

        .social-circle li i {
          margin: 0;
          line-height: 30px;
          text-align: center;
        }

        .social-circle li a:hover i,
        .triggeredHover {
          -moz-transform: rotate(360deg);
          -webkit-transform: rotate(360deg);
          -ms--transform: rotate(360deg);
          transform: rotate(360deg);
          -webkit-transition: all 0.2s;
          -moz-transition: all 0.2s;
          -o-transition: all 0.2s;
          -ms-transition: all 0.2s;
          transition: all 0.2s;
        }

        .social-circle i {
          color: #595959;
          -webkit-transition: all 0.8s;
          -moz-transition: all 0.8s;
          -o-transition: all 0.8s;
          -ms-transition: all 0.8s;
          transition: all 0.8s;
        }

        .social-network a {
          background-color: #F9F9F9;
        }

        #ftr {
          list-style: none;
          padding: 0;
        }
        .ftrl {
          padding-left: 1.3em;
        }
        #ftren:before {
          content: "\f0e0"; 
          font-family: FontAwesome;
          display: inline-block;
          margin-left: -1.3em; 
          width: 1.3em; 
        }
            #ftrph:before {
          content: "\f095"; 
          font-family: FontAwesome;
          display: inline-block;
          margin-left: -1.3em; 
          width: 1.3em; 
        }
            #ftrad:before {
          content: "\f015"; 
          font-family: FontAwesome;
          display: inline-block;
          margin-left: -1.3em; 
          width: 1.3em; 
        }
          

      </style>
    <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4 style="color: white;">The Robotics Forum </h4>
              <ul class="list-unstyled " id="ftr">
               <li class="ftrl" id="ftrad"><span>666 Upper Indiranagar, <br></span><span>Bibwewadi, </span>Pune-411001 </li>
						<li class="ftrl" id="ftrph">1234567890  </li>
						<li class="ftrl" id="ftren">trf@vit.edu</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <h4 style="color: white;">Follow Us</h4>
            <ul class="social-network social-circle">
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3"></div>
        </div>
        <div class="row">
          <div class="col-md-12 copy">
            <p class="text-center">&copy; Copyright 2019 - The Robotics Forum. All rights reserved.</p>
          </div>
        </div>

      </div>
    </div>
  </footer>
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
	<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function srchsubmit(){
    document.getElementById("Submit1").click();
}
</script>
    <script>
    function catfunc(e){
            document.getElementById('categories').value=e.text;
            
        // document.form1.categories.value=e;
                $('#Submit').click();}
              </script>
  </body>
</html>