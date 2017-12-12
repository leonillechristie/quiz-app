<?php
	require("sql_connect.php");

	if (isset($_GET['namequiz'])){
	$quizname = $_GET['namequiz'];
	$category = $_GET['category'];
	$numofq = $_GET['numQ'];
	$user = 1;
	$query = "INSERT INTO quiz (quiz_ID,user_ID,quiz_name,categories,num_qs)
				VALUES
					(NULL,'".$user."','".$quizname."','".$category."','".$numofq."')";

	$result = mysqli_query($mysql,$query);

	if ($result){
		header("location:makeQuiz(test).php?numQ=".$numofq."&quizno=".mysqli_insert_id($mysql));
	}else{
		echo "Fail";
		exit();
	}

}




?>