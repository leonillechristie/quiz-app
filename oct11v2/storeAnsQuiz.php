<?php 
	include('sql_connect.php');

	$query = "INSERT INTO answeredquiz(aq_id,user_id,quiz_id,score,totScore,dateCompleted)
				VALUES 
					(NULL,".$_GET['userid'].",".$_GET['quizid'].",".$_GET['score'].",".$_GET['totScore'].",'".$_GET['date']."')";

	$res = mysqli_query($mysql,$query);

	if ($res){
	}

 ?>