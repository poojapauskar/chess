<!DOCTYPE html>
<html>
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
  label{
    font-family: Action Man;
    color:black;
    font-size:35px  !important;
    margin-top:5%;
  }
  button{
     
  }
  button:focus{
     outline: none !important;
  }
  input{
    width:97% !important;
    height:50px !important;
  }
  h3{
    font-family: Action Man;
    color:black;
    font-size:40px  !important;
    
  }
  ol li{
     font-family: Action Man;
    color:black;
    font-size:20px  !important;
    margin-top:5%;
  }
</style>
</head>
<body style="background-color:#8FD400;overflow-x: hidden">




<div class="row" style="text-align: center;background-color: #FFFF00;">

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


    <h4 class="main_heading" style="color:black;margin-top:3%;font-family: Action Man Shaded;">Results</h4>
  </div>

<div class="row" style="margin-top: 8%;padding-bottom: 4%" align="middle">



<div class="col-sm-4">
   <button onClick="document.location.href='res_aug.php'" class="button btn btn-default btn-lg res_btn" type="submit" style="border-radius: 30%;width:200px;height:200px">Aug 2018</button>
</div>




<div class="col-sm-4">
   <button class="button btn btn-default btn-lg res_btn" type="submit" style="border-radius: 30%;width:200px;height:200px" disabled>Sep 2018</button>
</div>



<div class="col-sm-4">

   <button class="button btn btn-default btn-lg res_btn" type="submit" style="border-radius: 30%;width:200px;height:200px" disabled>Oct 2018</button>
</div>




</div>

</body>
</html>