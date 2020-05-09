
<html>
<head>
    <title>Quiz display</title>
    <link rel="stylesheet" href="quuiz/quiz_mainpage_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <!-- headerstyle CSS -->
   <link rel="stylesheet" href="quuiz/header/css/style.css">
    <style>
        #main{
            box-shadow: 2px 2px 20px 1px forestgreen;
            border-radius: 25px;
        }
        
        #quiz_title{
            font-size: 25px;
            color: black;
            font-weight: bolder;
        }
         #complt{
            position: relative;
            font-family: monospace;
            font-weight: 600;
            color:cornsilk;
            padding: 1px 15px;
            font-size: 20px;
            border: 0;
            border-radius: 10px;
            box-shadow: 1px 1px 3px 3px #aaaaaa;
            background: rgb(138,138,141);
            background: radial-gradient(circle, rgba(138,138,141,1) 11%, rgba(188,185,185,1) 67%, rgba(210,208,208,1) 89%);
            color: black;
            width: 84.99px;
        }
        @media screen and (max-width: 1068px) {
                footer{
                     position: fixed;
                      left: 0;
                      bottom: 0;
                      width: 100%;
            }
                .modal-content{
                    margin-top: 30% !important;
                }
}
    
    </style>
</head>
<body>
<?php
session_start();
	include("headerqiz.php");
	?>
 
    <h1 class="main_title" style="margin-left:14%;">ALL QUIZZES</h1>
    <hr>
    <div style="margin-left:10%;">
    <div class="stats" style="margin-top: 30px;">
                    <h1>ONGOING QUIZZES</h1>
                </div>
    <?php

$arr=array();
$arr1=array();
include("includes/db.php");
$query="SELECT * FROM `quiz`  ORDER BY startDate DESC";
$run=mysqli_query($con,$query);
$total_number=mysqli_num_rows($run);
while($row=mysqli_fetch_assoc($run))
{
  $arr[]=$row;
}
//print_r($arr);
$results_per_page=5;//number of values to be displayed per page
$number_of_pages=ceil($total_number/$results_per_page);//total number of pages
if(!isset($_GET['page'])){
  $page=1;
}
  else {
    $page=$_GET['page'];
  }







$this_page_first=($page-1)*$results_per_page;
$qry1="SELECT * FROM `quiz`ORDER BY startDate DESC LIMIT ".$this_page_first. ','.$results_per_page;
$result=mysqli_query($con,$qry1);
while($row1=mysqli_fetch_assoc($result))
{
  $arr1[]=$row1;
}
//print_r($arr1);
?>





  <?php
for($i=0;$i<count($arr1);$i++){
    $na = $arr1[$i]['quizId'];
    $nam = substr($na,0,6);
        if(!($nam=="hacker"))
        {
    $date = strtotime($arr1[$i]['startDate']);
    $date1 = strtotime($arr1[$i]['endDate']);
?>
      <div id='main' onclick='runscript(this)'>

        <div class='container'>
            <div class='row'>

                <div class='col-md-8'>
                    <h3 id='quiz_title'><?php echo $arr1[$i]['quizName'];?></h3>
                </div>

                <div class='col-md-2'>
                    <h5 id='date' style="font-size:20px;"><?php echo $arr1[$i]['Domain']; ?></h5>
                </div>

                <div class='col-md-2'>
                  <?php
                  $id1 = $arr1[$i]['quizId'];
    if(isset($_SESSION['user_id'])){
                  $id2 = $_SESSION['user_id'];
                    $q = "SELECT * FROM `quizresponse` WHERE `quizId`='$id1' AND `userId`=$id2";
                    
                    $result11 = mysqli_query($con,$q);
                    $num_rows1 = mysqli_num_rows($result11);
    
                    if($num_rows1 == 0)
                    {
                    ?>
                    <button id='start' type='button'  onclick="window.location='quiz_debug.php?bid=<?php echo $arr1[$i]['quizId'] ?>' ">START </button>
                <?php }
                    else {
                    ?>
                    <button id='complt' type='button'  onclick=" ">DONE </button>
                  <?php }
    }
                  else
                    { ?>
                    <button id='start' type='button'  onclick="window.location='quiz_debug.php?bid=<?php echo $arr1[$i]['quizId'] ?>' ">START </button>
                <?php    }
                    ?>
                </div>

            </div>
        </div>


        <div id='hidden-content' style='display: none; margin-left:2%;'>
            <hr>
            <h4 style="font-size:20px; font-weight:bold;">Description:</h4>
            <p style="margin:0px !important;"><?php echo $arr1[$i]['discription'];?></p>
            <h4 style="font-size:20px; font-weight:bold;">Time:<br></h4><?php  echo date('d F Y h:i:s', $date).' to '.date('d F Y  h:i:s', $date1);?><br>
            <h4 style="font-size:20px; font-weight:bold;">Duration:<br></h4><?php echo $arr1[$i]['duration'] ?>
        </div>

    </div>
<?php
  }
}
  ?>
  <?php
