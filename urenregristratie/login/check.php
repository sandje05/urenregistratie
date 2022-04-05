<?php 
include '../database.php';

$data = $_POST['user'];

$sql = 'SELECT * FROM medewerkers WHERE Username = ?';

$statement = $connection->prepare($sql);

$statement->execute($data);
$test = $statement->fetch();

echo $data;

?>