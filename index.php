<?php
  include("./include/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR Employee System</title>
  <link rel="icon" href="./assets/img/logo.png" type="image/png">
</head>
<body>
  <?php include("./include/header.php"); ?>
  <?php if (isset($user)): ?>
    <a href="./public/login.php">Press me</a>
    <a href="./controllers/log_out.php">Log out</a>
  <?php else: ?>
    <p>Not logged in</p>
  <?php endif; ?>
</body>
</html>
