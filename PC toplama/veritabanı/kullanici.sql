-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2022, 16:20:16
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kullanici`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pc`
--

CREATE TABLE `pc` (
  `id` int(11) NOT NULL,
  `islemci` varchar(255) NOT NULL,
  `ekran` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `anakart` varchar(255) NOT NULL,
  `psu` varchar(255) NOT NULL,
  `kasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `pc`
--

INSERT INTO `pc` (`id`, `islemci`, `ekran`, `ram`, `anakart`, `psu`, `kasa`) VALUES
(6, 'İntel i5 5400K', 'GTX 1080Tİ', 'Kingston 4GB', 'MSİ XTM-2', '750 Watt', 'GameTech'),
(12, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '500 Watt', 'GameTech'),
(13, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '750 Watt', 'GameTech'),
(14, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '750 Watt', 'GameTech'),
(15, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '750 Watt', 'GameTech'),
(16, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '750 Watt', 'GameTech'),
(17, 'İntel i3 4150K', 'GTX 1080Tİ', 'Kingston 8GB', 'MSİ XTM-2', '750 Watt', 'GameTech');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veri`
--

CREATE TABLE `veri` (
  `id` int(11) NOT NULL,
  `kuladi` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `veri`
--

INSERT INTO `veri` (`id`, `kuladi`, `sifre`) VALUES
(1, 'asdsad', 'sadasd'),
(2, 'vbnbmnvb', 'bvnmvbm'),
(3, 'ali', '123'),
(4, 'veli', '4950'),
(5, 'aaa', 'bbb'),
(6, 'alikaanduman', '123456789'),
(7, 'asdads222', 'abfdag'),
(8, 'aw1231', 'asdqgq3'),
(9, 'veli', '123'),
(10, 'veli', '123'),
(11, 'varol', '55555'),
(12, 'ali', 'veli'),
(13, 'qweqweqwe', '1112');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `veri`
--
ALTER TABLE `veri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `veri`
--
ALTER TABLE `veri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
