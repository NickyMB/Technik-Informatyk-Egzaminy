-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2016, 12:33
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `id` int(10) UNSIGNED NOT NULL,
  `uzytkownik_id` int(10) UNSIGNED NOT NULL,
  `kategoria` int(10) UNSIGNED DEFAULT NULL,
  `podkategoria` int(10) UNSIGNED DEFAULT NULL,
  `tytul` text,
  `tresc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES
(1, 1, 1, 12, 'Daniel Craig. Biografia', 'Biografia Daniela Craiga, niedrogo sprzedam'),
(2, 1, 1, 13, 'Selekcja', 'Sprzedam: "Selekcja" J. Kellermana, niezniszczona'),
(3, 2, 1, 13, 'Buick', 'Sprzedam horror Stephena Kinga w dobrym stanie'),
(4, 2, 1, 14, 'Tytus, Romek i Atomek', 'Ks. IV do sprzedania, stan dobry'),
(5, 2, 2, 0, 'Imagine Dragons', 'Sprzedam dwa CD Imagine Dragons');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `telefon` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES
(1, 'Anna', 'Kowalska', '601601601', 'anna@poczta.pl'),
(2, 'Jan', 'Nowak', '608608608', 'jan@poczta.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
