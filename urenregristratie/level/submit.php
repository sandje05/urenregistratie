<?php
include '../database.php';

$name = $_POST["change2"];
$level = $_POST["level"]; 


// sql statement
$sql = "UPDATE medewerker SET Level=? WHERE Name=?";
$stmt= $connection->prepare($sql);
$stmt->execute([$level, $name]);

header('location:../admin/admin.php');









?>