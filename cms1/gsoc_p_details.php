<?php
    include("includes/db.php");
    $project_id = $_GET['project_id'];
    $qry = "SELECT * FROM `gsoc_project_2020` WHERE `Project_id` = '$project_id'";
    $run = mysqli_query($con, $qry);
    $result = mysqli_fetch_assoc($run);
    //print_r($run);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--External css file-->
    <link rel="stylesheet" href="css/gsoc_p_details.css">

    <!--fontawsome link-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js//all.js"></script>
    
    <title><?php echo $result['name']; ?></title>
  </head>
  <body>
    <div class="main_content">
      <div class="upper">
        <div class="container">
            <h1 ><?php echo $result['name']; ?></h1>
        </div>
      </div>
      <div class="lower">
        <div class="container">
          <div class="row">
            <div class="col-md-6 info order-2 order-md-1">
              <p><?php echo $result['info']; ?></p>
            </div>
            <div class="col-md-6 order-1 order-md-2">
              <div class="card" style="width: 100%;">
                <img src="../trflogo.png" />
                <div class="card-body">
                  <h5 class="card-title op-6"><?php echo $result['name']; ?></h5>
                  <p class="card-text"><?php echo $result['short_info']; ?></p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div>
                      <strong class="op-6">Mentor</strong>
                      <p class="m-0"><?php echo $result['mentor']; ?></p>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div>
                      <strong class="op-6">Technology Used</strong>
                      <p class="m-0"><?php echo $result['technology_used']; ?></p>
                    </div>
                  </li>
                </ul>
                <div class="card-body">
                  <strong class="op-6">Contacts</strong><br>
                  <a href="<?php echo $result['github_link']; ?>" class="card-link"><i class="fab fa-github"></i> GitHub</a>
                  <a href="#" class="card-link"><i class="fas fa-envelope"></i> <?php echo $result['contact_mail']; ?></a>
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