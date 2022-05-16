<?php
include '../database.php';

try {

    $sql = 'SELECT Last_Name,
                    Name,
                    Username
               FROM medewerker';
            // WHERE Last_Name LIKE :lname OR 
            // Name LIKE :fname;';

    // prepare statement for execution
    $q = $connection->prepare($sql);
    
    // pass values to the query and execute it

    $q->execute();

    // manier van ophalen data.
    $q->setFetchMode(PDO::FETCH_ASSOC);
    // $q->fetch();
    // print out the result set
    // while ($r = $q->fetch()) {
    // echo sprintf('%s <br/>', $r ['Name']);
    // }
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

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
<div class="INFO_CON">
<div class="output">
        <!-- title  -->
        <p class="title">
           Admin dashboard 
        </p>

     <?php 
            
            while($r = $q->fetch()) { 
            echo "<h1>Voornaam=" . $r['Name'] . "</h1 >";
            echo "<h1> Gebruikersnaam=" . $r['Username'] . "</h1 > ";
            echo "<h1>Achternaam=" . $r['Last_Name'] . "</h1 > <br>";
            }
           
        ?>


</div>
     
          
      
<!-- Display de informatie  -->


            </div>   
         
       

      
   <!-- naar ww veranderen gaan -->
<form action="../password/password.php" method="post">

<input type="submit" value="ww veranderen">
</form>
    

<form action="../logout.php" method="post">

<input type="submit" value="logout">
</form>
<form action="../level/level.php" method="post">
<input type="submit" value="level select">
</form>
</body >
</html>

