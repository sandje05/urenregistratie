<?php
include '../database.php';
$gebruiker = "JEsse";


     $stmt = $connection->prepare ("SELECT Username, Last_Name, Name, Level, Password FROM medewerker WHERE Username = '$gebruiker'");
     $stmt->execute();
     $test = $stmt->fetch();     




 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin screen</title>
<link rel="stylesheet" href="admin.css">
</head>
<body>
<!-- <form action="../admin/zoek.html">
<input type="submit" name="" value="Login">
</form> -->

<style> 
a:hover {
color: red;    
}    

</style>
    <div class="topbar"> 
           <div>
                <img src="IMG/Logo_HareWare.png" alt="Logo HareWare" class="Logo">
           </div> 
                   <div class="link">
                        <ul>     
                         <li class="agenda" > <a href="/Urenpro/urenregistratie/urenregristratie/agenda/agenda.html">Terug naar agenda</a></li>
                        </ul>
                        </div>
<div class="INFO_CON">

         <p class="INFO"> 
         <?php 
         echo $test['Username'];    
         echo $test['Name']; 
         echo $test['Level'];
         echo $test['Password'];
         ?></p>    
       
</div>
    </div>
  <div> 
        <p class="title">
           Admin dashboard 
        </p>
   
     

</div>

</body>
</html>

