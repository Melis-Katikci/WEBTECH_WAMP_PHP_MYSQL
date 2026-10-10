-- schema.sql
-- Türkçe/English karma açıklamalar
-- Veritabanı adı: lab_contact_db
-- Tablo: contacts (id, name, email, message, created_at)

CREATE DATABASE IF NOT EXISTS lab_contact_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE lab_contact_db;

DROP TABLE IF EXISTS contacts;
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Örnek veri (seed / sample rows)
INSERT INTO contacts (name, email, message) VALUES
('Ada Lovelace', 'ada@example.com', 'Merhaba dünya!'),
('Alan Turing', 'alan@example.com', 'Test mesajı'),
('Grace Hopper', 'grace@example.com', 'COBOL güzeldir.');
