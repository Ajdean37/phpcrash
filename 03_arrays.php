<?php
  // single array
  $numbers = [1,4,45,32];
  $fruits = array('apple', 'pear', 'banana');

  // var_dump($numbers)
  //echo $fruits[1];

  // Associative array
  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  // echo colors[4]

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
  ];

  //echo $hex['blue];

  $person = [
    'first_name' => 'Amanda',
    'last_name' => 'Dean',
    'email' => 'ajdean37@gmail.com'
  ];

  // echo $person['first_name'];

  $people = [
    [
      'first_name' => 'Amanda',
      'last_name' => 'Dean',
      'email' => 'ajdean37@gmail.com'
    ],
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com'
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com'
    ],
  ];

  // echo $people[1]['email'];

  var_dump(json_encode($people));


   