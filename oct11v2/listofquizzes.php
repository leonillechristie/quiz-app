<?php

  include_once ('sql_connect.php');
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("location:index.php");
  }
?>
<html>
<head>
	<title>List of Quizzes | TBD</title>
	  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/modernizr-2.7.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/myfonts.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/listofquizzes.css">
  <link rel="stylesheet" type="text/css" href="css/article-list-vertical.css">
  
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
            <a href="listofquizzes.php" class="scroll navheadr">Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="viewQuiz.php" class="scroll navheadr">My Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="quizForm.php" class="scroll navheadr">Create Quiz</a>&nbsp; &nbsp;&nbsp;
            <a href="listofquizzes.php" class="scroll navheadr">Answer Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="logout.php" id="logout" class="scroll navheadr">Log Out</a>&nbsp; &nbsp;&nbsp;
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <header class="listofquizzesheader">
      <div class="container ">
        <div class="row rowheader">
          <div class="col-xs-6">
            <a href='home2.php'>TBD</a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <a href="listofquizzes.php" class="navheadr">Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="viewQuiz.php" class="navheadr">My Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="quizForm.php" >Create Quiz</a>&nbsp; &nbsp;&nbsp;
            <a href="listofquizzes.php" class="navheadr">Answer Quizzes</a>&nbsp; &nbsp;&nbsp;
            <a href="logout.php" id="logout" class="scroll navheadr">Log Out</a>&nbsp; &nbsp;&nbsp;
          </div>
        </div>
      </div>
    </header>

    <section class="textbody">
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

    <footer>
      <nav aria-label="...">
        <ul class="pager">
          <li class="previous disabled"><a type="button"><span aria-hidden="true">&larr;</span> Older</a></li>
          <li class="next disabled"><a type="button" >Newer <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
      </nav>
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
                                            "<p>...</p>"+
                                            "<a href='answerQuiz.php?qid="+val[0]+"' class='btn btn-primary btn-lg answerbtn' role='button'>Answer this Quiz!</a>"+
                                          "</div>");
                  }else{
                    $('.col2').append("<div class='jumbotron quizzeslist'><p class='h2'>"+val[2]+"</p><span class='quiznoh' hidden>"+val[0]+"</span>"+
                                            "<p>...</p>"+
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
