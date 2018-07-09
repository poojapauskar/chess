   <?php
    session_start();
    header('Content-Type: application/json');

    $aResult = array();

   /* if( !isset($_POST['firstname']) ) 
    	{ $aResult['error'] = 'No function name!'; }
    else
    	{ $aResult['error'] = $_POST['firstname']; }*/

    
    $url_check_session_0 = 'https://chess-challenges.herokuapp.com/check_user_active/';
    $options_check_session_0 = array(
      'http' => array(
        'header'  => array(
                      'USERNAME: '.$_SESSION['challenge_username'],
                      'LEVEL: '.$_SESSION['challenge_level'],
                    ),
        'method'  => 'GET',
      ),
    );
    $context_check_session_0 = stream_context_create($options_check_session_0);
    $output_check_session_0 = file_get_contents($url_check_session_0, false,$context_check_session_0);
    /*echo $output_check_session_0;*/

    $check_session_0 = json_decode($output_check_session_0,true);



    $fields= array();


    if($check_session_0[0]['status'] == 200){
          $url9 = 'https://chess-challenges.herokuapp.com/update_details/';
          $data9 = array('username'=>$_SESSION['challenge_username'],'level'=>$_SESSION['challenge_level'],'seconds'=>$_POST['s1'],'a1'=>$_POST['a1'],'a2'=>$_POST['a2'],'a3'=>$_POST['a3'],'a4'=>$_POST['a4'],'a5'=>$_POST['a5'],'a6'=>$_POST['a6'],'a7'=>$_POST['a7'],'a8'=>$_POST['a8'],'a9'=>$_POST['a9'],'a10'=>$_POST['a10'],'a11'=>$_POST['a11'],'a12'=>$_POST['a12'],'a13'=>$_POST['a13'],'a14'=>$_POST['a14'],'a15'=>$_POST['a15'],'a16'=>$_POST['a16'],'a17'=>$_POST['a17'],'a18'=>$_POST['a18'],'a19'=>$_POST['a19'],'a20'=>$_POST['a20']);
          // use key 'http' even if you send the request to https://...
          $options9 = array(
            'http' => array(
              'header'  => "Content-Type : application/json; charset=UTF-8\r\n",
              'method'  => 'PUT',
              'content' => http_build_query($data9),
            ),
          );
          $context9  = stream_context_create($options9);
          $result9 = file_get_contents($url9, false, $context9);
         /* echo $result8;*/
          $arr10 = json_decode($result9,true);

          //-------------------------
          $f = array(
            "status" => 200
          );
          $fields[] = $f;
          echo json_encode($fields);
       
    }elseif($check_session_0[0]['status'] == 400){
          $f = array(
            "status" => 400
          );
          $fields[] = $f;
          echo json_encode($fields);
    }
?>

