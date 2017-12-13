<?php

  $path='/dir0/dir1/myfile.php';
  $file = 'file1.txt';
  // Return filename
  // echo basename($path);


# Return filename without ext
// echo basename($path, '.php');

# Return the dir name from path
// echo dirname($path);

# check to see if file exist
//echo file_exists($file);


# Get abs path
//echo realpath($file);

# Checks to see if file
/*echo is_file('test');
echo file_exists('test');
//file_exists can do folders
*/

/*
// Check if writeable
echo is_writable($file);

// Check if readable
echo is_readable($file);

// Get file size
echo filesize($file);


# Create a directory
mkdir('testing');

// Remove dir if empty
rmdir('testing');

// Copy file
echo copy('file1.txt', 'file2.txt');

rename('file2.txt', 'myFile.txt')


// Delete File
unlink('myfile.txt');

// Write from file to string
echo file_get_contents($file)


// write string to file
echo file_put_contents($file, 'Goodbye world');


$current = file_get_contents($file);
$current .= ' Goodbye World';

file_put_contents($file, $current);



// put file into a handle and run functions on file
// Open File For Reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);
*/

// Open file for wrtiing
$handle = fopen('$file2.txt', 'w');
$txt = "John Doe\n";
fwrite($handle, $txt);
$txt = "Steve Smith\n";
fwrite($handle, $txt);
fclose($handle);



 ?>
