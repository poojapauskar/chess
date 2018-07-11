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
 button:focus{
     outline: none !important;
  }
  h3{
    font-family: Action Man;
    color:black;
    font-size:40px  !important;
    
  }
  
</style>
</head>
<body style="background-color:#8FD400;overflow-x: hidden">


<?php
session_start();
if(isset($_POST['login_submit'])){
      $url2 = 'https://chess-challenges.herokuapp.com/login/';
      $options2 = array(
        'http' => array(
          'header'  => array(
                        'USERNAME: '.$_POST['username'],
                        'PASSWORD: '.$_POST['password'],
                        'LEVEL: '.$_POST['group'],
                      ),
          'method'  => 'GET',
        ),
      );
      $context2 = stream_context_create($options2);
      $output2 = file_get_contents($url2, false,$context2);
      /*echo $output2;*/
      $arr2 = json_decode($output2,true);
      if($arr2[0]['status']==200){
         $_SESSION['challenge_username']=$arr2[0]['username'];
         $_SESSION['challenge_level']=$arr2[0]['level'];
          
         if($arr2[0]['level']=="level1"){
          echo "<script>location='level1.php'</script>";
         }
         if($arr2[0]['level']=="level2"){
          echo "<script>location='level2.php'</script>";
         }
         if($arr2[0]['level']=="level3"){
          echo "<script>location='level3.php'</script>";
         }

      }else{
        echo "<script>alert('Invalid Credentials');</script>";
      }
}
?>


<div class="row" style="padding-bottom: 20px">
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

<div class="row">

<div class="col-sm-1">
</div>

<div class="col-sm-4" style="margin-top:5%;" align="middle">
   <div id="ins_box" style="text-align: left;background-color: #FFFF00">
   <br><br><br>
       <h3 id="imp_text" style="text-align: center !important">IMPORTANT</h3>

       <ol id="login_list" type="A">
        <li>The test consists of 20 questions.</li>
         <li>The test includes concepts and puzzles.</li>
        <li>Answer the questions in the space provided.</li>
        <li>Hit submit only after the test is completed.</li>
        <li>Time Period : 1 hour.</li>
        <li>Winners decided based on the questions answered and the time taken.</li>
      </ol>  


   </div>
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-4" id="form_area" style="margin-top: 5%;margin-left:5%;text-align: left" >
    <form id="form1" name="form1" method="post" onsubmit="return check()" action="login.php" style="">
    <label>Username</label><br>
    <div class="form-group">
       
        <input class="form-control" type="hidden" name="group" value="<?php echo $_GET['group']; ?>" readonly/>
    </div>

     <div class="form-group">
        <input class="form-control" type="text" name="username" required/>
    </div>

    <label style="">Password</label>
    <div class="form-group">
        <input class="form-control" type="text" name="password" required/>
    </div>

    <br><br>
    <button class="button" class="btn btn-default btn-lg" type="submit" name="login_submit" id="login_submit" style="">Submit</button>
    </form>

</div>

<div class="col-sm-2">
</div>



</div>

</body>
</html>