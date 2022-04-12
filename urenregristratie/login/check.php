<?php 
include '../database.php'; // hier include ik voor database connectie 
session_start();



$stmt = $connection->prepare("SELECT Password, Username, ID_worker  FROM medewerker WHERE Username = ?");
$stmt->execute([$_POST['user']]); //execute om data uit database te halen
$user = $stmt->fetch();

$_SESSION["id"] = $user['ID_worker'];
$_SESSION["name"] = $user['Username'];
if ($user && password_verify($_POST['wachtwoord'], $user['Password'])) //password check
{

if(isset($_SESSION["id"])){

    header('Location: ../test/test.php');}
} else {
   
    header('Location: ../login/index.php');
}







?>