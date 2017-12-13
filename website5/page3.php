<?php
  $user = ['name' => 'Brad', 'email' => 'test@test.com', 'agge' => 35];

  $user = serialize($user);

  setcookie('user', $user, time() + (86400 + 30));

  $user = unserialize($_COOKIE['user']);

  //echo $user['email'];
  print_r($user);
 ?>
