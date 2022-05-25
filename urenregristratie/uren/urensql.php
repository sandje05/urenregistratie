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



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> <link rel="stylesheet" href="urensql.css">
<body>
<div class="Background">
<style>
 /*hover color red  */
a:hover {
color: red;    
}   

input:hover{
color:red;
}
/* maken van de grijse bar */
</style>
<div class="topbar">
<div>
                <img src="IMG/Logo_HareWare.png" alt="Logo HareWare" class="Logo">
           </div> 
           
           <div class="output">
        <!-- title  -->
        <p class="title">
           Alle uren
        </p>

     <?php 
            
            while($F = $s->fetch()) {
                echo "<h1>" . $F['activity'] . ", ";
                echo $F['Activity_Hour']. ", ";
                echo $F['Activity_date'] . "</h1><br> ";
            }
           
        ?>


</div>




    









<form action="../admin/admin.php" method="post">

    <input type="submit" value="Admin dashboard">
    </form>
</div>
</body>
</html>
