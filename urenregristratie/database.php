<?php

$host = 'localhost'; //host naam
$dbname = 'urenregristratie'; //database naam
$user = 'root';//account dat gebruikt moet worden
$pass = '';//wachtwoord dat bij het account hoort
 // hier maak ik de database connectie door middel van pdo
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); 
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "con is er";
}catch(PDOException $e)
{
  echo $e->getMessage();                         
} 



?>