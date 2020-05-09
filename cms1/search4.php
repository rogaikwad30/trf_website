<?php
/*things to do
*/  //header('Cache-Control: no cache'); //no cache
//session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
  include("headproj.php");
  require('../cms1/includes/db.php'); 
  //session_start();
  $kk = FALSE;
  $o1=0;
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);
            html,
            body {
              -moz-box-sizing: border-box;
                   box-sizing: border-box;
              height: 100%;
              width: 100%; 
              background: #FFF;
              font-family: 'Roboto', sans-serif;
              font-weight: 400;
            }
            .card {
              display: block; 
                margin-bottom: 20px;
                margin-top: 100px;
                line-height: 1.42857143;
                background-color: #fff;
                border-radius: 2px;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
                transition: box-shadow .25s; 
                border-top-left-radius:6px;
              border-top-right-radius:6px;
                border-bottom-left-radius: 6px;
                border-bottom-right-radius: 6px;
            }
            .card:hover {
              box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            }
            .img-card {
              width: 80%;
              height:300px;
              border-top-left-radius:10px;
              border-top-right-radius:10px;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
              display:block;
                transform: scale(1.15);
                margin-left: 10%;
                overflow: hidden;
                margin-bottom: 4%;
                box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
                transition: box-shadow .25s; 
            }
            .img-card img{
              width: 100%;
              height: 100%;
              object-fit:cover; 
              transition: all .25s ease;
            } 
            .card-content {
              padding:15px;
              text-align:center;
            }
            .card-title {
              margin-top:0px;
              font-weight: 700;
              font-size: 1.65em;
            }
            .card-title a {
              color: #000;
              text-decoration: none !important;
              font-weight: bold;
                color: cornflowerblue;
                font-size: 30px;
                letter-spacing: 1px;
            }
            .card-read-more {
              border-top: 1px solid #D4D4D4;
            }
            .card-read-more a {
              text-decoration: none !important;
              padding:10px;
              font-weight:600;
              text-transform: uppercase
            }
            .card-title a:hover{
                color: mediumblue;
            }
            
            .tags {
                margin-left: 1%;
            }
            .search-box {
             position: absolute;
             margin-left: 34%;
             background: dodgerblue;
             border-radius: 30px;
             padding: 10px;
             margin-top: 20px;
                width: 470px !important;
            }


            .search-box:hover > .search-btn:hover{
                background: dodgerblue;
                color: white;
                border: 2px solid white;
            }

            .tags {
                margin-left: 1%;
                margin-top: 1px;
                margin-bottom: 5%;
            }
            .sp{
                font-size: 15px;
                display: inline-block;
                text-align: center;
                padding: 1px;
                margin: 2px;
                color: cornflowerblue;
                font-weight: bold;
                text-transform: capitalize;
        
            }
.search-box:hover > .search-btn:hover{
    background: dodgerblue;
    color: white;
    border: 2px solid white;
}


