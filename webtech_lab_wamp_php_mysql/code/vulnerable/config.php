<?php
// config.php for vulnerable examples (still valid connection, but code usage will be unsafe)
$DB_HOST = '127.0.0.1';
$DB_NAME = 'lab_contact_db';
$DB_USER = 'root';
$DB_PASS = '';

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
