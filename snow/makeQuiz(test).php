


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
  <link rel="stylesheet" href="css/questionOdd.css" id="styleOdd">

  <script src="js/modernizr-2.7.1.js"></script>
  <link rel="stylesheet" href="css/styles.css">
    


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

    <header class="makequizheader ">
      <div class="container ">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.html">TBD</a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <a href="#pricing" class="scroll">Pricing</a>&nbsp; &nbsp;<a href="#">Sign in</a>
          </div>
        </div>
      </div>

    </header>

    <section class="qsec">
      <div class="container containerq">
        <form class='qs'>
          <div class="form group">
            <span class="q-name" >Question <span class="qnum">1</span></span><br><br>
            <input type="text" class="form-control qdesc" id='question'> <br><br><br>
            <div class="choices ">
              <input type="text" class="form-control aqq aqq1 " id='choice1' placeholder="Right answer goes here"><br>
              <input type="text" class="form-control aqq aqq2" id='choice2'><br>
              <input type="text" class="form-control aqq aqq3" id='choice3'><br>
              <input type="text" class="form-control aqq aqq4" id='choice4'><br>

              <button class="btn btn-primary submits" type='reset'>Submit</button>
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

<script>
$(document).ready(function(){
   $x = 1;
   $('.submits').on("click",function(){
    if ($x <= 5){
      if ($x <= 5){
        $x++;
        $('.qnum').html($x);

        $.ajax({
         url: ("addQuestion.php"),
         method: "GET",
         dataType: 'json',
         data: {
            quizID: 1,
            question: $("#question").val(),
            choice1:  $("#choice1").val(),
            choice2:  $("#choice2").val(),
            choice3:  $("#choice3").val(),
            choice4:  $("#choice4").val(),
            quizno: <?php echo $_GET['quizno']; ?>

         },
         success: function(data){
           
         }
         });
         if($x > 5){
          $('.containerq').html("Please wait");
          window.location.href="reviewQs.php?quizno="+<?php echo $_GET['quizno'] ?>;
         }      
      }
   }


    });
  });   

  



</script>

  <!--  // if (x%2==0){
   //    $('.makequizheader').css({
   //       'background-color': 'rgb(112,203,206) !important'
   //    });
   //    $('.qname').css({
   //       'color':'white'
   //    });
   //    $('.qdesc').css({
   //       'background-color':'white'
   //    });
   //    $('.aqq').css({
   //       'background-color':'white',
   //       'color': 'rgb(112,203,206) !important'
   //    })
   //    $('submits').css({
   //       'background-color':'white',
   //       'color': 'rgb(112,203,206) !important'
   //    })
   // }else{
   //    $('.makequizheader').css({
   //       'background-color': 'white'
   //    });
   //    $('.qname').css({
   //       'color':'rgb(112,203,206) !important'
   //    });
   //    $('.qdesc').css({
   //       'background-color':'rgb(112,203,206) !important'
   //    });
   //    $('.aqq').css({
   //       'background-color':'rgb(112,203,206) !important',
   //       'color': 'white'
   //    })
   //    $('submits').css({
   //       'background-color':'rgb(112,203,206) !important',
   //       'color': 'white'
   //    })
   // } -->