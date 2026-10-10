<?php
// config_bad.php (INTENTIONAL ERROR)
// TR: Bu dosya bilerek hatalı parola içerir. Deney için bağlantı hatası oluşturur.
// EN: This file intentionally uses a wrong password to trigger a connection error.

$DB_HOST = '127.0.0.1';
$DB_NAME = 'lab_contact_db';
$DB_USER = 'root';
$DB_PASS = 'WRONG_PASSWORD'; // Wrong on purpose

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Connection failed (expected during exercise): " . htmlspecialchars($e->getMessage());
    exit;
}
?>
