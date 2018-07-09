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
     background-color:    #FF7A00  !important;
     color:black  !important;
     font-family: Action Man Shaded;
     font-size: 50px  !important;
     border:4px solid black !important;
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




<div class="row" style="">
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
</div>

<div id="thankyou_row" class="row" style="text-align: center;">

<img style="width:250px" src="images/knight.png"></img>
</div>


<div class="row" id="thankyou_next_row" style="text-align: center;background-color: white">
    <h4 id="thankyou" style="color:black;font-family: Action Man Shaded;">THANK YOU for participating.</h4>
    <h6 id="res_soon" style="margin-bottom:4%;color:black;margin-top:3%;font-family: Action Man Shaded;">Results will be out soon.</h6>
  </div>


</div>

</body>
</html>