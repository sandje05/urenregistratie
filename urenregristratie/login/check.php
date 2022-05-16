<?php 
include '../database.php'; // hier include ik voor database connectie 
session_start();


$level = "1";
$stmt = $connection->prepare("SELECT Password, Username, ID_worker, Level  FROM medewerker WHERE Username = ?");
$stmt->execute([$_POST['user']]); //execute om data uit database te halen
$user = $stmt->fetch();

$_SESSION["id"] = $user['ID_worker'];
$_SESSION["name"] = $user['Username'];
$_SESSION["level"] = $user['Level'];
if ($user && password_verify($_POST['wachtwoord'], $user['Password'])) //password check doormiddel van password verify 
{
    if($user["Level"] == $level){
        header('Location: ../login/nope/nope.php');

    }else{
        
        if(isset($_SESSION["id"])){
        header('Location: ../display/display.php');}
    else{ 
       
        header('Location: ../login/index.php');}    
        
    }
}  else{ 
       
    header('Location: ../login/index.php');}    
    










?>