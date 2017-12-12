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
	<title>List Quizzes | Blocks</title>
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
	<link rel="stylesheet" type="text/css" href="css/listofquizzes.css">
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- Home section
================================================== -->
<section id="stat" class="textbody">
      <div id="lofq">
    	<h1 class="text-center quizzess wow fadeInDown" data-wow-duration="2s"> Quizzes </h1>
      <div class="row">
        <div class="col-md-6 text-center">
          <ul class="article-list-vertical">
            <li class="wow bounceIn">
                <a href="#" class="backdrop"><br><span class="englishspan wow tada fa" data-wow-delay="2.3s" data-wow-iteration="3">
                  <span class="aspan wow bounceInLeft fa" data-wow-delay="1s">A</span> 
                  <span class="bspan wow bounceInDown fa" data-wow-delay="1.5s">B</span> 
                  <span class="cspan wow bounceInRight fa" data-wow-delay="2.0s">C</span>
                </span>
                </a>
                <div>
                    <h2><a href="#">ENGLISH</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
                    <button type="button" class="btn btn-primary read-more goenglish">GO &rarr;</button>
                </div>
            </li>

            <li class="wow bounceIn">
                <a href="#" class="backdrop" ><span class="wow bounce fa fa-calculator" data-wow-delay="1s" data-wow-iteration="3"></span></a>
                <div>
                    <h2><a href="#">MATHS</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
                    <button type="button" class="btn btn-primary read-more gomaths">GO &rarr;</button>
                </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 text-center">
           <ul class="article-list-vertical">
              <li class="wow bounceIn">
                  <a href="#" class="backdrop"><span class="wow wobble fa fa-flask " data-wow-delay = "1s" data-wow-iteration="3"></span></a>
                  <div>
                      <h2><a href="#">SCIENCE</a></h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
                      <button type="button" class="btn btn-primary read-more goscience">GO &rarr;</button>
                  </div>
              </li>

              <li class="wow bounceIn">
                  <a href="#" class="backdrop" ><span class="wow pulse fa fa-graduation-cap" data-wow-delay="1s" data-wow-iteration="3"></span></a>
                  <div>
                      <h2><a href="#">GENERAL</a></h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lacus mattis laoreet diam a volutpat magna.</p>
                      <button type="button" class="btn btn-primary read-more gogeneral">GO &rarr;</button>
                  </div>
              </li>
            </ul>
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
			<a class="navbar-brand" href="home2.php">TBD</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
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
<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	
    <script type="text/javascript">
    $ctr = 1;
    // $idlatest = 0;
    // var arr = [1];
    function getQuiz (category){

      $.ajax({
            url:"getQuizbycat.php",
            method:"GET",
            dataType:"text json",
            data: {
              cat: category
            },
            success: function(data){
              $oddoreven = 1;
              
              $('.textbody').append('<h1 class="quizzess text-center">'+category+'</h1><div class="row"><div class="col-md-6 col1 text-center"></div><div class="col-md-6 col2 text-center"></div></div>');
              $(data).each(function(key,val){
                // if ($ctr <=10){
                  if ($oddoreven%2 == 1){
                  $('.col1').append("<div class='jumbotron quizzeslist'><p class='h2'>"+val[2]+"</p><span class='quiznoh' hidden>"+val[0]+"</span>"+
                                            "<p class='itemsss'>"+val[4]+" items</p>"+"<p class='categoryyy'>Category: "+val[3]+"</p>"+
                                            "<a href='answerQuiz.php?qid="+val[0]+"' class='btn btn-primary btn-lg answerbtn' role='button'>Answer this Quiz!</a>"+
                                          "</div>");
                  }else{
                    $('.col2').append("<div class='jumbotron quizzeslist'><p class='h2'>"+val[2]+"</p><span class='quiznoh' hidden>"+val[0]+"</span>"+
                                            "<p class='itemsss'>"+val[4]+" items</p>"+"<p class='categoryyy'>Category: "+val[3]+"</p>"+
                                            "<a href='answerQuiz.php?qid="+val[0]+"' class='btn btn-primary btn-lg answerbtn' role='button'>Answer this Quiz!</a>"+
                                          "</div>");
                  }
                  $oddoreven++;
                  $ctr++;
                  // $idlatest = val[0];
                // }
              });
                $('.textbody').append("<div class='text-center h2' style='color:white;'>"+($ctr-1)+" result(s) found.</div><br><br>");
            },
            complete: function(){
              $(".loaddgif").hide();
            }
          });
    }
// "<p class='itemsss'>"+row[4]+" items</p>"+"<p class='categoryyy'>Category: "+row[3]+"</p>"+

    $(document).ready(function(){

      $(".goenglish").click(function(){
        $("#lofq").fadeOut(400);
        $(".textbody").append("<span class='fa fa-cog fa-spin loaddgif'></span>");
        setTimeout(function(){
             getQuiz('English');
        },2500);
      });
      $(".gomaths").click(function(){
        $("#lofq").fadeOut(400);
        $(".textbody").append("<span class='fa fa-cog fa-spin loaddgif'></span>");
        setTimeout(function(){
             getQuiz('Maths');
        },2500);
      });
      $(".goscience").click(function(){
        $("#lofq").fadeOut(400);
        $(".textbody").append("<span class='fa fa-cog fa-spin loaddgif'></span>");
        setTimeout(function(){
             getQuiz('Science');
        },2500);
      });
      $(".gogeneral").click(function(){
        $("#lofq").fadeOut(400);
        $(".textbody").append("<span class='fa fa-cog fa-spin loaddgif'></span>");
        setTimeout(function(){
             getQuiz('General');
        },2500);
      });

    });


    </script>

