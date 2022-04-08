<?php 
include '../database.php';




$stmt = $connection->prepare("SELECT Password, Username FROM medewerker WHERE Username = ?");
$stmt->execute([$_POST['user']]);
$user = $stmt->fetch();


if ($user && password_verify($_POST['wachtwoord'], $user['Password']))
{
    header('Location: ../agenda/agenda.html');
} else {
   
    header('Location: ../login/index.php/');
}







?>