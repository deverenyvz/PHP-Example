<?php
/* Sürücü isteğiyle bir ODBC veritabanına bağlanalım */
$dsn = 'mysql:dbname=tasarimkodlama;host=127.0.0.1';
$user = 'root';
$password = '';
 
 
try {
    $baglan = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı kurulamadı: ' . $e->getMessage();
}
 
/**
 
CREATE TABLE `kelimeler` (
  `id` int(11) NOT NULL,
  `kelime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
INSERT INTO `kelimeler` (`id`, `kelime`) VALUES
(1, 'kalem'),
(2, 'araba'),
(3, 'çekirdek'),
(4, 'badem'),
(5, 'kaşık'),
(6, 'üzüm'),
(7, 'fıstık'),
(8, 'paratoner'),
(9, 'karayel'),
(10, 'okyanus');
 
 
 */
 
?>