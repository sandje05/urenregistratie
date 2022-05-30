<?php
include "../database.php";
// weer een include voor de database connectie
?>


<!DOCTYPE html>



<head>

<title>maak een event</title>
<link rel="stylesheet" href="evenementen.css">


    




</head>

<body>
    
<div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>
    <!-- hieronder zijn alle input velden die nodig zijn -->
    <div class="inputvelden">
    <img src="IMG/Logo_HareWare.png" class="Logo">
   <h1>Maak event aan </h1>
    <form method="post" action="../agenda/actionpage.php">
      
    <label for="fname">Event naam:</label>
      <input class="firstevent" type="text" id="fname" name="fname" required><br><br>
      
      <label for="fname">Datum:</label>
      <input class="date" type="date" id="fname" name="date" required><br><br>
      
      <label for="fname">Uur:</label>
      <input class="hour" type="number" id="fname" name="hour" max="24" min="0" required><br><br>
      
      <input class="button" type="submit" value="Submit">

    </form>

    </div>


    



</body>
</html>