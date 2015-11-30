<?php

 require dirname(__FILE__).'/dbConnection.php'; // for dbconnection
 require dirname(__FILE__).'/insertData.php';   // for inserting data into the data basae
 require dirname(__FILE__).'/firstUrl.php';   // for getting first URL
 
 $token = "36be5803fee3409eb6440919742e1af3";
 
 $url = getFirstURL($token);
 echo $url;

// die();

// $url = "";
 $tot = 500;
 for($i = 0; $i < $tot ; $i++) {
  // Initialize cURL session
  $ch = curl_init($url);

   // Option to Return the Result, rather than just true/false
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// setting headers
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Fk-Affiliate-Id: raghavend5',
    'Fk-Affiliate-Token: '.$token
    ));

  // Perform the request, and save content to $result
  $result = curl_exec($ch);
// print_r($result);

  if ($result === FALSE) {
    die("Curl failed: " . curL_error($ch));
  }

  $data = json_decode($result,true);

  curl_close($ch);

// print_r($data);

  

  insertData($data);

  $url = $data['nextUrl'];
  echo "<br>trying next URL<br>";

  if($url == null) {
    echo "<br> exiting the loop";
    break;
  }
}

?>
