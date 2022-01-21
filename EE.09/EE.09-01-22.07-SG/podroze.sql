-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2019, 16:33
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `podroze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odloty`
--

CREATE TABLE `odloty` (
  `id` int(10) UNSIGNED NOT NULL,
  `samoloty_id` int(10) UNSIGNED NOT NULL,
  `nr_rejsu` varchar(8) DEFAULT NULL,
  `kierunek` varchar(10) DEFAULT NULL,
  `czas` time NOT NULL,
  `dzien` date DEFAULT NULL,
  `status_lotu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `odloty`
--

INSERT INTO `odloty` (`id`, `samoloty_id`, `nr_rejsu`, `kierunek`, `czas`, `dzien`, `status_lotu`) VALUES
(1, 1, 'FR1646', 'Neapol', '09:20:00', '2019-07-25', 'wystartowal'),
(2, 1, 'FR1327', 'ALICANTE', '09:10:00', '2019-07-25', 'Opozniony 10 min'),
(3, 2, 'W63425', 'Warszawa', '09:45:00', '2019-07-25', 'odprawa'),
(4, 3, 'LX5647', 'Londyn LT', '10:03:00', '2019-07-25', 'odprawa'),
(5, 3, 'LX5673', 'Malta', '10:06:00', '2019-07-25', 'opoznienie 20 min'),
(6, 3, 'LX5622', 'Wieden', '10:13:00', '2019-07-25', ''),
(7, 4, 'LH9821', 'Berlin', '10:16:00', '2019-07-25', ''),
(8, 4, 'LH9888', 'Hamburg', '10:19:00', '2019-07-25', ''),
(9, 4, 'LH9331', 'Monachium', '10:22:00', '2019-07-25', ''),
(10, 2, 'W68769', 'Zurych', '09:56:00', '2019-07-25', 'boarding');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przyloty`
--

CREATE TABLE `przyloty` (
  `id` int(10) UNSIGNED NOT NULL,
  `samoloty_id` int(10) UNSIGNED NOT NULL,
  `nr_rejsu` varchar(8) DEFAULT NULL,
  `kierunek` varchar(10) DEFAULT NULL,
  `czas` time DEFAULT NULL,
  `dzien` date DEFAULT NULL,
  `status_lotu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `przyloty`
--

INSERT INTO `przyloty` (`id`, `samoloty_id`, `nr_rejsu`, `kierunek`, `czas`, `dzien`, `status_lotu`) VALUES
(1, 2, 'W63454', 'Warszawa', '09:45:00', '2019-07-29', 'wyladowal'),
(2, 3, 'LX3447', 'Londyn LT', '10:03:00', '2019-07-29', 'opoznienie 10 min'),
(3, 3, 'LX5473', 'Malta', '10:06:00', '2019-07-29', 'planowy'),
(4, 3, 'LX5728', 'Wieden', '10:13:00', '2019-07-29', ''),
(5, 4, 'LH9829', 'Berlin', '10:16:00', '2019-07-29', ''),
(6, 4, 'LH9898', 'Hamburg', '10:19:00', '2019-07-29', ''),
(7, 4, 'LH3331', 'Monachium', '10:22:00', '2019-07-29', ''),
(8, 2, 'W68546', 'Zurych', '10:33:00', '2019-07-29', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samoloty`
--

CREATE TABLE `samoloty` (
  `id` int(10) UNSIGNED NOT NULL,
  `typ` varchar(20) DEFAULT NULL,
  `linie` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `samoloty`
--

INSERT INTO `samoloty` (`id`, `typ`, `linie`) VALUES
(1, 'Boening 787', 'RYANAIR'),
(2, 'Boening 737', 'WIZZAIR'),
(3, 'Boening 787', 'SWISS'),
(4, 'Boening 737', 'LUFTHANSA');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odloty`
--
ALTER TABLE `odloty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `przyloty`
--
ALTER TABLE `przyloty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `samoloty`
--
ALTER TABLE `samoloty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `odloty`
--
ALTER TABLE `odloty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `przyloty`
--
ALTER TABLE `przyloty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `samoloty`
--
ALTER TABLE `samoloty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
