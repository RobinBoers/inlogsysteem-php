<link rel="stylesheet" href="main.css">
<?php
session_start();
session_destroy();
header('Location: inloggen.php')
?>