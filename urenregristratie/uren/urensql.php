<?php
include '../database.php';

$name = $_POST["change1"];



$stmt = $connection->prepare("SELECT ID_worker FROM medewerker WHERE Name = ?");
$stmt->execute([$_POST['change1']]); //execute om data uit database te halen
$user = $stmt->fetch();



extract($user); 
// echo "\$ID_worker = $ID_worker";
$sq = "SELECT * FROM activiteit WHERE Worker_id = ?";
$s= $connection->prepare($sq);
$s->execute([$ID_worker]);

while($F = $s->fetch()) {
    echo "<p>" . $F['activity'] . ", ";
    echo $F['Activity_Hour']. ", ";
    echo $F['Activity_date'] . "</p><br> ";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../admin/admin.php" method="post">

    <input type="submit" value="terug">
    </form>
    
</body>
</html>
