<?php
  $hostname = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
  // if ($conn) {
  //   echo "Database connected";
  // }
    // mysqli_close($conn);
?>
