<?php
session_start();
?>
<html>
<head>
<title>User screen</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="../logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?>
    <a href="../agenda/agenda.html">Agenda</a>
</body>