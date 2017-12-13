<?php

    session_start();

    print_r($_SESSION);

    $_SESSION['name'] = 'John Doe';
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Sessions</title>
  </head>
  <body>
    <h5>Than you <?php echo $name; ?>, You have subscribed with the email
      <?php echo $email; ?></h5>
      <a href="page3.php">Go to page 3</a>
  </body>
</html>
