<?php
session_start();

// print_r($_SESSION);
?>

<h1>Welcom, <?=$_SESSION['logged_user']?>!</h1>
<div><a href="index.php">Вернуться на главную страницу</a></div>