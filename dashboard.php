<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login1.php");
    exit;
}
?>
<h1>Xush kelibsiz: <?= $_SESSION['user'] ?></h1>