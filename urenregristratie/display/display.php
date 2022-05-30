<?php
include '../database.php';
session_start()

// hier een include voor databse connectie en ession start voor het ingelogd blijven




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuis pagina</title>
    <link rel="stylesheet" href="display.css">
   
</head>
<body>
<div>
    
<style>

    button:hover{
    color:red     
   
   }
/* een check hieronder om te kijken of je admin bent (level 2) en als je dat bent zie je de admin button */
</style>
    <?php $level = "2";
    if($_SESSION['level'] == $level){?>
    <form action="../admin/admin.php" method="post">
<button class="Hidden" type="submit"> Admin pagina </button>
    </form>
<?php } 
?>
   <!-- hier onder weer input velden die nodig zijn -->
    <div  class="inputvelden">
           <img src="IMG/Logo_HareWare.png" class="Logo">
    <form action="../display/displaydata.php" method="post" >
    <p  class="T-Event"> Zoek hier je event </p>
        <input type="date" name="date1" id="date1"> 
        <button class="SEARCH" type="submit"> Zoeken </button>
    </form>

    <div class="fakebutton">
    </div>
 <div class="Login">
     <form 
     name="" action="../agenda/evenement.php">
        <input class="firstfield" type="submit" name="date1" value="Vul hier je event in">
      </form>
    </div>
    
    </div> 
</div>  
</div>
<style>

    button:hover{
    color:red     
   
   }

</style>
<!-- uitlog knop -->
    <form action="../logout.php" method="post">
    <button class="Hidden" type="submit">Uitloggen</button>
    </form>
    

</body>
</html>