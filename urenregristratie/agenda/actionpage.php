<?php
include "../database.php";
session_start();
$activity = $_POST['fname'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$id = $_SESSION["id"];

$data = [
    'naam' => $activity,
    'username' => $date,
    'hour' => $hour,
    'id' => $id

  ];
  
  $sql = 'INSERT INTO activiteit(activity, 	Activity_date, Activity_Hour, Worker_id) VALUES(:naam, :username, :hour, :id) ';
  
  $statement = $connection->prepare($sql);
  
  $statement->execute($data);
  $test = $statement->fetch();
  
  echo $test;

  header('location: ../agenda/agenda.html');

 


?>