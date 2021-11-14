<?php

$name = $_POST["name"];

session_start();

$_SESSION['name'] = $name;

ob_start();
header('Location: '. './index.php');
ob_end_flush();
die();