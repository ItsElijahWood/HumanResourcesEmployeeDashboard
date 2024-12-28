<?php
  $pageTitle = "HR Login";
  include("../include/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR Login</title>
  <link rel="icon" href="../assets/img/logo.png" type="image/png">
  <link rel="stylesheet" href="/EmployeeSystemHR/assets/css/login.css" />
</head>
<body>
   <?php include("../include/header.php"); ?> 
   <?php if (isset($user)): ?>
    <p>You are already logged in.</p>
   <?php else: ?>
   <form action="/EmployeeSystemHR/controllers/login_form.php" method="POST">
        <input type="email" name="email" id="email" placeholder="Email"
            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required><br><br>

        <input type="password" name="password" id="password" placeholder="Password" required><br><br>

        <button type="submit">Log in</button>
    </form>
   <?php endif; ?>
</body>
</html>
