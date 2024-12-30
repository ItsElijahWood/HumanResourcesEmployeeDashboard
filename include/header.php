<?php
  // Loads configs
  $fullpath = include __DIR__ . '../../config.php';

  date_default_timezone_set('Europe/London');
  $time = date("H:i");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header HR</title>
  <link rel="stylesheet" href="<?php echo $fullpath['base_url']; ?> ../assets/css/header.css" />
</head>
<body>
  <div class="header">
    <img class="headerLogo" src="<?php echo $fullpath['base_url']; ?> ../assets/img/logo.png"/>
    <p class="headerText">
      <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Dashboard" ?> |
    </p>
    <p id="time"><?php echo $time; ?></p>
    <img class="headerProfileIcon" src="<?php echo $fullpath['base_url']; ?> ../assets/img/profilelogo.png" />
  </div>  
  <script type="module" src="<?php echo $fullpath['base_url']; ?> ../assets/js/updateTime.js"></script>
</body>
</html>
