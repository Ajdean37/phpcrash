<?php
/*------- Object oriented programming-------*/

/*
  From PHPS onwards you can write PHP in either a procedural or object oriented way. OOP consists of classe that can hold "properties" and "methods". Objects can be created from classes.
*/

class user {
  // properties are attributes that belong to a class

  //Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;
  
  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
 
  // Method is a function that belongs to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

// Instatiate a user object
$user1 = new User('Amanda', 'amanda@gmail', 'ajdajd');
$user2 = new User('Dan', 'dan@gmail', 'dtddtd');

echo $user1->email;
echo $user2->name;

// Inheritence

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee1 = new Employee('Kaiden', 'kaiden@gmail', 'kjakja', 'caddy');

echo $employee1->getTitle();