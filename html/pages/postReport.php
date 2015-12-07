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

  //$data = json_decode(file_get_contents("php://input"));
  $coursestudentid = $_POST("coursestudentid");
  $submitdate = $_POST("date");
  $starttime = $_POST("starttime");
  $endtime = $_POST("endtime");
  $topic = $_POST("topic");
  $response = $_POST("response");
  $plans = $_POST("plans");
  $studentplans = $_POST("studentplans");
  $comments = $_POST("comments");

  $sql = "INSERT INTO Report
      (coursestudentid, submitdate, starttime, endtime,
      topic, response, plans, studentplans, comments)
    VALUES
      ($coursestudentid, $submitdate, $starttime, $endtime, $topic, $response, $plans, $studentplans, $comments)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " .$sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
