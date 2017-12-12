


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

  <script src="js/modernizr-2.7.1.js"></script>
  <style type="text/css">
    .answer{
     padding-left: 6%;
    }
    input{
      color: black;
      background-color:white; 
      border: solid 1px #6E6E6E;
      width: 80%;
      height: 30px; 
      font-size:18px; 
      vertical-align:9px 
    }

  </style>
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
          <form class="formCont" action="submitQuiz.php" method="GET">
                <p class="wow fadeIn">Question <?php
                                                   echo $_GET['numQ'];
                                                ?>
                :<input type="text" name='question'></p>
                <br />
                <div class="answer">
                  <p class="wow fadeIn"><span>Right Answer:</span><input type="text" class="ans" name='answer'></p>
                  <p class="wow fadeIn"><span>Choice A:</span><input type="text" name='A'></p>
                  <p class="wow fadeIn"><span>Choice B:</span><input type="text" name='B'></p>
                  <p class="wow fadeIn"><span>Choice C:</span><input type="text" name='C'></p>
               </div>
                <br />
                <div class="row header-info">
                   <div class="col-sm-10 col-sm-offset-1 text-center">
                       <button class="btn btn-success" id="submit">Prev</button>
                      <button class="btn btn-success" id="submit"><a href="makeQuiz(test).php/">Next</a></button>
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
    $("#formCont").submit();
  });
});
</script>