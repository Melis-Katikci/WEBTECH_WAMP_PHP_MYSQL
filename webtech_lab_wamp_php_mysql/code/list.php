<?php
require_once __DIR__ . '/secure/config.php'; // secure config

$stmt = $pdo->query('SELECT id, name, email, message, created_at FROM contacts ORDER BY created_at DESC');
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kayıtlar</title>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>
  <div class="container">
    <h1>Kayıtlar (Records)</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th><th>Ad Soyad</th><th>Email</th><th>Mesaj</th><th>Oluşturulma</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <td><?= htmlspecialchars($r['id']) ?></td>
            <td><?= htmlspecialchars($r['name']) ?></td>
            <td><?= htmlspecialchars($r['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($r['message'])) ?></td>
            <td><?= htmlspecialchars($r['created_at']) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <p><a href="index.html">Geri</a></p>
  </div>
</body>
</html>
