<?php
include '../database.php';
session_start()






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
<div class="Background">    
<style>

    button:hover{
    color:red     
   
   }

</style>
    <?php $level = "2";
    if($_SESSION['level'] == $level){?>
    <form action="../admin/admin.php" method="post">
<button class="Hidden" type="submit"> Admin page </button>
    </form>
<?php } 
?>
   
    <div  class="inputvelden">
         <p  class="T-Event"> Zoek hier je event </p>
    <form action="../display/displaydata.php" method="post" >
        <input type="date" name="date1" id="date1">
        <button class="SEARCH" type="submit"> Search </button>
    </form>

    <div class="fakebutton">
    </div>

     <input type="submit" value="logout">
     
     <div class="Login">
     <form 
     name="" action="../agenda/evenement.php">
        <input type="submit" name="date1" value="vul hier je event in">
</div>

     </form>
    </div>
    <form action="../logout.php" method="post">

    </div>
</form>
</body>
</html>