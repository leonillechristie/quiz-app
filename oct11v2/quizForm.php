<?php
  include("sql_connect.php");
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("location:index.php");
  }
?>


<html lang="en"><head>
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
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/quizform.css">
  <script src="js/modernizr-2.7.1.js"></script>
  
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
          <a class="logo" href="home2.php">TBD</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
               <p>Hey <?php echo $_SESSION['fname']."!"; ?></p>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

      <header class="quizformheader">
        <div class="container ">
          <div class="row">
            <div class="col-xs-6">
              <a href="home2.php">TBD</a>
            </div>
            <div class="col-xs-6 signin text-right navbar-nav">
                <a>Hey <?php echo $_SESSION['fname']."!!"; ?></a>&nbsp; &nbsp;&nbsp;
                <a href="logout.php" id="logout" class='navbr header'>Log Out</a>
            </div>
          </div>
          
        </header>
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

      <!-- ALERT FOR EMPTY FIELDS -->
    <div id="alert1">
        <div id="inner-message" class="alert alert-danger alert-fixed text-center ">
        <button type="button" class="close closebtn" data-hide="alert">&times;</button>
        <span class="alert-text">Please enter the name of the quiz!</span>
        <span class="fa fa-exclamation-triangle fa-warn"></span>
    </div>
    </div>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

   
    </body>
</html>
<script>
$(document).ready(function(){
  $(function(){
      $("[data-hide]").on("click", function(){
          $(this).closest("." + $(this).attr("data-hide")).fadeOut(400);
      });
  });

    $('#form').submit(function(e) {
    if ($("#qname").val().length == 0) {
        e.preventDefault();
        $("#qname").css("background-color","#FF4500");
        $("#inner-message").fadeIn(400);
        $("#qname").focus(function(){
          $("#qname").css("background-color","white");
        })
    }else{
      $('body').fadeOut();
    }
  });
});
</script>