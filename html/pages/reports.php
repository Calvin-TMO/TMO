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

  $sql =
    "SELECT r.id reportid, r.submitdate, s.id studentid, CONCAT(s.lname, ', ', s.fname) studentname, c.id courseid, CONCAT(c.department, c.num) coursename
     FROM Report r
       INNER JOIN CourseStudent cs ON cs.id = r.coursestudentid
       INNER JOIN Student s ON cs.studentid = s.id
       INNER JOIN Course c ON c.id = cs.courseid
     ORDER BY r.submitdate, studentname";
  $result = $conn->query($sql);

  $output = "";
  if ($result->num_rows > 0 ) {
    // output data for each row
    while ($row = $result->fetch_assoc()) {
      if ($output != "") {$output .= ",";}
      $output .= '{"reportid":"' . $row["reportid"] . '",';
      $output .= '"submitdate":"' . $row["submitdate"] . '",';
      $output .= '"studentid":"' . $row["studentid"] . '",';
      $output .= '"studentname":"' . $row["studentname"] . '",';
      $output .= '"courseid":"' . $row["courseid"] . '",';
      $output .= '"coursename":"' . $row["coursename"] . '"}';
    }
  } else {
    $output .= '{"reportid":"-1","submitdate":"empty","studentid":"empty","studentname":"empty","courseid":"empty","coursename":"empty"}';
  }
  $output = '{"records":[' . $output . ']}';
  $conn->close();

  echo($output);
  
  // echo '{"records":[{"id":"0","Name":"Benjamin Braker"}]}';
?>
