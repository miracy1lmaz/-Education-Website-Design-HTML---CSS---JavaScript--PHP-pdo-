-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2022, 23:28:46
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `iletisim_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_formm`
--

CREATE TABLE `contact_formm` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `support` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact_formm`
--

INSERT INTO `contact_formm` (`id`, `name`, `number`, `email`, `support`) VALUES
(1, 'Miraç', '2147483647', 'mmmirac_44@hotmail.com', 'Seo'),
(2, 'Miraç', '2147483647', 'mmmirac_44@hotmail.com', 'Web Tasarım'),
(3, 'Miraç', '05449164344', 'mmmirac_44@hotmail.com', 'Web Tasarım'),
(4, 'Miraç', '05449164344', 'myilmaz.iybf20@iste.edu.tr', 'Grafik Tasarım');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact_formm`
--
ALTER TABLE `contact_formm`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact_formm`
--
ALTER TABLE `contact_formm`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
