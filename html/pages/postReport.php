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

  $data = json_decode(file_get_contents("php://input"));
  $studentid = $data->studentid;
  $courseid = $data->courseid;
  $submitdate = $data->submitdate;
  $starttime = $data->starttime;
  $endtime = $data->endtime;
  $topic = $data->topic;
  $response = $data->response;
  $plans = $data->plans;
  $studentplans = $data->studentplans;
  $comments = $data->comments;
  

  $sql = "INSERT INTO Report (coursestudentid, submitdate, starttime, endtime,topic, response, plans, studentplans, comments) VALUES((SELECT id FROM CourseStudent WHERE studentid=".$studentid." AND courseid=".$courseid."), '".$submitdate."', '".$starttime."', '".$endtime."', '".$topic."', '".$response."', '".$plans."', '".$studentplans."', '".$comments."')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " .$sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
