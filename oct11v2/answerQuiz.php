<?php 
  session_start();
 ?>
<html>
<head>
	<title>Answer Quiz | Blocks</title>
	  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="icon" href="images/blocklogo.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/modernizr-2.7.1.js"></script>
  <link rel="stylesheet" type="text/css" href="css/myfonts.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/answerQuiz.css">
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
          <a class="logo" href=<?php  
                      if(isset($_SESSION['id_user'])){
                        echo "'home2.php'";
                      }else{
                        echo "'index.php'";
                      }
                      ?>>TBD</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#pricing" class="scroll">Pricing</a></li>
            <li><a href="#">Sign in</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <header class="answerQuizheader">
      <div class="container ">
        <div class="row rowheader">
          <div class="col-xs-6">
            <a href=<?php  
                      if(isset($_SESSION['id_user'])){
                        echo "'home2.php'";
                      }else{
                        echo "'index.php'";
                      }
                      ?>>TBD</a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <a href="#pricing" class="scroll navheadr">Pricing</a>&nbsp; &nbsp;<a href="#" class="scroll navheadr">Sign in</a>
          </div>
        </div>
      </div>
    </header>

    <section class="textbody">
    	<div class="row">
    	<div class="col-md-5 text-center quizform">
        <div class="jumbotron quizdetails">
          <div class="container">
      		<h1 class="quiztitle"></h1>
      		<div class="quizitems"></div>
      		<div class="categoryquiz"></div>
         </div>
        </div>
    	</div>
    	<div class="col-md-7 text-center quizanswer">
        <div class="butstart "><span class="btn btn-warning btn-lg" style="cursor:pointer">START QUIZ!</span> </div>
        <div class="answerqs" hidden>
            <h1 class="questionlabel">EY</h1>

            <button class="btn btn-default choice1 btnc" type='button'></button><br>
            <button class="btn btn-default choice2 btnc" type='button'></button><br>
            <button class="btn btn-default choice3 btnc" type='button'></button><br>
            <button class="btn btn-default choice4 btnc" type='button'></button><br>
        </div>
        <div class="scoreface" hidden>
          <h1 class="scorelabel"> You have finished the quiz! Congratulations! </h1>
          <h2>Your Score: <span class="myscore"></span></h2>
          <a type="button" href="listofquizzes.php" class='btn btn-warning redirbtn'> Answer more quizzes </a>

        </div>
    	</div>

    	</div>
    </section>

    <footer>  
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
      $arr = [];
      $ndx = 0;
      $numq = 0;
      $totalScore = 0;
      $warn_on_unload = "Leaving this page will cause any unsaved data to be lost.";
      function getQuiz(){

        $.ajax({
          url:"getQuiz.php",
          method:"GET",
          dataType: "text json",
          data: {
            quizno: <?php echo $_GET['qid']; ?>
          },
          success: function(data){
            $(data).each(function(key,val){
              $('.quiztitle').text(val[2]);
              $('.quizitems').text(val[4]+" items");
              $numq = val[4];
              $('.categoryquiz').text("Category: "+val[3]);
            });
          }
        });
      }

      function getChoices(val){
        $.ajax({
          url:"getChoices.php",
          method:"GET",
          dataType: "text json",
          data: {
            questionid: val
          },
          success: function(data){
            $choicectr = 1;
            $(data).each(function(key,val){
              $randval = (Math.floor((Math.random()*20)+1))%4;
              while($('.choice'+($randval+1)).hasClass('taken')){
                $randval = (Math.floor((Math.random()*20)+1))%4;
              }
              $('.choice'+($randval+1)).text(val[3]);
              $('.choice'+($randval+1)).addClass('taken');
              if($choicectr == 1){
                $('.choice'+($randval+1)).addClass('rightAnswer');
              }
              $choicectr++;
            });
          }
        })
      }

      function removeClasses(){
        $(".choice1").removeClass('taken');
          $(".choice2").removeClass('taken');
          $(".choice3").removeClass('taken');
          $(".choice4").removeClass('taken');
          if ($(".choice1").hasClass('rightAnswer')){
            $(".choice1").removeClass('rightAnswer');
          }else if ($(".choice2").hasClass('rightAnswer')){
            $(".choice2").removeClass('rightAnswer');
          }else if ($(".choice3").hasClass('rightAnswer')){
            $(".choice3").removeClass('rightAnswer');
          }else if ($(".choice4").hasClass('rightAnswer')){
            $(".choice4").removeClass('rightAnswer');
          }

      }

      $(document).ready(function(){
        $ctr = 1;

        getQuiz();

        $(".btn-warning").click(function(){
          $('.butstart').fadeOut();
          setTimeout(function(){
            $('.answerqs').fadeIn(1000);
          },400);
            $.ajax({
              url:"getQuestions.php",
              method:"GET",
              dataType:"text json",
              data: {
                quizno: <?php echo $_GET['qid']; ?>
              },
              success: function(data){
                $(data).each(function(key,val){
                  if ($ctr == 1){
                    $('.questionlabel').text(val[2]);
                    getChoices(val[0]);
                  }else{
                  $arr.push(val[0]);
                  }
                  $ctr++;
                });
              },
              error: function(e){
                // alert(JSON.stringify(e));
              }
            });
        });

        $(".btnc").click(function(){
          
          if ($(this).hasClass('rightAnswer')){
            $totalScore++;
            $(this).addClass('correctAnss');
          }else{
            $(this).addClass('wrongAnss');
            $(this).siblings('.rightAnswer').addClass('correctAnss');
          }
          removeClasses();
          setTimeout(function(){
            $.ajax({
              url:"getQuestion.php",
              method:"GET",
              dataType:"text json",
              data: {
                question_id: $arr[$ndx]
              },
              success: function(data){
                if ($ndx <= $numq-2){
                $(data).each(function(key,val){
                  $('.questionlabel').text(val[2]);
                  getChoices(val[0]);
                });
                }
                $ndx++;
                 
              },
              error: function(){
                $('.answerqs').fadeOut();
                $('.scoreface').fadeIn();
                $('.myscore').text($totalScore+" / "+$numq);
                $warn_on_unload = '';
                $.ajax({
                  url: "storeAnsQuiz.php",
                  method:"GET",
                  dataType:"text",
                  data: {
                    userid: <?php echo $_SESSION['id_user']; ?>,
                    quizid: <?php echo $_GET['qid']; ?>,
                    score:$totalScore,
                    totScore:$numq,
                    date: $.now()
                  },
                  success: function(data){
                    
                  },error: function(){
                    alert("error");
                  }
                });

              },
              complete: function(){
                $('.btnc').removeClass("wrongAnss");
                $('.btnc').removeClass("correctAnss");
              }
            });
          },1500);
          if ($ndx <= $numq-2){
          setTimeout(function(){
            $('.answerqs').fadeOut(500);
          },1000);
          setTimeout(function(){
            $('.answerqs').fadeIn(700);
          },1600)
          }

        });
          $(window).bind('beforeunload', function() {
            if ($warn_on_unload != ''){
            return $warn_on_unload;
            }
          });

      })

    </script>