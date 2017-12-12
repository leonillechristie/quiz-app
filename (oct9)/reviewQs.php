<?php 

  require("sql_connect.php");
  
?>
<html>
<head>
	<meta charset="utf-8">
	<title>webAppTitleHere</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

	<!-- Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<script src="js/modernizr-2.7.1.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<title></title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		  <div class="navbar-header">
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			 </button>
			 <a class="logo" href="index.html">TBD</a>
		  </div>
		  <div class="navbar-collapse collapse">
			 <ul class="nav navbar-nav navbar-right">
				<li><a href="#pricing" class="scroll">Pricing</a></li>
				<li><a href="#">Sign in</a></li>
			 </ul>
		  </div><!--/.navbar-collapse -->
		</div>
	 </div>

	 <header class="reviewQHeader">
		<div class="container">
		  <div class="row">
			 <div class="col-xs-6">
				<a href="index.html">TBD</a>
			 </div>
			 <div class="col-xs-6 signin text-right navbar-nav">
				<a href="#pricing" class="scroll">Pricing</a>&nbsp; &nbsp;<a href="#">Sign in</a>
			 </div>
		  </div>
		</div>
		<div class="jumbotron text-center">
	 <?php  

		$query = "SELECT * FROM quiz WHERE quiz_ID = ".$_GET['quizno'];
		$query2 = "SELECT * FROM question WHERE quiz_ID = ".$_GET['quizno'];
		$res = mysqli_query($mysql,$query);
		$res2 = mysqli_query($mysql,$query2);
		$data = mysqli_fetch_row($res);


		if ($res){
			echo"<h1>".$data[2]."</h1>
					<p>".$data[4]." items</p>
					<p>".$data[3]."</p>
					
				  <p><span class='fa fa-chevron-down buttontodown' data-toggle='collapse' data-target='#revQ'></span></p>
				  <div class='collapse container' id='revQ'>
				  <div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>";
		  	while ($row = mysqli_fetch_Array($res2)){

				echo'<div class="panel panel-default">
						  <div class="panel-heading" role="tab" id="heading'.$row[0].'">
							 <h4 class="panel-title">
								<a class ="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row[0].'" aria-expanded="true" aria-controls="collapse'.$row[0].'">'
								  .$row[2].
								'</a>
							 </h4>
						  </div>
						  <div id="collapse'.$row[0].'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading'.$row[0].'">
							 <div class="panel-body">';
				$query3 = "SELECT * FROM choices WHERE question_ID = ".$row[0];
				$res3 = mysqli_query($mysql,$query3);
				while ($row2 = mysqli_fetch_Array($res3)){
					if ($row2[1] == 1){
						echo "<p class='h1' style='color:green;'>";
					}else {
						echo "<p class='h1'>";
					}
					echo $row2[3]."</p>";

				}		

				echo'			 </div>
						  </div>
						</div>';
		  	}      	
		  	echo  "</div></div>";
		}
	 ?>

	 <!-- </div> -->


		
		</div>
	</header>
	




	<footer>
		<div class="container">
		  
		  <div class="row">
			 <div class="col-sm-8 margin-20">
				<ul class="list-inline social">
				  <li>Connect with us on</li>
				  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			 </div>
			 
			 <div class="col-sm-4 text-right">
				<p><small>Copyright &copy; 2014. All rights reserved. <br>
					Created by <a href="http://visualsoldiers.com">Visual Soldiers</a></small></p>
			 </div>
		  </div>
		  
		</div>
	 </footer>


</body>
</html>

<!-- Javascript
	 ================================================== -->
	 <!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/jquery-3.1.0.min.js"></script>
	 <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	 <script src="js/wow.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/main.js"></script>
	 <script type="text/javascript">


	 $(document).ready(function(){

	 })


	 </script>


	 
		
		