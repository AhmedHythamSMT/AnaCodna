<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "anacodna";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
