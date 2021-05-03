
<?php
  include_once('esp-databas.php');

  // Keep this API Key value to be compatible with the ESP code provided in the project page. If you change this value, the ESP sketch needs to match
  $api_key = $value1 =$myObj= $last_reading=$get= "";

  while (true) {
      $last_reading = getLastReadings();
      $get=get();
      if($get['timer']>120){
          $cont=0;
      }else{
          $cont=1;
      }
    if ($last_reading["value1"] != $_POST) {
    $result=["value1"=>$last_reading["value1"], "cont"=>$cont];  
    echo json_encode($result);
    break;
  } 
  
  sleep(2); // Not to break the server. Short pause before next check.
}

?>