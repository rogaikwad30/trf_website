<?php 
    //include("includes/db.php");
//session_start();
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

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
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
    /*FOOTER*/


    footer {
        background: #16222A;
        background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
        background: linear-gradient(59deg, #3A6073, #16222A);
        color: white;
        margin-top: 100px;
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

</style>
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
        height: 200px;
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

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
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

    .blog_bg {
        background-image: url("https://wallpaperaccess.com/full/741758.jpg");
    }

</style>
<style>
    input.largerCheckbox {
        width: 40px;
        height: 40px;
    }

</style>
<link rel="icon" href="trflogo6.png">
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

                            <li class="nav-item">
                                <a class="nav-link headeranchors" href="search4.php" style="clor: red;font-size:17px;">Project Tables</a>
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
                                <a class="nav-link headeranchors" href="devpage3.php" style="font-size:17px;">Developer's Page</a>
                            </li>
                            <?php //include("includes/header.php");
            if(!isset($_SESSION['user_id']))
            {?>
                           <!-- <li class="nav-item">
                                <a class="nav-link headeranchors" href="javascript:void(0)" onclick="document.getElementById('modal-wrapper').style.display='block'" style="font-size:17px;">Login</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link headeranchors" href="user_new_register.php" style="color: red;font-size:17px;">Register</a>
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
<section class="breadcrumb blog_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>REGISTRATION FORM</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
  require('includes/db.php'); 
  //session_start();
?>
<?php
    
   if(isset($_POST['register'])) {

	   		 $user_id   = mysqli_real_escape_string($con, $_POST['user_id']);
            $user_firstname    = mysqli_real_escape_string($con, $_POST['user_firstname']);
            $user_lastname     = mysqli_real_escape_string($con, $_POST['user_lastname']);
           	$user_branch = mysqli_real_escape_string($con, $_POST['Branch']);
            $username          = mysqli_real_escape_string($con, $_POST['username']);
            $user_email        = mysqli_real_escape_string($con, $_POST['user_email']);
            $user_password     = mysqli_real_escape_string($con, $_POST['user_password']);
            $conf_password     = mysqli_real_escape_string($con, $_POST['conf_password']);
       $user_year    = mysqli_real_escape_string($con, $_POST['year']);
       
      // echo $user_id;
	    
            $qry1="SELECT * FROM `users` WHERE `username`='$username'";
            $run=mysqli_query($con,$qry1);
            $row=mysqli_num_rows($run);
            
            if($row<1){
               if($user_password == $conf_password){

                    $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));

                    $query = "INSERT INTO users(user_id, user_firstname, user_lastname, user_role,username,user_email,user_password,Branch,Year) ";

                    $query .= "VALUES('{$user_id}','{$user_firstname}','{$user_lastname}','subscriber','{$username}','{$user_email}', '{$user_password}','{$user_branch}','{$user_year}') ";

                    $create_user_query = mysqli_query($connection, $query);

                    //confirmQuery($create_user_query);


                     echo "<script>alert('User created successfully.');
                               window.location.replace(\"/\");
                            </script>";
               }
               else{
                   echo "<script>
                            alert('Password confirmation is not match.');
                        </script>";
               }
            }
            else {
                echo "<script>
                        alert('Username already exists !!!');
                    </script>";

            }
	 


}

   




?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="a_user_registration/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="a_user_registration/fonts/line-awesome/css/line-awesome.min.css">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="a_user_registration/css/style.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--favicon link-->
    <link rel="shortcut icon" href="http://sstatic.net/so/favicon.ico">
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content" style="margin-top: 12% !important; margin-bottom: 12% !important;">
            <div class="form-left">
                <h2>The Robotics Forum</h2>
                <p class="text-1">Technical teams build you to apply your theoretical knowledge in real life situations while striving for precision under immense pressure during competitions. If you are not just running after knowledge but, wish to acquire wisdom, you are at the right place!</p>
                <br>
                <small><sup style="color: red;">*</sup>   compulsary field</small>
            </div>


            <form class="form-detail" action="" method="post" id="myform">

                <h2>REGISTRATION FORM</h2>
                <div class="form-row">
                    <label for="username"><sup style="color: red;">*</sup>Username :</label>
                    <input type="text" name="username" id="username" class="input-text new" title="Creat Your User Name" placeholder="Creat Your User Name" required>
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="user_firstname"><sup style="color: red;">*</sup>Firstname : </label>
                        <input type="text" name="user_firstname" id="user_firstname" class="input-text new" title="Enter Your First Name" placeholder="First Name" value="<?php if(isset($_POST['user_firstname'])) { echo htmlentities($_POST['user_firstname']); } ?>" required>
                    </div>
                    <div class="form-row form-row-1 ">
                        <label for="user_lastname"><sup style="color: red;">*</sup>Lastname :</label>
                        <input type="text" name="user_lastname" id="user_lastname" class="input-text new" title="Enter Your Last Name" placeholder="Last Name" value="<?php if(isset($_POST['user_lastname'])) { echo htmlentities($_POST['user_lastname']); } ?>" required>
                    </div>
                </div>
                <div class="form-row">
                    <label for="grNo"><sup style="color: red;">*</sup>GR NO:</label>
                    <input type="text" name="user_id" id="grNo" class="input-text new" title="General Registration Number" placeholder="General Registration Number" value="<?php if(isset($_POST['user_id'])) { echo htmlentities($_POST['user_id']); } ?>" required>
                </div>



                <div class="form-group">
                    <div class="form-row form-row-1" style="padding-bottom: 8%">
                        <label for="inputBranch"><sup style="color: red;">*</sup>Branch :</label>
                        <select id="inputBranch" name="Branch" class="form-control" style="padding-left: 0; padding-right: 0;" title="select your branch" required>
                            <option hidden selected>Select</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Computer') ? 'selected="selected"' : ''; ?> value="Computer">Computer</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'E&TC') ? 'selected="selected"' : ''; ?> value="E&TC">E&TC</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Mechanical') ? 'selected="selected"' : ''; ?> value="Mechanical">Mechanical</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Electronics') ? 'selected="selected"' : ''; ?> value="Electronics">Electronics</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'IT') ? 'selected="selected"' : ''; ?> value="IT">IT</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Instrumentation') ? 'selected="selected"' : ''; ?> value="Instrumentation">Instrumentation</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Indus & Production') ? 'selected="selected"' : ''; ?> value="Indus & Production">Indus Prod</option>
                            <option <?php echo (isset($_POST['Branch']) && $_POST['Branch'] == 'Chemical') ? 'selected="selected"' : ''; ?> value="Chemical">Chemical</option>
                        </select>
                    </div>
                    <div class="form-row form-row-1 " style="padding-bottom: 8%">
                        <label for="year"><sup style="color: red;">*</sup>Year :</label>
                        <select id="year" name="year" class="form-control" style="padding-left: 0; padding-right: 0;" title="select your year" required>
                            <option hidden selected>Select</option>
                            <option <?php echo (isset($_POST['year']) && $_POST['year'] == 'FY') ? 'selected="selected"' : ''; ?> value="FY">FY</option>
                            <option <?php echo (isset($_POST['year']) && $_POST['year'] == 'SY') ? 'selected="selected"' : ''; ?> value="SY">SY</option>
							<option <?php echo (isset($_POST['year']) && $_POST['year'] == 'TY') ? 'selected="selected"' : ''; ?> value="TY">TY</option>
							<option <?php echo (isset($_POST['year']) && $_POST['year'] == 'BE') ? 'selected="selected"' : ''; ?> value="BE">BE</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <label for="your_email"><sup style="color: red;">*</sup>Your Email :</label>
                    <input type="email" name="user_email" id="your_email" class="input-text new" title="Enter your official email(vit)" pattern="[a-z0-9._%+-]+@vit\.edu$" placeholder="Enter your college id (@vit.edu)" value="<?php if(isset($_POST['user_email'])) { echo htmlentities($_POST['user_email']); } ?>" required>
                </div>
				


                <div class="form-group">
                    <div class="form-row form-row-1">
                        <label for="user_password"><sup style="color: red;">*</sup>Password:</label>
                        <input type="password" name="user_password" id="user_password" class="input-text new" title="Create your Password" placeholder="Create Password" required>
                    </div>
                    
                    <div class="form-row form-row-1">
                        <label for="conf_password"><sup style="color: red;">*</sup>Re-enter Password:</label>
                        <input type="password" name="conf_password" id="conf_password" class="input-text new" title="Confirm your Password" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register" style="padding: 5%;">
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</body>


</html>

<style>
    /*FOOTER*/


    footer {
        background: #16222A;
        background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
        background: linear-gradient(59deg, #3A6073, #16222A);
        color: white;
        margin-top: 100px;
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
<footer class="mainfooter" role="contentinfo" style="margin-top: 6%;">
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
