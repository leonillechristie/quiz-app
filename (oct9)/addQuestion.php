<?php 
	include("sql_connect.php");

	$ress = mysqli_query ($mysql, "INSERT INTO question (question_id,quiz_ID,question) 
							VALUES 
								(NULL, ".$_GET['quizno'].",'".$_GET['question']."')");

	$res = mysqli_insert_id($mysql);
	$x=1;
	
	while ($x <= 4){
		if ($x == 1){
			$query2 = mysqli_query ($mysql, "INSERT INTO choices (choice_id,correctAnswer,question_id,choice_text)
											VALUES
												(NULL,1,".$res.",'".$_GET['choice1']."')");
		}else{
			$query2 = mysqli_query ($mysql, "INSERT INTO choices (choice_id,correctAnswer,question_id,choice_text)
											VALUES
												(NULL,0,".$res.",'".$_GET['choice'.$x]."')");
		}
		$x++;

	}

	if ($ress){
		echo "<div class ='alert alert-success'>SUCCESS! </div>";
	}else {
		echo "<div class='alert alert-danger'> ERROR! </div>";
	}
	
?>