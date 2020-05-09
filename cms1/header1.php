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
</style>
   <!-- headerstyle CSS -->
   <link rel="stylesheet" href="header/css/style.css">
       
   <!--::menu part start::-->
   <header class="main_menu home_menu" >
      <div class="container" >
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light top-bar fixed" >
                  <a class="navbar-brand" href="../home4/tp.php" style="width: 15%; height: 10%;"> <img id="headimg"src="header/trflogo6.png" alt="logo" > </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                              <a class="dropdown-item headeranchors" href="../cms1/quiz_mainpage1.php" style="background:none !important;" style="font-size:17px;">Quizes</a>
                              <a class="dropdown-item headeranchors" href="../cms1/leaderboard3.php" style="background:none !important;" style="font-size:17px;">Leaderboard</a>
                           </div>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link headeranchors" href="index.html" style="font-size:17px;">Developer's Page</a>
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
                              <img class=" rounded-circle" src="admin/images/<?php echo $_SESSION['user_image'] ?>" style="width: 50%; height: 50%;">
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
      <img src="blank.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Modal Popup Box</h1>
    </div>

    <div class="container">
      <input id="usr" type="text" placeholder="Enter Username" name="username">
      <input id="pasw" type="password" placeholder="Enter Password" name="password">        
      <button id="btn" type="submit">Login</button>
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>
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

<!--------MODAL SCRIPT----->

      <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>