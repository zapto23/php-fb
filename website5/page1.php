<?php
  if(isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);

    setcookie('username', $username, time()+3600);
    // 1 hour

    header('Location: page2.php');
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>PHP Cookies</title>
   </head>
   <body>
     <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
       <input type="text" name="username" placeholder="Enter Username">
       <br>
       <input type="submit" name="submit" value="Submit">
     </form>
   </body>
 </html>
