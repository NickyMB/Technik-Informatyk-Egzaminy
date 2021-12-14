-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Sty 2019, 18:00
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `podzespoly`
--

CREATE TABLE `podzespoly` (
  `id` int(10) UNSIGNED NOT NULL,
  `typy_id` int(10) UNSIGNED NOT NULL,
  `producenci_id` int(10) UNSIGNED NOT NULL,
  `nazwa` text,
  `opis` text,
  `dostepnosc` tinyint(1) DEFAULT NULL,
  `cena` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `podzespoly`
--

INSERT INTO `podzespoly` (`id`, `typy_id`, `producenci_id`, `nazwa`, `opis`, `dostepnosc`, `cena`) VALUES
(1, 1, 1, 'Core i5-7640X', 'Procesor Intel Core i5-7640X 4,2 GHz LGA 2066 Box', 1, 1000),
(2, 1, 1, 'Core i3-6300', 'Procesor Intel Core i3-6300 3,8 GHz 4MB cache s. 1151 Box', 1, 575),
(3, 1, 1, 'Core i7-6700K', 'Procesor Intel Core i7-6700K 4,0 GHz 8MB cache s. 1151 Box', 0, 1400),
(4, 1, 2, 'X6 FX-6350', 'Procesor AMD X6 FX-6350 s.AM3+ BOX', 1, 380),
(5, 2, 7, 'Savage', 'RAM HyperX 16GB (2x8GB) DDR3-1866 Dual Chanel Kit Non-ECC CL9 XMP Savage Series HX318C9SRK2/16', 1, 535),
(6, 2, 7, 'Savage', 'HyperX 4GB DDR3-1600 Non-ECC CL9 XMP Savage Series HX316C9SR/4', 0, 150),
(7, 2, 8, 'Signature', 'RAM Patriot Signature DDR3 8GB (2x4GB) 1600 CL9 PSD38G1600KH', 0, 250),
(8, 5, 9, 'GTX 1060', 'Karta graficzna Asus DUAL NVIDIA GeForce GTX 1060 3072MB GDDR5 192b PCI-E x16 v. 3.0 (1594MHz/8008MHz) OC Edition', 1, 1189),
(9, 5, 9, 'GeForce 210', 'Karta graficzna ASUS GeForce 210 1024MB 64bit PCI-E', 0, 145),
(10, 6, 6, 'WD Black', 'Dysk WD Black WD1003FZEX 1TB sATA III 64MB', 0, 315),
(11, 6, 6, 'WD Blue', 'Dysk WD Blue WD10EZEX 1TB sATA III 64MB', 1, 195),
(12, 6, 5, 'AHD650-1TU3-CBK', 'Dysk USB ADATA AHD650-1TU3-CBK 1TB 2.5\' HD650 USB 3.0 Czarny', 1, 210);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `producenci`
--

CREATE TABLE `producenci` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text,
  `opis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `producenci`
--

INSERT INTO `producenci` (`id`, `nazwa`, `opis`) VALUES
(1, 'Intel', NULL),
(2, 'AMD', NULL),
(5, 'ADATA', NULL),
(6, 'WD', NULL),
(7, 'Kingstone', NULL),
(8, 'Patriot', NULL),
(9, 'ASUS', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy`
--

CREATE TABLE `typy` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategoria` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `typy`
--

INSERT INTO `typy` (`id`, `kategoria`) VALUES
(1, 'Procesor'),
(2, 'RAM'),
(5, 'karta graficzna'),
(6, 'HDD');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `podzespoly`
--
ALTER TABLE `podzespoly`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `producenci`
--
ALTER TABLE `producenci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `typy`
--
ALTER TABLE `typy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `podzespoly`
--
ALTER TABLE `podzespoly`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `producenci`
--
ALTER TABLE `producenci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `typy`
--
ALTER TABLE `typy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
