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



<script type="text/javascript">
  function check(){
    var n1 = document.forms["form1"]["firstname"].value;
    var n2 = document.forms["form1"]["lastname"].value;
    var x = document.forms["form1"]["phone"].value;
    var y = document.forms["form1"]["email"].value;
    var z2 = document.forms["form1"]["usn"].value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var letters = /^[a-zA-Z\s]*$/;
    var numbers = /^[0-9\s]*$/;
    var alpha_num = /^[a-z0-9]+$/i;

    if((n1 !== "") && (n1.match(letters) == null)){
       alert("Only letters and whitespaces allowed for firstname");
        return false; 
    }
    if((n2 !== "") && (n2.match(letters) == null)){
       alert("Only letters and whitespaces allowed for lastname");
        return false; 
    }
    if((x !== "") && (x.match(numbers) == null)){
       alert("Phone no. must contain only digits");
        return false; 
    }
    if((x !== "") && (x.length > 15 || x.length < 7)){
        /*alert(x);*/
        /*window.location.href = "#popup_contain_seven1";*/
        alert("Phone no. must contain 7-15 digits");
        return false;
    }


    if(z2.match(alpha_num) == null){
       alert("USN must contain only letters and numbers");
        return false; 
    }
    if(z2.length != 10){
        /*alert(x);*/
        /*window.location.href = "#popup_contain_seven1";*/
        alert("USN must contain 10 digits");
        return false;
    }

    else{
    /*  $("#popup1").slideToggle("speed");
      $("#contact_us_btn").show();*/
      return true;
    }

  }
</script>

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

// link active for particular period
/*$today = new DateTime();
$start = new DateTime("2016-01-01");
$end = new DateTime("2016-12-31");

if($start <= $today && $today <= $end) {
  //show index.php;
}
else{
  echo "<script> document.location.href='link_expired.php';</script>";
}*/

?>




<div class="row">

<div class="col-sm-1">
</div>

<div class="col-sm-4" style="margin-top:5%;" align="middle">
   <div id="ins_box" style="text-align: left;background-color: #FFFF00">
   <br><br><br>
       <h3 style="text-align: center !important">IMPORTANT</h3>

       <ol id="login_list" type="A">
        <li>The test consists of 30 questions.</li>
         <li>The test includes concepts and puzzles.</li>
        <li>Answer the questions in the space provided.</li>
        <li>Hit submit only after the test is completed.</li>
        <li>Time Period : ONE hour.</li>
      </ol>  


   </div>
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-4" style="margin-top: 5%;margin-left:5%;text-align: left" >
    <form id="form1" name="form1" method="post" onsubmit="return check()" action="questions.php" style="">
    <label>Username</label><br>
    <div class="form-group">
        <input class="form-control" type="text" name="username" required/>
    </div>

    <label style="">Password</label>
    <div class="form-group">
        <input class="form-control" type="text" name="password" required/>
    </div>

    <br><br>
    <button class="button" onClick="document.location.href='test.php'" class="btn btn-default btn-lg" type="submit" id="login_submit" style="">Submit</button>
    </form>

</div>

<div class="col-sm-2">
</div>



</div>

</body>
</html>