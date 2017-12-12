<?php  
  require ("sql_connect.php");
  if(isset($_POST['username'])&& isset($_POST['pass'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
   

    $query = "SELECT * from user WHERE username='".$username."' and password='".$pass."' LIMIT 1";

    $result = mysqli_query($mysql,$query);
    if($result){
      session_start();
      $row = mysqli_fetch_row($result);
      $_SESSION['id_user'] = $row[0];
      $_SESSION['uname'] = $username;
      $_SESSION['fname'] = $row[2];
      $_SESSION['lname'] = $row[1];
      $_SESSION['ansq'] = $row[9];
      header("location:home2.php");
    } else{
      echo "FAILS";
      header("location:signIn.php");
      //set something to trigger something for char char i guess
    } 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="images/blocklogo.png">
  <title>Blocks</title>
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
    .error{
      color:red;
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
            <li><a href="signUp.php">Sign-up</a></li>
            <li><a href="signIn.php">Sign in</a></li>
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
            <a href="#pricing" class="scroll">Quizzes</a>&nbsp; &nbsp;&nbsp;

            <a  data-toggle="modal" data-target="#upModal">Sign-Up</a> &nbsp; &nbsp;&nbsp;

            <!-- Modal -->
            <div id="upModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" align='center'>Sign-Up!</h4>
                  </div>
                  <div class="modal-body">
                    

                      <input type="text" id="fname" class="form-control" placeholder="Enter First Name" autofocus>
                      <span hidden class='error' id='missfname'>Firstname missing</span>

                      <input type="text" id="lname" class="form-control" placeholder="Enter Last Name">
                      <span hidden class='error' id='misslname'>Lastname missing</span>

                      <input type="text" id="user" class="form-control" placeholder="Enter Username" >
                      <span hidden class='error' id='usertaken'>Username taken</span>
                      <span hidden class='error' id='missuser'>Username missing</span>

                      <input type="password" id="password" class="form-control" placeholder="Enter Password" >
                      <span hidden class='error' id='misspass'>Password missing</span>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id='signUp'>Sign Up</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal" id='close'>Close</button>
                  </div>
                  </div>
                </div>

              </div>
            </div>
             <a  data-toggle="modal" data-target="#inModal">Sign-In</a> &nbsp; &nbsp;&nbsp;

            <!-- Modal -->
            <div id="inModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align='center'>Sign-In!</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-signin" method='POST' action ='index.php'>
                      <label for="inputEmail" class="sr-only">Username</label>
                      <input type="username" id="inputEmail" class="form-control" placeholder="Enter Username" name='username' required autofocus>
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password" name='pass'required>
                      <button class="btn btn-lg btn-primary btn-block" type="submit" id='sign'>Sign in</button>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">Give your child a headstart!</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">An environment that cultivates your children's mental skills and expands their 
            knowledge at an early age.</p>
            <br />
              
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                    <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">Learn More</a>
                  </div>
                  <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                    <a href="#invite" class="btn btn-primary btn-lg scroll">Sign-up Now!</a>
                  </div>
                </div><!--End Button Row-->  
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </header>
    
    <div class="mouse-icon hidden-xs">
        <div class="scroll"></div>
      </div>
    
    <section id="be-the-first" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
            <h2>Be the first</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipis.</p>
          </div>
        </div>
        
        <div class="iphone wow fadeInUp" data-wow-delay="1s">
          <img src="img/iphone.png">
        </div>
      </div>
    </section>
    
    <section id="main-info" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
            <hr class="line purple">
            <h3>Create your own quizzes or select from a variety of user-made quizzes</h3>
            <p>To assure that a vast span of topics will be covered, this app allows users to create and share their own quizzes. This allows for a more
              interactive environment for the users. To ensure the validity and the quality of the submitted quizzes, they go through an approval period wherein
              the content of the quiz is checked.
            </p>
          </div>
          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
            <hr  class="line blue">
            <h3>Keep track of your child's progress</h3>
            <p><br>Every quiz that your child completes will be recorded. This allows you to be able to identify your child's mental strengths and weaknesses, allowing for an efficient way to improve their knowledge. </p>
          </div>
          <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
            <hr  class="line yellow">
            <h3>Reward your children for every milestone they reach</h3>
            <p>The purpose of this app is for the development of your children. A good way of motivating your child to cooperate is to reward them, be it a cookie or a toy car, as they improve and reach certain milestones, a feature of this app much like a level-up system in games.</p>
          </div>
        </div>
      </div>
    </section>
        
        
    <!--Pricing-->
    <section id="pricing" class="pad-lg">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="white">Quizzes</h2>
            <p class="white">Register now to get full access to the quizzes section! Don't worry, it's free!</p>
          </div>
        </div>
        
        <div class="row margin-50">
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
              <li class="headline"><h5 class="white">Maths</h5></li>
              <li class="price"><div class="amount">$5<small>/m</small></div></li>
              <li class="info">2 row section for you package information. You can include all details or icons</li>
              <li class="features first">Up To 25 Projects</li>
              <li class="features">10GB Storage</li>
              <li class="features">Other info</li>
              <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
            <ul class="list-unstyled pricing-table active text-center">
              <li class="headline"><h5 class="white">English</h5></li>
              <li class="price"><div class="amount">$12<small>/m</small></div></li>
              <li class="info">2 row section for you package information. You can include all details or icons</li>
              <li class="features first">Up To 25 Projects</li>
              <li class="features">10GB Storage</li>
              <li class="features">Other info</li>
              <li class="features">Other info</li>
              <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
              <li class="headline"><h5 class="white">Sciences</h5></li>
              <li class="price"><div class="amount">$24<small>/m</small></div></li>
              <li class="info">2 row section for you package information. You can include all details or icons</li>
              <li class="features first">Up To 25 Projects</li>
              <li class="features">10GB Storage</li>
              <li class="features">Other info</li>
              <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
            </ul>
          </div>
          
        </div>
        
      </div>
    </section>
    
    
    <section id="invite" class="pad-lg light-gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <i class="fa fa-envelope-o margin-40"></i>
            <h2 class="black">TBD</h2>
            <br />
            <p class="black">Don't let your child miss this great opportunity! Register now!</p>
            <br />
            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form role="form" action="signUp.php">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg">Sign-up</button>
                </form>
              </div>
            </div><!--End Form row-->

          </div>
        </div>
      </div>
    </section>
    
    
    <section id="press" class="pad-sm">
      <div class="container">
        
        <div class="row margin-30 news-container">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
            <a href="#" target="_blank">
            <img class="news-img pull-left" src="img/press-01.jpg" alt="Tech Crunch">
            <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.<br /> 
            <small><em>Tech Crunch - January 15, 2015</em></small></p>
            </a>
          </div>
        </div>
        
        <div class="row margin-30 news-container">
          <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
            <a href="#" target="_blank">
            <img class="news-img pull-left" src="img/press-02.jpg" alt="Forbes">
            <p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut. <br /> 
            <small><em>Forbes - Feb 25, 2015</em></small></p>
            </a>
          </div>
        </div>
        
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
<script type="text/javascript">
$(document).ready(function(){
    $('#signUp').on("click",function(){
        var x =  confirm("Are you sure with all the fields now?");
        if(x == true){
          $('#missfname').hide();
            $('#misslname').hide();
            $('#missuser').hide();
            $('#misspass').hide();
          if(!$('#fname').val() || !$('#lname').val() || !$('#user').val() || !$('#password').val()){
            if(!$('#fname').val()){
              $('#missfname').show("slow");
            }if(!$('#lname').val()){
              $('#misslname').show("slow");
            } 
            if(!$('#user').val()){
              $('#missuser').show("slow");
            } 
            if(!$('#password').val()){
              $('#misspass').show("slow");
            }
          } else {
             $.ajax({
              url: ("storeUser.php"),
              method: "POST",
              dataType:"text json",
              data: {
                username: $("#user").val(),
                nameF:  $("#fname").val(),
                nameL:  $("#lname").val(),
                pass:  $("#password").val()
              },
              success: function(data){
                      alert(JSON.stringify(data));
                      if(data == "0"){
                        $('#usertaken').show("slow");
                      } else if(data == 1){
                         $("#close").trigger("click");
                       } else {
                         alert("idk!!");
                       }
                      /*if(val=="1"){
                        alert("else!!");
                        $("#close").trigger("click");
                      } else if (val=="0"){
                        alert("show!!");
                          $('#usertaken').show("slow");
                      } else {
                         
                      }*/
              },
              error: function(e){
                alert(JSON.stringify(e));
              }
            });
          }
            
          
        }
    });
});
</script>