<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript" src="js/require.js"></script>
 <script src="js/ajax.js"></script>
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
    font-size:40px  !important;
    margin-top:5%;
  }
  
  button:focus{
     outline: none !important;
  }
  input{
    width:60% !important;
    height:100px !important;
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
  p{
    font-family: Action Man;
    color:black;
    font-size:20px  !important;
    margin-top:5%;
  }

  
</style>
</head>
<body style="background-color:#8FD400;overflow-x: hidden">


<?php
session_start();

      $url2 = 'https://chess-challenges.herokuapp.com/user_not_allowed_other_levels/';
      $options2 = array(
        'http' => array(
          'header'  => array(
                        'USERNAME: '.$_SESSION['challenge_username'],
                        'LEVEL: level1',
                      ),
          'method'  => 'GET',
        ),
      );
      $context2 = stream_context_create($options2);
      $output2 = file_get_contents($url2, false,$context2);
      /*echo $output2;*/
      $arr2 = json_decode($output2,true);
      if($arr2[0]['status']==200){
         
      }else{
        echo "<script>location='index.php'</script>";
      }

?>

<?php
session_start();

      $url_c = 'https://chess-challenges.herokuapp.com/get_clock/';
      $options_c = array(
        'http' => array(
          'header'  => array(
                        'USERNAME: '.$_SESSION['challenge_username'],
                        'LEVEL: level1',
                      ),
          'method'  => 'GET',
        ),
      );
      $context_c = stream_context_create($options_c);
      $output_c = file_get_contents($url_c, false,$context_c);
      /*echo $output2;*/
      $arr_c = json_decode($output_c,true);
      $clock= $arr_c[0]['clock'];

      /*echo $clock;*/
      
?>

<script type="text/javascript">
      window.onload=counter;
      function counter()
      {
        var seconds= '<?php echo $clock ?>';
        /*alert(seconds);*/
        if(seconds == ''){
            seconds="3600";
        }
        countDown();
        function countDown()
        {
          document.getElementById('seconds').value = seconds;
          min= Math.floor(seconds/60);
          sec= seconds%60;
          document.getElementById("remain").value=min+" min : "+sec+" sec";
          if(seconds>0)
          {
             seconds=seconds - 1;
             setTimeout(countDown,1000);
          }
          if(seconds == 0)
          {
             document.getElementById("t_submit").click();
          }
        }
      }
</script>

<script type="text/javascript">


window.setInterval(function(){
  
  var a1 = document.getElementById('a1').value;
  var a2 = document.getElementById('a2').value;
  var a3 = document.getElementById('a3').value;
  var a4 = document.getElementById('a4').value;
  var a5 = document.getElementById('a5').value;
  var a6 = document.getElementById('a6').value;
  var a7 = document.getElementById('a7').value;
  var a8 = document.getElementById('a8').value;
  var a9 = document.getElementById('a9').value;
  var a10 = document.getElementById('a10').value;
  var a11 = document.getElementById('a11').value;
  var a12 = document.getElementById('a12').value;
  var a13 = document.getElementById('a13').value;
  var a14 = document.getElementById('a14').value;
  var a15 = document.getElementById('a15').value;
  var a16 = document.getElementById('a16').value;
  var a17 = document.getElementById('a17').value;
  var a18 = document.getElementById('a18').value;
  var a19 = document.getElementById('a19').value;
  var a20 = document.getElementById('a20').value;

  var s1 = document.getElementById('seconds').value;
  
  var Url="update.php";

  $.ajax({
  type: "POST",
  url: Url,
  dataType: 'json',
  data: {s1:s1,a1:a1,a2:a2,a3:a3,a4:a4,a5:a5,a6:a6,a7:a7,a8:a8,a9:a9,a10:a10,a11:a11,a12:a12,a13:a13,a14:a14,a15:a15,a16:a16,a17:a17,a18:a18,a19:a19,a20:a20},
  success: function(fields){
    $.each(fields, function(idx, f){
      /*alert(f.status);*/
      if(f.status==400){
        document.location.href='session_exp.php';
      }
    });
  }
});

}, 5000);




</script>

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

    <h4 class="main_heading" style="color:black;margin-top:3%;font-family: Action Man Shaded;">Challenge</h4>
  </div>

<form method="post" name="myForm" id="myForm" action="submit.php">  
<div style="margin-left: 5%">


<input placeholder="" class="form-control" type="hidden" name="seconds" id="seconds"/>

<div style="position:fixed;bottom:2%;right:1%;"">
<p style="">Time Left</p>
<input style="background-color:#FF7A00;border:1px solid black;width:200px !important;height:50px !important;margin-top: -1%;color:black;font-family: Action Man;font-size:20px" placeholder="" class="form-control" type="text" name="remain" id="remain"/>
</div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 1 : What is Check ?</p>
    <div class="form-group">
        <input placeholder="Answer 1" class="form-control" type="text" name="a1" id="a1"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 2 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 2" class="form-control" type="text" name="a2" id="a2"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 3 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 3" class="form-control" type="text" name="a3" id="a3"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 4 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 4" class="form-control" type="text" name="a4" id="a4"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 5 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 5" class="form-control" type="text" name="a5" id="a5"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 6 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 6" class="form-control" type="text" name="a6" id="a6"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 7 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 7" class="form-control" type="text" name="a7" id="a7"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 8 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 8" class="form-control" type="text" name="a8" id="a8"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 9 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 9" class="form-control" type="text" name="a9" id="a9"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 10 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 10" class="form-control" type="text" name="a10" id="a10"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 11 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 11" class="form-control" type="text" name="a11" id="a11"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 12 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 12" class="form-control" type="text" name="a12" id="a12" />
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 13 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 13" class="form-control" type="text" name="a13" id="a13"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 14 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 14" class="form-control" type="text" name="a14" id="a14"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a15" id="a15"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a16" id="a16"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a17" id="a17"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a18" id="a18"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a19" id="a19"/>
    </div>
  </div>

  <div class="row" style="text-align: left;background-color: #8FD400">
    <p style="">Question 15 : What is Checkmate ?</p>
    <div class="form-group">
        <input placeholder="Answer 15" class="form-control" type="text" name="a20" id="a20"/>
    </div>
  </div>

  <br><br>


  <script type="text/javascript">
  function confirm_box(){
    var res = confirm('Do you really want to submit the form?');
    if(!res){ 
      return false; 
    }else{ 
      document.getElementById("t_submit").click();
    }
  }


</script>

    <button type="button" onclick="confirm_box()" class="button" class="btn btn-default btn-lg" id="test_submit">Submit</button>

    <button style="display: none" type="submit" id="t_submit">Submit</button>

</form>
  <div class="row" style="text-align: left;background-color: #8FD400;height:20px">
   
  </div>

</div>





</div>

</body>
</html>