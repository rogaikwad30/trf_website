<?php
session_start();

  require('../cms1/includes/db.php'); 
  
  $k1='a';
  if(isset($_SESSION["word"])){$k1=$_SESSION["word"];}

?>
<!doctype html>
<html lang="en">
  <head>
     
    <title>Blog Main Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link href="pagination.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---------MODAL STYLE--->
 <style>

/* LOGIN MODAL*/
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
    width: 40% !important; 
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
     #blgcard:hover{
         text-decoration: none;
     }
     #srchbtn:hover{
            cursor: pointer;
        }
    .blog-entries .blog-entry img {
        max-width: 100%;
        width: 100%;
        height: 300px;
    }
    @media screen and (max-width: 1068px) {
                .modal-content{
                    margin-top: 30%;
                    width:50% !important;
                }
}
</style>
   <!-- headerstyle CSS -->
   <link rel="stylesheet" href="header/css/style.css">
    </head>
  <body style="background-color: white;">
      <!--::menu part start::-->
   <header class="main_menu home_menu" >
      <div class="container" >
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light top-bar fixed" >
                  <a class="navbar-brand" href="../index.php" style="width: 15%; height: 10%;"> <img id="headimg"src="header/trflogo6.png" alt="logo" > </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="navbdrop(this)">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                     <ul class="navbar-nav" >
                        <li class="nav-item">
                           <a class="nav-link headeranchors"  href="../cms1/search4.php" style="font-size:17px;">Project Tables</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link headeranchors"  href="../blogs/index.php" style="font-size:17px; color:red;">Blogs</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px;">
                              Quiz
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item headeranchors" href="../cms1/quiz_mainpage1.php" style="background:none !important;" style="font-size:17px;">Quizzes</a>
                              <a class="dropdown-item headeranchors" href="../cms1/leaderboard3.php" style="background:none !important;" style="font-size:17px;">Leaderboard</a>
                           </div>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link headeranchors" href="../cms1/devpage3.php" style="font-size:17px;">Developer's Page</a>
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
                              <img class=" rounded-circle" src="../cms1/admin/images/<?php echo $_SESSION['user_image'] ?>" style="width: 50%; height: 50%!important;">
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item headeranchors" href="../cms1/user page/about.php?user=<?php echo $_SESSION['user_id']?> " style="background:none !important;">User Page</a>
							  <?php if($_SESSION['user_role']=="admin"){ ?>
							   <a class="dropdown-item headeranchors" href="../cms1/admin/index.php" style="background:none !important;">Admin Page</a>
							  <?php } ?>
                              <a class="dropdown-item headeranchors" href="../cms1/user page/logout.php" style="background:none !important;">Logout</a>
                           </div>
                        </li>
						<?php }
						?>
                         
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
      
   <!--::menu part end::-->

   <!--::breadcrumb part start::-->
   <section class="breadcrumb blog_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <h2>BLOGS</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::breadcrumb part start::-->
   <div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="../cms1/login/login2.php" method="post">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="../trflogo6.png" alt="Avatar" class="avatar">
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

    <div class="wrap" style="margin-top: 40px; margin-bottom: 40px; font-family:'Inconsolata', SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace">
