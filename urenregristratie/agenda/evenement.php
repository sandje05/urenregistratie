<?php
include "../database.php";
?>


<!DOCTYPE html>



<head>

<h1>event invul velden</h1>

</head>

<body>
    

    
    <div class="inputvelden">
    <form method="post" action="../agenda/actionpage.php">
      <label for="fname">First event:</label>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="fname">date:</label>
      <input type="date" id="fname" name="date"><br><br>
      <label for="fname">hour:</label>
      <input type="number" id="fname" name="hour" max="24" min="0"><br><br>
      
      <input type="submit" value="Submit">

    </form>

    </div>


    



</body>
</html>