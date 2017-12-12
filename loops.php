<?php
  # LOOPS - Execute code set number of times

  /*
    For
    While
    Do..While
    Foreach
  */

  # For LOOPS
  # @params - init, condition, inc
/*
  for($i = 0;$i <= 10;$i++){
    echo 'Number '. $i;
    echo '<br>';
  }
*/



  # While LOOP
  # @params - condition

/*
  $i = 0;
  while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
  }
*/



# Do...while
# @params - condition
# will always run at least once

/*
do{
  echo $i;
  echo '<br>';
  $i++;
}
while($i < 10);
*/

# Foreach LOOP - for arrays
$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
foreach ($people as $person => $email) {
  echo $person.': '.$email;
  echo '<br>';
}


 ?>
