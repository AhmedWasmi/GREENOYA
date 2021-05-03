
<?php
  include_once('esp-databas.php');
$arr= $value1 =$last_reading= "";

      $last_reading = getLastReadings();
      $last_reading["value1"];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
      if($last_reading["value1"]!=$_POST["value1"]){
      $value1 = test_input($_POST["value1"]);
      $result = insertReading($value1);
      echo $value1;
      echo $result;
      }
      else{updated();}
   
  
  }
updated();
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
  ?>
