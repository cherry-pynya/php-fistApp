<?php

session_start();

$link = "<a href='./exit.php'>exit</a>";

if (array_key_exists('name', $_SESSION)) {
    echo $link;
} else {
    include './page.php';
}



