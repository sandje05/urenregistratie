<?php
include "../database.php";
session_start();
$activity = $_POST['fname'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$id = $_SESSION["id"];
// hierboven ontvang ik de data en hier onder gooi ik het in een array
$data = [
    'naam' => $activity,
    'username' => $date,
    'hour' => $hour,
    'id' => $id

  ];
  // gwn een standaard sql statement hier onder
  $sql = 'INSERT INTO activiteit(activity, 	Activity_date, Activity_Hour, Worker_id) VALUES(:naam, :username, :hour, :id) ';
  
  $statement = $connection->prepare($sql);
  
  $statement->execute($data);
  $test = $statement->fetch();
  
  echo $test;

// hieronder een header zodat het alle aal automatisch gaat
  header('location: ../display/display.php');

 


?>