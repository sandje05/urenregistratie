<?php

$host = 'localhost';
$dbname = 'urenregristratie';
$user = 'root';
$pass = '';
 // hier maak ik de database connectie door middel van pdo
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); 
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
  echo $e->getMessage();                         
} 

?>