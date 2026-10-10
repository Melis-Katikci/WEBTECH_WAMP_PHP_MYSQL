<?php
require_once __DIR__ . '/config.php';

$q = trim($_GET['q'] ?? '');

if ($q === '') {
    $stmt = $pdo->query('SELECT id, name, email, message, created_at FROM contacts ORDER BY created_at DESC');
} else {
    // Secure search with LIKE and prepared statements
    $stmt = $pdo->prepare('SELECT id, name, email, message, created_at FROM contacts WHERE name LIKE ? OR email LIKE ? ORDER BY created_at DESC');
    $like = '%' . $q . '%';
    $stmt->execute([$like, $like]);
}
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Güvenli Arama</title>
  <link rel="stylesheet" href="../styles.css"/>
</head>
<body>
  <div class="container">
    <h1>Güvenli Arama (Secure Search)</h1>
    <form method="GET">
      <input type="text" name="q" placeholder="Ara (name/email)"/>
      <button type="submit">Ara</button>
    </form>
    <table class="table">
      <thead><tr><th>ID</th><th>Ad Soyad</th><th>Email</th><th>Mesaj</th><th>Oluşturulma</th></tr></thead>
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
    <p><a href="../index.html">Geri</a></p>
  </div>
</body>
</html>
