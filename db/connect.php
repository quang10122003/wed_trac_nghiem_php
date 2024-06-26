<?php
$mysqli = mysqli_connect("localhost","root","","quiz_app");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>