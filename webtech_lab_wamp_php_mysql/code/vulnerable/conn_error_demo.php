<?php
// This page includes the intentionally wrong config to trigger a connection error.
require_once __DIR__ . '/config_bad.php';
echo "Eğer bunu görüyorsanız, beklenmeyen bir durum var.";
?>
