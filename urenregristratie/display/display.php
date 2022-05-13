<?php
include '../database.php';







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="display.css">
    <img src="IMG/Logo_HareWare.png" class="Logo">
</head>
<body>
    <div  class="inputvelden">
    <form action="../display/displaydata.php" method="post" >
        <input type="date" name="date1" id="date1">
        <button class="SEARCH" type="submit"></button>
    </form>

    <div class="fakebutton">
    </div>

     
     
     <div class="Login">
     <form 
     name="" action="../agenda/evenement.php">
        <input type="submit" name="date1" value="vul hier je event in">
</div>

     </form>
    </div>
    <form action="../logout.php" method="post">

<input type="submit" value="logout">
</form>
</body>
</html>