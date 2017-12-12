<?php 
	require('sql_connect.php');

	$query = "UPDATE question SET question = '".$_GET['qname']."' WHERE question_id = ".$_GET['questionno'];
	$res = mysqli_query($mysql,$query);
	if ($res){
		$query2 = "UPDATE choices SET choice_text = '".$_GET['choice1']."' WHERE (correctAnswer=1) AND (question_id = ".$_GET['questionno'].")";
		$res2 = mysqli_query($mysql,$query2);
		$querytogetid = "SELECT * FROM choices WHERE (correctAnswer=1) AND (question_id =".$_GET['questionno'].")";
		$resid = mysqli_query($mysql,$querytogetid);
		$data = mysqli_fetch_row($resid);
		$id = $data[0];
		$x = 2;
		if ($id > 0){
			while ($x <= 4){
				$query3 = "UPDATE choices SET choice_text ='".$_GET['choice'.($x)]."' WHERE (question_id =".$_GET['questionno'].") AND (choice_id =".($id+$x-1).")";
				$res3 = mysqli_query($mysql,$query3);
				$x++;
			}
		}
	}




?>