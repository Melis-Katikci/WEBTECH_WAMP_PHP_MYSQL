<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        echo '<p class="error">Tüm alanlar zorunludur.</p>';
        exit;
    }

    $stmt = $pdo->prepare('INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)');
    $stmt->execute([$name, $email, $message]);

    echo '<p class="success">Kayıt eklendi.</p>';
    echo '<p><a href="../index.html">Ana sayfa</a></p>';
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
