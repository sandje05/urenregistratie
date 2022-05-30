<?php
include '../database.php';
// include zodat de database connectie mee komt






 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Maak een account aan</title>
  <link rel="stylesheet" href="account.css">
</head>

<body>

  <div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div> 
<!-- background image -->
  <div class="Login">
    <img src="IMG/Logo_HareWare.png" class="Logo">
  <h1>Maak account aan</h1>
  
  
  
  
  
  
  
  <script type="text/javascript" language="JavaScript">
      
    //kleine check met javascript om te kijken of de wachtwoorden gelijk zijn
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

   
  
  
  <form name="theForm" method="post" action="..\..\urenregristratie\account\account.php"onsubmit="return checkEmail(this);">
   
   <!--Hier maak ik de invul velden-->
    <p>Gebruikersnaam</p>
    <input type="text" name="Username" placeholder="Vul gebruikersnaam in" required>
    <p>Naam</p>
    <input type="text" name="Name" placeholder="Vul voornaam in" required>
    <p>Achter naam</p>
    <input type="text" name="LastName" placeholder="Vul achter naam in" required>
    <p>Wachtwoord</p>
    <input type="password" name="password" placeholder="Vul wachwoord in" required>
    <p>Herhaal wachtwoord</p>
    <input type="password" name="paswordcheck" placeholder="Herhaal wachtwoord" required>
    <input type="submit" name="register" value="Create"  action="../login/index.php">
    
    <a href="../login/index.php">Heb je nog geen account?</a>


    
    
  </form>
  </div>
  
  


    



</body>
</html>
© 2022 GitHub, Inc.
TermsnN
Privacy
<?php
//hier ontvang ik de data
if(isset($_POST) && !empty($_POST['register'])) {
  $username = $_POST["Username"];
  $naam = $_POST["Name"];
  $password = $_POST["password"];
  $last_name = $_POST["LastName"];

  $hash_nrypt = password_hash($password, PASSWORD_DEFAULT);
// hier gooi ik alle data in een array
  $data = [
    'naam' => $naam,
    'username' => $username,
    'password' => $hash_nrypt,
    'last_name' => $last_name
  ];

  $sql = 'INSERT INTO medewerker(Username, Name, Password, Last_Name) VALUES(:username, :naam, :password, :last_name) ';
//hier execute ik de sql in username, naam, password en last_name
  $statement = $connection->prepare($sql);

  $statement->execute($data);
  $test = $statement->fetch();

  echo $test;
}

if(isset($_POST) && !empty($_POST['register'])){
  header('location:../login/index.php');
}
 
?>