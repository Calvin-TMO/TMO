<?php
  $servername = "localhost";
  $username = "apache";
  $password = "";
  $dbname = "tmo";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    echo $conn->connect_error;
    die("Connection failed: " + $conn->connect_error);
  }

  $sql = "SELECT id, coursestudentid, submitdate, details FROM Report";
  $result = $conn->query($sql);

  $output = "";
  if ($result->num_rows > 0 ) {
    // output data for each row
    while ($row = $result->fetch_assoc()) {
      if ($output != "") {$output .= ",";}
      $output .= '{"id":"' . $row["id"] . '",';
      $output .= '"coursestudentid":"' . $row["coursestudentid"] . '",';
      $output .= '"submitdate":"' . $row["submitdate"] . '",';
      $output .= '"details":"' . $row["details"] . '"}';
    }
  } else {
    $output .= '{"id":"-1","coursestudentid":"empty","submitdate":"empty","details":"empty"}';
  }
  $output = '{"records":[' . $output . ']}';
  $conn->close();

  echo($output);
  
  // echo '{"records":[{"id":"0","Name":"Benjamin Braker"}]}';
?>
