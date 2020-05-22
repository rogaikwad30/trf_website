<?php 
    //include("includes/db.php");
session_start();
//require('includes/db.php');
?>


<link rel="stylesheet" href="header/css/style.css">
<style>
    /* Full-width input fields */
    #usr,
    #pasw {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 26px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
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
        font-size: 20px;
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
        border-radius: 50%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
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

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    .mg-b-0{
        margin-bottom: 0 !important;
    }

    /* Add Zoom Animation */
    .animate {
        animation: zoom 0.6s
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

</style>

<style>
    input.largerCheckbox {
        width: 40px;
        height: 40px;
    }

</style>
<link rel="icon" href="trflogo6.png">

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<?php
/*things to do
*/  //header('Cache-Control: no cache'); //no cache
//session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
  //require('includes/db.php'); 
  //session_start();
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <!--Fontawsome link-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    

    <title>GSoc</title>

    
    <link rel="stylesheet" href="css/gsoc_project.css">
  </head>
  <body>
    <!--::menu part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../index.php" style="width: 15%; height: 10%;"> <img id="headimg" src="header/trflogo6.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px;color:red;">
                                        GSoC
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item headeranchors" href="gsoc_info.php" style="background:none !important;font-size:17px;">Information</a>
                                        <a class="dropdown-item headeranchors" href="gsoc.php" style="background:none !important;font-size:17px;color:red;">Featured Project</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link headeranchors" href="search4.php" style="clor: red;font-size:17px;">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link headeranchors" href="../blogs/index.php" style="font-size:17px;">Blogs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px;">
                                        Quiz
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item headeranchors" href="quiz_mainpage1.php" style="background:none !important;font-size:17px;">Quizzes</a>
                                        <a class="dropdown-item headeranchors" href="leaderboard3.php" style="background:none !important;font-size:17px;">Leaderboard</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link headeranchors" href="devpage3.php" style="font-size:17px;">Developers</a>
                                </li>
                                <?php //include("includes/header.php");
                if(!isset($_SESSION['user_id']))
                {?>
                            <!-- <li class="nav-item">
                                    <a class="nav-link headeranchors" href="javascript:void(0)" onclick="document.getElementById('modal-wrapper').style.display='block'" style="font-size:17px;">Login</a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link headeranchors" href="javascript:void(0)" onclick="document.getElementById('modal-wrapper').style.display='block'"  style="font-size:17px;">Login</a>
                                </li>
                                <?php }
                ?>
                                <?php //include("includes/header.php");
                if(isset($_SESSION['user_id']))
                {
                ?>
                                <li class="nav-item dropdown" style="width: 100px;">
                                    <a class="nav-link dropdown-toggle headeranchors" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class=" rounded-circle" src="admin/images/<?php echo $_SESSION['user_image'];?>" style="width: 50%; ">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php if($_SESSION['user_role']=="admin"){ ?>
                                        <a class="dropdown-item headeranchors" href="admin/index.php" style="background:none !important; font-size:17px;">Admin Page</a>
                                        <?php } ?>
                                        <a class="dropdown-item headeranchors" href="user page/blog.php?user=<?php echo $_SESSION['user_id']?>" style="background:none !important; font-size:17px;">User Page</a>
                                        <a class="dropdown-item headeranchors" href="user page/logout.php" style="background:none !important; font-size:17px;">Logout</a>
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
    <section class="breadcrumb blog_bg mg-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>GSoC</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="modal-wrapper" class="modal">
        <form class="modal-content animate" action="login/login2.php" method="post" >
                
            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="trflogo6.png" alt="Avatar" class="avatar">
                <h1 style="text-align:center">LOGIN</h1>
            </div>

            <div class="container">
                <input id="usr" type="text" placeholder="Enter Username" name="username">
                <input id="pasw" type="password" placeholder="Enter Password" name="password">        
                <button id="btn" type="submit">Login</button>
                <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
            </div>
            
        </form>
    </div>

    <?php 
    include("includes/db.php");

    if($con){
        //echo "You are connected succesfully";
        $qry = "SELECT * FROM `gsoc_project_2020` WHERE 1";
        $run = mysqli_query($con, $qry);
        $web = array();
        $andriod = array();
        $ML = array();
        $other = array();
        while($result = mysqli_fetch_array($run)){
            if($result['category'] == "website"){
                array_push($web, $result);
            }elseif($result['category'] == "ML"){
                array_push($ML, $result);
            }elseif($result['category'] == "android"){
                array_push($andriod, $result);
            }elseif($result['category'] == "other"){
                array_push($other, $result);
            }
        }
        //print_r($web);
        //print_r($run);
        //$result = mysqli_fetch_assoc($run);
        //while($result = mysqli_fetch_assoc($run)){
        //    print_r($result);
        //}
    }

?>

    
        <div class="main">
            <div class="info">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    A flower, sometimes known as a bloom or blossom, is the reproductive structure found in flowering plants (plants of the division Magnoliophyta, also called angiosperms).
                                </p>
                            </div>
                            <div class="col-md-6 verticle-line">
                                <h4>Rules : </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container project-acc"> 
                <hr>
                    <center><h3>Project Ideas</h3></center>
                <hr>           
                <div class="panel-group accordion" id="accordion-project" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse"  data-parent="#accordion-project" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Web Projects
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                    foreach ($web as $web_value) {
                                ?>
                                    <div class="col-lg-4 col-md-6 mob">
                                        <div class="card project" style="width: 18rem;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $web_value['name']; ?></h5>
                                              <p class="card-text"><?php echo $web_value['short_info']; ?></p>
                                              <a href="gsoc_p_details.php?project_id=<?php echo $web_value['Project_id']; ?>" class="card-link" target="_blank">More...</a>
                                            </div>
                                          </div>
                                    </div>
                                <?php
                                        }
                                    
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-project" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ML Project
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                    foreach ($ML as $ml_value) {
                                ?>
                                    <div class="col-lg-4 col-md-6 mob">
                                        <div class="card project" style="width: 18rem;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $ml_value['name']; ?></h5>
                                              <p class="card-text"><?php echo $ml_value['short_info']; ?></p>
                                              <a href="gsoc_p_details.php?project_id=<?php echo $ml_value['Project_id']; ?>" class="card-link" target="_blank">More...</a>
                                            </div>
                                          </div>
                                    </div>
                                <?php
                                        }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-project" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Android Project
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                    foreach ($andriod as $andriod_value) {
                                ?>
                                    <div class="col-lg-4 col-md-6 mob">
                                        <div class="card project" style="width: 18rem;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $andriod_value['name']; ?></h5>
                                              <p class="card-text"><?php echo $andriod_value['short_info']; ?></p>
                                              <a href="gsoc_p_details.php?project_id=<?php echo $andriod_value['Project_id']; ?>" class="card-link" target="_blank">More...</a>
                                            </div>
                                          </div>
                                    </div>
                                <?php
                                        }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-project" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Other Project
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <div class="row">
                                <?php
                                    foreach ($other as $other_value) {
                                ?>
                                    <div class="col-lg-4 col-md-6 mob">
                                        <div class="card project" style="width: 18rem;">
                                            <div class="card-body">
                                              <h5 class="card-title"><?php echo $other_value['name']; ?></h5>
                                              <p class="card-text"><?php echo $other_value['short_info']; ?></p>
                                              <a href="gsoc_p_details.php?project_id=<?php echo $other_value['Project_id']; ?>" class="card-link" target="_blank">More...</a>
                                            </div>
                                          </div>
                                    </div>
                                <?php
                                        }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>




<style>
    /*FOOTER*/


    footer {
        background: #16222A;
        background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
        background: linear-gradient(59deg, #3A6073, #16222A);
        color: white;
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
        background: #833ab4;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #fcb045, #fd1d1d, #833ab4);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
        /*transform: translateY(25px);*/
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
                            <li class="ftrl" id="ftrad"><span>VIT college, Upper Indiranagar, <br></span><span>Bibwewadi, </span>Pune-411037 </li>
                            <li class="ftrl" id="ftrph">(+91)7020787632</li>
                            <li class="ftrl" id="ftren" style="word-wrap: break-word;">theroboticsforumvitpune@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 style="color: white;">Follow Us</h4>
                    <ul class="social-network social-circle">
                        <li><a href="http://facebook.com/theroboticsforum" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://instagram.com/vitpunerobotics" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/the-robotics-forum/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
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
</body>

</html>
<script>
    var shtp = document.getElementsByClassName('descrp')
    for (var i = 0; i < shtp.length; i++) {
        shtp[i].innerHTML = shtp[i].innerHTML.substring(0, 200) + "....";
    }

    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
