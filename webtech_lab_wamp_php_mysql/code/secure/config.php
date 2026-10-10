<?php
// config.php (SECURE) - PDO with prepared statements
// TR: Bu dosya veritabanı bağlantı bilgilerini içerir.
// EN: Database connection settings via PDO.

$DB_HOST = '127.0.0.1';  // WAMP default: localhost/127.0.0.1
$DB_NAME = 'lab_contact_db';
$DB_USER = 'root';
$DB_PASS = ''; // WAMP default empty password (değiştirmeniz önerilir)

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
?>
