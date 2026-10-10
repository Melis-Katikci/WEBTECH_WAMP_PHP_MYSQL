# Web Teknolojileri Laboratuvarı – Deney Föyü
**Hafta:** 2025-10-06
**Konu:** WAMP kurulumu, Apache ile yayın, MySQL veritabanı ve tablo oluşturma, PHP ile veri yazma/görüntüleme, bağlantı hatası simülasyonu, SQL Injection ve önleme.

## Öğrenme Çıktıları (Learning Outcomes)
- WAMP bileşenlerini kurup temel konfigürasyonu yapabilmek (Install & configure WAMP).
- phpMyAdmin ile veritabanı ve tablo oluşturmak (Create DB & table via phpMyAdmin).
- PHP PDO kullanarak veritabanına güvenli veri eklemek ve okumak (Use PDO prepared statements).
- Bağlantı hatası senaryolarını analiz edip çözmek (Diagnose & fix connection errors).
- SQL Injection kavramını deneysel olarak gözlemlemek ve önleyici tedbirler uygulamak (Demonstrate SQLi and mitigate).

## Gerekli Ön Bilgiler (Prerequisites)
- Temel HTML, CSS, PHP sözdizimi bilgisi.
- Veritabanı temel kavramları (DB, table, column, PK).

## Deney Ortamı (Environment)
- Windows 10/11, WAMP (Apache 2.x, MySQL 8.x, PHP 8.x), phpMyAdmin.
- Tarayıcı (Chrome/Firefox), metin editörü (VS Code/Notepad++).

## Yapılacaklar (Tasks)
1. **WAMP Kurulumu (Installation)**
   - WAMP indirip kurun. Kontrol panelinden Apache ve MySQL servislerini başlatın. 
   - `http://localhost` açıldığında WAMP anasayfasını görmelisiniz.

2. **Veritabanı & Tablo (phpMyAdmin)**
   - phpMyAdmin'e giriş yapın. `schema.sql` içeriğini çalıştırın.
   - `lab_contact_db` ve `contacts` tablosunun oluştuğunu doğrulayın.

3. **Kodların Yerleşimi (Apache Publish)**
   - `code` klasörünü WAMP `www` dizinine koyun.
   - `index.html` üzerinden gezinmeyi test edin.

4. **Güvenli Ekleme (Secure Insert)**
   - `form.html` ile kayıt ekleyin. 
   - `list.php` ile kayıtların listelendiğini görün.
   - Kodda `secure/insert_secure.php` dosyasını inceleyin: PDO + prepared statements.

5. **Bağlantı Hatası (Connection Error)**
   - `vulnerable/conn_error_demo.php` sayfasını açın.
   - Hata mesajını not alın. 
   - Hatanın nedenini tartışın ve `secure/config.php` dosyasındaki doğru parolayı ayarlayıp düzeltin.

6. **SQL Injection Gösterimi (SQLi Demo)**
   - `vulnerable/search_vuln.php` sayfasına gidin.
   - Arama kutusuna `' OR '1'='1` yazın. Sonuçları gözlemleyin.
   - Ardından `secure/search_secure.php` ile aynı sorguyu deneyin. Farkı açıklayın.

7. **Sertleştime (Hardening)**
   - Kullanıcı girdilerini doğrulayın (validation) ve `htmlspecialchars` ile çıktı kaçışını kontrol edin.
   - DB kullanıcı ayrıcalıklarını en aza indirgeyin (least privilege).
   - Hataları kullanıcıya sızdırmayın (production: generic error pages, logs).

## Teslim (Deliverables)
- Kısa rapor: Kurulum adımları, ekran çıktıları anlatımı, hatanın neden-sonuç analizi, SQLi bulguları ve önlemler.
- Kod paketinin çalışır hali (eklediğiniz yorumlar + iyileştirmeler).

## Değerlendirme (Evaluation Rubric)
- Kurulum ve konfigürasyon: 20
- Güvenli ekleme ve listeleme: 20
- Bağlantı hatası analizi ve çözümü: 20
- SQLi gösterimi ve mitigasyon: 30
- Rapor düzeni ve netlik: 10
**Toplam:** 100
