<?php
include "../database.php";

$activity = $_POST['fname'];
$date = $_POST['date'];
$hour = $_POST['hour'];


$data = [
    'naam' => $activity,
    'username' => $date,
    'hour' => $hour

  ];
  
  $sql = 'INSERT INTO activiteit(activity, 	Activity_date, Activity_Hour) VALUES(:naam, :username, :hour) ';
  
  $statement = $connection->prepare($sql);
  
  $statement->execute($data);
  $test = $statement->fetch();
  
  echo $test;

  header('location: ../agenda/agenda.html');

 


?>