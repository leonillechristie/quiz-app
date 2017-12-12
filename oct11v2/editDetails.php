<?php 
	include('sql_connect.php');

	$query = "SELECT * FROM question WHERE (question_ID = ".$_GET['questionno'].") AND (quiz_ID= ".$_GET['quizno'].")";
	$res = mysqli_query($mysql,$query);
	if ($res){
		echo json_encode(mysqli_fetch_all($res));
	}else{
		echo 'null';
	}

 ?>