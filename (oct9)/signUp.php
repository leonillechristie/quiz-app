<?php  
  require ("sql_connect.php");
  if(isset($_POST['username'])&& isset($_POST['pass'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   

    $query = "SELECT * from user WHERE username='".$username."' AND pass='".$pass."' LIMIT 1";

    $result = mysqli_query($mysql,$query);
    if($result){
      session_start();
      $row = mysqli_fetch_row($result);
      $_SESSION['uname'] = $username;
      $_SESSION['fname'] = $row[2];
      $_SESSION['lname'] = $row[1];
      header("location:home.php");
    } else{
      header("location:signIn.php");
      //set something to trigger something for char char i guess
    } 
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

  <script src="js/modernizr-2.7.1.js"></script>
  <style type="text/css">
      .header-info{
          height: 60%;
      }
      .lead{
        font-size: 40px;
      }
      .form-control{
        width: 50%;
        margin-left: 25%;
      }
      #sign{
        width: 50%;
        margin-left: 25%;

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
          <a class="logo" href="index.html">tbd</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#pricing" class="scroll">Quizzes</a></li>
            <li><a href="#">Sign-up</a></li>
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
            <a href="#pricing" class="scroll">Quizzes</a>&nbsp; &nbsp;&nbsp;<a href="#">Sign-up</a>
          </div>
        </div>
        <div class="row header">
             <div class="col-sm-10 col-sm-offset-1 text-center">
                <BR>
                <BR>
                <h1 class="wow fadeIn">Sign Up!</h1>
            </div>
         </div>
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <form class="form-signin" method='POST' action = 'storeUser.php'>
             
              <label for="inputEmail" class="sr-only">First Name</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="Enter First Name" name='nameF' required>
              <label for="inputPassword" class="sr-only">Last Name</label>
              <input type="text" id="inputPassword" class="form-control" placeholder="Enter Last Name" name='nameL'required>
              <label for="inputEmail" class="sr-only">Username</label>
              <input type="username" id="inputEmail" class="form-control" placeholder="Enter Username" name='username' required autofocus>
              <span hidden>Username taken</span>
              <label for="inputPassword" class="sr-only">Password</label>
               <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name='pass'required>
              <button class="btn btn-lg btn-primary btn-block" type="submit" id='sign'>Sign Up</button>
            </form>
          </div>
        </div>
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