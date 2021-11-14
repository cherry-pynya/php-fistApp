<?php

session_start();

unset($_SESSION["name"]);

ob_start();
header('Location: '. './index.php');
ob_end_flush();
die();