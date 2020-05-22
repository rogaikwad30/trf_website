<?php
  include ("includes/db.php");
  if(isset($_GET['submit'])){

    $name = $_GET['p_name'];
    $tech_used = $_GET['tech_used'];
    $G_link = $_GET['G_link'];
    $mentor = $_GET['mentor'];
    $m_mail = $_GET['m_mail'];
    $p_ctg = $_GET['p_ctg'];
    $short_info = $_GET['short_info'];
    $info = $_GET['info'];

    $query = "INSERT INTO `gsoc_project_2020`(`name`, `short_info`, `info`, `category`, `technology_used`, `github_link`, `mentor`, `contact_mail`) 
              VALUES ('$name','$short_info','$info','$p_ctg','$tech_used','$G_link','$mentor','$m_mail')";
    $run = mysqli_query($con, $query);

    if($run){
      echo '<script> alert("intserted sucessfully"); 
                      window.location.replace("insert_gsoc_p.php");
            </script>';
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Inser Project</title>
  </head>
  <body>
      <div class="container" style="padding-top: 2%;">
          <div style="text-align:center">
            <strong><h2>PROJECT ENTRY</h2></strong>
          </div>
          <div class="container" style="padding-top: 2%;">
              <form method="GET">
                  <div class="form-group">
                    <label for="exampleFormControlInput1"><strong>Project Name<strong></label>
                    <input type="text" class="form-control" name="p_name" id="exampleFormControlInput1" placeholder="project Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Technology Used</label>
                    <input type="text" class="form-control" name="tech_used" id="exampleFormControlInput1" placeholder="Write languages, technology use for project seperatrd by comma ( ,)">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">GitHub Link</label>
                    <input type="text" class="form-control" name="G_link" id="exampleFormControlInput1" placeholder="Provise the link of repositary of code">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Mentor</label>
                    <input type="text" class="form-control" name="mentor" id="exampleFormControlInput1" placeholder="Name of mentor">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Mentor's Email Id</label>
                    <input type="text" class="form-control" name="m_mail" id="exampleFormControlInput1" placeholder="College Id preferable">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Category</label>
                    <select class="form-control" name="p_ctg" id="exampleFormControlSelect1">
                      <option value="website">Web</option>
                      <option value="ML">ML</option>
                      <option value="IP">IP</option>
                      <option value="android">Android</option>
                      <option value="cyber">Cyber security</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Project (max 30 words)</label>
                    <textarea class="form-control" name="short_info" id="exampleFormControlTextarea1" rows="2" maxlength="30"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">About Project (Detail Description)</label>
                    <textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>