<br>
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Blogs</h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <?php
			  if(!isset($_GET['page'])){
					$page=1;
				}
		else {
			$page=$_GET['page'];
			
				}$results_per_page=6;
				$this_page_first=($page-1)*$results_per_page;
                  if(isset($_POST['Submit']))
                  {
                    $cat = $_POST['categories'];
                    $_SESSION["word"] = $cat;
                    $queery = "SELECT * FROM `categories` WHERE cat_title='$cat'";
                    $reesult = mysqli_query($con,$queery);
                    $r = mysqli_fetch_array($reesult);
                    $k = $r['cat_id'];
                    
                     $qq = "SELECT * FROM `posts` WHERE post_category_id=$k ";
					 $rr = mysqli_query($con,$qq);
					  $total_number=mysqli_num_rows($rr);
					   $qqq = "SELECT * FROM `posts` WHERE post_category_id=$k ORDER BY `post_views_count` DESC LIMIT ".$this_page_first. ','.$results_per_page ;
					 
                  }
                  elseif (isset($_POST['Submit1']))
                   {
                      $p_name = $_POST['title'];
                      $qqq = "SELECT * FROM `posts` WHERE post_title='$p_name'";
                  }

                  else
                  {	
                  if(isset($_SESSION["word"]))
                  {
                    $cat = $_SESSION["word"];
                    $queery = "SELECT * FROM `categories` WHERE cat_title='$cat'";
                    $reesult = mysqli_query($con,$queery);
                    $r = mysqli_fetch_array($reesult);
                    $k = $r['cat_id'];
                    
                     $qq = "SELECT * FROM `posts` WHERE post_category_id=$k ";
           $rr = mysqli_query($con,$qq);
            $total_number=mysqli_num_rows($rr);
             $qqq = "SELECT * FROM `posts` WHERE post_category_id=$k ORDER BY `post_views_count` DESC LIMIT ".$this_page_first. ','.$results_per_page ;
                  }
                  else
                  {
                    $qq="SELECT * FROM `posts`";
					$rr = mysqli_query($con,$qq);
            $total_number=mysqli_num_rows($rr);
                    $qqq = "SELECT * FROM `posts` ORDER BY `post_views_count` DESC LIMIT ".$this_page_first. ','.$results_per_page;
                  
                  }}
                
						$rrr = mysqli_query($con,$qqq);
                      if(mysqli_num_rows($rrr)==0)
                        {echo "No projects found";
					
					}
                          ?>
                         
              <div class="row">
                <?php
                   while($row = mysqli_fetch_array($rrr))
                   {
                          $p_id = $row['post_id'];
                          $p_image = $row['post_image'];
                          $p_author = $row['post_author'];
                          $qq = "SELECT * FROM `users` WHERE username='$p_author'";
                          $rr = mysqli_query($con,$qq);
                          $row1 = mysqli_fetch_array($rr);
                          $p_author_image = $row1['user_image'];
						  $arr1[]=$row;
						  
				   
				   }
              if(!empty($arr1))
              {
						  for($i=0;$i<count($arr1);$i++)
						  {
                               $username1=$arr1[$i]['post_author'];
                              $qq = "SELECT * FROM `users` WHERE `username`='$username1'";
                          $rr = mysqli_query($con,$qq);
                          $row1 = mysqli_fetch_array($rr);
                          $p_author_image = $row1['user_image'];
							  ?>
                <div class="col-md-6">
                  <a href="../cms1/post.php<?php echo "?p_id=".$arr1[$i]['post_id']; ?>" class="blog-entry element-animate" data-animate-effect="fadeIn" id="blgcard">
                    <img src="../cms1/admin/images/<?php echo $arr1[$i]['post_image']; ?>" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img style="height: 30px; width: 30px;"src="../cms1/admin/images/<?php echo $p_author_image ?>" alt="Batman"> <?php echo  $row1['user_firstname']." ".$row1['user_lastname']; ?></span>&bullet;
                        <span class="mr-2"><i class="fa fa-calendar"></i> <?php echo $arr1[$i]['post_date']; ?> </span> &bullet;
                      </div>
                      <h2><?php echo $arr1[$i]['post_title']; ?> </h2>
                        <div class="descrp">
                      <p style="word-wrap: break-word; "><?php echo $arr1[$i]['post_content']; ?>
                      </p>
                            </div>
                    </div>
                  </a>
                </div>  
              
						  <?php }}
				   						  ?>

              </div>
  <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                        <li  id="previous-page">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    </ul>
                  </nav>
                </div>
              </div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
            <script>
                'use strict';
              var curr="<?php echo $page ?>"
                  var numberOfItems = "<?php echo $total_number ?>";
				  
                  var limitPerPage = 6;
                  var totalPages = Math.ceil(numberOfItems / limitPerPage);
                  $(".pagination").append("<li class='page-item '><a href='javascript:void(0)' class='page-link'>" + 1 + "</a></li>");
                  for (var i = 2; i <= totalPages; i++) {
                      $(".pagination").append("<li class='page-item '><a href='javascript:void(0)' class='page-link'>" + i + "</a></li>"); // Insert page number into pagination tabs
                    }

                  $(".pagination").append("<li id='next-page'><a class='page-link' href='javascript:void(0' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");
                  var temp = document.getElementsByClassName("page-link")
                for(var c=1;c<temp.length;c++){
                    if(temp[c].innerHTML==curr){
                        var t = document.getElementsByClassName("page-item");
                        t[c-1].classList.add("active");
                        break;

                 }
                }

                  $(".pagination li.page-item").on("click", function() {
                      // Check if page number that was clicked on is the current page that is being displayed
                      if ($(this).hasClass('active')) {
                        return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
                      } else {
                        var currentPage = $(this).index();
                        // Get the current page number
                        $(".pagination li").removeClass('active'); // Remove the 'active' class status from the page that is currently being displayed
                        $(this).addClass('active'); // Add the 'active' class status to the page that was clicked on
                      }
                      window.location.replace("index.php?page="+currentPage);
                    });

                  $("#next-page").on("click", function() {
                      var currentPage = $(".pagination li.active").index(); // Identify the current active page
                      // Check to make sure that navigating to the next page will not exceed the total number of pages
                      if (currentPage === totalPages) {
                        return false; // Return false (i.e., cannot navigate any further, since it would exceed the maximum number of pages)
                      } else {
                        currentPage++; // Increment the page by one
                        $(".pagination li").removeClass('active'); // Remove the 'active' class status from the current page
                        $(".pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
                      }
                        window.location.replace("index.php?page="+currentPage);
                    });

                  $("#previous-page").on("click", function() {
                      var currentPage = $(".pagination li.active").index(); // Identify the current active page
                      // Check to make sure that users is not on page 1 and attempting to navigating to a previous page
                      if (currentPage === 1) {
                        return false; // Return false (i.e., cannot navigate to a previous page because the current page is page 1)
                      } else {
                        currentPage--; // Decrement page by one
                        $(".pagination li").removeClass('active'); // Remove the 'activate' status class from the previous active page number
                        $(".pagination li.page-item:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
                      }
                        window.location.replace("index.php?page="+currentPage);
                    });
            </script>


              

              

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
                  <form id="form1" name="form1" action="" method="post">
                  <?php 
                $qq1 = "SELECT * FROM `categories` WHERE 1";
                $rr1 = mysqli_query($con,$qq1);?>
                <input type="hidden" name="categories" id="categories" value="<?php if(isset($_POST['categories'])){echo $_POST['categories'];}else{echo '';} ?>">
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
                
              <!-- <div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    <li>
                      <a href="">
                        <img src="images/img_10.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>Some Awesome Topic of a Personal  Amazing Blog</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>Some Awesome Topic of a Personal  Amazing Blog</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="images/img_12.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>Some Awesome Topic of a Personal  Amazing Blog</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box --> 

              
            </div>
            <!-- END sidebar -->
	
			           
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
    
  
 
          </div>
        </div>
      </section>

    </div>
	
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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <script>
        function srchsubmit(){
    document.getElementById("Submit1").click();
}
        function catfunc(e){
            document.getElementById('categories').value=e.text;
        // document.form1.categories.value=e;
                $('#Submit').click();}
        
        var shtp = document.getElementsByClassName('descrp')
          for( var i=0; i< shtp.length;i++){
              shtp[i].innerHTML = shtp[i].innerHTML.substring(0,200) + "....";
          }
        
        function navbdrop(object){
    var testnav = document.getElementById('navbarNav');
            if(testnav.classList.contains('show')){
                if(testnav.style.display=='none'){
                    testnav.classList.add("show");
                    testnav.style.display='block';
                }
                else{
                testnav.classList.remove("show");
                testnav.style.display='none';
                }
                
            }
            else{
                    testnav.classList.add("show");
                    testnav.style.display='block';
                
            }
        }
      </script>

    <script src="header/js/jquery-3.2.1.min.js"></script>
    <script src="header/js/jquery-migrate-3.0.0.js"></script>
    <script src="header/js/popper.min.js"></script>
    <script src="header/js/bootstrap.min.js"></script>
    <script src="header/js/owl.carousel.min.js"></script>
    <script src="header/js/jquery.waypoints.min.js"></script>
    <script src="header/js/jquery.stellar.min.js"></script>
    <!-- jquery -->
   <script src="header/js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="header/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="header/js/bootstrap.min.js"></script>

   
  </body>
</html>
<?php include("../cms1/foooter.php"); ?>