<?php 

	require 'ChildClass.php';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
<div class="content">
  <h1>Hello!</h1>
  <p class="info">This is where I use the Person (ParentClass) to create a Person !</p>
  <?php  $p1 = new Person("Gangzheng", 22);   ?>
  <?= $p1; ?>

  <p class="info">This is where I add more information to the person with the Student Class that extends Person!</p> <br>
  <?php  $s1 = new Student("Gangzheng", "Computer Science", "University of Pittsburgh", 22); ?>
  <?= $s1; ?>
  <?php 
    $s1->getAllCourses();
  ?>
	
  <p class="info">Two years later....</p>
  <?= $s1; ?>
  <?php 
    $s1->addCourses('CS401');
    $s1->addCourses('CS441');
    $s1->addCourses('CS445');
    $s1->addCourses('CS447');
    $s1->addCourses('CS449');
    $s1->addCourses('CS1501');
    $s1->addCourses('CS1502');
    $s1->addCourses('CS1550');
    $s1->addCourses('CS1620');
    $s1->addCourses('CS1510');
    $s1->addCourses('CS1520');
    $s1->addCourses('CS1645');
    $s1->addCourses('CS1674');
    $s1->getAllCourses();
  ?>
</div>
</body>
</html>