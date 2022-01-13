-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2020, 11:39
-- Wersja serwera: 10.4.16-MariaDB
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin3`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `id` int(11) NOT NULL,
  `zdjecia_id` int(11) NOT NULL,
  `dataWyjazdu` date NOT NULL,
  `cel` text COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` double NOT NULL,
  `dostepna` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`id`, `zdjecia_id`, `dataWyjazdu`, `cel`, `cena`, `dostepna`) VALUES
(1, 1, '2019-09-08', 'Włochy, Wenecja', 1200, 1),
(2, 2, '2019-09-14', 'Włochy, Wenecja', 1200, 1),
(3, 3, '2019-08-14', 'Polska, Warszawa', 640, 1),
(4, 4, '2019-08-14', 'Francja, Paryż', 1300, 1),
(5, 5, '2019-09-14', 'Włochy, Florencja', 1200, 0),
(6, 6, '2019-09-14', 'Francja, Paryż', 1200, 1),
(7, 7, '2019-09-14', 'Włochy, Wenecja', 1200, 0),
(8, 8, '2019-09-14', 'Włochy, Wenecja', 1200, 0),
(9, 9, '2019-09-14', 'Hiszpania, Barcelona', 1400, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(11) NOT NULL,
  `nazwaPliku` text COLLATE utf8mb4_polish_ci NOT NULL,
  `podpis` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `nazwaPliku`, `podpis`) VALUES
(1, 'obraz1.jpeg', 'obraz'),
(2, 'obraz2.jpg', 'obraz'),
(3, 'obraz3.jpg', 'obraz'),
(4, 'obraz4.jpeg', 'obraz'),
(5, 'obraz5.jpg', 'obraz'),
(6, 'obraz6.jpg', 'obraz'),
(7, 'obraz7.jpg', 'obraz'),
(8, 'obraz8.jpg', 'obraz'),
(9, 'obraz9.jpg', 'obraz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

  
