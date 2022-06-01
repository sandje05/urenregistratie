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

<form action="../logout.php" method="post">
    <button class="Hidden" type="submit">Uitloggen</button>
    </form>
<div class="feld">
<img src="IMG/Logo_HareWare.png" class="Logo">




<?php

include '../database.php';
session_start();
$date1 = $_POST["date1"];
$id = $_SESSION["id"];
    // boven ontvang ik data onder is een sql statement
$stmt = $connection->prepare("SELECT * FROM activiteit WHERE Activity_date = ? AND Worker_id = ?");
$stmt->execute([$date1, $id]); //execute om data uit database te halen
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>

<?php 

if($stmt->rowCount() == 0){
    ?> 
    <!-- if statement om te checken of er wel iets is om te displayen -->
    <div class="geenactivitiet">   <?php echo "Je hebt geen activiteit vandaag! Vraag even rond of je wat kan doen.";
}else{
    
            
    while($F = $stmt->fetch()) {
        echo "<p>" . $F['activity'] . ", ";
        echo $F['Activity_Hour']. ", ";
        echo $F['Activity_date'] . "</p><br> ";
        // hier boven displayed ie totdat er niks meer is om te displayen
}

}
?>


<div class="buttons">




<button class="submit"><li > <a href="../display/display.php">Terug naar agenda</a> </li></button>
 <!-- href="../display/display.php" class="submit" type="submit">Terug--->




</div>
<style>

    button:hover{
    color:red     
   
   }

</style>

</body>
</html>