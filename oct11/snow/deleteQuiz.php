<?php 
	include ('sql_connect.php');

	$query = "DELETE FROM quiz WHERE quiz_ID = ".$_GET['quizno'];
	$res = mysqli_query($mysql,$query);

	if ($res){
		header("location: viewQuiz.php");
	}else{
		echo "failure";
	}

?>