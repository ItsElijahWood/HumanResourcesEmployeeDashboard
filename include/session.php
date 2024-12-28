<?php
  session_start();

  if (isset($_SESSION["user_id"])) {
     //* connects to database using the file
     $mysqli = require("loginDB.php");
     //* searches from the user table for user id
     $sql = "SELECT * FROM users
     WHERE id = {$_SESSION["user_id"]}";
     //* executes the thing inside the $sql var code
     $result = $mysqli->query($sql);
 
     $user = $result->fetch_assoc();  
  }
?>
