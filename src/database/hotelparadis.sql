-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 May 2021, 23:16:33
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
-- Veritabanı: `hotelparadis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `customerid` bigint(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `roomtype` varchar(10) NOT NULL,
  `text` varchar(1500) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `id` bigint(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `managers`
--

CREATE TABLE `managers` (
  `id` bigint(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reports`
--

CREATE TABLE `reports` (
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `revenue` int(10) NOT NULL,
  `expense` int(10) NOT NULL,
  `totalcustomers` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservations`
--

CREATE TABLE `reservations` (
  `customerid` bigint(11) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `doornumber` int(3) NOT NULL,
  `totalprice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roomprices`
--

CREATE TABLE `roomprices` (
  `roomtype` varchar(10) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rooms`
--

CREATE TABLE `rooms` (
  `doornumber` int(3) NOT NULL,
  `floornumber` int(2) NOT NULL,
  `roomtype` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cleanerid` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `salary` int(6) NOT NULL,
  `position` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `unf`
--

CREATE TABLE `unf` (
  `customerid` bigint(11) NOT NULL,
  `customerfname` varchar(50) NOT NULL,
  `customerlname` varchar(50) NOT NULL,
  `customerphonenumber` varchar(12) NOT NULL,
  `customeremail` varchar(50) NOT NULL,
  `customerpassword` varchar(50) DEFAULT NULL,
  `customerstatus` varchar(3) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `totalprice` int(6) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `text` varchar(1500) DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  `roomtype` varchar(10) NOT NULL,
  `doornumber` int(3) NOT NULL,
  `floor` int(2) NOT NULL,
  `roomstatus` varchar(10) NOT NULL,
  `price` int(4) NOT NULL,
  `staffid` bigint(11) NOT NULL,
  `stafffname` varchar(50) NOT NULL,
  `stafflname` varchar(50) NOT NULL,
  `staffphonenumber` varchar(12) NOT NULL,
  `salary` int(6) NOT NULL,
  `position` varchar(20) NOT NULL,
  `manageremail` varchar(100) NOT NULL,
  `managerpassword` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `revenue` int(10) NOT NULL,
  `expense` int(10) NOT NULL,
  `totalcustomers` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`customerid`,`datetime`),
  ADD KEY `roomtype` (`roomtype`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`startdate`,`enddate`);

--
-- Tablo için indeksler `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`checkindate`,`doornumber`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `doornumber` (`doornumber`);

--
-- Tablo için indeksler `roomprices`
--
ALTER TABLE `roomprices`
  ADD PRIMARY KEY (`roomtype`);

--
-- Tablo için indeksler `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`doornumber`),
  ADD KEY `roomtype` (`roomtype`),
  ADD KEY `cleanerid` (`cleanerid`);

--
-- Tablo için indeksler `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`roomtype`) REFERENCES `roomprices` (`roomtype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`doornumber`) REFERENCES `rooms` (`doornumber`) ON UPDATE NO ACTION;

--
-- Tablo kısıtlamaları `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`roomtype`) REFERENCES `roomprices` (`roomtype`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`cleanerid`) REFERENCES `staffs` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
