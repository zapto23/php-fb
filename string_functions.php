<?php
# substr()
# Returns a portion of a string

//$output = substr('Hello', 1, 3);
//$output = substr('Hello', -2);
//echo $output;



# strlen()
# Returns the length of a string

//$output = strlen('Hello World');
//echo $output;



# strpos()
# Finds the position of the first occruence of a sub string

//$output = strpos('Hello World', 'o');
//echo $output;



# trim()
# strips whitespace

/*
$text = 'Hello World          ';
//var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);
*/



# strtoupper
# Makes everything uppercase

//$output = strtoupper('Hello World');
//echo $output;



#strtolower
# Makes everything lowercase

//output = strtolower('Hello World');
//echo $output;



# ucwords()
# Capitalize every word

// $output = ucwords('hello world');
// echo $output;



#str_replace()
# Replace all occurences of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
//echo $output



# is_string()
# Check if string

// $val = 'Hello';
// $val2 = 22;
// $output = is_string($val);
// $output2 = is_string($val2);
//
// echo $output;
// echo $output2;


/*
$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

foreach ($values as $value) {
  if(is_string($value)){
    echo "{$value} is a string<br>";
  }
  # code...
}
*/


# gzcompress
# compres a string
$string = "is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type
specimen book. It has survived not only five centuries, but also the leap into
 electronic typesetting, remaining essentially unchanged. It was popularised in
 the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus PageMaker
  including versions of Lorem Ipsum.";

$compressed = gzcompress($string);
//echo $compressed;

$original = gzuncompress($compressed);
echo $original;


 ?>
