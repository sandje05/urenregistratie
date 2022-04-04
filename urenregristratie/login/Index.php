<?php 
include '../database.php' 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Login</title>
  <link rel="stylesheet" href="Login.css">
</head>
<body>
  
  <div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>

  <div class="Login">
    <img src="IMG/Logo_HareWare.png" class="Logo">
  <h1>Login here</h1>
  <form method="post" action="..\..\urenregristratie\account\account.php">
   
   <!--Hier maak ik de invul velden-->
    <p>Username</p>
    <input type="text" name="user" placeholder="Enter Username">
    <p>Password</p>
    <input type="Password" name="wachtwoord" placeholder="Enter Password">
    <input type="submit" name="" value="Login">
    <!--<a href="#">Forgot your password?</a><br>-->
    <a href="../account/account.php">Don't have an account?</a>

  </form>
  </div>
  
  


    



</body>
</html>
<?php
 header("..\..\urenregristratie\account\account.php");
//$gebruikersnaam = $_POST["user"];
//$wachtwoord = $_POST["wachtwoord"];

//$stmt = $pdo->prepare("SELECT * FROM medewerker WHERE Username = ?");
//$stmt->execute([$_POST['user']]);
//$user = $stmt->fetch();

//if ($gebruikersnaam && password_verify($_POST['wachtwoord'], $user['wachtwoord']))
//{
  //  header("..\..\urenregristratie\account\account.php");
//} else {
   // echo "invalid";
//}






?>