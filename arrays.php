<?php
$dir = 'movies';

//scandir automatically puts files in a folder into an ArrayAccess
$files = scandir($dir);

function pre_r($array){
  echo <'pre'>;
  print_r($array);
  echo '</pre>';
}

$files = array_diff($files, array('..', '.'));

$files = array_values($files);

$movies = array();

for($i = 0; $i < count($files); $i++){
  preg_match("!(.*?)\((.*?)\)!",$files[$i],$results);
  $movies[$movie_name]['image'] = $files[$i];
  $movies[$movie_name]['year'] = $results[2];
}

echo "<table id = 'movies' cellpadding = 50>";
echo "<tr class = 'odd'>";

foreach($movies as $movie_name => $info){
  $content = "<td><span class"  n  
}

</tr>
</table>"

 ?>
