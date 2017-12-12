<?php

# validate / check data types
# sanitize an email to be formatted so certain characters


// Check for posted data
/*
  if(filter_has_var(INPUT_POST, 'data')){
      echo 'Data Found';
  } else {
    echo 'No Data';
  }
*/

  if(filter_has_var(INPUT_POST, 'data')){
      $email = $_POST['data'];

      // Remove illegal chars
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      echo $email.'<br>';

      if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
         echo 'Email is valid';
      } else {
         echo 'Email is NOT valid';
      }
  }
?>

 <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="data">
   <button type="submit">Submit</button>
 </form>
