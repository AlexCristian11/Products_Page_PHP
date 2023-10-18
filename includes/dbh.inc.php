<?php

$host = 'localhost';
$dbname = 'test_scandiweb';
$dbusername = 'root';
$dbpassword = '';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e -> getMessage();
}
