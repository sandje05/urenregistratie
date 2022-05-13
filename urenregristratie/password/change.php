<?php
include '../database.php';

$name = $_POST["change1"];
$password = $_POST["password"]; 

$hash_nrypt = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE medewerker SET Password=? WHERE Name=?";
$stmt= $connection->prepare($sql);
$stmt->execute([$hash_nrypt, $name]);

header('location:../admin/admin.php');









?>