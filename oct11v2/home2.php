<?php

  include_once ('sql_connect.php');
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("location:index.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home | Blocks</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="icon" href="images/blocklogo.png">
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
			<a class="navbar-brand" href="home2.php">TBD</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><p class="navbar-text">Welcome <?php echo $_SESSION['fname']."!"; ?></p></li>	
				<li> <a href="viewQuiz.php">My Quizzes</a></li>
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
	<style type="text/css">
		#history{
	      padding-top: 5%;
	      margin-bottom: 10%;
	     =
	      background-size: 40 40;
		  -webkit-background-size: fixed;
		  

		  height: 90vh;
	    }
		#home {
		  background: url('images/home2v4-bg.jpg') 50% 0 repeat-y fixed;
		  -webkit-background-size: cover;
		  background-size: cover;
		  background-position: center center;
		  display: -webkit-box;
		  display: -webkit-flex;
		  display: -ms-flexbox;
		  display: flex;
		  -webkit-box-align: center;
		  -webkit-align-items: center;
		      -ms-flex-align: center;
		          align-items: center;
		  height: 100vh;
		  text-align: center;
		}

		#home .btn-danger {
		  background: #ffa400 !important;
		  margin-right: 20px;
		}

		#home .btn-danger:hover {
		  background: #ffc400 !important;
		}

		#home .btn {
		  background: #000000;
		  border-color: transparent;
		  color: #ffffff;
		  font-size: 12px;
		  font-weight: bold;
		  padding: 14px 52px;
		  margin-top: 40px;
		  transition: all 0.4s ease-in-out;
		}

		#home .btn:hover {
		  background: #ffa400;
		}
		#news .title{
		  margin-bottom: 15%;
		}
		#news{
		  margin-top: 10%;
		  margin-bottom: 30%;

		}
		#news .item {
		  text-align: center;
		  display: block;
		  width: 100%;
		  padding-bottom: 62px;
		 
		}

		#news .item img {
		  display: inline-block;
		}

	</style>
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Home section
================================================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h3 class="wow fadeInDown" id = "hey" data-wow-delay="0.2s">WELCOME TO</h3>
				<h1 class="wow fadeInDown">BLOCKS</h1>
				<h2 class='wow fadeInDown'>Building the future</h2>
				<a href="quizFormv2.php" class="btn btn-danger wow fadeInUp" data-wow-delay="0.4s">Create Quiz</a>
				<a href="listofquizzes.php" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="0.6s">Answer Quizzes</a>
			</div>

		</div>
	</div>		
</section>

<!-- Navigation section
================================================== -->
<section class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">TBD</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#history" class="smoothScroll">RECENT</a></li>
                <li><a href="#news" class="smoothScroll">NEWS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
				<li><a href="logout.php" id="logout">Log Out</a></li>
			</ul>
		</div>

	</div>
</section>


<!-- history
================================================== -->
<section id="history" class="parallax-section">
	<section id="quizList" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h4 align='center'>Recent Answered Quizzes</h4>
				<table class = "table table-bordered">
					<th>Quiz Name</th>
					<th>Category</th>
					<th>Number of Question</th>
					<th>Score</th>
					<th>Date</th>
					
					<?php
						$result = mysqli_query($mysql,"SELECT * FROM answeredquiz where user_ID=".$_SESSION['id_user']." LIMIT 10");

						while ($row = mysqli_fetch_Array($result)){
							$quiz = mysqli_query($mysql,"SELECT * FROM quiz where quiz_id=".$row[2]);
							$data =  mysqli_fetch_Array($quiz);
							echo "<tr>";
							echo"<td>".$data[2]."</td>";
							echo "<td>".$data[3]."</td>";
							echo"<td>".$data[4]."</td>";
							echo"<td>".$row[3]."/".$row[4]."</td>";
							$dt = new DateTime($row[5]);
							echo"<td>".$dt->format('M-d H:i:s')."</td>";
							echo "</tr>";			
						}
					?>
				</table>
			</div>

		</div>
	</div>		
</section>
	
</section>

<!-- News section
================================================== -->
<section id="news" class="parallax-section">
	<div class="container">
		<div class="row">
			<h2 align='center' class='title'>STAY UPDATED OF OUR FUTURE PLANS!</h2>
			<!-- Service Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">

				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="images/news-img1.jpg" class="img-responsive img-circle" alt="testimonial img">
							<h2>BRAND NEW FEATURES NEXT YEAR!!</h2>
							<p>Ability to comment, add other users and a rating system!!!</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<img src="images/news-img2.jpg" class="img-responsive img-circle" alt="testimonial img">
							<h2>MAKE SOME MONEY$$$$$!!</h2>
							<p>If you make some wonderful quizzes and is been answered by so many quiz takers you can earn some ad revenue from this website!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact section
================================================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Contact form section
			================================================== -->
			<div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="0.6s">
				<form action="#" method="post">
					<div class="col-md-12 col-sm-12">
						<input type="text" class="form-control" placeholder="Name" name="name" id="name">
						<input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                        <textarea name="message" rows="8" class="form-control" id="message" placeholder="Message" message="message"></textarea>
					</div>
					<div class="col-md-6 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Send a message">
					</div>
				</form>
			</div>

			<!-- Contact detail section
			================================================== -->
			<div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
				<div class="contact-detail">
					<h2>CONTACT US</h2>
						<div>
							<h4>TBD</h4>
							<p>University of San Carlos - Talamban Campus</p>
						</div>
						<div>
							<h4>Talk to Us</h4>
							<p>Email: letshaveanemail@gmail.com</p>
							<p>Tel: 0(42) 505 5182 &nbsp;&nbsp;&nbsp; Mobile: +63-889-988</p>
						</div>
				</div>
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
				<p>Why is web app so hard omg i wanna die hahahahhahah</p>
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

</body>
</html>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

