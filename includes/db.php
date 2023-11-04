<?php

$host = 'mariadb';
$db = 'portfolio_ares';
$user = 'root';
$password = 'root';

$dsn = "mysql:host=${host};dbname=${db};charset=UTF8";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}