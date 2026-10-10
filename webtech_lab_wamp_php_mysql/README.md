# WAMP + Apache + MySQL + PHP Lab Package

Bu paket, Web Teknolojileri laboratuvarı için hazırlanmıştır. Konular:
- WAMP kurulumu (Windows-Apache-MySQL-PHP)
- Apache ile yayın (localhost üstünde site servis etmek)
- MySQL'de veritabanı ve tablo oluşturma
- PHP ile tabloya veri ekleme ve görüntüleme
- Bağlantı hatası oluşturma ve düzeltme
- SQL Injection gösterimi ve önleme (Prepared Statements)

## Klasör Yapısı
```
code/
  index.html
  form.html
  styles.css
  schema.sql
  list.php
  secure/
    config.php
    insert_secure.php
    search_secure.php
  vulnerable/
    config.php
    config_bad.php
    conn_error_demo.php
    search_vuln.php
docs/
  Deney_Foyu.md
  Aciklama_Dokumani.md
```

## Hızlı Başlangıç
1. WAMP'ı kurun ve Apache ile MySQL servislerini başlatın.
2. `code/schema.sql` dosyasını phpMyAdmin üzerinden çalıştırın.
3. `code` klasörünü WAMP `www` veya `wwwroot` altına kopyalayın (ör. `C:\wamp64\www\webtech_lab_wamp_php_mysql\code`).
4. Tarayıcıda `http://localhost/webtech_lab_wamp_php_mysql/code/index.html` adresine gidin.
5. Formdan kayıt ekleyin, `Kayıtları Listele` ile kontrol edin.
6. `Zayıf Arama` sayfasında injection deneyin, sonra `Güvenli Arama` ile kıyaslayın.
7. `vulnerable/conn_error_demo.php` ile bağlantı hatasını tetikleyin, ardından `config_bad.php` yerine `secure/config.php` kullanın.

> Not: WAMP varsayılan root parolası boş olabilir. Güvenlik için parolayı belirleyin ve `secure/config.php` içinde güncelleyin.
