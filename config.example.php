<?php
// config.php — Copy this file to config.php and fill in your credentials
$host = '127.0.0.1';
$db   = 'quiz_app';
$user = 'root';
$pass = ''; // Your database password here
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Database connection failed. Please ensure the database 'quiz_app' is created and running.");
}
?>
