<?php
/*-----For <Loop------*/

/*
** For Loop Syntax
  for (initialize; condition; increment) {
    // code to be exectued
  }
*/

// for($x = 0; $x <= 10; $x++) {
//   echo $x;
//   echo 'Number' . $x . '<br>';
// }

/*----- While loop--------*/

/*
** While loop syntax
  While (condition) {
    // code to be executed
  }
*/

// $x = 1;

// while($x <= 15) {
//   echo 'Number' . $x . '<br>';
//   $x++;
// }

/*------ Do While <Loop------></Loop------

/* 
** Do While Loop Syntax
  do {
    // code to be executed
  } while (condition);

do... while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;

// do {
//   echo 'Number' . $x . '<br>';
//   $x++;
// } while($x <= 5);

/*---- For Each Loop------*/

/*
** Foreach loop syntax
  foreach ($array as $value) {
    // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// for($x =0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach($posts as $post) {
//   echo $posts;
// }

// foreach($posts as $index => $posts) {
//   echo $index . ' - ' . $post . '<br>';
// }

$person = [
  'first_name' => 'Amanda',
  'last_name' => 'Dean',
  'email' => 'amanda@gmail.com',
];

foreach($person as $key => $value) {
  echo "$key - $value<br>";
}