<?php
	include("sql_Connect.php");

	$query = "SELECT * FROM quiz WHERE quiz_ID = ".$_GET['quizno'];

	$res = mysqli_query($mysql, $query);
	




?>