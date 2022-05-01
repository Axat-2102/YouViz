<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "youviz";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($link,"utf8");
?>