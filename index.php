<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chess Challenge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/responsive.css">
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
	
	button:focus{
	   outline: none !important;
	}
	
</style>
</head>
<body style="background-color:#8FD400">



<div class="container-fluid">
  <div class="row" style="text-align: center;background-color: #FFFF00">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php"><img style="height:30px;margin-right: 2%" src="images/home_icon.png"></img>Home</a>
  <a href="results.php"><img style="height:30px;margin-right: 1%" src="images/results_icon.png">Results</a>
</div>

<span id="burger_span" style=""
    onclick="openNav()"><img id="burger_img" src="images/burger.png"></img></span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>



    <h4 class="main_heading" style="color:black;margin-top:3%;font-family: Action Man Shaded;">CHESS CHALLENGE</h4>


</div>

   <div class="row" style="text-align: center;margin-top: 2%;padding-bottom: 2%">
		   <div class="col-sm-4" style=""> 
		      <img id="img1" class="main_img" style="" src="images/pawn.png"></img>
		      <p class="main_lines">"I might be considered weak, <br>but i never back down."</p>
		      <button class="btn btn-default btn-lg main_btn" onClick="document.location.href='login.php?group=level1'">LEVEL 1 <span class="span">(Rs. 100)</span></button>
		   </div>
		   <div class="col-sm-4" style=""> 
		       <img id="img2" class="main_img"  style="" src="images/queen.png"></img>
		       <p class="main_lines">"Even the King bows to my <br>power."</p>

		        <button style="" class="btn btn-default btn-lg main_btn" onClick="document.location.href='login.php?group=level2'">LEVEL 2 <span class="span">(Rs. 150)</span></button>
		   </div>
		   <div class="col-sm-4" style=""> 
		        <img id="img3" class="main_img"  style="" src="images/home.png"></img>
		        <p class="main_lines">"To lead the people, <br>walk behind them."</p>
		        <button class="btn btn-default btn-lg main_btn" onClick="document.location.href='login.php?group=level3'">LEVEL 3 <span class="span">(Rs. 200)</span></button>
		   </div>

   
  </div>

 <div id="register" class="row" style="text-align: center;"> 
    <p class="main_lines">Register and win exciting prizes.</p>
 </div>

</div>

</body>
</html>
