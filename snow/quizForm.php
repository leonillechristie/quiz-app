<?php
  include("sql_connect.php");
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

      <header>
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <a href="index.html">TBD</a>
            </div>
            <div class="col-xs-6 signin text-right navbar-nav">
              <a href="#pricing" class="scroll">Pricing</a>&nbsp; &nbsp;<a href="#">Sign in</a>
            </div>
          </div>
          <form class="formCont" method='GET' action="storeQuiz.php" class='form'>
                <p class="wow fadeIn">Quiz Details:</p>
                <br />
                <div class="answer" class='row'>
                  <div class="col-xs-5">
                       <p class="wow fadeIn"><span>Quiz Name:</span></p>
                    <p class="wow fadeIn"><span>Number of Questions:</span></p>
                     <p class="wow fadeIn"><span>Category:</span></p>
                  </div>
                  <div class="col-xs-7">
                    <p><input name = "namequiz" type="text"></p>
                    <p>
                    <select name='numQ'>
                      <option value=5>5</option>
                      <option value=6>6</option>
                      <option value=7>7</option>
                      <option  value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>                   
                    </select>
                    </p>
                    </p>
                    <select name='category'>
                    <option value="math">Math</option>
                    <option value='science'>Science</option>
                    <option value='english'>English</option>
                    </select>
                  </p>
                  </div>
                  
                  

                 
               </div>
                <br />
                <div class="row header-info">
                   <div class="col-sm-10 col-sm-offset-1 text-center">
                      <button class='btn btn-success' id='submit'>Proccedd</button>
                    </div>
                </div>
            </form>
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

  $("#submit").on('click',function(){
    alert("are you sure with all the details?");
    $(".form").submit();

  });
});
</script>