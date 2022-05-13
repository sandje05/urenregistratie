<?php
include '../database.php';

$name = $_POST["change1"];
$inactive = "1";

$sql = "UPDATE medewerker SET Level=? WHERE Name=?";
$stmt= $connection->prepare($sql);
$stmt->execute([$inactive, $name]);

header('location:../admin/admin.php');









?>