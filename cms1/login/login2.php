<?php 


$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "trf_db";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
$con = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

//if($connection) {
//
//echo "We are connected";
//
//}





?>
<?php  include("../includes/header.php"); ?>


<?php

		checkIfUserIsLoggedInAndRedirect('../index.php');


		if(ifItIsMethod('post')){

			if(isset($_POST['username']) && isset($_POST['password'])){

				login_user($_POST['username'], $_POST['password']);


			}else {


				redirect('../cms1/login2.php');
			}

		}






?>


