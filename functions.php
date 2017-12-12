<?php
  # FUNCTION - Block of code that can b repeatedly called

  /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction() - used for classes for objects
  */
// Create Simple Funciton  -- User Defined functions
  function simpleFunction(){
    echo 'Hello World';
    echo '<br>';
  }

// Run simple Funciton
//simpleFunction();

// Function With Param
function sayHello($name = 'World'){
  echo "Hello $name<br>";
}

//sayHello('Joe');
//sayHello('Bob');
//sayHello();

# Return value from functions
function addNumbers($num1, $num2){
  return $num1 + $num2;
}

// echo addNumbers(2,3);

# Passing Arguments by refference
// one will minipulate addNumbers

$myNum = 10;

function addFive($num){
  $num += 5;
}

function addTen(&$num){
  $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";
addTen($myNum);
echo "Value: $myNum<br>";

 ?>
