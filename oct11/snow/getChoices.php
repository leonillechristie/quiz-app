<?php 
	require ("sql_connect.php");

	$query = "SELECT * FROM choices WHERE question_id = ".$_GET['questionid'];
	$res = mysqli_query($mysql,$query);
	if ($res){
		echo (json_encode(mysqli_fetch_all($res)));
	} 
 ?>