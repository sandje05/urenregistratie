<?php
include '../database.php';
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
<link rel="stylesheet" href="uren.css">
<div>
<img src="IMG/Background-Mac.jpg" class="background">
  </div>

<div class="Login">
<img src="IMG/Logo_HareWare.png" class="Logo">
<h1>selecteer een persoon</h1>
    <form action="../uren/urensql.php" method="post">
    <select name="change1" id="change1">
<?php
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


<input type="submit" value="verder">
</form>
<br>
</div>

</body>
</html>