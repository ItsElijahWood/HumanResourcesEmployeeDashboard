<?php
  date_default_timezone_set('Europe/London');
  $time = date("H:i");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header HR</title>
  <link rel="stylesheet" href="/EmployeeSystemHR/assets/css/header.css" />
</head>
<body>
  <div class="header">
    <img class="headerLogo" src="/EmployeeSystemHR/assets/img/logo.png"/>
    <p class="headerText">
      <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Dashboard" ?> |
    </p>
    <p id="time"><?php echo $time; ?></p>
    <img class="headerProfileIcon" src="/EmployeeSystemHR/assets/img/profilelogo.png" />
  </div>  
  <script src="/EmployeeSystemHR/assets/js/updateTime.js"></script>
</body>
</html>
