<?php

$user = 'root';
$pass = 'root';

$dsn = 'mysql:host=mysql;dbname=information_schema;charset=utf8';
$pdo = new PDO($dsn, $user, $pass);

$stmt = $pdo->query("SELECT * FROM `tables`");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);