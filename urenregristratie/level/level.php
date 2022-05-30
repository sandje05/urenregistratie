<?php






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div> <link rel="stylesheet" href="level.css">
<img src="IMG/Background-Mac.jpg" class="background">
  </div>
    <div class="Login">
    <img src="IMG/Logo_HareWare.png" class="Logo">
<form action="../level/submit.php" method="POST">
<select name="change2" id="change2">
<?php include '../database.php';

// een standaart sql staat hier onder
$sql = 'SELECT Name FROM medewerker';
$q = $connection->prepare($sql);
$q->execute();
$q->setFetchMode(PDO::FETCH_ASSOC);



    while($r = $q->fetch()) { 


      ?>  <option value ="<?php echo($r['Name']);?>"><?php echo($r['Name']);?></option>
<!-- weer een display voor alles wat er is -->

<?php
    }

?>
    





</select>
<!-- een standaart select veld -->
<select name="level" id="level">
<option value="2">admin</option>
<option value="0">medewerker</option>
<option value="1">in actief</option>
</select>
 <input type="submit" value="kies">

</div>
</form>
</body>
</html>