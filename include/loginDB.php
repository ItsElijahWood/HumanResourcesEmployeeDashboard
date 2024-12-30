<?php
  // Local database accessed from private ip
  $host = "localhost";
  $user = "ElijahWood";
  $pass = "UL!niz(+6P*S7Fm";
  $servername = "logindb";

  $conn = new mysqli($host, $user, $pass, $servername);

  if ($conn->connect_error) {
    die("Conn failed: " . $conn->connect_error);
  } 

  return $conn;
?>