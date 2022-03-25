<?php 
include '../database.php' 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Creat an account</title>
  <link rel="stylesheet" href="account.css">
</head>

<body>

  <div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>

  <div class="Login">
    <img src="IMG/Logo_HareWare.png" class="Logo">
  <h1>Create account</h1>
  
  
  
  
  
  
  
  <script type="text/javascript" language="JavaScript">
      
    //--------------------------------
    // This code compares two fields in a form and submit it
    // if they're the same, or not if they're different.
    //--------------------------------
    function checkEmail(theForm) {
      if (theForm.password.value != theForm.paswordcheck.value)
      {
        alert('those passwords dont match');
        return false;
      } else {
        return true;
      }
    }
    
    </script> 
  
  
  <form name="theForm" method="post" action="..\..\urenregristratie\login\index.html"onsubmit="return checkEmail(this);">
   
   <!--Hier maak ik de invul velden-->
    <p>Username</p>
    <input type="text" name="Username" placeholder="Enter Username" required>
    <p>Name</p>
    <input type="text" name="Name" placeholder="Enter Name" required>
    <p>Last Name</p>
    <input type="text" name="LastName" placeholder="Enter Last Name" required>
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Password" required>
    <p>Confirm Password</p>
    <input type="password" name="paswordcheck" placeholder="Re-Enter Password" required>
    <input type="submit" name="" value="Create">
    <!--<a href="#">Forgot your password?</a><br>-->
    <a href="../login/index.php">Already have an account?</a>


    
    
  </form>
  </div>
  
  


    



</body>
</html>
© 2022 GitHub, Inc.
Terms
Privacy
<?php




?>