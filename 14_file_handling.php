<?php
/*------- File Handling -----*/

/*
  File handling is the ability to read and write files ont the server.
  PHP has built in functions for reading and writing files
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
  // echo readfile($file);
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Amanda' . PHP_EOL . 'Dan' . PHP_EOL . 'Kaiden' . PHP_EOL . 'Makensie';
  fwrite($handle, $contents);
  fclose($handle);
}
