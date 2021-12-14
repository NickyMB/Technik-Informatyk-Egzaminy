-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 30 Lis 2020, 22:13
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin6`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id` int(11) NOT NULL,
  `dataZadania` date NOT NULL,
  `wpis` text NOT NULL,
  `miesiąc` text NOT NULL,
  `rok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zadania`
--

INSERT INTO `zadania` (`id`, `dataZadania`, `wpis`, `miesiąc`, `rok`) VALUES
(1, '2020-08-01', 'Remont', 'sierpień', 2020),
(2, '2020-08-02', 'Remont', 'sierpień', 2020),
(3, '2020-08-03', 'Remont', 'sierpień', 2020),
(4, '2020-08-04', 'Remont', 'sierpień', 2020),
(5, '2020-08-05', '', 'sierpień', 2020),
(6, '2020-08-06', '', 'sierpień', 2020),
(7, '2020-08-07', 'Rower', 'sierpień', 2020),
(8, '2020-08-08', 'Rower', 'sierpień', 2020),
(9, '2020-08-09', '', 'sierpień', 2020),
(10, '2020-08-10', '', 'sierpień', 2020),
(11, '2020-08-11', 'Weterynarz - Dika', 'sierpień', 2020),
(12, '2020-08-12', '', 'sierpień', 2020),
(13, '2020-08-13', 'Sopot', 'sierpień', 2020),
(14, '2020-08-14', 'Sopot', 'sierpień', 2020),
(15, '2020-08-15', '', 'sierpień', 2020),
(16, '2020-08-16', '', 'sierpień', 2020),
(17, '2020-08-17', 'Wyjazd na wakacje!', 'sierpień', 2020),
(18, '2020-08-18', 'Tatry', 'sierpień', 2020),
(19, '2020-08-19', 'Tatry', 'sierpień', 2020),
(20, '2020-08-20', 'Tatry', 'sierpień', 2020),
(21, '2020-08-21', 'Tatry', 'sierpień', 2020),
(22, '2020-08-22', 'Tatry', 'sierpień', 2020),
(23, '2020-08-23', 'Tatry', 'sierpień', 2020),
(24, '2020-08-24', 'Tatry', 'sierpień', 2020),
(25, '2020-08-25', '', 'sierpień', 2020),
(26, '2020-08-26', '', 'sierpień', 2020),
(27, '2020-08-27', '', 'sierpień', 2020),
(28, '2020-08-28', '', 'sierpień', 2020),
(29, '2020-08-29', 'Weterynarz - Dika', 'sierpień', 2020),
(30, '2020-08-30', '', 'sierpień', 2020),
(31, '2020-08-31', '', 'sierpień', 2020),
(32, '2020-08-01', '', 'lipiec', 2020),
(33, '2020-08-02', '', 'lipiec', 2020),
(34, '2020-08-03', '', 'lipiec', 2020),
(35, '2020-08-04', '', 'lipiec', 2020),
(36, '2020-08-05', '', 'lipiec', 2020),
(37, '2020-08-06', '', 'lipiec', 2020),
(38, '2020-08-07', 'Jezioro', 'lipiec', 2020),
(39, '2020-08-08', 'Jezioro', 'lipiec', 2020),
(40, '2020-08-09', '', 'lipiec', 2020),
(41, '2020-08-10', '', 'lipiec', 2020),
(42, '2020-08-11', 'Weterynarz - Dika', 'lipiec', 2020),
(43, '2020-08-12', '', 'lipiec', 2020),
(44, '2020-08-13', 'Sopot', 'lipiec', 2020),
(45, '2020-08-14', 'Sopot', 'lipiec', 2020),
(46, '2020-08-15', '', 'lipiec', 2020),
(47, '2020-08-16', '', 'lipiec', 2020),
(48, '2020-08-17', 'Wyjazd', 'lipiec', 2020),
(49, '2020-08-18', 'Nauka', 'lipiec', 2020),
(50, '2020-08-19', 'Nauka', 'lipiec', 2020),
(51, '2020-08-20', 'Nauka', 'lipiec', 2020),
(52, '2020-08-21', 'Nauka', 'lipiec', 2020),
(53, '2020-08-22', 'Nauka', 'lipiec', 2020),
(54, '2020-08-23', 'Nauka', 'lipiec', 2020),
(55, '2020-08-24', 'Nauka', 'lipiec', 2020),
(56, '2020-08-25', '', 'lipiec', 2020),
(57, '2020-08-26', '', 'lipiec', 2020),
(58, '2020-08-27', '', 'lipiec', 2020),
(59, '2020-08-28', '', 'lipiec', 2020),
(60, '2020-08-29', 'Weterynarz - Dika', 'lipiec', 2020),
(61, '2020-08-30', '', 'lipiec', 2020),
(62, '2020-08-31', '', 'lipiec', 2020);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;