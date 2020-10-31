<?php
  $siteurl = "http://localhost/Task/sql%20task1/config.php";

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "quizdbase";

  // Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
  