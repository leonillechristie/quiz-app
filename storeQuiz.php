<?php
	require("sql_connect.php")

	if (isset($_GET['quizName'])){
	$namequiz = $_GET['quizName'];
	$category = $_GET['category'];
	$numofq = $_GET['numQ'];

	$query = "INSERT INTO quiz(quiz_ID,user_ID,quiz_name,categories,num_qs
				VALUES
					(NULL,1,'".$namequiz."','".$category."','".$numofq."')";

	$result = mysqli_query($mysql,$query);

	if ($result){
		header("location:makeQuiz(test).php");
	}else{
		echo "Fail";
		exit();
	}

	}




?>