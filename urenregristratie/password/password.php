<?php






?>





<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" href="password.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>
    <div class="Login">
    <img src="IMG/Logo_HareWare.png" class="Logo">
<form action="../password/change.php" method="POST">
<select name="change1" id="change1">
<?php include '../database.php';


$sql = 'SELECT Name FROM medewerker';
$q = $connection->prepare($sql);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);



    while($r = $q->fetch()) { 


      ?>  <option value ="<?php echo($r['Name']);?>"><?php echo($r['Name']);?></option>


<?php
    }

?>
    





</select>
<input type="password" name="password" placeholder="nieuw wachtwoord" >
 <input type="submit" value="verander">
</div>
</form>
</body>
</html>