<?php
include '../database.php';
session_start();
$date1 = $_POST["date1"];
$id = $_SESSION["id"];
    
$stmt = $connection->prepare("SELECT * FROM activiteit WHERE Activity_date = ? AND Worker_id = ?");
$stmt->execute([$date1, $id]); //execute om data uit database te halen
$F = $stmt->fetch();



if($F != true ){
    echo "er is niks op die dag mongool";
}else{
    echo $F['activity']; echo "<br>";  
    echo $F['Activity_Hour']; echo "<br>";
    echo $F['Activity_date']; echo "<br>";

}




?>