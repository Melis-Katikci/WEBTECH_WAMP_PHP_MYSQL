# Açıklama Dokümanı (Instructor/Student Guide)

## 1. WAMP Kurulumu (Windows-Apache-MySQL-PHP)
- İndirme ve kurulum sihirbazını kullanın. Kurulum sonrası sistem tray'den Apache ve MySQL servislerini **Start/Stop** ile yönetin.
- Apache varsayılan web kökü `www`. PHP, Apache modülü veya FastCGI olarak çalışır.
- MySQL yönetimi için **phpMyAdmin** arayüzü kullanılır.

## 2. Apache ile Yayın (Serve via Apache)
- `code` klasörünü `www` altına yerleştirip `http://localhost/.../index.html` ile erişin.
- MIME tipi ve `DirectoryIndex` gibi temel kavramlar.
- Erişim sorunlarında: servis durumunu, port çakışmalarını (80/443), `httpd.conf` yüklemelerini kontrol edin.

## 3. MySQL: Veritabanı ve Tablo
- `schema.sql` scriptini phpMyAdmin'de çalıştırın. Karakter seti: `utf8mb4`.
- Temel SQL: `CREATE DATABASE`, `CREATE TABLE`, `INSERT`, `SELECT`.

## 4. PHP ile Veri Yazma/Görüntüleme
- **PDO** kullanımı: Hata modları, `prepare/execute`, `fetchAll` pratikleri.
- **Çıktı kaçışlama**: `htmlspecialchars`, `nl2br`.
- **Form işleme**: `$_POST`, `$_GET`, method kontrolü, 405 hatası.

## 5. Bağlantı Hatası Senaryosu
- Yanlış parola ile bağlantı denemesi (`config_bad.php`).
- Hata mesajı örnekleri ve güvenli hata yönetimi ilkeleri (production'da ayrıntıyı göstermeyin, loglayın).

## 6. SQL Injection (SQLi) Gösterimi
- Zayıf örnek: string interpolasyonu ile `LIKE '%$q%'`.
- Denenecek payload örnekleri: `' OR '1'='1`, `' UNION SELECT ...`.
- Önleme: Prepared statements, parametre bağlama, girdiyi doğrulama ve beyaz liste, en az ayrıcalık, ayrıntı sızdırmayan hata mesajları.

## 7. Sertleştirme (Hardening) Özeti
- Uygulama: Prepared statements, output escaping, CSRF koruması (form token), rate limiting, audit log.
- Veritabanı: Ayrı kullanıcı, minimum izinler, yedekleme, şifre politikası.
- Sunucu: Apache `mod_security`, güncel sürümler, `ssl`, güvenli `php.ini` ayarları (`display_errors=Off`, `log_errors=On`).

## 8. Mini Sözlük (Glossary)
- **WAMP**: Windows + Apache + MySQL + PHP
- **PDO**: PHP Data Objects
- **SQLi**: SQL Injection
- **CSRF**: Cross-Site Request Forgery
- **XSS**: Cross-Site Scripting
- **Least privilege**: En az ayrıcalık ilkesi
