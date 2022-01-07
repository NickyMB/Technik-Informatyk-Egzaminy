-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2017, 11:08
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostawcy`
--

CREATE TABLE `dostawcy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `adres` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `dostawcy`
--

INSERT INTO `dostawcy` (`id`, `nazwa`, `adres`) VALUES
(1, 'Papiernictwo', 'ul. Boczna 12, 23-355 Bukowina'),
(2, 'Art. szkolne', 'ul. Dworcowa 20, 34-565 Warszawa'),
(3, 'Wszystko dla ucznia', 'ul. Towarowa 35, 88-123 Zakopane');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--

CREATE TABLE `towary` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL,
  `cena` float NOT NULL,
  `promocja` tinyint(1) NOT NULL,
  `idDostawcy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`id`, `nazwa`, `cena`, `promocja`, `idDostawcy`) VALUES
(1, 'Zeszyt 60 kartek', 4.5, 0, 1),
(2, 'Zeszyt 32 kartki', 1.2, 0, 2),
(3, 'Cyrkiel', 12.4, 0, 1),
(4, 'Linijka 30 cm', 7.2, 0, 3),
(5, 'Ekierka', 5.5, 0, 3),
(6, 'Linijka 50 cm', 8.2, 0, 2),
(7, 'Gumka do mazania', 3.2, 1, 1),
(8, 'Cienkopis', 2.5, 1, 2),
(9, 'Pisaki 60 szt.', 55, 1, 2),
(10, 'Markery 4 szt.', 22.4, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `dostawcy`
--
ALTER TABLE `dostawcy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `towary`
--
ALTER TABLE `towary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dostawcy`
--
ALTER TABLE `dostawcy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `towary`
--
ALTER TABLE `towary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
