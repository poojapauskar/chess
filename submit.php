<html>
<body>
<?php 

        session_start();
        header('Content-Type: application/json');
		    $url8 = 'https://chess-challenges.herokuapp.com/update_details/';
        $data8 = array('username'=>$_SESSION['challenge_username'],'level'=>$_SESSION['challenge_level'],'seconds'=>$_POST['seconds'],'a1'=>$_POST['a1'],'a2'=>$_POST['a2'],'a3'=>$_POST['a3'],'a4'=>$_POST['a4'],'a5'=>$_POST['a5'],'a6'=>$_POST['a6'],'a7'=>$_POST['a7'],'a8'=>$_POST['a8'],'a9'=>$_POST['a9'],'a10'=>$_POST['a10'],'a11'=>$_POST['a11'],'a12'=>$_POST['a12'],'a13'=>$_POST['a13'],'a14'=>$_POST['a14'],'a15'=>$_POST['a15'],'a16'=>$_POST['a16'],'a17'=>$_POST['a17'],'a18'=>$_POST['a18'],'a19'=>$_POST['a19'],'a20'=>$_POST['a20']);
        // use key 'http' even if you send the request to https://...
        $options8 = array(
          'http' => array(
            'header'  => "Content-Type : application/json; charset=UTF-8\r\n",
            'method'  => 'PUT',
            'content' => http_build_query($data8),
          ),
        );
        $context8  = stream_context_create($options8);
        $result8 = file_get_contents($url8, false, $context8);
        /*echo $result8;*/
        $arr9 = json_decode($result8,true);
        
        
          if($arr9['status'] == 400){

             header("Location: thankyou.php");
          }else{
            $url_session_0 = 'https://chess-challenges.herokuapp.com/inactivate_user/';
            $options_session_0 = array(
              'http' => array(
                'header'  => array(
                              'USERNAME: '.$_SESSION['challenge_username'],
                              'LEVEL: '.$_SESSION['challenge_level'],
                              'IS-ACTIVE: 0'
                            ),
                'method'  => 'GET',
              ),
            );
            $context_session_0 = stream_context_create($options_session_0);
            $output_session_0 = file_get_contents($url_session_0, false,$context_session_0);

            $session_0 = json_decode($output_session_0,true);
            
             header("Location: thankyou.php");
          }

        /*echo $_POST['usn'];*/

        
        

?>

</body>
</html>

