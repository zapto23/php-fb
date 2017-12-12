<?php
  $loggedIn = false;
  $arr = [1,2,3,4,5];
/*
  if($loggedIn){
    echo 'You are logged in';
  } else {
    echo 'You are NOT logged in';
  }

// echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';


# Assigned variables on a condition

$isRegistered = ($loggedIn == True) ? true : false;
echo $isRegistered;


$age = 9;
$score = 15;

echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):
      ($age > 10 ? 'Horrible':'Average'));

*/
?>


<!--  Used for Immbeding your statements in HTML -->
<div>
<?php if($loggedIn) { ?>
  <h1>Welcome User</h1>
<?php }else {?>
  <h1>Welcom Guest</h1>
<?php } ?>
</div>


<div>
  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcom Guest</h1>
  <?php endif;  ?>
</div>



<!-- Looping -->
<div>
  <?php foreach($arr as $val): ?>
    <?php echo $val; ?>
  <?php endforeach ?>
</div>

<div>
  <?php for($i = 0;$i < 10;$i++): ?>
    <li><?php echo $i; ?></li>
  <?php endfor; ?>
</div>
