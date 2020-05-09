<?php  include "../includes/db.php "; ?>
<?php  include "functions.php"; ?>


<?php

		checkIfUserIsLoggedInAndRedirect('../index.php');


		if(ifItIsMethod('post')){

			if(isset($_POST['username']) && isset($_POST['password'])){

				login_user($_POST['username'], $_POST['password']);


			}else {


				redirect('/cms/login2.php');
			}

		}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form for TRF</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img" style="background-color: coral;">
                    <img src="images/logo.jpeg" alt="" style="border-radius: 50%; margin-top: 10%; margin-left: 10%;">
                </div>
                <div class="signup-form">
                    <form method="post" class="register-form" id="register-form" action="login1.php." enctype="multipart/form-data">
                        <h2>Login</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name"><span id="star">* </span>Username :</label>
                                <input type="text" name="username" id="name" required/><br>
                            </div>
							</div>
                            
                        <div class="form-row">
                            <div class="form-group">
                                <label for="father_name"><span id="star">* </span>Password :</label>
                                <input type="password" name="password" id="father_name" required/><br>
                            </div>
						</div>
						
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

   </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>