<?php
include "../database.php";
?>


<!DOCTYPE html>



<head>


<link rel="stylesheet" href="evenementen.css">


    




</head>

<body>
    
<div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>
    
    <div class="inputvelden">
    <img src="IMG/Logo_HareWare.png" class="Logo">
   <h1>Event here</h1>
    <form method="post" action="../agenda/actionpage.php">
      
    <label for="fname">Event:</label>
      <input class="firstevent" type="text" id="fname" name="fname"><br><br>
      
      <label for="fname">Date:</label>
      <input class="date" type="date" id="fname" name="date"><br><br>
      
      <label for="fname">Hour:</label>
      <input class="hour" type="number" id="fname" name="hour" max="24" min="0"><br><br>
      
      <input class="button" type="submit" value="Submit">

    </form>

    </div>


    



</body>
</html>