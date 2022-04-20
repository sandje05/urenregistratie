<?php
include '../database.php';
$gebruiker = 'admin';
$y= 'JEsse';
$x= 'SANDER123';
// $Nevtest= '$nav';
// $Niettest= '$nav';
// $test = '$nav';
 

     $stmt = $connection->prepare ("SELECT Username, Last_Name, Name, Level FROM medewerker WHERE Username = '$gebruiker'");

     $stmt->execute();
     $test = $stmt->fetch();     

     $statement = $connection->prepare ("SELECT Username, Last_Name, Name, Level FROM medewerker WHERE Username = '$y'");

     $statement->execute();
     $Niettest = $statement->fetch(); 

     $statement = $connection->prepare ("SELECT Username, Last_Name, Name, Level FROM medewerker WHERE Username = '$x'");

     $statement->execute();
     $Nevtest = $statement->fetch(); 


 
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
<style>
 /*hover color red  */
a:hover {
color: red;    
}    
/* maken van de grijse bar */
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
<!-- Display de informatie  -->
<div class="INFO_CON">

         <p class="INFO"> 
         <?php 

         ?> 
         <br>
       <?php  echo $test['Username']; ?>
        </br>
        
        <br>  
        <?php
         echo $test['Name']; 
         ?>
         </br>
         
         <br>
         <?php echo $test['Level'];
         ?>
         </br>

         <!-- <br> 
         
     //     echo $test['Password'];
         
</br> -->
<?php
         echo $Niettest['Username'];
         echo $Niettest['Name'];
         echo $Niettest['Level'];
     //     echo $Niettest['Password'];

         echo $Nevtest['Username'];
         echo $Nevtest['Name'];
         echo $Nevtest['Level'];
     //     echo $Nevtest['Password'];
         ?></p>    
       
</div>
    </div>
  <div>
        <!-- title  -->
        <p class="title">
           Admin dashboard 
        </p>
   
     

</div>

</body>
</html>

