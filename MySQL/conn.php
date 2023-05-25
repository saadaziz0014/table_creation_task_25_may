<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "ecommercex";

$connect = mysqli_connect($host, $user, $password, $db);

if ($connect) {
    echo "Database Connected";
} else {
    echo "DB Connection error";
}

?>