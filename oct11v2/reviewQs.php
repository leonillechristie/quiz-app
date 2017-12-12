<?php 

  require("sql_connect.php");
  
?>
<html>
<head>
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
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/reviewQs.css">
	<title></title>
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

	 <header class="reviewQHeader">
		<div class="container">
		  <div class="row">
			 <div class="col-xs-6">
				<a href="index.html">TBD</a>
			 </div>
			 <div class="col-xs-6 signin text-right navbar-nav">
				<a href="#pricing" class="scroll">Pricing</a>&nbsp; &nbsp;<a href="#">Sign in</a>
			 </div>
		  </div>
		</div>
		<div class="jumbotron text-center">
	 <?php  

		$query = "SELECT * FROM quiz WHERE quiz_ID = ".$_GET['quizno'];
		$query2 = "SELECT * FROM question WHERE quiz_ID = ".$_GET['quizno'];
		$res = mysqli_query($mysql,$query);
		$res2 = mysqli_query($mysql,$query2);
		$data = mysqli_fetch_row($res);


		if ($res){
			echo"<h1>".$data[2]."</h1>
					<p>".$data[4]." items</p>
					<p>".$data[3]."</p>
					
				  <p><span data-toggle='collapse' data-target='#revQ'><span class='fa fa-chevron-down buttontodown' data-toggle='tooltip' data-placement='right' title='Click to reveal questions'></span></span></p>
				  <div class='collapse container' id='revQ'>
				  <div class='panel-group' id='accordion' role='tablist' aria-multiselectable='true'>";
		  	while ($row = mysqli_fetch_Array($res2)){

				echo'<div class="panel panel-default">
						  <div class="panel-heading" role="tab" id="heading'.$row[0].'">
							 <h2 class="panel-title">
								<a class ="collapsed questiondisp questiondisp'.$row[0].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row[0].'" aria-expanded="true" aria-controls="collapse'.$row[0].'">'
								  .$row[2].
								'</a><button type="button" data-toggle="modal" class="btn btn-danger delbtn"><span class="fa fa-trash"></span> </button> 
								<button type="button" data-toggle="modal" data-target="#myModalEdit" class="btn btn-warning editbtn"><span class="idno" style="display:none;">'.$row[0].'</span><span class="fa fa-pencil"></span> </button> 
							 </h2>
						  </div>
						  <div id="collapse'.$row[0].'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$row[0].'">
							 <div class="panel-body" id="bodypanel">';
				$query3 = "SELECT * FROM choices WHERE question_ID = ".$row[0];
				$res3 = mysqli_query($mysql,$query3);
				while ($row2 = mysqli_fetch_Array($res3)){
					if ($row2[1] == 1){
						echo "<br><strong><p class ='pbtext corrects pbtext".$row2[0]."' style='color:#93DB70;'>";
					}else {
						echo "<strong><p class='pbtext".$row2[0]."'>";
					}
					echo $row2[3]."<span class='idnochoice' style='display:none'>".(($row2[0])%4)."</span></p></strong><hr/>";

				}		

				echo'			 </div>
						  </div>
						</div>';
		  	}      	
		  	echo  "</div></div>";
		}
	 ?>
	 	<buttom type="button" class="btn btn-primary" style="float:right; margin-right: 11.5%; border-radius:5px">PROCEED</button>		
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

	 <!-- ALERT WHEN EMPTY FIELDS -->
	  <div id="alert1">
        <div id="inner-message" class="alert alert-danger alert-fixed text-center ">
        <button type="button" class="close closebtn" data-hide="alert">&times;</button>
        <span class="alert-text">Please fill up all the fields!</span>
        <span class="fa fa-exclamation-triangle fa-warn"></span>
    </div>
    </div>
	 <!-- MODAL TO EDIT -->

	 <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		        <h4 class="modal-title text-center" id="myModalLabel">EDIT QUESTION</h4>
		      </div>
		      <div class="modal-body">
		        <form>
		        	<span class="qidno" hidden></span>
		        	<div class="form-group text-center">
		        		<label for="qname">Question</label>
		        		<input class="form-control question" type="text" id="qname" >
		        	</div>
		        	<div class="form-group text-center">
		        		<label for="choice1">Right Answer</label>
		        		<input class="form-control rightAnswer" type="text" id="choice1">
		        		<label for="choice2">Other Choices</label>
		        		<input type="text" id="choice2" class="form-control wrongAnswer">
		        		<input type="text" id="choice3" class="form-control wrongAnswer">
		        		<input type="text" id="choice4" class="form-control wrongAnswer">

		        </form>
		      </div>
		      <div class="modal-footer">
		      	<span class="fa fa-spinner fa-spin loadgif" hidden></span>
		        <button type="button" class="btn btn-secondary closebtnn" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary savechanges">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>


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


	$(document).ready(function() {
		
		$(function(){
    	  $("[data-hide]").on("click", function(){
          $(this).closest("." + $(this).attr("data-hide")).fadeOut(400);
      		});
  		});

		function populateInput (classname){
			$vars = classname.closest('.panel-title').children('.editbtn').text();
			$.ajax({
				url:"editDetails.php",
				method:"GET",
				data: {
					questionno: parseInt($vars),
					quizno: <?php echo $_GET['quizno']; ?>
					
				},
				dataType: 'text json',
				success: function(data){
					$(data).each(function(key,val){
						$("#qname").val(val[2]);
					});
					$.ajax({
						url:"editDetails2.php",
						method:"GET",
						dataType: "text json",
						data: {
							questionno: parseInt($vars)
						},
						success: function(data2){

							$(data2).each(function(key2,val2){
								if (val2[0]%4 == 1){
									$(".qidno").text(val2[2]);
									$("#choice1").val(val2[3]);
								}
								if(val2[0]%4 == 2){
									$("#choice2").val(val2[3]);
								}
								if(val2[0]%4 == 3){
									$("#choice3").val(val2[3]);
								}
								if(val2[0]%4 == 0){
									$("#choice4").val(val2[3]);
								}
							});
						}
					})
				},
				error:function(e){
					alert(JSON.stringify(e));
				},

			});
		}
		// function populateInput (){
		// 	$vars = $(this).closest('.panel-title').children('.editbtn').text();
		// 	$.ajax({
		// 		url:"editDetails.php",
		// 		method:"GET",
		// 		data: {
		// 			questionno: parseInt($vars),
		// 			quizno: <?php echo $_GET['quizno']; ?>
					
		// 		},
		// 		dataType: 'text json',
		// 		success: function(data){
		// 			$(data).each(function(key,val){
		// 				$("#qname").val(val[2]);
		// 			});
		// 			$.ajax({
		// 				url:"editDetails2.php",
		// 				method:"GET",
		// 				dataType: "text json",
		// 				data: {
		// 					questionno: parseInt($vars)
		// 				},
		// 				success: function(data2){
		// 					$(data2).each(function(key2,val2){
		// 						if (val2[0]%4 == 1){
		// 						$("#choice1").val(val2[3]);
		// 						}
		// 						if(val2[0]%4 == 2){
		// 							$("#choice2").val(val2[3]);
		// 						}
		// 						if(val2[0]%4 == 3){
		// 							$("#choice3").val(val2[3]);
		// 						}
		// 						if(val2[0]%4 == 0){
		// 							$("#choice4").val(val2[3]);
		// 						}
		// 					});
		// 				}
		// 			})
		// 		},
		// 		error:function(e){
		// 			alert(JSON.stringify(e));
		// 		},

		// 	});
		// }

		// RETRIEVES DATA FROM DATABASE
		$(".editbtn").click(function(){
			populateInput($(this));
		})


		$(".savechanges").click(function(){

			if ($("#qname").val().length > 0 && $("#choice1").val().length > 0 && $("#choice2").val().length > 0
                    && $("#choice3").val().length > 0 && $("#choice4").val().length > 0){
				$(".loadgif").show();
				$(".closebtnn").hide();
				$(".savechanges").hide();
				setTimeout(function(){
					$.ajax({
					url: "saveQuizChanges.php",
					method: "GET",
					dataType:"text",
					data: {
						quizno: <?php echo $_GET['quizno']; ?>,
						questionno: parseInt($('.qidno').text()),
						qname: $("#qname").val(),
						choice1: $("#choice1").val(),
						choice2: $("#choice2").val(),
						choice3: $("#choice3").val(),
						choice4: $("#choice4").val()
					},
					success: function(data){
							$.ajax({
							url:"editDetails.php",
							method:"GET",
							dataType:"text json",
							data:{
								quizno: <?php echo $_GET['quizno']; ?>,
								questionno: parseInt($('.qidno').text())
							},
							success:function(data2){
								$(data2).each(function(key,val){
									$(".questiondisp"+val[0]).text(val[2]);
								});
								$.ajax({
									url:"editDetails2.php",
									method:"GET",
									dataType:"text json",
									data:{
										questionno: parseInt($('.qidno').text())
									},
									success: function(data3){
										$(data3).each(function(key2,val2){
											$(".pbtext"+val2[0]).text(val2[3]);
										});
									}
								});
							}
						})

					},
					complete: function(){
						$(".loadgif").hide();
						$(".closebtnn").show();
						$(".savechanges").show();
						$("#myModalEdit .close").click();
					},
					error: function(e){
						alert(JSON.stringify(e));
					}
				});
			},1500);

			}else {
		      if ($("#inner-message").css("display") == "none"){
		      $("#inner-message").fadeIn(500);
		      setTimeout(function(){
		      	$("#inner-message").fadeOut(500);
		      },5000);
		      }
		      if ($.trim($("#qname").val()).length == 0){
		        $("#qname").css("background-color","#FF4500");
		        $(".placewarnq").addClass("fa fa-exclamation-triangle");

		        $("#qname").focus(function(){
		          $("#qname").css("background-color","rgb(112,203,206)");
		        });
		      }
		      $ctrc = 1;
		      while ($ctrc <=4){
		        if ($.trim($("#choice"+$ctrc).val()).length == 0){
		          $("#choice"+$ctrc).css("background-color","#FF4500");
		          $(".placewarn"+$ctrc).addClass("fa fa-exclamation-triangle");
		        }
		        $ctrc++;
		      }
		      setTimeout(function(){
		        	$("#qname").css("background-color","rgb(112,203,206)");
		        },4000);
		       setTimeout(function(){
		        	$("#choice1").css("background-color","#93DB70");
		        },4000);
		       setTimeout(function(){
		        	$("#choice2").css("background-color","#F64D54");
		        },4000);
		       setTimeout(function(){
		        	$("#choice3").css("background-color","#F64D54");
		        },4000);
		       setTimeout(function(){
		        	$("#choice4").css("background-color","#F64D54");
		        },4000);
		      $("#choice1").focus(function(){
		        $("#choice1").css("background-color","#93DB70");
		      });
		      $("#choice2").focus(function(){
		        $("#choice2").css("background-color","#F64D54");
		      });
		      $("#choice3").focus(function(){
		        $("#choice3").css("background-color","#F64D54");
		      });
		      $("#choice4").focus(function(){
		        $("#choice4").css("background-color","#F64D54");
		      });
		    }
		})
	  	// enable tooltips
	    $("body").tooltip({ selector: '[data-toggle=tooltip]' });	

	    $("editbtn").click(function(){

	    })
	});


	 </script>


	 
		
		