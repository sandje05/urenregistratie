<?php
// eeindigt de sessions en stuurt je naar de login pagina
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["Level"]);
header("Location:login/index.php");
?>