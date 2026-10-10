<?php
require_once __DIR__ . '/config.php';

// INTENTIONALLY VULNERABLE: directly interpolating user input into SQL
$q = $_GET['q'] ?? '';

// Example injection payloads to try in the UI:
// ' OR '1'='1
// a%' UNION SELECT 1,@@version,USER(),DATABASE(), now() -- 
$sql = "SELECT id, name, email, message, created_at FROM contacts WHERE name LIKE '%$q%' OR email LIKE '%$q%' ORDER BY created_at DESC";

try {
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $rows = [];
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Zayıf Arama</title>
  <link rel="stylesheet" href="../styles.css"/>
</head>
<body>
  <div class="container">
    <h1>Zayıf Arama (Vulnerable Search) - SQL Injection Gösterimi</h1>
    <form method="GET">
      <input type="text" name="q" placeholder="Ara (name/email)"/>
      <button type="submit">Ara</button>
    </form>
    <?php if (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <table class="table">
      <thead><tr><th>ID</th><th>Ad Soyad</th><th>Email</th><th>Mesaj</th><th>Oluşturulma</th></tr></thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <td><?= htmlspecialchars($r['id'] ?? '') ?></td>
            <td><?= htmlspecialchars($r['name'] ?? '') ?></td>
            <td><?= htmlspecialchars($r['email'] ?? '') ?></td>
            <td><?= nl2br(htmlspecialchars($r['message'] ?? '')) ?></td>
            <td><?= htmlspecialchars($r['created_at'] ?? '') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <p class="small">Bu sayfa eğitim amaçlıdır. Gerçek sistemlerde asla bu yaklaşımı kullanmayın.</p>
    <p><a href="../index.html">Geri</a></p>
  </div>
</body>
</html>
