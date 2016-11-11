<?php
	// This is the file for the parent class

	class ParentClass {
		
	}

  class Person {
    private $name;
    private $age;

    public function __construct($n, $age){
      $this->name = $n;
      $this->adge = $age;
    }

    public function __destruct(){
      echo "<p> Goodbye!!! </p><br>";
    } 

    public function changeAge($age){
      $this->adge = $age;
    }

    public function __toString(){
      $string = "Hello, I am $this->name and I am $this->age years old.";
      return $string;
    }

  }
  
?>