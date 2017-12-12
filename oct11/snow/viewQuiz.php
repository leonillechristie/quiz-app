<?php
session_start();
include_once 'sql_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>TBD</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">TBD</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><p class="navbar-text"><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></p></li>		
				<li><a href="logout.php" id="logout">Log Out</a></li>
			</ul>
		</div>
	</div>
</nav>
<head>
	<meta charset="utf-8">
	<title>TBD</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
   	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/home.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/viewQuiz.css">

	
</head>
<style type="text/css">

</style>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Home section
================================================== -->
<section id="quizList" class="parallax-section">
	<div class="container containertable">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h1 class="text-center" style="color:rgb(112,203,206);">My Quizzes</h1>
				<table class = "table table-bordered">
					<th style="width:300px">Quiz Name</th>
					<th style="width:150px">Category</th>
					<th style="width:100px">Number of Questions</th>
					<th style="width:80px">Options</th>
					
					<?php
						$result = mysqli_query($mysql,"SELECT * FROM quiz where user_ID=".$_SESSION['id_user']);

						while ($row = mysqli_fetch_Array($result)){
							echo "<tr>";
							echo"<td>".$row[2]."</td>";
							echo "<td>".$row[3]."</td>";
							echo"<td>".$row[4]."</td>";
							echo "<td>";
							echo "<a class='btn btn-sm btn-primary'>
									<span class='fa fa-eye'style='color:white;font-size:1.3em' data-toggle='tooltip' data-placement='auto' title='Answer'></span></a>";
							echo " 	<a class='btn btn-sm btn-warning' href='reviewQs.php?quizno=".$row[0]."'>
									<span class='fa fa-pencil'style='color:white;font-size:1.3em' data-toggle='tooltip' data-placement='auto' title='Edit'></span>
									</a>";
							echo " 	<button class='btn btn-sm btn-danger dlbtn' data-toggle='modal' data-target='#myModalDelete'>
									<span class='fa fa-trash' style='color:white;font-size:1.3em' data-toggle='tooltip' data-placement='auto' title='Delete'></span>
									<span class='qqno' hidden>".$row[0]."</span>
									</button>";
							echo "</td>";
							echo "</tr>";			
						}
					?>
				</table>
			</div>

		</div>
	</div>		
</section>





<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
				<h2>TBD</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipis.</p>
				<p>Copyright &copy; 2016 TBD
					</div>
			<div class="link-list col-md-2 col-sm-2 wow fadeInUp" data-wow-delay="0.6s">
				<h2>Company</h2>
				<a href="#">About</a>
                <a href="#">Blog</a>
				<a href="#">Team</a>
				<a href="#">Career</a>
			</div>
			<div class="link-list col-md-2 col-sm-2 wow fadeInUp" data-wow-delay="0.6s">
				<h2>Support</h2>
				<a href="#">Email Us</a>
				<a href="#">FAQs</a>
				<a href="#">Service Terms</a>
				<a href="#">Licenses</a>
			</div>
			<div class="col-md-2 col-sm-2 wow fadeInUp" data-wow-delay="0.9s">
				<h2>Network</h2>
				<ul class="social-icon">
					<li><a href="www.facebook.com/theKyleYap" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="www.instagram.com/leonillechristie/" class="fa fa-instagram wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="www.leedoting.tumblr.com/" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>

		
	</div>

	<!-- MODAL TO DELETE QUIZ -->
		<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header"  style="background-color:rgb(112,203,206)">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title text-center" id="myModalLabel">Delete Quiz</h4>
		      </div>
		      <div class="modal-body">
		        <h1 style="color:rgb(112,203,206); text-align:center"> Are you you want to delete this quiz?<br><br>
		        	<p style="font-size:0.5em"><small>There is no way of undoing this action!</small></p> </h1>
		      </div>
 		      <div class="modal-footer">
		      	<span class="fa fa-spinner fa-spin loadgif" style="display:none"></span>
		      	<button type="button" class="btn btn-success delbtn">Delete</button>
		        <button type="button" class="btn btn-danger closebtnn" data-dismiss="modal">Nevermind</button>
		      </div>
		    </div>
		  </div>
		</div>

	<div class="col-md-12 col-sm-12">
		<div class="copyright-text wow bounceIn">
			
		</div>
	</div>

</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/counter.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">

// enable tooltips
	    $("body").tooltip({ selector: '[data-toggle=tooltip]' });	
	    $(document).ready(function(){
	    	$('.dlbtn').click(function(){
	    		$quizno = parseInt($(this).children('.qqno').text());
	    		$('.delbtn').click(function(){
	    		window.location.href="deleteQuiz.php?quizno="+$quizno;
	    		});
	    	});
	    });

</script>