.search-btn {
 width: 40px;
 height: 40px;
 border-radius: 50%;
 background: dodgerblue;
 padding: 4px;
 margin-left: 10px;
 justify-content: center;
 align-items: center;
 transition: 0.4s;
 color: white;
 cursor: pointer;
    position: relative;
 display: inline;
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
    border-radius: 0 !important;
    margin-bottom: 7%;
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
    overflow: hidden;
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
    @media screen and (max-width: 1068px) {
                .modal-content{
                    margin-top: 45%;
                }
        .search-box{
            margin-left: 27%;
        }
}
</style>
    </head>
    <body>
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
      <form id="sampleForm" name="sampleForm" method="get" action="">
                    <input type="hidden" name="total" id="total" value="<?php if(isset($_GET['total'])){echo $_GET['total'];} else{echo "";}?>">
                    <input type="hidden" name="unselect1" id="unselect1" value="<?php if(isset($_GET['unselect1'])){echo $_GET['unselect1'];} else{echo "";}?>">  
                    <input type="submit" id="subm" name="submit" style="display: none;">
            </form>
        <div class="search-box" style="position: relative;">
          <?php
  
        $query7 = "SELECT * FROM `tags` WHERE 1";
        $result7 = mysqli_query($con,$query7);
        $i=0;
        $tag_project=""; ?>
            <select multiple id="domains" data-placeholder="Select domains" style="width: 200px; position: relative; display: inline; padding: 10px;">
                <option value="" disabled  selected>Select Domain</option>
                <?php 
        while($row7 = mysqli_fetch_array($result7)) //Dynamic CHECKBOX
          {?>
                <option value="<?php  echo $row7['name']; ?>"><?php  echo $row7['name']; ?></option>
      <?php } ?>        
            </select>

            <?php
            if(!isset($_GET['total']))
            {?>
            <select multiple id="title" style="width: 200px; position: relative; display: inline;">
                 <option value="">Please select domains</option>
            </select>
            <?php
          }
        if(isset($_GET['total']))
      {
        $i=1;
        $checked=$_GET['total'];
        $tag=  explode(',', $checked);
        $count = count($tag);
        $i=0;
        foreach($tag as $selected)
          {
            $q = "SELECT * FROM `tags` WHERE name='$selected'";
            $r = mysqli_query($con,$q);
            $row = mysqli_fetch_array($r);
            if($i==$count)
              {
                $tag_project=$tag_project. $row['id']. ",";
                    
              }
            else
              {
                $tag_project=$tag_project. $row['id']. ",";
                      
              }
              $i++;   
          }
      }
    if(!empty($tag_project))
    {
      $string = $tag_project;
            $j=0;
            $k=FALSE;
            $l=0;
            $ids = explode(',', $string);//creating logic for tag checking
            $d=count($ids);
            $d=$d-1;
            
            $query11="SELECT * FROM project WHERE 1";
            $result11 = mysqli_query($con,$query11);
            $num_rows1 = mysqli_num_rows($result11);?>

            <select multiple id="title" style="width: 200px; position: relative; display: inline;">
                 <?php
            while($row11 = mysqli_fetch_array($result11))
              {
                $l=0;
                $j=0; ?>
                
                <?php                   
                while($j<$d) 
                  {
                    if (strpos($row11['tags'], $ids[$j]) !== false) //checks whether given tag is present ot not
                      {
                        $l++;                 
                        }
                      $j++;
                    }
                  if($l==$d)
                    {
                      $link = $row11['title'];
                        ?>
                      <option value="<?php echo $row11['title']; ?>"><?php echo $row11['title']; ?></option>  
                      <?php 
                      $k=TRUE;
                      }
                
                    }
              }
              else//if no tags selected
                {
                  //javascript code

                }?>

            </select>

            <script>
              var name_of_dep = document.getElementById("total").value;
              var test1=document.getElementById("unselect1").value;

              $(document).ready(function() {   
                $("#domains").select2({
                placeholder: "Select domains",

                });
                    var timepass_arr = name_of_dep.split(",");
                    
                    var input_string = timepass_arr.join([separator = ',']);
                    document.getElementById("total").value = input_string;

                  $('#domains').val(timepass_arr);
                  $('#domains').select2().trigger('change');
                    $('#title').select2({
                        placeholder: "Select a title",
                        maximumSelectionLength: 1,
                    });
                  $("#domains").on("select2:select", function (e) { 
                  var select_val = $(e.currentTarget).val();
                  console.log(select_val)
                  document.sampleForm.total.value=select_val;
                  document.getElementById("subm").click();
        });
                  $("#title").on("select2:select", function (e) { 
                  var select_val = $(e.currentTarget).val();
                  window.location.href = "project_display.php?link="+select_val;
        });
                  $('#domains').on("select2:unselect", function(e){
                    var deleted_item=e.params.data.text;
                    console.log(e.params.data.text);
                    for( var i = 0; i < timepass_arr.length; i++){ 
                       if ( timepass_arr[i] === deleted_item) {
                         timepass_arr.splice(i, 1); 
                       }
                    }
                    var delete_string = timepass_arr.join([separator = ',']);
                    document.sampleForm.total.value = delete_string;
                    document.getElementById("subm").click();
                }).trigger('change');

              });      

            </script> 
            <a class="search-btn" href="javascript:void(0)">
       <i class="fa fa-search"></i>
       </a>
        </div>
                    <div class="container" style="max-width: 1300 !important;  position: relative;">
                        <div class="row">
                          <?php
                          $qqq = "SELECT * FROM `project` ORDER BY `date`";
              if(!empty($tag_project))
              {
                $string = $tag_project;
            $j=0;
            $k=FALSE;
            $l=0;
            $ids = explode(',', $string);//creating logic for tag checking
            $d=count($ids);
            $d=$d-1;
            
            $qqq="SELECT * FROM project WHERE 1";
            $result11 = mysqli_query($con,$qqq);
            $num_rows1 = mysqli_num_rows($result11);?>
                 <?php
            while($row11 = mysqli_fetch_array($result11))
              {
                $l=0;
                $j=0; ?>
                
                <?php                   
                while($j<$d) 
                  {
                    if($ids[$j] == "")
                    {
                     $ids[$j] = "a"; 
                    }
                    if (strpos($row11['tags'], $ids[$j]) !== false) //checks whether given tag is present ot not
                      {
                        $l++;                 
                        }
                      $j++;
                    }
                    ?>
                      
        <?php         if($l==$d)
                    {
                      
                      $link = $row11['title'];  
                      $k=TRUE;
                      if($o1%2 ==0)
                      {?>
                        <div class="row">
                      <?php }
                      $o1+=1;
                      ?>
                      <div class="col-md 6">
                                <div class="card">
                                    <a class="img-card" href="javascript:void(0)">
                                    <img src="admin/images/<?php echo $row11['photo'];?>" />
                                  </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="project_display.php?link=<?php echo $row11['title'];?>"> <?php echo $row11['title']; ?>
                                          </a>
                                        </h4>
                                        <h5 style="color: darkgray;"></h5><?php
                                        echo $row11['date'];
                                        ?>
                                        <p class="descrp">
                                            <?php echo $row11['description'] ?>
                                        </p>
                                        <div class="tags">
                                          <?php 
                                          $tagss=$row11['tags'];
                                          $tag= array_map('intval', explode(',', $tagss));
                                          $c=count($tag);
                                          $i=0;
                                          while($i<$c)
                                              {
                                          $query7 = "SELECT * FROM `tags` WHERE id=$tag[$i]";
                                          $result7 = mysqli_query($con,$query7);
                                          $row7 = mysqli_fetch_array($result7);?>
                                          <span class="sp"><?php echo "#".$row7['name']."  "; ?></span>
                                          <?php
                                          $i++;
                                          }
                                          ?>
                                            <span class="sp">#The_Robotics_Forum</span>
                                            <span class="sp">#Robotics</span>
                                            <span class="sp">#Robobot</span>
                                            <span class="sp">#Vishwakarma_Institue_of_Techonology</span>
                                            <span class="sp">#Pune</span>
                                            <span class="sp"></span>
                                            <span class="sp"></span>
                                        </div>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="project_display.php?link=<?php echo $row11['title'];?>" class="btn btn-link btn-block">
                                            Read More
                                        </a>
                                    
                              
                      <?php $kk=TRUE;} ?>
                    </div>
                 </div>
         </div>
                    <?php

                    if($o1%2==0)
                    {?>
                  </div>
    
                    <?php
                }?>
                 <?php

                    }
              }
              if((!$kk)&&(!empty($tag_project)))
              {
                echo "No projects of the entered domain";
              }
                if(empty($tag_project))
                {
          
                          $rrr = mysqli_query($con,$qqq);
                          $o=0;

                          while($row = mysqli_fetch_array($rrr))
                          {
                            
                            
                            if($o%2==0)
                              {?>
                                <div class="row">
                              <?php } ?>

                            <div class="col-md 6">
                                <div class="card">
                                    <a class="img-card" href="javascript:void(0)">
                                    <img src="admin/images/<?php echo $row['photo'];?>" />
                                  </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="project_display.php?link=<?php echo $row['title'];?>"> <?php echo $row['title']; ?>
                                          </a>
                                        </h4>
                                        <h5 style="color: darkgray;"></h5><?php
                                        echo $row['date'];
                                        ?>
                                        <p class="descrp">
                                            <?php echo $row['description'] ?>
                                        </p>
                                        <div class="tags">
                                          <?php 
                                          $tagss=$row['tags'];
                                          $tag= array_map('intval', explode(',', $tagss));
                                          $c=count($tag);
                                          $i=0;
                                          while($i<$c)
                                              {
                                          $query7 = "SELECT * FROM `tags` WHERE id=$tag[$i]";
                                          $result7 = mysqli_query($con,$query7);
                                          $row7 = mysqli_fetch_array($result7);?>
                                          <span class="sp"><?php echo "#".$row7['name']."  "; ?></span>
                                          <?php
                                          $i++;
                                          }
                                          ?>
                                            <span class="sp">#The_Robotics_Forum</span>

                                        </div>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="project_display.php?link=<?php echo $row['title'];?>" class="btn btn-link btn-block">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                          <?php 
                          if($o%2==1)
                            {
                              ?>
                            </div>
                            <?php
                            }$o++;}?><?php }
                           ?>
                           </div>
                    </div>
                            
                            
                      
                            
                            
                        
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
            <li class="ftrl" id="ftren" style="transform: translateY(-25px); word-wrap: break-word;">theroboticsforumvitpune@gmail.com</li>
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
          for( var i=0; i< shtp.length;i++){
              shtp[i].innerHTML = shtp[i].innerHTML.substring(0,200) + "....";
          }
      
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
