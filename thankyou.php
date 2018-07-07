<!DOCTYPE html>
<html>
<head>
<title>Chess Challenge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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





<div class="row" style="text-align: center;margin-top:5%">

<img style="width:250px" src="images/knight.png"></img>
</div>


<div class="row" style="margin-top:4%;text-align: center;background-color: #FF7A00">
    <h4 style="color:black;margin-top:3%;font-family: Action Man Shaded;font-size: 50px;">THANK YOU for participating.</h4>
    <h6 style="margin-bottom:4%;color:black;margin-top:3%;font-family: Action Man Shaded;font-size: 30px;">Results will be out soon.</h6>
  </div>


</div>

</body>
</html>