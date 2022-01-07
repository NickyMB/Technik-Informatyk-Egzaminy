-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Sty 2019, 14:42
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
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gromady`
--

CREATE TABLE `gromady` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gromady`
--

INSERT INTO `gromady` (`id`, `nazwa`, `opis`) VALUES
(1, 'ryby', ''),
(2, 'plazy', ''),
(3, 'gady', ''),
(4, 'ptaki', ''),
(5, 'ssaki', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odzywianie`
--

CREATE TABLE `odzywianie` (
  `id` int(10) UNSIGNED NOT NULL,
  `rodzaj` text,
  `informacja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `odzywianie`
--

INSERT INTO `odzywianie` (`id`, `rodzaj`, `informacja`) VALUES
(1, 'drapieznik', ''),
(2, 'roslinozerny', ''),
(3, 'padlinozerny', ''),
(4, 'wszystkozerny', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zwierzeta`
--

CREATE TABLE `zwierzeta` (
  `id` int(10) UNSIGNED NOT NULL,
  `Gromady_id` int(10) UNSIGNED NOT NULL,
  `Odzywianie_id` int(10) UNSIGNED NOT NULL,
  `gatunek` text,
  `wystepowanie` text,
  `czy_zagrozony` tinyint(1) DEFAULT NULL,
  `obraz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zwierzeta`
--

INSERT INTO `zwierzeta` (`id`, `Gromady_id`, `Odzywianie_id`, `gatunek`, `wystepowanie`, `czy_zagrozony`, `obraz`) VALUES
(1, 1, 1, 'Sum pospolity', 'Eurazja', 0, 'sum.jpg'),
(2, 1, 1, 'Jesiotr zachodni', 'Europa', 1, 'jesiotr.jpg'),
(3, 4, 4, 'Wrona siwa', 'Europa', 0, 'wrona.jpg'),
(4, 4, 1, 'Puszczyk zwyczajny', 'Eurazja', 0, 'puszczyk.jpg'),
(5, 4, 4, 'Sroka zwyczajna', 'Eurazja', 0, 'sroka.jpg'),
(6, 5, 1, 'Wilk szary', 'Europa, Ameryka', 0, 'wilk.jpg'),
(7, 5, 3, 'Hiena brunatna', 'Afryka', 0, 'hiena.jpg'),
(8, 5, 2, 'Sarna europejska', 'Europa', 0, 'sarna.jpg'),
(9, 5, 1, 'Dingo australijski', 'Australia', 1, 'dingo.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gromady`
--
ALTER TABLE `gromady`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `odzywianie`
--
ALTER TABLE `odzywianie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zwierzeta`
--
ALTER TABLE `zwierzeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gromady`
--
ALTER TABLE `gromady`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `odzywianie`
--
ALTER TABLE `odzywianie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `zwierzeta`
--
ALTER TABLE `zwierzeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
