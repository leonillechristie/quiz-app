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
				<li> <a href="quizFormv2.php">Create Quiz</a></li>
				<li> <a href="listquizzesv2.php">Answer Quizzes</a></li>
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

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/myfonts.css">
	<link rel="stylesheet" type="text/css" href="css/article-list-vertical.css">
  	<link rel="stylesheet" href="css/quizform.css">
  	<script src="js/modernizr-2.7.1.js"></script>
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- quiz Section
================================================== -->
<section = class="sectionquiz">
      <div class="container containerquiz">
      <form class="formCont form" method='GET' action="storeQuiz.php" class='form' id="form">
                <p class="wow fadeIn">Quiz Details:</p>
                <br />
                <div class="answer text-center"> 
                    <div class="form-group">
                    <p><label for="qname">Name of Quiz</label><input class = "form-control" id="qname" name = "namequiz" type="text"></p></div>
                    <div class="form-group">
                    <p>

                      <input type="text" class="form-control" id="uid" name="user_id" value="<?php echo $_SESSION['id_user']; ?>" style="display:none">
                      <label for="numberofq">Number of questions</label>
                    <select name='numQ' class="form-control slctnum" id="numberofq">
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option  value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>                   
                    </select>
                    </p>
                    </div>
                    <div class="form-group">
                    <p>
                      <label for="category">Category </label>
                    <select name='category' class="form-control slct" id="category">
                    <option value="Maths">Maths</option>
                    <option value='Science'>Science</option>
                    <option value='English'>English</option>
                    <option value='General'>General</option>
                    </select>
                  </p>
                  </div>
                 
               </div>
                <br />
                <div class="row ">
                   <div class="col-sm-10 col-sm-offset-1">
                      <button class='btn btn-success' id='submit'>Proceed</button>
                    </div>
                </div>
            </form>
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
				<li><p class="navbar-text">Welcome <?php echo $_SESSION['fname']."!"; ?></p></li>	
				<li> <a href="viewQuiz.php">My Quizzes</a></li>
				<li> <a href="quizFormv2.php">Create Quiz</a></li>
				<li> <a href="listquizzesv2.php">Answer Quizzes</a></li>
				<li><a href="logout.php" id="logout">Log Out</a></li>
			</ul>
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

