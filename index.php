<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chess Challenge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	@font-face {
	    font-family: Action Man Shaded;
	    src: url(fonts/Action_Man_Shaded.ttf);
	}
	@font-face {
	    font-family: Action Man;
	    src: url(fonts/Action_Man.ttf);
	}
	button{
	   background-color: 		#FF7A00  !important;
	   color:black  !important;
	   font-family: Action Man Shaded;
	   font-size: 50px  !important;
	   border:4px solid black !important;
	}
	button:focus{
	   outline: none !important;
	}
	p{
	  font-family: Action Man;
	  color:black;
	  font-size:20px  !important;
	  margin-top:5%;
	}
</style>
</head>
<body style="background-color:#8FD400">

<div class="container-fluid">
  <div class="row" style="text-align: center;background-color: #FFFF00">
    <h4 style="color:black;margin-top:3%;font-family: Action Man Shaded;font-size: 80px;">CHESS CHALLENGE</h4>
  </div>

   <div class="row" style="text-align: center;margin-top: 3%">
		   <div class="col-sm-4" style=""> 
		      <img style="height:200px;" src="images/pawn.png"></img>
		      <p>"I might be considered weak, but i never back down."</p>
		   </div>
		   <div class="col-sm-4" style=""> 
		       <img style="height:200px;" src="images/queen.png"></img>
		       <p>"Even the King bows to my power."</p>
		   </div>
		   <div class="col-sm-4" style=""> 
		        <img style="height:200px;" src="images/home.png"></img>
		        <p>"To lead the people, walk behind them."</p>
		   </div>

   
  </div>

  <div class="row" style="text-align: center;margin-top: 1%">
    <div class="col-sm-4" style=""><button class="btn btn-default btn-lg" onClick="document.location.href='login.php?group=level_1'">LEVEL 1</button></div>
    <div class="col-sm-4" style=""><button class="btn btn-default btn-lg" onClick="document.location.href='login.php?group=level_2'">LEVEL 2</button></div>
    <div class="col-sm-4" style=""><button class="btn btn-default btn-lg" onClick="document.location.href='login.php?group=level_3'">LEVEL 3</button></div>
  </div>
</div>

</body>
</html>
