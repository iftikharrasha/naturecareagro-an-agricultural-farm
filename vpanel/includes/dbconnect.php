<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'ncagrodb';
$con;

try {
    $con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connec_errno());
} catch (Exception $e) {
    echo $e->getMessage();
}
