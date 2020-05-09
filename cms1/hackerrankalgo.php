<?php require('includes/db.php'); ?>
<?php 
	$q = "SELECT * FROM hackeralgorithm INNER JOIN users ON users.hacker_id = hackeralgorithm.hackerid";
	$r = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($r))
	{
		$score = $row['hackerscore'];
		$id = $row['user_id'];
		if(isset($row['score']))
		{
			$qq = "UPDATE `quizresponse` SET `score`=$score WHERE `quizId`='hacker_algo',`userId`=$id";
		}
		else
		{
			$qq = "INSERT INTO `quizresponse`(`quizId`, `userId`, `score`) VALUES ('hacker_algo',$id,$score)";	
		}
		$rr = mysqli_query($con,$qq);
	}