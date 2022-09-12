<?php
session_start();

$sname="127.0.0.1";
$uname="root";
$password="";
$db_name="wis_ems";

$conn=mysqli_connect($sname,$uname,$password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>