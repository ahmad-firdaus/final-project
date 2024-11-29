<?php
$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "detsdb";

$con = mysqli_connect($localhost, $username, $password, $dbname);
if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}
