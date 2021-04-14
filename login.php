<?php

$host = "localhost";
$db = "db";
$user = "root";
$pw = "root";
$port = 3306;

$link = mysqli_connect(
  $host, 
  $user, 
  $pw, 
  $db,
  $port
);


if(mysqli_connect_errno()){
  echo "<h2>failed to connect"  . mysqli_connect_error() . "</h2>";
  exit();
}

echo "<h2>connection success!</h2>";


?>