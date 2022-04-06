<?php 
include '../database.php';




$stmt = $connection->prepare("SELECT Password, Username FROM medewerker WHERE Username = ?");
$stmt->execute([$_POST['user']]);
$user = $stmt->fetch();

var_dump($_POST['wachtwoord']);
var_dump($user['Password']);
var_dump(password_verify('admin', $user['Password']));
die();

if ($user && password_verify($_POST['wachtwoord'], $user['Password']))
{
    echo "Goed!";
} else {
    echo "Fout!";
}







?>