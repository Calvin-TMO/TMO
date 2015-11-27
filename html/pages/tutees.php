<?php
  $servername = "localhost";
  $username = "tmo_user";
  $password = "tmoPassword";
  $dbname = "tmo";

  /*
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    echo $conn->connect_error;
    die("Connection failed: " + $conn->connect_error);
  }

  $sql = "SELECT id, firstname, lastname FROM Students";
  $result = $conn->query($sql);

  $output = "";
  if ($result->num_rows > 0 ) {
    // output data for each row
    while ($row = $result->fetch_assoc()) {
      if ($output != "") {$output .= ",";}
      $output .= '{"id":"' . $row["id"] . '",';
      $output .= '"Name":"' . $row["firstname"] . ' ' . $row["lastname"] . '"}';
    }
  } else {
    $output .= "0 results";
  }
  $output = '{"records":[' . $output . ']}';
  $conn->close();

  echo($output);
  */
  echo '{"records":[{"id":"0","Name":"Benjamin Braker"}]}';
?>