/*
if($page>1)
{
echo '<a href="quiz_mainpage1.php?page=' .($page-1). '" > Previous </a>';

}
for($i=1;$i<=$number_of_pages;$i++){
  if($i==$page)
  echo '<a class="active">'.  $i  .'</a>';
  else
  echo "<a href='quiz_mainpage1.php?page=".$i. "' >$i</a>";
}
if($page<$number_of_pages)
{
echo '<a href="quiz_mainpage1.php?page=' .($page+1). '" > Next </a>';

}*/


 ?>

 <nav aria-label="Page navigation example" style="margin-left:30%; margin-bottom:2%;">
 <ul class="pagination">
 <li  id="previous-page">
   <a class="page-link" href="javascript:void(0)" aria-label="Previous">
     <span aria-hidden="true">&laquo;</span>
   </a>
 </li>
 <!-- <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
 <li class="page-item"><a class="page-link" href="javascript:void(0" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>-->
 </ul>
 </nav>
        </div>
 <div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="login/login2.php" method="post" style="overflow:hidden;">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="trflogo6.png" alt="Avatar" class="avatar" style="border-radius:0;">
      <h1 style="text-align:center">TRF Login</h1>
    </div>

    <div class="container">
      <input id="usr" type="text" placeholder="Enter Username" name="username">
      <input id="pasw" type="password" placeholder="Enter Password" name="password">        
      <button id="btn" type="submit">Login</button>
      <a href="user_new_register.php" style="text-decoration:none; float:left; margin-right:34px; display: inline-block; margin-top:26px;">Create new account</a>
      <a href="#" style="text-decoration:none; float:right; margin-right:34px; display: inline-block; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

    <script>

        function runscript(object){

            if(object.querySelector('#hidden-content').style.display=="none"){
                object.querySelector('#hidden-content').style.display="block";
            }
            else if(object.querySelector('#hidden-content').style.display=="block"){
                object.querySelector('#hidden-content').style.display="none";
            }
}

</script>

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
          var numberOfItems = "<?php echo $total_number;?>";
          var limitPerPage = 5;
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
              window.location.replace("quiz_mainpage1.php?page="+currentPage);
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
                window.location.replace("quiz_mainpage1.php?page="+currentPage);
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
                window.location.replace("quiz_mainpage1.php?page="+currentPage);
            });
            </script>

    <ul id="pagination-demo" class="pagination-lg pull-right" ></ul>



     <style>
        
        /*FOOTER*/


        footer {
          background: #16222A;
          background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
          background: linear-gradient(59deg, #3A6073, #16222A);
          color: white;
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
            transform: translateY(25px);
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
    <footer class="mainfooter" role="contentinfo" style="margin: 0px;">
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
						<li class="ftrl" id="ftren" style="transform: translateY(-25px);">theroboticsforumvitpune@gmail.com</li>
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
    <script>
        
        function runscript(object){
            
            if(object.querySelector('#hidden-content').style.display=="none"){
                object.querySelector('#hidden-content').style.display="block";
            }
            else if(object.querySelector('#hidden-content').style.display=="block"){
                object.querySelector('#hidden-content').style.display="none";
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
   <!-- easing js -->
   <script src="header/js/jquery.magnific-popup.min.js"></script>
   <!-- owl carousel js -->
   <script src="header/js/owl.carousel.min.js"></script>
   <script src="header/js/slick.min.js"></script>
   <!-- easing js -->
   <script src="header/js/jquery.easing.min.js"></script>
   <!--masonry js-->
   <script src="header/js/masonry.pkgd.min.js"></script>
   <script src="header/js/masonry.pkgd.js"></script>
   <!--form validation js-->
   <script src="header/js/jquery.nice-select.min.js"></script>
   <script src="header/js/contact.js"></script>
   <script src="header/js/jquery.ajaxchimp.min.js"></script>
   <script src="header/js/jquery.form.js"></script>
   <script src="header/js/jquery.validate.min.js"></script>
   <script src="header/js/mail-script.js"></script>
   <!-- counter js -->
   <script src="header/js/jquery.counterup.min.js"></script>
   <script src="header/js/waypoints.min.js"></script>
   <!-- custom js -->
   <script src="header/js/custom.js"></script>
   <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
</body>
    
    
</html>