<?php

session_start();

$link = "<a href='./exit.php'>exit</a>";

if (array_key_exists('name', $_SESSION)) {
    echo 'Your name is ' . $_SESSION["name"];
    echo '<br />';
    echo $link;
} else {
    include './page.php';
}



