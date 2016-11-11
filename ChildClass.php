<?php 
	// this file will extend PArentClass.php
  require 'ParentClass.php';
	class ChildClass extends ParentClass {
		
	}

  class Student extends Person {
    private $major;
    private $school;
    private $courses;
    
    public function __construct($n, $m, $s, $age){
     parent::__construct($n, $age);
     $this->major = $m;
     $this->school = $s;
     $this->courses = array();
    }

    public function addCourses($c){
      array_push($this->courses, $c);
    }

    public function getAllCourses(){
      if( sizeof($this->courses) == 0){
        echo 'I have not taken any courses.';
        return;
      }
      echo 'I have taken : <br>';
      foreach($this->courses as $value)
        echo $value.'<br>';
    }

    function __destruct() {
      parent::__destruct();
    }
     
    public function info() {
      echo "I am a student <br/>";
    }

    public function __toString() {
      $parent_msg = parent::__toString();

      $detail = "\nI am a student from $this->school, and my major is $this->major.";

      return $parent_msg.$detail;
    }
  }
?>