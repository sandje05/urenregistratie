<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaydata.css">
    <title>Evenementen</title>
</head>
<body> 

<button class="logout"><li > <a href="../display/display.php">Uitloggen</a> </li></button>
<div class="feld">
<img src="IMG/Logo_HareWare.png" class="Logo">




<?php
include '../database.php';
session_start();
$date1 = $_POST["date1"];
$id = $_SESSION["id"];
    
$stmt = $connection->prepare("SELECT * FROM activiteit WHERE Activity_date = ? AND Worker_id = ?");
$stmt->execute([$date1, $id]); //execute om data uit database te halen
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>

<?php
if($stmt != true ){
    ?> 
    
    <div class="geenactivitiet">   <?php echo "Je hebt geen activiteit vandaag! Vraag even rond of je wat kan doen.";
}else{
    
            
    while($F = $stmt->fetch()) {
        echo "<p>" . $F['activity'] . ", ";
        echo $F['Activity_Hour']. ", ";
        echo $F['Activity_date'] . "</p><br> ";
}

}
?>


<div class="buttons">



<button class="submit"><li > <a href="../display/display.php">Terug naar agenda</a> </li></button>
 <!-- href="../display/display.php" class="submit" type="submit">Terug--->

 <button class="Event"><li >  <a href="../display/display.php">Maak een event aan</a> </li></button> 


</div>
</body>
</html>