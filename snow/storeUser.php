<?php
	require("sql_connect.php");

	if(isset($_POST['username'])&&isset($_POST['pass'])&&isset($_POST['nameF'])&&isset($_POST['nameL'])){
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$first = $_POST['nameF'];
	$last=	$_POST['nameL'];

	$query = "INSERT INTO user(user_ID,last_name,first_name,username,password)
				VALUES
					(NULL,'".$last."','".$first."','".$username."','".$password."')";

	$result = mysqli_query($mysql,$query);

	if ($result){
		header("location:index.php");
	}else{
		echo "Fail";
		exit();
	}

	}




?>