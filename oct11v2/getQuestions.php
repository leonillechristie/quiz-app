<?php 
	require('sql_connect.php');

	$query = "SELECT * FROM question WHERE quiz_id =".$_GET['quizno'];
	$res = mysqli_query($mysql,$query);

	if($res){
		echo json_encode(mysqli_fetch_all($res));
	}


?>