<?php
session_start();
include_once 'sql_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Light Bulb</title>
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
				<li><p class="navbar-text">Welcome <?php echo $_SESSION['fname']."!"; ?></p></li>	
				<li> <a href="viewQuiz.php">My Quizzes</a></li>
				<li> <a href="quizForm.php">Create Quiz</a></li>
				<li> <a href="listofquizzes.php">Answer Quizzes</a></li>
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

	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Home section
================================================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h3 class="wow fadeInDown" id = "hey" data-wow-delay="0.2s">WELCOME TO</h3>
				<h1 class="wow fadeInDown">TBD</h1>
				<a href="quizForm.php" class="btn btn-danger wow fadeInUp" data-wow-delay="0.4s">Create Quiz</a>
				<a href="#" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="0.6s">Answer Quiz</a>
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
				<li> <a href="viewQuiz.php">My Quizzes</a></li>
				<li> <a href="quizForm.php">Create Quiz</a></li>
				<li> <a href="listofquizzes.php">Answer Quizzes</a></li>
				<li><a href="#stat" class="smoothScroll">STATS</a></li>
                <li><a href="#news" class="smoothScroll">NEWS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
				<li><a href="logout.php" id="logout">Log Out</a></li>

			</ul>
		</div>

	</div>
</section>


<!-- about section
================================================== -->
<section id="stat" class="parallax-section">
	<?php  
		if($_SESSION['ansq']==0){
			echo '<div class="container">
					<div class="row">
        
						<div class="col-md-6 col-sm-12">
							<img src="images/ans_img.jpg" class="img-responsive" alt="stats img 1">
						</div>
			            
						<div class="col-md-6 col-sm-12">
							<div class="stat-des">
								<h3>Opppsssss</h3>
								<p>You still have not answered any quizzes, for you to see your progress please do answer some of the quizzes that the users had made or you can even answer our premade quizzes just for you!</p>
							</div>
						</div>

					</div>
			        
			        <div class="row">
						
						<div class="col-md-6 col-sm-12" id="buttonA">
							
								<h4 align="center"><a href="#" class="btn btn-success smoothScroll wow fadeInUp" data-wow-delay="0.6s">Answer Quiz</a></h4>
								
						
						</div>
		            	<div class="col-md-6 col-sm-12">
							<img src="images/ans_img2.jpg" class="img-responsive" alt="stats img 2">
						</div>

					</div>
				</div>';

		}else{
			echo '<div class="container">
		<div class="row">
        
			<div class="col-md-6 col-sm-12">
				<img src="images/about-img-1.jpg" class="img-responsive" alt="about img 1">
			</div>
            
			<div class="col-md-6 col-sm-12">
				<div class="stat-des">
					<h4>What is Light Bulb?</h4>
					<h3>Introduction</h3>
					<p>Light bulb is an interactive child assessment website developed to discover what children are good at and where they may have room for improvement. Identify the things that interest your child and get ideas about possible careers to explore! Based on what could be learned and discovered in the assessment, Light Bulb aims to provide aid in identifying educational and career goals that bring long-term satisfaction.</p>
				</div>
			</div>

		</div>
        
        <div class="row">
			
			<div class="col-md-6 col-sm-12">
				<div class="stat-des">
					<h4>Modern Solutions</h4>
					<h3>Going to the NEXT Level</h3>
					<p> </p>
				</div>
			</div>
            
            <div class="col-md-6 col-sm-12">
				<img src="images/about-img-2.jpg" class="img-responsive" alt="about img 2">
			</div>

		</div>
	</div>';
		}
	?>
	
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

