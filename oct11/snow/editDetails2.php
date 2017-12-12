<?php 
	include('sql_connect.php');

	$query = "SELECT * FROM choices WHERE (question_ID = ".$_GET['questionno'].")";
	$res = mysqli_query($mysql,$query);
	if ($res){
		echo json_encode(mysqli_fetch_all($res));
	}else{
		echo 'null';
	}

 ?>